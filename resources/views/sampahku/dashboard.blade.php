@extends('layout/main')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{asset('img/2.png')}}" alt="" width="100%">
                                </div>
                                <div class="col-md-8">
                                    <h2>Selamat Datang!</h2>
                                    <p class="card-text">
                                        SampahKu merupakan sebuah website yang menyediakan pelaporan adanya sampah-sampah yang ada disekiar lingkungan. Aplikasi ini memungkinkan masyarakat untuk secara aktif berpartisipasi dalam menjaga kebersihan lingkungan dengan melaporkan masalah sampah secara cepat dan efisien. Masalah penyebaran sampah di berbagai lokasi telah menjadi perhatian global yang mendesak untuk diselesaikan. Tantangan-tantangan yang harus dihadapi agar sampah tidak merusak ekosistem di bumi menjadi perhatian utama. Sebagai makhluk sosial, kita memiliki tanggung jawab untuk menangani masalah penyebaran ini.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
@endsection