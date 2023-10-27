@extends('layout.tamplate')
@section('content')

<section class="content-header">
      <h1>
        Rayon
        <small>Rayon</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Rayon</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data rayon</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('/rayon/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah data</a><br><br>
              <table id="example2" class="table table-bordered table-hover">            
                <tr>
                  <th>No</th>
                  <th>Id Rayon</th>
                  <th>Nama Rayon</th>
                  <th>Wali Rayon</th>
                  <th>Jumlah Anggota</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($rayon as $data)
                <tr>
                	<td>{{$loop->iteration}}</td>
                	<td>{{$data->id_rayon}}</td>
                	<td>{{$data->nama_rayon}}</td>
                	<td>{{$data->wali_rayon}}</td>
                	<td>{{$data->jumlah_anggota}}</td>
                	<td>
                		<a href="{{url('/rayon/edit/'.$data->id_rayon)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                		<a href="{{url('/rayon/destroy/'.$data->id_rayon)}}" onclick="return confirm('Apakah anda akan menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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