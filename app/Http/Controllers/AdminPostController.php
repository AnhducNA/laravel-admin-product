<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminPostController extends Controller
{
    function list()
    {
        return view('admin.list_post');
    }
}
