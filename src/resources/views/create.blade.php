@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/create.css') }}">
@endsection

@section('content')
<div class="create-form">
    <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data">
        @csrf
        <div class="create-form__name">
            <p>商品名：</p>
            <input type="text" name="name">
        </div>
        <div class="create-form__price">
            <p>値段：</p>
            <input type="number" name="price">
        </div>
        <div class="create-form__image">
            <p>商品画像：</p>
            <input type="file" name="image_url">
        </div>
        <div class="create-form__button">
            <input type="submit" value="登録">
        </div>
    </form>
</div>
@endsection