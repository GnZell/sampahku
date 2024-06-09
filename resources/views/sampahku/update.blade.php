@extends('layout/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Form Ubah Laporan</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card card-primary">
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="{{Route('sampahku.update', $sampahku->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nama</label>
                                        <input type="text" class="form-control" name="nama" placeholder="Nama" value="{{$sampahku->nama}}">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Alamat Lengkap</label>
                                        <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$sampahku->alamat}}">


                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Deskripsi</label>
                                        <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi" value="{{$sampahku->deskripsi}}">

                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Titik Koordinat (Opsional)</label>
                                        <input type="text" class="form-control" name="titik_koordinat" placeholder="Titik Koordinat" value="{{$sampahku->titik_koordinat}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputFile">Foto</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="foto">
                                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                            </div>
                                        </div>
                                        <img src="{{ asset('upload/' . $sampahku->foto) }}" class="mt-2" alt="User Image" width="25%">
                                    </div>
                                </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success">Submit</button>
                            <a href="{{Route('sampahku.index')}}" class="btn btn-primary">Kembali</a>
                        </div>
                        </form>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection