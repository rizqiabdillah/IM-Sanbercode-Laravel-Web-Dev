@extends('layouts.master')

@section('title')
Halaman Edit Film   
@endsection

@section('content')

<form method="POST" action="/film/{{$film->id}}" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
      <label>Judul</label>
      <input type="text" name="judul" value="{{$film->judul}}" class="form-control">
    </div>
    @error('judul')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <div class="form-group">
      <label>Ringkasan</label>
      <textarea name="ringkasan" class="form-control" cols="30" rows="10">{{$film->ringkasan}}</textarea>
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
        @if ($item->id === $film->genre_id)
            <option value="{{$item->id}}"selected>{{$item->nama}}</option>
        @else
            <option value="{{$item->id}}">{{$item->nama}}</option>
        @endif
            
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

