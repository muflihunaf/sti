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
                <a href="{{ route('categori.create') }} " class="btn btn-primary">Tambah Data</a>
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
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
                            <td> {{ $item->nama_kategori }} </td>
                            <td><a href="{{route('categori.edit', $item->id)}} "
                                    class="fa fa-edit btn btn-primary"></a> <a
                                    href=" {{route('categori.delete', $item->id)}} "
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
