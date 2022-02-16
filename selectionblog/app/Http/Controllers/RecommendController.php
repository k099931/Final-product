<?php

namespace App\Http\Controllers;

use App\Rucket;
use App\Rubber;
use Illuminate\Http\Request;

class RecommendController extends Controller
{
    public function index()
    {
        
        /**
         *　recommend以下のindex.blade.phpを表示
         */
         
        return view('recommend/index');
    }
    
    public function recommend(Request $request)
    {
        
         /**
         *　view側で入力したrequest変数の値をkeyword変数に代入
         */
         
        $keyword_group = $request->group;
        $keyword_price = $request->price;
        $keyword_feature = $request->feature;
       
         
        if(!empty($keyword_group) && !empty($keyword_price) && !empty($keyword_feature))
         
         /**
         *　view側で全ての質問項目を入力している場合
         */
         
        {
            if($keyword_group == 1)
            {
                $query = Rubber::query();
                $rubbers = $query->where('group','=',$keyword_group);
                if($keyword_price == 1)
                {
                    if($keyword_feature == 1)
                    {
                        $rubbers = $rubbers->where('speed','>=',13)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                        
                    }
                    
                    elseif($keyword_feature == 2)
                    {
                        $rubbers = $rubbers->where('spin','>=',11.5)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                    }
                    
                    elseif($keyword_feature == 3)
                    {
                        $rubbers = $rubbers->where('balance','<=',1.5)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                    }
                }
                    
                elseif($keyword_price == 2)
                {
                    $rubbers = $rubbers->where('price','<=',9000);
                    if($keyword_feature == 1)
                    {
                        $rubbers = $rubbers->where('speed','>=',13)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                        
                    }
                    
                    elseif($keyword_feature == 2)
                    {
                        $rubbers = $rubbers->where('spin','>=',11.5)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                    }
                    
                    elseif($keyword_feature == 3)
                    {
                        $rubbers = $rubbers->where('balance','<=',1.5)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                    }
                }
                
                elseif($keyword_price == 3)
                {
                    $rubbers = $rubbers->where('price','<=',7000);
                    if($keyword_feature == 1)
                    {
                        $rubbers = $rubbers->where('speed','>=',13)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                        
                    }
                    
                    elseif($keyword_feature == 2)
                    {
                        $rubbers = $rubbers->where('spin','>=',11.5)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                    }
                    
                    elseif($keyword_feature == 3)
                    {
                        $rubbers = $rubbers->where('balance','<=',1.5)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                    }
                }
                
                elseif($keyword_price == 3)
                {
                    $rubbers = $rubbers->where('price','<=',4000);
                    if($keyword_feature == 1)
                    {
                        $rubbers = $rubbers->where('speed','>=',13)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                        
                    }
                    
                    elseif($keyword_feature == 2)
                    {
                        $rubbers = $rubbers->where('spin','>=',11.5)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                    }
                    
                    elseif($keyword_feature == 3)
                    {
                        $rubbers = $rubbers->where('balance','<=',1.5)->get();
                        $message = "あなたにお勧めのラバーの探索が完了しました！";
                        return view('recommend/result')->with(['rubbers' => $rubbers, 'message' => $message,]);
                    }
                }
            }
            
            else
         
             /**
             *　view側の質問項目に対して、未入力が存在する場合
             */
         
            {
                $message = "おすすめのラバーはございません。";
                return view('recommend/result')->with('message' , $message);
            }
            
        }
    }
}
