@extends('layouts.app')

@section('content')
    <form action="{{route('product.store')}}" method="POST">
        @csrf
        <label for="name">name</label>
        <input type="text" name="name" id="name">

        <label for="description">description</label>
        <input type="text" name="description" id="description">

        <label for="value">value</label>
        <input type="number" name="value" id="value">

        <input type="submit" value="Enviar">
    </form>
@endsection
