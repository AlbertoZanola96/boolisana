@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>I nostri prodotti</h1>

    <div class="container">
        <div class="list-paste">
            @foreach ($paste as $pasta)
                <a href="{{ route('pagina-dettaglio', [ 'id' => $pasta['id']]) }}">{{ $pasta['title'] }} </a>
                <p>{{ $pasta['description']}}</p>
            @endforeach
        </div>
    </div>
@endsection