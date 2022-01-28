
@extends('layouts/master')

@section('content')
<div class="event">
<form action="{{ url('cp/siswa/update/'. $siswa->id) }}" method="POST" >
@csrf
{{ method_field('PUT') }}
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
            <h3 class="card-title">Edit Siswa</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="nisn">NISN</label>
                    <input type="text" name="nisn" value="{{ $siswa->nisn }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-control">
                        @foreach($list_kelas as $id =>$nama_kelas)
                        <option value="{{$id}}" {{ $siswa->kelas_id == $id ? 'selected' : '' }}>{{$nama_kelas}} </option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="jk">Jenis Kelamin</label>
                    <select class="form-control" name="status" >
                        @if($siswa->jk == 'L')
                            <option value="L">Laki - laki </option>
                            <option value="P">Perempuan </option>
                        @else($siswa->jk == 'P')
                            <option value="P">Perempuan </option>
                            <option value="L">Laki - laki</option>
                        @endif
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Agama</label>
                    <select name="agama" id="agama" class="form-control">
                        <option value="Islam" {{ $siswa->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
                        <option value="Kristen Protestan" {{ $siswa->agama == 'Kristen Protestan' ? 'selected' : '' }}>Kristen Protestan</option>
                        <option value="Kristen Katolik" {{ $siswa->agama == 'Kristen Katolik' ? 'selected' : '' }}>Kristen Katolik</option>
                        <option value="Hindu" {{ $siswa->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
                        <option value="Buddha" {{ $siswa->agama == 'Buddha' ? 'selected' : '' }}>Buddha</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" ng-model="siswa.alamat" class="form-control" rows="3" >{{$siswa->alamat}}</textarea>
                </div>
                  {{-- <div class="form-group">
                    <label for="foto" class="col-sm-5 control-label">Foto</label>
                    <img id="preview_photo" class="img-fluid md-3 mb-3" src="{{ asset('public/siswaupload/'.$siswa->foto) }}" />
                    <div>
                    <input type="file"  accept="image/*" name="foto" onchange="preview(event)" value="{{ $siswa->foto }}" >
                  </div> --}}
              </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          <ul class="actions">
              <input class="btn btn-primary" type="submit" value="Simpan" class="primary" />
              <a class="btn btn-secondary" href="{{ url('cp/show_siswa') }}">
                Back
            </a>
          </ul>
        </div>
        </div>
        <!-- /.card -->

</section>
</div>
</form>
</div>
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
