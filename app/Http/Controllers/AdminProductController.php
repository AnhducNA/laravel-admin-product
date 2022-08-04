<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    function list(){
        return view('admin.product.list');
    }
}
