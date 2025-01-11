@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
    <div class="thank-you-container">
        <div class="background-text">Thank you</div>
        <div class="message">
            <p>お問い合わせありがとうございました</p>
            <a href="index.html" class="home-button">HOME</a>
        </div>
    </div>
@endsection