@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="flex__item">
    @foreach($items as $item)
    <div class="practice__card">
        <!-- 商品詳細ページに飛ぶ？ -->
        <a href="/item">
            <div class="card__img">
                <img src="{{ asset('storage/img/card.jpg')}}" />
            </div>
        </a>
        <div class="card__content">
            <div class="card__content-common">
                <div class="card__price">¥{{ $item->price }}</div>
                <!-- aタグで購入手続きページに飛ぶ -->
                <div class="card__buy">
                    <a class="card__link" href="/item">購入に進む</a>
                </div>
            </div>
            <h2 class="card__ttl">
                {{ $item->name }}
            </h2>
        </div>
    </div>
    @endforeach
</div>


@endsection