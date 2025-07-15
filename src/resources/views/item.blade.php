@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="flex-item">
    <div class="item__right">
        <div class="item__img">
            <img src="{{ asset('storage/img/card.jpg')}}" />
        </div>
        <div class="item-content">
            <div class="item__ttl">
                <h2>テストだよ</h2>
            </div>
            <div class="item__price">¥1000（税込）送料込み</div>
            <a href="/item">
                <div class="item_buy">商品を購入する</div>
            </a>
            <div class="item-explanation">
                <h3>商品の説明</h3>
                <p>test</p>
            </div>
            <div class="seller">
                <h3>出品者</h3>
                <p>出品者のプロフィールアイコン</p>
            </div>
        </div>
    </div>
</div>
</div>
@endsection