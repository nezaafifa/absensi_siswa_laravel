@extends('layout.tamplate')
@section('content')

<section class="content-header">
      <h1>
        Absen
        <small>Absen</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Absen</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data absen</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('/absen/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah data</a><br><br>
              <table id="example2" class="table table-bordered table-hover">            
                <tr>
                  <th>No</th>
                  <th>Id</th>
                  <th>Siswa Id</th>
                  <th>Status</th>
                  <th>Keterangan</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($absen as $data)
                <tr>
                	<td>{{$loop->iteration}}</td>
                	<td>{{$data->id}}</td>
                	<td>{{$data->siswa_id}}</td>
                	<td>{{$data->status}}</td>
                	<td>{{$data->keterangan}}</td>
                	<td>
                		<a href="" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                		<a href="" onclick="return confirm('Apakah anda akan menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
                	</td>           	
                </tr>
                @endforeach
              
               
               
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    
@endsection
