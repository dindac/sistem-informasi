
@extends('layouts/master')

@section('content')

<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profil</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
    <div class="container-fluid">
        <div class="card card-default">
            <form action="{{ url('siswa/profil') }}" method="POST" >
                @csrf
                <div class="card-header">
                    <h3 class="card-title">Ubah Profil</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" value="{{ $siswa->user->name }}" name="name" id="name">
                    </div>
                    <div class="form-group">
                    <label for="">NISN</label>
                    <input type="text" class="form-control" value="{{ $siswa->nisn }}" name="nisn" id="nisn">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jk" id="jk" class="form-control">
                            <option value="L" {{ $siswa->jk == 'L' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="P" {{ $siswa->jk == 'P' ? 'selected' : '' }}>Perempuan</option>
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
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>

            <!-- /.card -->

            <div class="col-lg-5 col-md-6 col-12 col-sm-5">
                <div class="card">
                  <form action="{{ url('siswa/ubah_avatar') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-header">
                      <h4>Ubah Foto Profil</h4>
                    </div>
                    <div class="card-body">
                      <input onchange="showPreview(event)" accept="image/*" type="file" class="form-control" name="avatar" id="avatar">
                      <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-4">
                          <img id="preview_img"  src="{{ asset('uploads/foto/'.$siswa->user->avatar) }}" alt="..." class="card-img img-details mt-5" >
                        </div>
                        <div class="col-sm-4"></div>
                      </div>
                    </div>
                    <div class="card-footer text-right">
                      <button type="submit" class="btn btn-success">Ubah Foto</button>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
    </section>
</div>

{{-- JS untuk menampilkam photo profile --}}

<script type="text/javascript">
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

    function showPreview(event){
        var input = event.target.files[0];
        var reader = new FileReader();

        reader.onload = function(){
            var result = reader.result;
            var preview_img = document.getElementById('preview_img');
            preview_img.src = result
        }

        reader.readAsDataURL(input);
    }
    </script>

@stop

