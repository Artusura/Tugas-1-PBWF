@extends('layout.layout')
@section('title',$title)
@section('sidebar')
    @parent
    <li>Grafik Laminating</li>
@endsection
@section('content')
    <p>{{ $konten }}</p>
@stop