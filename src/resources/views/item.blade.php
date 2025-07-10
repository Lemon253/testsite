@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/item.css') }}">
@endsection

@section('content')
<div class="flex-item">
    <div class="item__left">
        <div class="item-img">
            <img src="/src/storage/app/public/img/card.jpg" alt="">
        </div>
    </div>
    <div class="item__right">
        <div class="item-content">
            <div class="item__ttl">テストだよ</div>
            <div class="item__price">¥1000</div>
            <div class="item__price--sub">（税込）送料込み</div>
            <a href="/item">
                <div class="buy">商品を購入する</div>
            </a>
        </div>
        <div class="item-explanation">
            <h2>商品の説明</h2>
            <p>test</p>
        </div>
    </div>
</div>
@endsection