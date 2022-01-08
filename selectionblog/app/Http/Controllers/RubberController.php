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
    
    public function search(Request $request)
    {
        $keyword_name = $request->name;
        $keyword_price = $request->price;
        $keyword_price_condition = $request->price_condition;
        
        if(!empty($keyword_name) && empty($keyword_price) && empty($keyword_price_condition))
        {
            $query = Rubber::query();
            $rubbers = $query->where('name', 'like', '%' .$keyword_name. '%')->get();
            $message = " 「". $keyword_name."」を含む名前の検索が完了しました。";
            return view('rubbers/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 0)
        {
            $message = "価格の条件を選択してください";
            return view('rubbers/search')->with(['message' => $message,]);
        }
        
        elseif(empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 1)
        {
            $query = Rubber::query();
            $rubbers = $query->where('price','>=', $keyword_price)->get();
            $message = $keyword_price. "円以上の検索が完了しました";
            return view('rubbers/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        elseif(!empty($keyword_name) && !empty($keyword_price) && $keyword_price_condition == 2)
        {
            $query = Rubber::query();
            $rubbers = $query->where('name', 'like', '%' .$keyword_name. '%')-_where('price','<=', $keyword_price)->get();
            $message = "「".$keyword_rubbername . "」を含む名前と". $keyword_price."円以下の検索が完了しました";
            return view('rubbers/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        else
        {
            $message = "検索結果はありません。";
            return view('rubbers/search')->with('message',$message);
        }
        
    }
    
    public function show(Rubber $rubber, Rubbercomment $rubbercomment)
    {
        return view('rubbers/show')->with(['rubber' => $rubber, 'rubbercomments' => $rubbercomment->orderById()]);
    }
    
    public function delete(Rubber $rubber)
    {
        $rubber->delete();
        return redirect('/rubbers/{rubber}');
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