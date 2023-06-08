<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagerController extends Controller
{
    public function dashboard()
    {
        return view('dashboardm');
    }

    // Add other manager-related methods here
}