
@extends('layouts/master')

@section('content')
<div class="event">
<form action="{{ url('cp/jadwal/update/'. $jadwal->id) }}" method="POST" >
@csrf
{{ method_field('PUT') }}
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
            <h3 class="card-title">Edit Jadwal</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="hari">Hari</label>
                    <input type="text" name="hari" value="{{ $jadwal->hari }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="mapel">Mata Pelajaran</label>
                    <input type="text" name="mapel" value="{{ $jadwal->mapel }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-control">
                        @foreach($list_kelas as $id =>$nama_kelas)
                        <option value="{{$id}}" {{ $jadwal->kelas_id == $id ? 'selected' : '' }}>{{$nama_kelas}} </option>
                    @endforeach
                    </select>
                </div>
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          <ul class="actions">
              <input class="btn btn-primary" type="submit" value="Simpan" class="primary" />
              <a class="btn btn-secondary" href="{{ url('cp/show_jadwal') }}">
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
