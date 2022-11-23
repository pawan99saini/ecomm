<?php $__env->startPush('stylesheet'); ?>
<style>
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }

    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }

    input:checked + .slider {
    background-color: #2196F3;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    }

    #toast-container{
        margin-top : 20px;
    }

    #toast-container > .toast {
    width: 370px !important;
    }
</style>
<?php $__env->stopPush(); ?>
<?php $__env->startSection('content'); ?>
    
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-primary float-right" href="<?php echo e(route('admin.categories.create')); ?>">
                    <?php echo e(trans('global.add')); ?> <?php echo e(trans('cruds.category.title_singular')); ?>

                </a>
            </div>
        </div>
    
    <div class="card">
        <div class="card-header">
            <?php echo e(trans('cruds.category.title_singular')); ?> <?php echo e(trans('global.list')); ?>


        </div>
        <div class="card-body">
            <table class=" table table-bordered table-striped table-hover ajaxTable datatable datatable-Category text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>
                            <?php echo e(trans('cruds.category.fields.id')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.category.fields.name')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.category.fields.subcategories')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.category.fields.image')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.category.fields.is_home')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.category.fields.is_menu')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('cruds.category.fields.status')); ?>

                        </th>
                        <th>
                            <?php echo app('translator')->get('global.action'); ?>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <tr>
                            <td><?php echo e($row->id ?? ''); ?></td>
                            <td>
                                <span class="badge badge-primary p-2"><?php echo e($row->name ?? ''); ?></span>
                            </td>
                            <td>
                                <a href="<?php echo e(route('admin.subcategories.index', ['id' => $row->id])); ?>" class="btn btn-outline-info">
                                    <?php echo e(trans('cruds.category.fields.subcategories')); ?>

                                    (<?php echo e($row->subcategories->count()); ?>)
                                </a>
                            </td>
                            <td>
                                <?php if(isset($row->image)): ?>
                                <a href="<?php echo e($row->image_url); ?>">
                                    <img onerror="handleError(this);"src="<?php echo e($row->thumb_url ?? ''); ?>" width="50px" height="50px" />
                                </a>
                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </td>
                            <td>
                                <input type="checkbox" disabled <?php echo e($row->is_home ? 'checked' : null); ?>>
                            </td>
                            <td>
                                <input type="checkbox" disabled <?php echo e($row->is_menu ? 'checked' : null); ?>>
                            </td>
                            <td>
                            <?php $status =  App\Models\Category::STATUS_SELECT[$row->status] ;

                                $is_attribute = $status == 'Active' ? 'checked' : '';

                                ?>
                                        <div class="text-center">
                                            <label class="switch">
                                                <input type="checkbox"  <?php echo $is_attribute; ?> id="is-attribute-chk" data-id="<?php echo e($row->id); ?>">
                                                <span class="slider round"></span>
                                            </label>
                                        </div>
                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_show')): ?>
                                    <a class="btn btn-info" href="<?php echo e(route('admin.categories.show', $row->id)); ?>" title="<?php echo e(trans('global.view')); ?>">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_edit')): ?>
                                    <a class="btn btn-warning" href="<?php echo e(route('admin.categories.edit', $row->id)); ?>" title="<?php echo e(trans('global.edit')); ?>">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                <?php endif; ?>

                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_delete')): ?>
                                    <form action="<?php echo e(route('admin.categories.destroy', $row->id)); ?>" method="POST"
                                        onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');"
                                        style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <button type="submit" class="btn btn-danger" title="<?php echo e(trans('global.delete')); ?>">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <tr>
                            <td colspan="10">
                                No record found!
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('scripts'); ?>
    <script>
        $(function() {

            
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
            let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('category_delete')): ?>
                let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>';
                let deleteButton = {
                text: deleteButtonTrans,
                url: "<?php echo e(route('admin.categories.massDestroy')); ?>",
                className: 'btn-danger',
                action: function (e, dt, node, config) {
                var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
                return entry.id
                });

                if (ids.length === 0) {
                alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

                return
                }

                if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
                $.ajax({
                headers: {'x-csrf-token': _token},
                method: 'POST',
                url: config.url,
                data: { ids: ids, _method: 'DELETE' }})
                .done(function (data) {

                    location.reload()
                    })
                }
                }
                }
                dtButtons.push(deleteButton)
            <?php endif; ?>

            $(document).on('click','#is-attribute-chk', function(){
                var id =  $(this).attr('data-id');
                $this = $(this);
                var status = '';
                if ($(this).is(':checked')) {status = 1;}
                else{ status = 0;}

                $.ajax({
                    type:'POST',
                    url:"<?php echo e(route('admin.categories.status.update')); ?>",
                    data:{id:id, status:status},
                    success:function(data){
                        if(data.success){
                            toastr.success('Success!', data.message,{
                            positionClass: 'toast-top-center',
                            iconClass:'toast-success',
                            });
                        }
                        else{
                            toastr.warning('Warning!', data.message,{
                            positionClass: 'toast-top-center',
                            iconClass:'toast-warning',
                            });

                            $this.prop('checked', true);
                        }
                    },
                    error : function(err){
                        toastr.error('Error!', data.message,{
                            positionClass: 'toast-top-center',
                            iconClass:'toast-error',
                        });
                    }
                });
            });

            //   let dtOverrideGlobals = {
            //     buttons: dtButtons,
            //     processing: true,
            //     serverSide: true,
            //     retrieve: true,
            //     aaSorting: [],
            //     ajax: "<?php echo e(route('admin.categories.index')); ?>",
            //     columns: [
            //       { data: 'placeholder', name: 'placeholder' },
            // { data: 'id', name: 'id' },
            // { data: 'name', name: 'name' },
            // { data: 'subcategories', name: 'subcategories' },
            // { data: 'image', name: 'image', sortable: false, searchable: false },
            // { data: 'size_chart', name: 'size_chart', sortable: false, searchable: false },
            // { data: 'is_home', name: 'is_home' },
            // { data: 'is_menu', name: 'is_menu' },
            // { data: 'status', name: 'status' },
            // { data: 'actions', name: '<?php echo e(trans('global.actions')); ?>' }
            //     ],
            //     orderCellsTop: true,
            //     order: [[ 1, 'desc' ]],
            //     pageLength: 25,
            //   };
            //   let table = $('.datatable-Category').DataTable(dtOverrideGlobals);
            //   $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
            //       $($.fn.dataTable.tables(true)).DataTable()
            //           .columns.adjust();
            //   });

        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/daylist/public_html/resources/views/admin/categories/index.blade.php ENDPATH**/ ?>