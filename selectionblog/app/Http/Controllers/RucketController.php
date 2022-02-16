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
        
         /**
         *　rucketsをメーカー順に並べ替える
         *　ruckets以下のindex.blade.phpを表示する
         */
        
        return view('ruckets/index')->with(['ruckets' => $rucket->orderByMaker()]);
    }
    
    public function search(Request $request)
    {
        
         /**
         *　view側で入力した検索項目をkeyword変数に代入する
         */
        
        $keyword_name = $request->name;
        $keyword_price = $request->price;
        $keyword_price_condition = $request->price_condition;
        
        if(!empty($keyword_name) && empty($keyword_price) && empty($keyword_price_condition))
        
         /**
         *　view側で価格の条件を入力していない場合
         */
        
        {
            $query = Rucket::query();
            $ruckets = $query->where('name', 'like', '%' .$keyword_name. '%')->get();
            $message = " 「". $keyword_name."」を含む名前の検索が完了しました。";
            return view('ruckets/search')->with(['ruckets' => $ruckets, 'message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 0)
        
         /**
         *　view側で価格の条件を選択していない場合
         */
        
        {
            $message = "価格の条件を選択してください";
            return view('ruckets/search')->with(['message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 1)
        
         /**
         *　view側で名前の条件を入力せず、価格の条件が「以上」の場合
         */
        
        {
            $query = Rucket::query();
            $ruckets = $query->where('price','>=', $keyword_price)->get();
            $message = $keyword_price. "円以上の検索が完了しました";
            return view('ruckets/search')->with(['ruckets' => $ruckets, 'message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 2)
        
         /**
         *　view側で名前の条件を入力せず、価格の条件が「以下」の場合
         */
        
        {
            $query = Rucket::query();
            $ruckets = $query->where('price','<=', $keyword_price)->get();
            $message = $keyword_price. "円以下の検索が完了しました";
            return view('ruckets/search')->with(['ruckets' => $ruckets, 'message' => $message,]);
        }
        
        elseif(!empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 1)
        
         /**
         *　view側で全ての質問項目を入力しており、価格の条件が「以上」の場合
         */
        
        {
            $query = Rucket::query();
            $ruckets = $query->where('name', 'like', '%' .$keyword_name. '%')->where('price','>=', $keyword_price)->get();
            $message = "「".$keyword_name . "」を含む名前と". $keyword_price."円以上の検索が完了しました";
            return view('ruckets/search')->with(['ruckets' => $ruckets, 'message' => $message,]);
        }
        
        elseif(!empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 2)
        
         /**
         *　view側で全ての質問項目を入力しており、価格の条件が「以下」の場合
         */
        
        {
            $query = Rucket::query();
            $ruckets = $query->where('name', 'like', '%' .$keyword_name. '%')->where('price','<=', $keyword_price)->get();
            $message = "「".$keyword_name . "」を含む名前と". $keyword_price."円以下の検索が完了しました";
            return view('ruckets/search')->with(['ruckets' => $ruckets, 'message' => $message,]);
        }
        
        else
        
        /**
         *　それ以外の場合
         */
        
        {
            $message = "検索結果はありません。";
            return view('ruckets/search')->with('message',$message);
        }
        
    }
    
    public function show(Rucket $rucket, RucketComment $rucketcomment)
    
         /**
         *　ruckets以下のshow.blade.phpにrucket変数、ID順に並べ替えたrucketcomments配列を渡して、表示する
         */
    
    {
        return view('ruckets/show')->with(['rucket' => $rucket, 'rucketcomments' => $rucketcomment->orderById()]);
    }
    
    public function delete(Rucket $rucket)
    {
        $rucket->delete();
        return redirect('/ruckets/{rucket}');
    }

    public function store(RucketComment $rucketcomment, RucketCommentRequest $request)
    
         /**
         *　view側で入力したコメントをrucketcommentテーブルに挿入する
         * /ruckets/を更新する
         */
    
    {
        $input = $request['rucketcomment'];
        $rucketcomment->fill($input)->save();
        return redirect('/ruckets/' . $rucketcomment->rucket_id);
    }
}
