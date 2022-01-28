
@extends('layouts/master')

@section('content')
<form action="{{ url('cp/jadwal/save') }}" method="POST" >
@csrf
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
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Create Jadwal Siswa</h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="hari">Hari </label>
                            <input type="text" name="hari" value="{{ old('hari') }}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="mapel">Mata Pelajaran</label>
                            <input type="text" name="mapel" value="{{ old('mapel') }}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="kelas_id" class="col-md-12 mb-0">Pilih Kelas</label>
                            <select class="form-control" name="kelas_id" >
                            @foreach($list_kelas as $id =>$nama_kelas)
                                <option value="{{$id}}">{{$nama_kelas}} </option>
                            @endforeach
                            </select>
                        </div>
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

