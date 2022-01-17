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
    
    public function search(Request $request)
    {
        $keyword_name = $request->name;
        $keyword_price = $request->price;
        $keyword_price_condition = $request->price_condition;
        
        if(!empty($keyword_name) && empty($keyword_price) && empty($keyword_price_condition))
        {
            $query = Rucket::query();
            $ruckets = $query->where('name', 'like', '%' .$keyword_name. '%')->get();
            $message = " 「". $keyword_name."」を含む名前の検索が完了しました。";
            return view('ruckets/search')->with(['ruckets' => $ruckets, 'message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 0)
        {
            $message = "価格の条件を選択してください";
            return view('ruckets/search')->with(['message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 1)
        {
            $query = Rucket::query();
            $ruckets = $query->where('price','>=', $keyword_price)->get();
            $message = $keyword_price. "円以上の検索が完了しました";
            return view('ruckets/search')->with(['ruckets' => $ruckets, 'message' => $message,]);
        }
        
        elseif(!empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 2)
        {
            $query = Rucket::query();
            $ruckets = $query->where('name', 'like', '%' .$keyword_name. '%')->where('price','<=', $keyword_price)->get();
            $message = "「".$keyword_name . "」を含む名前と". $keyword_price."円以下の検索が完了しました";
            return view('ruckets/search')->with(['ruckets' => $ruckets, 'message' => $message,]);
        }
        
        else
        {
            $message = "検索結果はありません。";
            return view('ruckets/search')->with('message',$message);
        }
        
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
