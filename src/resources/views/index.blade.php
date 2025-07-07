@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="flex__item">
    @foreach($items as $item)
    <div class="practice__card">
        <a href="/login">
            <div class="card__img">
                <img src="img/card.jpg" alt="" />
            </div>
        </a>
        <div class="card__content">
            <div class="card__cat">{{ $item->price }}</div>
            <h2 class="card__ttl">
                {{ $item->name }}
            </h2>
        </div>
    </div>
    @endforeach
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
</div>


@endsection