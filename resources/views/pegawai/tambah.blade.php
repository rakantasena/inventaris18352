@extends('template')
@section('konten')

<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0">{{ $judul }}</h1>
       </div><!-- /.col -->
       <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="/profil">{{ $judul }}</a></li>
           <li class="breadcrumb-item active">Selanjutnya</li>
         </ol>
       </div><!-- /.col -->
     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->  

 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <div class="row">
       <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
              <h2 class="card-title">Tambah pegawai</h2>
            </div>
            <div class="card-body">
              <form action="store" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="namapegawai">Nama Pegawai</label>
                  <input type="text" class="form-control" id="namapegawai" name="namapegawai">
                </div>
                <div class="form-group">
                  <label for="nip">NIP</label>
                  <input type="number" class="form-control" id="nip" name="nip">
                </div>
                <div class="form-group">
                  <label for="alamat">alamat</label>
                  <input type="text" class="form-control" id="alamat" name="alamat">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
              </form>
            </div>
        </div>
        <!-- /.card -->
       </div>
       <!-- /.col-lg-12 -->
     </div>
     <!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content -->

@endsection