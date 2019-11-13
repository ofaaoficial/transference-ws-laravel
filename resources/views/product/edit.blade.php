@extends('layouts.app')

@section('content')
    <form action="{{route('product.update', $product->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">name</label>
        <input type="text" name="name" id="name" value="{{$product->name}}">

        <label for="description">description</label>
        <input type="text" name="description" id="description" value="{{$product->description}}">

        <label for="value">value</label>
        <input type="number" name="value" id="value" value="{{$product->value}}">

        <input type="submit" value="Enviar">
    </form>
@endsection
