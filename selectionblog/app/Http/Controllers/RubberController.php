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
        $keyword_rubbername = $request->rubbername;
        $keyword_makername = $request->makername;
        $keyword_price = $request->price;
        $keyword_price_condition = $request->price_condition;
        
        if(!empty($keyword_rubbername) && empty($keyword_makername) && empty($keyword_price_condition))
        {
            $query = Rubber::query();
            $rubbers = $query->where('rubbername', 'like', '%' .$keyword_rubbername. '%')->get();
            $message = " 「". $keyword_rubbername."」を含む名前の検索が完了しました。";
            return view('/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
        }
        
        elseif(empty($keyword_rubbername) && !empty($keyword_price) && $keyword_price_condition == 0)
        {
            $message = "価格の条件を選択してください";
            return view('/search')->with(['message' => $message,]);
        }
        
        elseif(empty($keyword_rubbername) && !empty($keyword_price) && $keyword_price_condition == 1)
        {
            $query = Rubber::query();
            $rubbers = $query->where('price','>=', $keyword_price)->get();
            $message = $keyword_price. "歳以上の検索が完了しました";
            return view('/search')->with(['rubbers' => $rubbers, 'message' => $message,]);
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