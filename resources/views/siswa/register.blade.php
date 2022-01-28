<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register &mdash; Siswa</title>
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <a href="/"><img src="{{ asset('/assets/img/logo.png') }}" alt="logo" width="100" class="shadow-light rounded-circle">  </a>
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Register</h4></div>

              <div class="card-body">
                @if (count($errors) > 0)
                <div class="alert alert-danger alert-has-icon">
                    <div class="alert-icon"><i class="far fa-lightbulb"></i></div>
                    <div class="alert-body">
                      <div class="alert-title">Gagal Simpan Data</div>
                      <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                @endif
                <form method="POST" action="{{ url('register/save') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="card">
                      <div class="card-header">
                        <h4>Data Akun Murid</h4>
                      </div>
                      <div class="card-body">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" placeholder="Masukkan Email" name="email" id="email">
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Password" name="password" id="password">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="">Konfirmasi Password</label>
                                    <input type="password" class="form-control" placeholder="Masukkan Konfirmasi Password" name="konfirmasi_password" id="konfirmasi_password">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="">Avatar</label>
                            <input type="file" class="form-control" name="avatar" id="avatar">
                            <small class="text-muted">Avatar harus berupa file gambar(JPG, JPEG, PNG) (Boleh dikosongkan)</small>
                        </div>
                      </div>
                  </div>
                  <div class="card">
                      <div class="card-header">
                          <h4>Data Profil Murid</h4>
                      </div>
                      <div class="card-body">
                          <div class="form-group">
                              <label for="">Nama</label>
                              <input type="text" class="form-control" placeholder="Masukkan Nama" name="name" id="name">
                          </div>
                          <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" name="nisn" value="{{ old('nisn') }}" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="kelas_id" class="col-md-12 mb-0">Pilih Kelas</label>
                            <select class="form-control" name="kelas_id" >
                            @foreach($list_kelas as $id =>$nama_kelas)
                                <option value="{{$id}}">{{$nama_kelas}} </option>
                            @endforeach
                            </select>
                        </div>
                          <div class="form-group">
                              <label for="">Jenis Kelamin</label>
                              <select name="jk" id="jk" class="form-control">
                                  <option value="" selected>Pilih JK</option>
                                  <option value="L">Laki-laki</option>
                                  <option value="P">Perempuan</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="">Agama</label>
                              <select name="agama" id="agama" class="form-control">
                                  <option value="" selected hidden>Pilih Agama</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Kristen Protestan">Kristen Protestan</option>
                                  <option value="Kristen Katolik">Kristen Katolik</option>
                                  <option value="Hindu">Hindu</option>
                                  <option value="Buddha">Buddha</option>
                              </select>
                          </div>
                          <div class="form-group">
                            <label for="">Alamat</label>
                            <textarea class="form-control" name="alamat" id="alamat" cols="30" rows="10"></textarea>
                        </div>

                      </div>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                    <a href="/login" class="btn btn-warning btn-lg btn-block">Sudah Punya Akun? Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
</html>
