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
}
