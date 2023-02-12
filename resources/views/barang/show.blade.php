@extends('master')

@section('judul')
<h1>Halaman Show Barang</h1>
@endsection

@section('content')
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="#" method="POST">
                @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Nama barang</label>
                    <input type="text" name="nama_barang" value="{{ $barangs->nama_barang }}"class="form-control"  disabled>
                  </div>
                  <div class="form-group">
                    <label>Tanggal</label>
                    <input type="date" name="tanggal" value="{{ $barangs->tanggal }}"class="form-control"  disabled>
                  </div>
                  <div class="form-group">
                    <label>Harga awal</label>
                    <input type="text" name="harga_awal" value="{{ $barangs->harga_awal }}"class="form-control"  disabled>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Deskripsi barang</label>
                    <input type="text-area" name="deskripsi_barang" value="{{ $barangs->deskripsi_barang }}"class="form-control" disabled>
                  </div>
                  @if( $barangs->image )
                  <div class="form-group">
                    <label>Gambar Barang :</label>
                    <br>
                    <img src="{{ asset('storage/' . $barangs->image)}}" alt="{{ $barangs->nama_barang }}" class="img-fluid mt-3">
                  </div>
                  @else

                  @endif
                <!-- /.card-body -->
                  @if(auth()->user()->level == 'admin')
                  <a href="/admin/barang" class="btn btn-outline-info">Kembali</a>
                  @elseif(auth()->user()->level == 'masyarakat')
                  <a href="/listlelang" class="btn btn-outline-info">Kembali</a>
                    @elseif(auth()->user()->level == 'petugas')
                    <a href="/petugas/barang" class="btn btn-outline-info">Kembali</a>
                  @endif
              </form>
            </div>
            </div>
            </div>
            </div>
</section>
@endsection