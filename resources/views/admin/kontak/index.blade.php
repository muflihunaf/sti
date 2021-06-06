@extends('adminlte::page')

@section('title', 'Laporan')

@section('content_header')
<h1>Kontak</h1>
@stop
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('kontak.create') }} " class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Nomor Hp</th>
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
                            <td> {{ $item->nama }} </td>
                            <td> {{ $item->email }} </td>
                            <td><a href="{{route('lokasi.edit', $item->id)}} "
                                    class="fa fa-eye btn btn-primary"></a>
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
