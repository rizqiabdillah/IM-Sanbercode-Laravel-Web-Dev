@extends('layouts.master')

@section('title')
Halaman Detail Genre   
@endsection

@section('content')

<h1>{{$genre->nama}}</h1>

<a href="/genre" class="btn btn-secondary btn-sm">Kembali</a>

@endsection