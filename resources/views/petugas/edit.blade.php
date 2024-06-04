@extends('template')
@section('konten')

<!-- Content Header (Page header) -->
<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
         <h1 class="m-0"></h1>
       </div><!-- /.col -->
       {{-- <div class="col-sm-6">
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="/profil">Profil</a></li>
           <li class="breadcrumb-item active">selanjutnya</li>
         </ol>
       </div><!-- /.col --> --}}
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
             
            <h3>Tambah Data</h3>
          </div>
            <!-- /.card-header -->
            <div class="card-body">
              
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                    @foreach($petugas as $d)
                    <form action="/petugas/update" method="POST">
                      @csrf
                      @method('POST')
                      <input type="hidden" name="idpetugas" value="{{ $d->idpetugas }}">
                        <div class="form-group">
                            <input type="text" id="namapetugas" name="namapetugas" class="form-control" placeholder="Nama Petugas" value="{{ $d->namapetugas }}">
                        </div>
                        <div class="form-group">
                            <input type="text" id="username" name="username" class="form-control" placeholder="Username" value="{{ $d->username }}">
                        </div>
                       
                      </div>
                      <select name="idlevel" class="form-control" id="">
                        <option value="">-- LEVEL --</option>
                        @foreach ($detail_level as $item)
                        <option value="{{ $item['idlevel'] }}">{{ $item['namalevel'] }}</option>
                        @endforeach
                    </select>
                      <div class="form-group">
                       <button type="submit" class="btn btn-info">Simpan Data</button>
                    </div>
                    </form>
                    @endforeach
                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
       </div>
       <!-- /.col-md-6 -->
   
       <!-- /.col-md-6 -->
     </div>
     <!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>

@endsection
