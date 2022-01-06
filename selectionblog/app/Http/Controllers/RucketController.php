<?php

namespace App\Http\Controllers;

use App\Rucket;
use App\RucketComment;
use Illuminate\Http\Request;
use App\Http\Requests\RucketCommentRequest;

class RucketController extends Controller
{
    public function index(Rucket $rucket)
    {
        return view('ruckets/index')->with(['ruckets' => $rucket->orderByMaker()]);
    }
    
        public function show(Rucket $rucket, RucketComment $rucketcomment)
    {
        return view('ruckets/show')->with(['rucket' => $rucket, 'rucketcomments' => $rucketcomment->orderById()]);
    }
    
    public function delete(Rucket $rucket)
    {
        $rucket->delete();
        return redirect('/ruckets/{rucket}');
    }

    public function store(RucketComment $rucketcomment, RucketCommentRequest $request)
    {
        //$url_path = $route->getPath();
        //$url_parts = explode('/', $url_path);
        //$url_tail = end($url_parts);
        $input = $request['rucketcomment'];
        $rucketcomment->fill($input)->save();
        return redirect('/ruckets/' . $rucketcomment->rucket_id);
    }
}
