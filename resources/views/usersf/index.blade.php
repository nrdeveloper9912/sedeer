@extends('layout')
@section('content')
    @foreach($users as $usuario)
    <h5>{{$usuario}}</h5>

    @endforeach
@endsection