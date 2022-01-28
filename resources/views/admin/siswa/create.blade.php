
@extends('layouts/master')

@section('content')
<form action="{{ url('cp/siswa/save') }}" method="POST" >
@csrf
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Siswa</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Create Siswa</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        {{-- <div class="form-group">
                            <label for="nama">Nama </label>
                            <input type="text" name="nama" value="{{ old('nama') }}" class="form-control" >
                        </div> --}}
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn" value="{{ old('nisn') }}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="kelas_id" class="col-md-12 mb-0">Pilih Kelas</label>
                            <select class="form-control" name="kelas_id" >
                            @foreach($list_kelas as $id =>$nama_kelas)
                                <option value="{{$id}}">{{$nama_kelas}} </option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select name="jk" id="jk" class="form-control">
                                <option value="" selected>Pilih Jenis Kelamin</option>
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select name="agama" id="agama" class="form-control">
                                <option value="" selected hidden>Pilih Agama</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristen Protestan">Kristen Protestan</option>
                                <option value="Kristen Katolik">Kristen Katolik</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Buddha">Buddha</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                              <div class="peta-responsive">
                              <textarea name="alamat" ng-model="siswa.alamat" class="form-control" rows="3" ></textarea>
                              </div>
                            </div>
                        {{-- <div class="form-group">
                            <label  for="foto" class="col-sm-6 control-label">Foto diri</label>
                            <img id="preview_photo" class="img-fluid md-3 mb-3"  />
                            <div>
                            <input type="file" accept="image/*" name="foto" onchange="preview(event)"  value="{{ old('foto') }}" >
                        </div> --}}
                        </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
            <ul class="actions">
                <input class="btn btn-primary" type="submit" value="Simpan" class="primary" />
                <a class="btn btn-secondary" href="{{ url('cp\show_siswa') }}">
                    Kembali
                </a>
            </ul>
            </div>
            </div>
            <!-- /.card -->

    </section>
</div>
</form>
@stop

{{-- JS untuk menampilkam photo profile --}}
{{-- <script type="text/javascript">
    function preview(event){
        var input = event.target.files[0];
        var reader = new FileReader();

        reader.onload = function(){
            var result = reader.result;
            var preview_photo = document.getElementById('preview_photo');
            preview_photo.src = result
        }

        reader.readAsDataURL(input);
    }
</script> --}}
