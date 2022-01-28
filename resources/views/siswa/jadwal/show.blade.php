
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

                @if (!empty($jadwal_list))
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                    <th style="text-align:center">Kelas</th>
                    <th style="text-align:center" width="250px">Hari</th>
                    <th style="text-align:center">Mata Pelajaran</th>
                  </tr>
                    </thead>
                    <tbody>
                    @foreach($jadwal_list as $jadwal)
                    <tr>
                    <td>{{ $jadwal->kelas['nama_kelas']}}</td>
                    <td>{{ $jadwal->hari}}</td>
                    <td>{{ $jadwal->mapel}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>

            </div>
          </section>
          @endif
@stop
