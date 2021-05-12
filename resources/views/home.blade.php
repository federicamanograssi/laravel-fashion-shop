@extends('layouts.app')

@section('title', 'home')

@section('content')
    <h1>la mia homepage</h1>

    <a href="{{route('product_page')}}">Vedi prodotti</a>
@endsection