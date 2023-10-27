@extends('layout.tamplate')
@section('content')

<section class="content-header">
	   <h1>
        Absen
        <small>Tambah Data Absen</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
        <li class="active">Absen</li>
        <li class="active">Tambah Absen</li>
      </ol>
</section>

<section class="content">
	   <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Data Absen</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{url('/absen/store')}}" method="POST" class="form-horizontal">
              {{csrf_field()}}
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">NIS</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nis" id="nis" placeholder="Masukkan Nis" onkeyup="siswa()">
                    <input type="hidden" name="id_siswa" id="id_siswa">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Nama</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" disabled>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Rombel</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="rombel" id="rombel" placeholder="Masukkan Rombel" disabled>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Alamat</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label" for="exampleInputFile" >Status</label>
                  <div class="col-sm-10">
                    <select class="form-control" name="status" id="status">
                    <option>--pilih--</option>
                    <option value="masuk">masuk</option>
                    <option value="izin">izin</option>
                    <option value="sakit">sakit</option>
                    <option value="alpa">alpa</option>
                  </select>
                  </div>
                </div>
                 <div class="form-group">
                  <label for="exampleInputFile" class="col-sm-2 control-label">Keterangan</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Masukkan Rombel">
                  </div>
                </div>
               
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
</section>
@endsection
@push('bottom')
<script type="text/javascript">
  function siswa(){
    iddd = $("#nis").val()
    if (iddd==''){
      $('#nama').val('');
      $('#rombel').val('');
      $('#alamat').val('');
      $('#id_siswa').val('');
    }
    $.ajax({
      url:"{{route('cari')}}",
      type:"GET",
      dataType:"json",
      data:{
        id:$("#nis").val()
      },
      success:function(hasil){
        if (hasil.val==0) {
          // alert('data tidak di temukan')
          $('#nama').val('');
          $('#rombel').val('');
          $('#alamat').val('');
          $('#id_siswa').val('');

        }else if(hasil.val==2){
          // alert('Data tidak ditemukan 2')
          $('#nama').val('');
          $('#rombel').val('');
          $('#alamat').val('');
          $('#id_siswa').val('');
        }else{
          // alert('Data tidak ditemukan 3')
          $('#nama').val(hasil.data.nama);
          $('#rombel').val(hasil.data.rombel);
          $('#alamat').val(hasil.data.alamat);
          $('#id_siswa').val(hasil.data.id_siswa);
        }
      }
    });
  }
</script>
@endpush