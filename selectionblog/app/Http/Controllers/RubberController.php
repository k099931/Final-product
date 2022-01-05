<?php

namespace App\Http\Controllers;

use App\Rubber;
use App\Rubbercomment;
use Illuminate\Http\Request;
use App\Http\Requests\RubberCommentRequest;

class RubberController extends Controller
{
    public function index(Rubber $rubber)
    {
        return view('rubbers/index')->with(['rubbers' => $rubber->orderByMaker()]);
    }
    
    public function show(Rubber $rubber)
    {
        return view('rubbers/show')->with(['rubber' => $rubber]);
    }

    public function store(Rubbercomment $rubbercomment, RubberCommentRequest $request)
    {
        //$url_path = $route->getPath();
        //$url_parts = explode('/', $url_path);
        //$url_tail = end($url_parts);
        $input = $request['rubbercomment'];
        $rubbercomment->fill($input)->save();
        return redirect('/rubbers/' . $rubbercomment->rubber_id);
    }

}
?>