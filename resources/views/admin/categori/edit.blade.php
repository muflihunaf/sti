@extends('adminlte::page')

@section('title', 'Categori')

@section('content_header')
    <h1>Kategori</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('categori.update', $data->id) }} ">
            @csrf
            <div class="form-group">
              <label for="">Nama Kategori</label>
              <input type="text" name="nama_kategori" class="form-control" placeholder="Nama Kategori" value="{{ $data->nama_kategori }} ">
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
          </form>
    </div>
</div>
</div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
@stop
