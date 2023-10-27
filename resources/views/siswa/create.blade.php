@extends('layout.tamplate')
@section('content')

<section class="content-header">
	   <h1>
        Siswa
        <small>Tambah Data Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Siswa</li>
        <li class="active">Tambah Siswa</li>
      </ol>
</section>

<section class="content">
	   <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Siswa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/siswa/store')}}" method="POST" class="form-horizontal">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan Nis">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Rombel</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="rombel" id="rombel" placeholder="Masukkan Rombel">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Telepon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="telepon" id="telepon" placeholder="Masukkan Telepon">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
@endsection