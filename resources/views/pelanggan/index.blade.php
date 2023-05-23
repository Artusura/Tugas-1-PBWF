@extends('layout.layout')
@section('title',"Data Pelanggan")
@section('sidebar')
    @parent
    <li>PHP</li>
@endsection
@section('content')
    @foreach($pelanggan as $index => $val)
        <p>{{$index+1}} | {{$val}}</p>
    @endforeach    

@stop