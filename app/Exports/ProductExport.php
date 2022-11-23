<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\Category;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Cell\Coordinate;
use PhpOffice\PhpSpreadsheet\Cell\DataValidation;
class ProductExport implements FromArray, WithHeadings, WithEvents
{
    protected  $users;
    protected  $selects;
    protected  $row_count;
    protected  $column_count;
    public function __construct()
    {
        $categories = Category::where('parent_id',0)->pluck('name','id')->toArray();
        $categoriesValues = array_keys($categories);
        $subCategories=Category::whereIn('parent_id',$categoriesValues)->pluck('name','id')->toArray();
        $subCategoriesValues = array_keys($subCategories);
        $childCategory = Category::whereIn('parent_id',$subCategoriesValues)->pluck('name','id')->toArray();
        $sizes = ["XS","S","M","L","XL","XXL"];
        $selects=[  //selects should have column_name and options
            ['columns_name'=>'D','options'=>$categories],
            ['columns_name'=>'E','options'=>$subCategories],
            ['columns_name'=>'F','options'=>$childCategory],
            ['columns_name'=>'U','options'=>$sizes],
            
        ];
        $this->selects=$selects;
        $this->row_count=50;//number of rows that will have the dropdown
        $this->column_count=5;//number of columns to be auto sized
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        return [

            ["Product", "12345", "Test Product 1","","","","HSNCode","picture/1651657107jOL8XZ3A.jpg","5","10","20","1","1","1","1","Test Details","Test Description","Test Need help","","","","","","","","","",""],
            ["", "", "","","","","","","","","","","","","","","","","Variations","12345","","1","450","10","1","Blue","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","12345","","1","450","10","1","Blue","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","12345","","1","450","10","1","Blue","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","12345","","1","450","10","1","Blue","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","12345","","1","450","10","1","Blue","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","12345","","1","450","10","1","Blue","1","1"],
            ["Product", "456789", "Test Product 2","","","","HSNCode1","picture/16515557107jOL8XZ3A.jpg","15","15","25","1","1","1","1","Test Details1","Test Description1","Test Need help1","","","","","","","","","",""],
            ["", "", "","","","","","","","","","","","","","","","","Variations","456789","","1","450","10","1","Red","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","456789","","1","450","10","1","Red","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","456789","","1","450","10","1","Red","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","456789","","1","450","10","1","Red","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","456789","","1","450","10","1","Red","1","1"],
            ["", "", "","","","","","","","","","","","","","","","","Variations","456789","","1","450","10","1","Red","1","1"],
        ];
    }
    public function headings(): array
    {
        return 
        [
            'Identy',
            '*SKU/ID',
            '*Name',
            '*Category',
            '*Sub category',
            '*Child category',
            'HSN Code',
            'Size chart',
            '*Tax rate',
            'Weight',
            'Discount Type',
            'Is Exclusive',
            'Is Featured',
            'Is New',
            '*Status',
            '*Detail',
            '*Description',
            '*Need help',
            'Identy',
            '*SKU/ID',
            '*Size',
            'Size status',
            '*MRP',
            '*Quantity',
            '*Stock',
            '*Color',
            '*Status',
            '*Primary Variation',
        ];
    }
    public function registerEvents(): array
    {

        return [
            // handle by a closure.
            AfterSheet::class => function(AfterSheet $event) {
                
                                $event->sheet->getDelegate()->getStyle('A1:AB1')
                                ->getFill()
                                ->setFillType(\PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID)
                                ->getStartColor()
                                ->setARGB('DD4B39');

                $row_count = $this->row_count;
                $column_count = $this->column_count;
                foreach ($this->selects as $select){
                    $drop_column = $select['columns_name'];
                    $options = $select['options'];
                    // set dropdown list for first data row
                    $validation = $event->sheet->getCell("{$drop_column}2")->getDataValidation();
                    $validation->setType(DataValidation::TYPE_LIST );
                    $validation->setErrorStyle(DataValidation::STYLE_INFORMATION );
                    $validation->setAllowBlank(false);
                    $validation->setShowInputMessage(true);
                    $validation->setShowErrorMessage(true);
                    $validation->setShowDropDown(true);
                    $validation->setErrorTitle('Input error');
                    $validation->setError('Value is not in list.');
                    $validation->setPromptTitle('Pick from list');
                    $validation->setPrompt('Please pick a value from the drop-down list.');
                    $validation->setFormula1(sprintf('"%s"',implode(',',$options)));

                    // clone validation to remaining rows
                    for ($i = 3; $i <= $row_count; $i++) {
                        $event->sheet->getCell("{$drop_column}{$i}")->setDataValidation(clone $validation);
                    }
                    // set columns to autosize
                    for ($i = 1; $i <= $column_count; $i++) {
                        $column = Coordinate::stringFromColumnIndex($i);
                        $event->sheet->getColumnDimension($column)->setAutoSize(true);
                    }
                }
            }
        ];
    }
}
