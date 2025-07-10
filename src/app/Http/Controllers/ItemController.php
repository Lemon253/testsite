<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
//フォームリクエストの読み込み
use App\Http\Requests\AuthorRequest;

class ItemController extends Controller
{
    public function index()
    {
        $items = Item::all();
        return view('index', compact('items'));
    }

    public function item()
    {
        return view('item');
    }


    //出品時のメッセージ送信
    /*
    public function sell(Request $request)
    {
        $buy = $request->only(['content']);
        Buy::create($sell);
        return redirect('/')->with('message','商品を出品しました' )s
    }
        */
}
