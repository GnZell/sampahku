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
                                            <td>Ahmad Rizaldi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th>Alamat Lengkap</th>
                                            <td>Jalan Pekapuran Raya</td>
                                        </tr>
                                        <tr>
                                            <th>Deskripsi</th>
                                            <td>Sampah</td>
                                        </tr>
                                        <tr>
                                            <th>Titik Koordinat</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Foto</th>
                                            <td>
                                                <img src="{{asset('dist/img/avatar5.png')}}" alt="User Image">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-primary mb-2" href="/sampahku">
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