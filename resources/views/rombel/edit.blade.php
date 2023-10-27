@extends('layout.tamplate')
@section('content')
<section class="content-header">
	   <h1>
        Rombel
        <small>Edit Data Rombel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Rombel</li>
        <li class="active">Edit Rombel</li>
      </ol>
</section>

<section class="content">
	   <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Data Rombel</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{url('/rombel/update/'.$rombel->id_rombel)}}" method="POST" class="form-horizontal">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Nama Rombel</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama_rombel" id="nama_rombel" value="{{$rombel->nama_rombel}}">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Wali Rombel</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="wali_rombel" id="wali_rombel" value="{{$rombel->wali_rombel}}">
                  </div>
                </div>
                 <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Jurusan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="jurusan" id="jurusan" value="{{$rombel->jurusan}}">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-default">Cancel</button>
                <button type="submit" class="btn btn-info pull-right">edit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>

@endsection