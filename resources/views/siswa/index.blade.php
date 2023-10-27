@extends('layout.tamplate')
@section('content')

 <section class="content-header">
      <h1>
        Siswa
        <small>Siswa</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Siswa</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data siswa</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('/siswa/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah data</a><br><br>
              <table id="example2" class="table table-bordered table-hover">            
                <tr>
                  <th>No</th>
                  <th>Id Siswa</th>
                  <th>NIS</th>
                  <th>Nama</th>
                  <th>Rombel</th>
                  <th>Alamat</th>
                  <th>Telepon</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($siswa as $data)
                <tr>
                	<td>{{$loop->iteration}}</td>
                	<td>{{$data->id_siswa}}</td>
                	<td>{{$data->nis}}</td>
                	<td>{{$data->nama}}</td>
                	<td>{{$data->rombel}}</td>
                	<td>{{$data->alamat}}</td>
                	<td>{{$data->telepon}}</td>
                	<td>
                		<a href="{{url('/siswa/edit/'.$data->id_siswa)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                		<a href="{{url('/siswa/destroy/'.$data->id_siswa)}}" onclick="return confirm('Apakah anda akan menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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