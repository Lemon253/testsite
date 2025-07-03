@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="attendance__alert">
    // テスト
</div>

<div class="card">
    <div class="card__img">
        <img src="{{ asset('img/card.jpg') }}" alt="">
        <!-- <img src="img/card.jpg" alt="" /> -->
    </div>
    <div class="card__content">
        <div class="card__content-cat">カテゴリー</div>
        <h2 class="card__content-ttl">
            今日の朝ごはんは卵と肉を合わせたバランスの良いメニューです。
        </h2>
        <div class="card__content-tag">
            <p class="card__content-tag-item">#朝ごはん</p>
            <p class="card__content-tag-item card__content-tag-item--last">
                2021/01/01
            </p>
        </div>
    </div>
</div>

@endsection