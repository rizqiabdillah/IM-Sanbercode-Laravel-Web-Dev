@extends('layouts.master')

@section('title')
Halaman Tambah Cast    
@endsection

@section('content')

<form method="POST" action="/cast">
    @csrf
    <div class="form-group">
      <label>Name Cast</label>
      <input type="text" name="nama" class="form-control">
    </div>
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    <div class="form-group">
        <label>Umur Cast</label>
        <input type="number" name="umur" class="form-control">
      </div>
      @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>
      @enderror
    <div class="form-group">
      <label>Bio Cast</label>
      <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('bio')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

