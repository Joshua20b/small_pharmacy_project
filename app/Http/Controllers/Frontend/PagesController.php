<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function service()
    {
    }
    public function products()
    {
        $data = [
            'title'       => 'Our Products',
            'allProducts' => Product::where('status', 'active')->get()
        ];
        return view('frontend.pages.product', $data);
    }
}
