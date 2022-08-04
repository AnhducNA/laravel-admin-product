<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    function list_post()
    {
        return view('admin.list_post');
    }
    function add_post()
    {
        return view('admin.add_post');
    }
    function list_cat_post()
    {
        return view('admin.list_cat_post');
    }

    function list_page()
    {
        return view('admin.list_page');
    }
    function add_page()
    {
        return view('admin.add_page');
    }
    function list_order()
    {
        return view('admin.list_order');
    }
    function list_customer()
    {
        return view('admin.list_customer');
    }
    function menu()
    {
        return view('admin.menu');
    }
    function info_account()
    {
        return view('admin.info_account');
    }
}
