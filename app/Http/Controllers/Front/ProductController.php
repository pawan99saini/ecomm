<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Size;
use App\Models\Pincode;
use App\Models\Color;
use App\Models\Attribute;
use App\Models\AttributeValue;
use App\Models\ProductVariation;
use App\Models\Category;
use App\Models\ProductAttribute;
use App\Models\ProductImage;
use App\Models\Wishlist;
use App\Models\ProductReview;
use App\Models\Brand;
use App\Models\Coupon;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;
use Auth;
use BotMan\BotMan\Middleware\Wit;

class ProductController extends Controller
{
    

    public function categories(Request $request, $slug)
    {
        return view('new-frontend.home.category');
    }

    public function product(Request $request, $slug)
    {
        
	return view('new-frontend.home.product');

    }

    
}
