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

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $parameters = $request->only([
            'name',
            'price',
        ]);

        if($request->hasFile('image_url')){
            $file = $request->file('image_url');
            $path = $file->store('public/img');
            $filename = basename($path);
            $parameters['image_url'] = 'img/' . $filename;

        }

        Item::create($parameters);

        return redirect('/');
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
