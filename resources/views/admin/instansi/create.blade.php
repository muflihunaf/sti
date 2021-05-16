@extends('adminlte::page')

@section('title', 'Instansi')

@section('content_header')
    <h1>Instansi</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
    <div class="card-header">
        <h3>Tambah Data</h3>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('instansi.store') }} ">
            @csrf

            <div class="form-group">
                <label for="">Nama Kategori</label>
                <select name="lokasi_id" class="form-control" id="">
                    @foreach ($data as $item)
                        <option value="{{ $item->id }} ">{{ $item->lokasi }} </option>
                    @endforeach
                </select>
              </div>
            <div class="form-group">
              <label for="">Nama Instansi</label>
              <input type="text" name="nama_instansi" class="form-control" placeholder="Nama Kategori">
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
