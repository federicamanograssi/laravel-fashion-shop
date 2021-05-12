@extends('layouts.app')

@section('title_page','I nostri prodotti')

{{-- contenuto all'interno del main --}}
@section('content')
    @foreach ($prodotti as $prodotto)
        <h2>{{$prodotto['name']}}</h2>
        <p>Colore : {{$prodotto['color']}}</p>
        <p>Taglia : {{$prodotto['size']}}</p>
        <p>Descrizione : {{$prodotto['description']}}</p>

    @endforeach
@endsection