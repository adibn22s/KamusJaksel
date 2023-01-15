@extends('layouts.auth')

@section('title', 'Register')

@section('content')

<!-- start login -->
<div class="grid grid-cols-2">
    <div class="text-center background aspect-square">
      <img src="{{ asset('/assets/frontsite/images/login.png') }}" alt="" class="foto-login" />
    </div>
    <div class="text-center box-login aspect-square">
      <div class="section">
        <pre class="text-login flex"><a href="{{ route('login') }}" class="text-daftar"> Masuk </a> &nbsp;| <a href="{{ route('register') }}" class="text-login">Daftar</a></pre>
      </div>
      <form method="POST" action="{{ route('register') }}">

        @csrf
        <input for="name" type="text" id="name" name="name" class="border-b mt-10 py-1 focus:outline-none focus:border-b-2 border-opacity-100" placeholder="Masukkan Nama" for="name" type="text" id="name" name="name"/>
        
        @if ($errors->has('name'))
            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('name') }}</p>
        @endif
        
        <input for="email" type="text" id="email" name="email" class="border-b mt-5 py-1 focus:outline-none focus:border-b-2" placeholder="Masukkan Email" value="{{ old('email') }}" required autofocus/>

        @if ($errors->has('email'))
            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('email') }}</p>
        @endif

        <input for="password" type="password" id="password" name="password" class="border-b mt-5 py-1 focus:outline-none focus:border-b-2" placeholder="Masukkan Kata Sandi" value="{{ old('password')}}"  required autofocus/>
        <input for="password_confirmation" type="password" id="password_confirmation"
        name="password_confirmation" class="border-b mt-5 py-1 focus:outline-none focus:border-b-2" placeholder="Masukkan Ulang Kata Sandi" required autofocus/>
        @if ($errors->has('password_confirmation'))
            <p class="text-red-500 mb-3 text-sm">{{ $errors->first('password_confirmation') }}</p>
        @endif
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
        <div class="tombol-login">
          <button class="tombol-login rounded-full text-white " type="submit">Masuk</button>
        </div>
      </form>
    </div>
  </div>

@endsection