@extends('layouts.master')

@section('title')
Halaman List Film   
@endsection

@section('content')

<a href="/film/create" class="btn btn-primary btn-sm mb-4">Tambah</a>

<div class="row">
    @forelse ( $film as $item )
    <div class="col-4">
        <div class="card">
            <img src="{{asset('image/' .$item->poster)}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>{{$item->judul}}</h3>
                    <p class="card-text">{{ Str::limit($item->ringkasan, 50)}}</p>
                    <a href="/film/{{$item->id}}" class="btn btn-secondary btn-block btn-sm">Read More</a>
                    <div class="row my-2">
                        <div class="col">
                            <a href="/film/{{$item->id}}/edit" class="btn btn-info btn-block btn-sm">Edit</a>
                        </div>
                        <div class="col">
                            <form action="film/{{$item->id}}" method="POST">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-block btn-sm" value="delete">
                            </form>
                        </div>
                    </div>
                </div>
        </div>
    </div>
          
    @empty
        <h2>Tidak ada Film</h2>
    @endforelse

    
</div>
@endsection