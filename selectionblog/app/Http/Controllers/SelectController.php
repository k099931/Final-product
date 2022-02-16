<?php

namespace App\Http\Controllers;

use App\Rucket;
use App\Rubber;
use Illuminate\Http\Request;

class SelectController extends Controller
{
    public function index()
    
         /**
         *　select以下のindex.blade.phpを表示する
         */
    
    {
        return view('select/index');
    }
    
    public function select(Request $request)
    
         /**
         *　view側で入力した検索項目をkeyword変数に代入する
         */
    
    {
        $keyword_rucket = $request->rucket;
        $keyword_frubber = $request->f_rubber;
        $keyword_brubber = $request->b_rubber;
        
        if(!empty($keyword_rucket) && !empty($keyword_frubber) && !empty($keyword_brubber))
        
         /**
         *　view側の選定項目を全て入力している場合
         */
        
        {
            $query = Rucket::query();
            $ruckets = $query->where('name', 'like', '%'.$keyword_rucket.'%')->get();
            $query = Rubber::query();
            $frubbers = $query->where('name', 'like', '%'.$keyword_frubber.'%')->get();
            $query = Rubber::query();
            $brubbers = $query->where('name', 'like', '%'.$keyword_brubber.'%')->get();
            $message = " 「". $keyword_rucket."」と「". $keyword_frubber."」と「" . $keyword_brubber."」での選定が完了しました。";
            return view('select/result')->with(['ruckets' => $ruckets, 'frubbers' => $frubbers, 'brubbers' => $brubbers, 'message' => $message,]);
        }
        
        else
        
         /**
         *　view側の選定項目全てに入力していない場合
         */
        
        {
            $message = "全ての項目に回答してください。";
            return view('select/result')->with('message',$message);
        }
    }
}
