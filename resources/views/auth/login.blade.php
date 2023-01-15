@extends('layouts.auth')

@section('title', 'Login')

@section('content')
<!-- start login -->
<div class="grid grid-cols-2">
    <div class="text-center background aspect-square">
      <img src="{{ asset('/assets/frontsite/images/login.png') }}" alt="" class="foto-login" />
    </div>
    <div class="text-center box-login aspect-square">
      <div class="section">
        <pre class="text-login flex"><a href="" class="text-login"> Masuk </a> &nbsp;| <a href="{{ route('register') }}" class="text-daftar">Daftar</a></pre>
      </div>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <input for="email" type="email" id="email" name="email" class="border-b mt-10 py-1 focus:outline-none focus:border-b-2 border-opacity-100" placeholder="Masukkan Alamat Email" 
        value="{{ old('email') }}" required autofocus/>
        @if ($errors->has('email'))
        <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
        @endif
        <input for="password" type="password" id="password" name="password" class="border-b mt-5 py-1 focus:outline-none focus:border-b-2" placeholder="Masukkan Kata Sandi" 
        required />
        <label class="absolute left-0 top-1"></label>
        <div class="flex items-center mb-4 mt-8">
          <input
            id="default-checkbox"
            type="checkbox"
            value=""
            class="cekbox rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600"
          />
          <label for="default-checkbox" class="rounded-none"><pre class="ingat-saya"> Ingat Saya</pre></label>
          <div>
            <a href="" class="ml-28 forgot">Lupa Password?</a>
          </div>
        </div>
        <div class="tombol-login text-white">
          <button  class="tombol-login" type="submit">Masuk</button>
        </div>
      </form>
    </div>
  </div>

@endsection