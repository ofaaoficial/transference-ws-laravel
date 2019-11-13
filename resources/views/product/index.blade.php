@extends('layouts.app')

@section('content')
    <a href="{{route('product.create')}}">
        <button>Create</button>
    </a>
    <table>
        <thead>
            <th>name</th>
            <th>description</th>
            <th>value</th>
            <th>option</th>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->value}}</td>
                <td>
                    <a href="{{route('product.edit', $product->id)}}">
                        <button>Editar</button>
                    </a>
                    <form action="{{route('product.destroy', $product->id)}}">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
