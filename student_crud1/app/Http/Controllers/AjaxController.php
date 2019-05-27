<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxController extends Controller
{
    //
    function index()
    {
     return view('student.ajaxdata');
     //http://127.0.0:8000/ajaxdata
    }
}
