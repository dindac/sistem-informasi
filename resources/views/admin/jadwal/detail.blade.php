
@extends('layouts/master')

@section('content')
<div id="">

<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Jadwal</h1>
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
                    <th>Kelas</th>
                    <td>{{ $jadwal->kelas['nama_kelas']}}</td>
                    </tr>
                    <tr>
                        <th>Hari</th>
                        <td>{{ $jadwal->hari }}</td>
                        </tr>
                    <tr>
                    <th>Mata Pelajaran</th>
                    <td>{{ $jadwal->mapel}}</td>
                    </tr>
                    </thead>
                  </table>
                </div>
                <div class="card-footer text-right">
                <a class="btn btn-secondary" href="{{ url('cp\show_jadwal') }}">
                Back
            </a>
        </div>
            </div>
          </section>
@stop
