@extends("layout.tamplate")
@section("content")
 <section class="content-header">
      <h1>
        Rombel
        <small>Rombel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Rombel</li>
      </ol>
    </section>
  <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data rombel</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a href="{{url('/rombel/create')}}" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah data</a><br><br>
              <table id="example2" class="table table-bordered table-hover">            
                <tr>
                  <th>No</th>
                  <th>Id Rombel</th>
                  <th>Nama Rombel</th>
                  <th>Wali Rombel</th>
                  <th>Jurusan</th>
                  <th>Aksi</th>
                </tr>
                @foreach ($rombel as $data)
                <tr>
                	<td>{{$loop->iteration}}</td>
                	<td>{{$data->id_rombel}}</td>
                	<td>{{$data->nama_rombel}}</td>
                	<td>{{$data->wali_rombel}}</td>
                	<td>{{$data->jurusan}}</td>
                	<td>
                		<a href="{{url('/rombel/edit/'.$data->id_rombel)}}" class="btn btn-warning btn-sm"><i class="fa fa-pencil"></i></a>
                		<a href="{{url('/rombel/destroy/'.$data->id_rombel)}}" onclick="return confirm('Apakah anda akan menghapus data ini?')" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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