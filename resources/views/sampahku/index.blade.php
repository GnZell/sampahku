@extends('layout/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">SampahKu</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            <a class="btn btn-primary" href="{{Route('sampahku.create')}}">
                <i class="fas fa-edit"></i> Tambah Laporan
            </a>
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>Nama</th>
                                        <th>Alamat Lokasi</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($sampahku as $data)
                                    <tr>
                                        <td>{{$data->nama}}</td>
                                        <td>{{$data->alamat}}</td>
                                        <td>{{$data->deskripsi}}</td>
                                        <td>
                                            <form action="{{Route('sampahku.destroy', $data->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <a class="btn btn-success btn-sm" href="{{Route('sampahku.edit', $data->id)}}">
                                                    <i class="fas fa-pencil-alt">
                                                    </i>
                                                    Ubah
                                                </a>
                                                <a class="btn btn-warning btn-sm" href="{{Route('sampahku.detail', $data->id)}}">
                                                    <i class="fas fa-info-circle">
                                                    </i>
                                                    Detail
                                                </a>
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i> Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
@endsection