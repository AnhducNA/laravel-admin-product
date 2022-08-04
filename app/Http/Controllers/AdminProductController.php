<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminProductController extends Controller
{
    function list_product()
    {
        $listProducts = DB::table('products')->get();
        return view('admin.product.list_product', compact('listProducts'));
    }
    function add_product()
    {
        return view('admin.product.add_product');
    }
    function list_cat_product()
    {
        return view('admin.product.list_cat_product');
    }
}
