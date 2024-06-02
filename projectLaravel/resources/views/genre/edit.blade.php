@extends('layouts.master')

@section('title')
Halaman Edit Cast    
@endsection

@section('content')

<form method="POST" action="/genre/{{$genre->id}}">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label>Name Genre</label>
      <input type="text" name="nama" value="{{$genre->nama}}" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

