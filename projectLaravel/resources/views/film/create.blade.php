@extends('layouts.master')

@section('title')
Halaman Tambah Film   
@endsection

@section('content')

<form method="POST" action="/film" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
      <label>Judul</label>
      <input type="text" name="judul" class="form-control">
    </div>
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="form-group">
      <label>Ringkasan</label>
      <textarea name="ringkasan" class="form-control" cols="30" rows="10"></textarea>
    </div>
    @error('ringkasan')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group">
    <label>Tahun</label>
    <input type="number" name="tahun" class="form-control">
  </div>
  @error('tahun')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group">
    <label>Poster</label>
    <input type="file" name="poster" class="form-control">
  </div>
  @error('poster')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror
  
  <div class="form-group">
    <label>Genre</label>
    <select name="genre_id" class="form-control" id="">
        <option value="">--Pilih Genre--</option>
        @forelse ($genre as $item)
            <option value="{{$item->id}}">{{$item -> nama}}</option>
        @empty
            <option value="">Tidak ada data Genre</option>
        @endforelse
    </select>
  </div>
  @error('tahun')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

