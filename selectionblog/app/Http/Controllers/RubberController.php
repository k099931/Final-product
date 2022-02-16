<?php

namespace App\Http\Controllers;

use App\Rubber;
use App\Rubbercomment;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\RubberCommentRequest;

class RubberController extends Controller
{
    public function index(Rubber $rubber)
    {
        
         /**
         *　rubbersをメーカー順に並べ替える
         *　rubbers以下のindex.blade.phpを表示する
         */
        
        return view('rubbers/index')->with(['rubbers' => $rubber->orderByMaker()]);
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
            $query = Rubber::query();
            $rubbers = $query->where('name', 'like', '%' .$keyword_name. '%')->get();
            $message = " 「". $keyword_name."」を含む名前の検索が完了しました。";
            return view('rubbers/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 0)
        
         /**
         *　view側で価格の条件を選択していない場合
         */
        
        {
            $message = "価格の条件を選択してください";
            return view('rubbers/search')->with(['message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 1)
        
         /**
         *　view側で名前の条件を入力せず、価格の条件が「以上」の場合
         */
        
        {
            $query = Rubber::query();
            $rubbers = $query->where('price','>=', $keyword_price)->get();
            $message = $keyword_price. "円以上の検索が完了しました";
            return view('rubbers/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 2)
        
         /**
         *　view側で名前の条件を入力せず、価格の条件が「以下」の場合
         */
        
        {
            $query = Rubber::query();
            $rubbers = $query->where('price','<=', $keyword_price)->get();
            $message = $keyword_price. "円以下の検索が完了しました";
            return view('rubbers/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        elseif(!empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 1)
        
         /**
         *　view側で全ての質問項目を入力しており、価格の条件が「以上」の場合
         */
        
        {
            $query = Rubber::query();
            $rubbers = $query->where('name', 'like', '%' .$keyword_name. '%')->where('price','>=', $keyword_price)->get();
            $message = "「".$keyword_rubbername . "」を含む名前と". $keyword_price."円以上の検索が完了しました";
            return view('rubbers/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        elseif(!empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 2)
        
         /**
         *　view側で全ての質問項目を入力しており、価格の条件が「以下」の場合
         */
        
        {
            $query = Rubber::query();
            $rubbers = $query->where('name', 'like', '%' .$keyword_name. '%')->where('price','<=', $keyword_price)->get();
            $message = "「".$keyword_rubbername . "」を含む名前と". $keyword_price."円以下の検索が完了しました";
            return view('rubbers/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        else
        
        /**
         *　それ以外の場合
         */
        
        {
            $message = "検索結果はありません。";
            return view('rubbers/search')->with('message',$message);
        }
        
    }
    
    public function show(Rubber $rubber, Rubbercomment $rubbercomment, User $user)
    
         /**
         *　rubbers以下のshow.blade.phpにrubber変数、ID順に並べ替えたrubbercomments配列、users配列を渡して、表示する
         */
    
    {
        return view('rubbers/show')->with(['rubber' => $rubber, 'rubbercomments' => $rubbercomment->orderById() , 'users' => $user->get()]);
    }
    
    //public function delete(Rubber $rubber)
    //{
    //    $rubber->delete();
    //    return redirect('/rubbers/{rubber}');
    //}

    //public function create(User $user)
    //{
    //    return view('rubbers/show')->with(['users' => $user->get()]);;
    //}


    public function store(Rubbercomment $rubbercomment, RubberCommentRequest $request)
    
         /**
         *　view側で入力したコメントをrubbercommentテーブルに挿入する
         * /rubbers/を更新する
         */
    
    {
        $input = $request['rubbercomment'];
        $rubbercomment->fill($input)->save();
        return redirect('/rubbers/' . $rubbercomment->rubber_id);
    }

}
?>