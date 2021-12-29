<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RubberController extends Controller
{
    public function index(Rubber $rubber)
    {
        return $rubber->get();
    }
}
