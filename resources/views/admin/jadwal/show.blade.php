
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

            @if (!empty($jadwal_list))
            <div class="card">
            @if (session('sukses'))

            <div class="alert alert-warning" role="alert">
            {{session('sukses')}}
            </div>
            @endif
              <div class="card">
                <div class="card-header">
                <a class="btn btn-success add-row" href="{{url('cp/create_jadwal')}}">
                                        Tambah Data Baru <i class="fa fa-plus"></i>
                                    </a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">

                @if (!empty($jadwal_list))
                  <table class="table table-bordered">
                    <thead class="thead-dark">
                    <tr>
                    <th style="text-align:center">Kelas</th>
                    <th style="text-align:center" width="250px">Action</th>
                  </tr>
                    </thead>
                    <tbody>
                    @foreach($jadwal_list as $jadwal)
                    <tr>
                    <td>{{ $jadwal->kelas['nama_kelas']}}</td>
                    <td class="project-actions text-right">
                        <a class="btn btn-primary btn-sm" href="{{ url('cp/detail_jadwal/'.$jadwal->id) }}">
                            <i class="fas fa-folder">
                            </i>
                            Detail
                        </a>
                    <a class="btn btn-info btn-sm" href="{{ url('cp/edit_jadwal/'.$jadwal->id.'/edit') }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                    </a>
                    <a class="btn btn-danger btn-sm" href="{{ url('cp/hapus_jadwal/'.$jadwal->id) }}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                    </td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                  @endif
                </div>

            </div>
          </section>
          @endif
@stop
