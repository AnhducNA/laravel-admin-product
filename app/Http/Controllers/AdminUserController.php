<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    function list_user()
    {
        return view('admin.user.list_user');
    }
    function add_user()
    {
        return view('admin.user.add_user');
    }
    function list_cat_user()
    {
        return view('admin.user.list_cat_user');
    }
}
