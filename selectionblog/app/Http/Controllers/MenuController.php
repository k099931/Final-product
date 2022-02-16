<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        
        /**
         *　menu以下のindex.blade.phpを表示
         */
        
        return view('menu/index');
    }
}
