
@extends('layouts/master')

@section('content')
<div id="">

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
          <div class="row">
            <div class="col-md-12">

              <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                    <tr>
                    <th>Nama Lengkap</th>
                    <td>{{ $siswa->user->name }}</td>
                    </tr>
                    <tr>
                    <th>NISN</th>
                    <td>{{ $siswa->nisn}}</td>
                    </tr>
                    <tr>
                    <th>Kelas</th>
                    <td>{{ $siswa->kelas['nama_kelas']}}</td>
                    </tr>
                    <tr>
                    <th>Jenis Kelamin</th>
                    <td>{{ $siswa->jk}}</td>
                    </tr>
                    <tr>
                    <th>Agama</th>
                    <td>{{ $siswa->agama}}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $siswa->alamat}}</td>
                        </tr>
                    {{-- <tr>
                        <th>Foto diri</th>
                        <td>
                            <a href="{{ asset('/public/siswaupload/'.$siswa->foto) }}"  data-toggle="lightbox" >
                            <img style="max-height:250px;"id="preview_photo" src="{{ asset('/public/siswaupload/'.$siswa->foto) }}"  class="img-fluid mb-2" alt="white sample"/>
                        </td>
                        </tr>
                        <tr> --}}
                    </thead>
                  </table>
                </div>
                <div class="card-footer text-right">
                <a class="btn btn-secondary" href="{{ url('cp\show_siswa') }}">
                Back
            </a>
        </div>
            </div>
          </section>
@stop
