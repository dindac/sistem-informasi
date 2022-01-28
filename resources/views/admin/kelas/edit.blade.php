
@extends('layouts/master')

@section('content')
<div class="event">
<form action="{{ url('cp/kelas/update/'. $kelas->id) }}" method="POST" >
@csrf
{{ method_field('PUT') }}
<div class="content-wrapper">
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kelas</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<section class="content">
  <div class="container-fluid">
    <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Edit Kelas</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                <label for="nama_kelas">Nama Kelas</label>
                <input type="text" name="nama_kelas" value="{{ $kelas->nama_kelas }}" class="form-control">
              </div>
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
          <ul class="actions">
              <input class="btn btn-primary" type="submit" value="Simpan" class="primary" />
              <a class="btn btn-secondary" href="{{ url('cp/show_kelas') }}">
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
