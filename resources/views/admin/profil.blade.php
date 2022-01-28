
@extends('layouts/master')

@section('content')
<form action="{{ url('cp/ubah_avatar') }}" method="POST" >
@csrf
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
            <div class="card-header">
                <h3 class="card-title">Ubah Foto Profil</h3>
            </div>
            <div class="card-body">
                <input type="file" class="form-control" name="avatar" id="avatar">
                <div class="row">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                    <img src="{{ asset('uploads/admin/'.$user->avatar) }}" alt="..." class="card-img img-details mt-5" id="category-img-tag" >
                  </div>
                  <div class="col-sm-4"></div>
                </div>
            </div>
            <!-- /.card-body -->
            </div>
            <!-- /.card -->

    </section>
</div>
</form>
@stop

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#category-img-tag').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#avatar").change(function(){
        readURL(this);
    });
    </script>
