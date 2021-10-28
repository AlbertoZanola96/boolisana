@extends('layouts.app')

@section('title', 'Products')

@section('content')
    <h1>I nostri prodotti</h1>

    <div class="container">
        <div class="list-paste">
            @foreach ($paste as $index => $pasta)
                <p>
                    <a target="_blank" href="{{ route('pagina-dettaglio', [ 'id' => $index]) }}">{{ $pasta['titolo'] }} - {{ $pasta['tipo'] }}</a>
                </p>
            @endforeach
        </div>
    </div>
@endsection