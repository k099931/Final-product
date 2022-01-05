<?php

namespace App\Http\Controllers;

use App\Rubber;
use Illuminate\Http\Request;
use App\Rubbercomment;

class RubberController extends Controller
{
    public function index(Rubber $rubber)
    {
        return view('rubbers/index')->with(['rubbers' => $rubber->get()]);
    }
    
    public function show(Rubber $rubber)
    {
        return view('rubbers/show')->with(['rubber' => $rubber]);
    }

    public function store(Request $request, Rubbercomment $rubbercomment)
    {
        $input = $request['rubbercomment'];
        //$route = $request->route();
        //$url_path = $route->getPath();
        //$url_parts = explode('/', $url_path);
        //$url_tail = end($url_parts);
        //$rubbercomment->rubber_id = $url_tail;
        $rubbercomment->fill($input)->save();
        return redirect('/rubbers/' . $rubbercomment->id);
    }
}
?>