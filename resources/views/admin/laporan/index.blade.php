@extends('adminlte::page')

@section('title', 'Laporan')

@section('content_header')
<h1>Laporan</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('instansi.create') }} " class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul</th>
                            <th>Deskripsi</th>
                            <th>Tanggal</th>
                            <th>Nama Instansi</th>
                            <th>Lokasi</th>

                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp

                        @foreach ($data as $item)
                        <tr>
                            <td>{{ $no++ }} </td>
                            <td> {{ $item->get_detail->judul }} </td>
                            <td> {{ $item->get_detail->deskripsi }} </td>
                            <td> {{ $item->tanggal }} </td>
                            <td> {{ $item->get_detail->get_instansi->nama_instansi }} </td>
                            <td> {{ $item->get_detail->get_instansi->get_lokasi->lokasi }} </td>
                            <td><a href="{{route('lokasi.edit', $item->id)}} "
                                    class="fa fa-edit btn btn-primary"></a> <a
                                    href=" {{route('lokasi.delete', $item->id)}} "
                                    onclick="return confirm('Anda Yakin?')" class="fa fa-trash-alt btn btn-danger"></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @stop

    @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    @stop

    @section('js')
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });

    </script>
    @stop
