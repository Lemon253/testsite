@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="flex__item">
    <div class="practice__card">
        <a href="/login">
            <div class="card__img">
                <img src="img/card.jpg" alt="" />
            </div>
        </a>
        <div class="card__content">
            <div class="card__cat">カテゴリー</div>
            <h2 class="card__ttl">
                商品名
            </h2>
        </div>
    </div>
    <div class="practice__card">
        <a href="https://google.com">
            <div class="card__img">
                <img src="img/card.jpg" alt="" />
            </div>
        </a>
        <div class="card__content">
            <div class="card__cat">¥500</div>
            <h2 class="card__ttl">
                商品名 </h2>
        </div>
    </div>
    <div class="practice__card">
        <a href="https://google.com">
            <div class="card__img">
                <img src="img/card.jpg" alt="" />
            </div>
        </a>
        <div class="card__content">
            <div class="card__cat">カテゴリー</div>
            <h2 class="card__ttl">
                今日の朝ごはんは卵と肉を合わせたバランスの良いメニューです。
            </h2>
            <div class="tag">
                <p class="card__tag">#朝ごはん</p>
                <p class="card__date">2021/01/01</p>
            </div>
        </div>
    </div>
</div>


@endsection