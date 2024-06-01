@extends('layout/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card">
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="width: 30%">Nama</th>
                                            <td>{{$sampahku->nama}}</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Alamat Lengkap</th>
                                            <td>{{$sampahku->alamat}}</td>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi</th>
                                            <td>{{$sampahku->deskripsi}}</td>
                                        </tr>
                                        <tr>
                                            <th>Titik Koordinat</th>
                                            <td>{{$sampahku->titik_koordinat}}</td>
                                        </tr>
                                        <tr>
                                            <th>Foto</th>
                                            <td>
                                                <img src="{{ asset('storage/' . $sampahku->foto) }}" alt="User Image" width="50%">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary mb-2" href="{{Route('sampahku.index')}}">
                                <i class=""></i> Kembali
                            </a>
                        </div>
                    </div>
                    <!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
        </div>
    </div>
    @endsection