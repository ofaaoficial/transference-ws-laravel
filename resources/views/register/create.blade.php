@extends('layouts.app')
@section('content')
<form method="POST" action="{{ url('registro') }}">
    @csrf
    <label for="username">Username</label>
    <input type="text" name="username" id="username">

    <label for="password">Password</label>
    <input type="password" name="password" id="password">

    <input type="submit" value="Register">
</form>
@endsection
{{-- form>input:text+input:submit --}}
