@extends('layouts.master')

@section('title')
Halaman List Cast    
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary btn-sm">Tambah</a>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Umur</th>
        <th scope="col">Bio</th>
      </tr>
    </thead>
    <tbody>
        @forelse ($cast as $key => $value)
            <tr>
                <td>{{$key + 1}}</td>
                <td>{{$value->nama}}</td>
                <td>{{$value->umur}}</td>
                <td> 
                    <form action="cast/{{$value->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <a href="/cast/{{$value->id}}" class="btn btn-info btn-sm">Detail</a>
                    <a href="/cast/{{$value->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                    <input type="submit" value="Delete" class="btn btn-danger btn-sm">
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td>tidak ada data</td>
            </tr>
        @endforelse
    </tbody>
  </table>

@endsection