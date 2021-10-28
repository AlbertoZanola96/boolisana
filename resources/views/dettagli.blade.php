@extends('layouts.app')

@section('title', $product['title'])

@section('content')
    @dump($product)
@endsection