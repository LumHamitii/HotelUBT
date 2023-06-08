<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //About us 
    function about_us(){
        return view ('about_us');
    }
}
