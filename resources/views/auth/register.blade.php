<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ url('register/save') }}" enctype="multipart/form-data">
            @csrf

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"  />
            </div>

            {{-- <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" />
            </div> --}}

            <div class="row">
                <div class="col-sm-6">
                    <div class="mt-4">
                        <label for="">Password</label>
                        <input type="password" class="form-control" placeholder="Masukkan Password" name="password" id="password">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="mt-4">
                        <label for="">Konfirmasi Password</label>
                        <input type="password" class="form-control" placeholder="Masukkan Konfirmasi Password" name="konfirmasi_password" id="konfirmasi_password">
                    </div>
                </div>
            </div>

            <div class="mt-4">
                <x-jet-label for="avatar" />Avatar
                <input type="file" class="form-control" name="avatar" id="avatar">
                <small class="text-muted">Avatar harus berupa file gambar(JPG, JPEG, PNG)</small>
            </div>

            <div class="card">
                <div class="card-header mt-4">
                    <h2>Data Profil Murid</h2>
                </div>
                <div class="card-body">
                    <div class="mt-4">
                        <x-jet-label for="name" value="{{ __('Name') }}" />
                        <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')"  />
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="nisn" value="{{ __('NISN') }}" />
                        <x-jet-input id="nisn" class="block mt-1 w-full" type="text" name="nisn" :value="old('nisn')"  />
                  </div>
                  <div class="mt-4">
                        <x-jet-label for="kelas_id" value="{{ __('Pilih Kelas') }}" />
                      <select class="form-control" name="kelas_id" >
                      @foreach($list_kelas as $id =>$nama_kelas)
                          <option value="{{$id}}">{{$nama_kelas}} </option>
                      @endforeach
                      </select>
                  </div>
                    <div class="mt-4">
                        <x-jet-label for="jk" value="{{ __('Jenis Kelamin') }}" />
                        <select name="jk" id="jk" class="form-control">
                            <option value="" selected>Pilih JK</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="agama" value="{{ __('Agama') }}" />
                        <select name="agama" id="agama" class="form-control">
                            <option value="" selected hidden>Pilih Agama</option>
                            <option value="Islam">Islam</option>
                            <option value="Kristen Protestan">Kristen Protestan</option>
                            <option value="Kristen Katolik">Kristen Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                        </select>
                    </div>
                    <div class="mt-4">
                        <x-jet-label for="alamat" value="{{ __('Alamat') }}" />
                      <textarea class="form-control" name="alamat" id="alamat" cols="40" rows="5"></textarea>
                  </div>

                </div>
            </div>
            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{url('login')}}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
