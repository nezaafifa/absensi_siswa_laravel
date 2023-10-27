@extends('layout.tamplate')
@section('content')

<section class="content-header">
	   <h1>
        Rayon
        <small>Tambah Data Rayon</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Rayon</li>
        <li class="active">Tambah Rayon</li>
      </ol>
</section>

<section class="content">
	   <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Rayon</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/rayon/store')}}" method="POST" class="form-horizontal">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Rayon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_rayon" id="nama_rayon">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Wali Rayon</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="wali_rayon" id="wali_rayon">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Anggota</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jumlah_anggota" id="jumlah_anggota">
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