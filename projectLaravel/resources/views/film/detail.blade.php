@extends('layouts.master')

@section('title')
Halaman Tambah Detail Film 
@endsection

@section('content')

    <div class="card">
        <img src="{{asset('image/' .$film->poster)}}" class="card-img-top" alt="...">
            <div class="card-body">
                <h3>{{$film->judul}}</h3>
                <p class="card-text">{{$film->ringkasan}}</p>
                <a href="/film" class="btn btn-secondary btn-block btn-sm">Back</a>
            </div>
    </div>
</div>

@endsection