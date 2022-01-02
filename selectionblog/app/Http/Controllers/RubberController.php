<?php

namespace App\Http\Controllers;

use App\Rubber;
use Illuminate\Http\Request;

class RubberController extends Controller
{
    public function index(Rubber $rubber)
    {
        return view('rubbers/index')->with(['rubbers' => $rubber->get()]);
    }
}
?>