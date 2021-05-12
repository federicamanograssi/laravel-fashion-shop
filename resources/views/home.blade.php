@extends('layouts.app')

@section('title', 'home')

{{-- contenuto all'interno del main --}}

@section('content')
    <h1>la mia homepage</h1>

    <a href="{{route('product_page')}}">Vedi prodotti</a>
@endsection