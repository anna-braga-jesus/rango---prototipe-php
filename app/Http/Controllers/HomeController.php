<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(Request $r): View
    {
        return view('welcome');
    }

    public function ingredientsAction(Request $r): View 
    {
        dd($r->all());
    }
}
