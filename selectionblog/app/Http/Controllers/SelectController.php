<?php

namespace App\Http\Controllers;

use App\Rucket;
use App\Rubber;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function index()
    {
        return view('select/index');
    }
    
    public function select(Request $request)
    {
        $keyword_rucket = $request->rucket;
        $keyword_frubber = $request->f_rubber;
        $keyword_brubber = $request->b_rubber;
        
        if(!empty($keyword_rucket) && !empty($keyword_frubber) && !empty($keyword_brubber))
        {
            $query = Rucket::query();
            $ruckets = $query->where('name', 'like', '%' .$keyword_rucket. '%')->get();
            $query = Rubber::query();
            $frubbers = $query->where('name', 'like', '%' .$keyword_frubber. '%')->get();
            $query = Rubber::query();
            $brubbers = $query->where('name', 'like', '%' .$keyword_brubber. '%')->get();
            $message = " 「". $keyword_rucket."」と「". $keyword_frubber."」と「" . $keyword_brubber."」での選定が完了しました。";
            return view('select/result')->with(['ruckets' => $ruckets, 'frubbers' => $frubbers, 'brubbers' => $brubbers, 'message' => $message,]);
        }
        
        else
        {
            $message = "全ての項目に回答してください。";
            return view('select/result')->with('message',$message);
        }
    }
}
