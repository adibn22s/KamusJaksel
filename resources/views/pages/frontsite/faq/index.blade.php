@extends('layouts.default2')

@section('title', 'Faq')

@section('content')

<div class="wrapper">
    <div class="accordion__wrapper">
      <h1 class="title__acordion">FAQ</h1>
      <span class="plus-ddatar"></span>
      <div class="absolute">
        <div class="question-answer__accordion">
          <div class="question">
            <h3 class="title__question block absolute">Apa itu kamus jaksel?</h3>
            <span class="plus-dataar block transition duration-300 ease-in-out"></span>
          </div>
        </div>
        <button id="hamburger5" name="hamburger5" type="button" class="absolute ml-[703px] mt-5">
          <span class="plus-datar2 block transition duration-300 ease-in-out mt-[348px]"></span>
          <span class="plus-bawah2 block mt-[340px] ml-[12px] transition duration-300 ease-in-out"></span>
        </button>
        <div id="isi-faq" class="hidden isi-faq mb-5">
          Kamus Jaksel didirikan di Depok pada tahun 2022 dengan sebuah mimpi yang besar yaitu "meruntuhkan dinding pembatas dalam pembelajaran
          bahasa baik secara wilayah maupun budaya". Sekarang, Kamus Jaksel telah menjadi penyedia jasa kursus bahasa Inggris terbaik dan terbesar
          di dunia dengan menawarkan pembelajaran bahasa dan kursus yang tersertifikasi kepada orang dari berbagai usia dengan kesempatan untuk
          belajar di luar negeri atau komunikasi sehari - hari.
        </div>
        <div class="question-answer__accordion">
          <div class="questionn">
            <h3 class="title__questionn block absolute mt-[405px]">Bagaimana cara membuat akun?</h3>
            <span class="plus-dataaar block transition mt-[435px] duration-300 ease-in-out"></span>
          </div>
        </div>
        <button id="hamburger" name="hamburger" type="button" class="block absolute ml-[703px] mt-5">
          <span class="plus-datar2 block transition duration-300 ease-in-out mt-[394px]"></span>
          <span class="plus-bawah2 block  ml-[12px] transition duration-300 ease-in-out mt-[386px]"></span>
        </button>
        <div id="isi-faq2" class="hidden isi-faq2 mb-5">
          1. Masuk ke laman https://kamusjaksel.com/<br />
          2. Pilih tombol masuk/daftar dibagian kanan pojok atas<br />
          3. Jika anda belum mempunyai akun klik tulisan Daftar<br />
          4. Isi identitas anda<br />
          kemudian klik tombol Daftar<br />
        </div>
        <div class="question-answer__accordion">
          <div class="questionnn">
            <h3 class="title__questionnn block absolute mt-[452px]">Bagaimana cara memulai belajar di kamus jaksel?</h3>
            <span class="plus-dataaaar block transition mt-[481px] duration-300 ease-in-out"></span>
          </div>
        </div>
        <button id="hamburger3" name="hamburger3" type="button" class="block absolute ml-[703px] mt-5">
          <span class="plus-datar2 block transition duration-300 ease-in-out mt-[440px]"></span>
          <span class="plus-bawah2 block mt-[432px] ml-[12px] transition duration-300 ease-in-out"></span>
        </button>
        <div id="isi-faq3" class="hidden isi-faq3">
          1. Masuk ke laman https://kamusjaksel.com/program/ <br />
          2. Kamus Jaksel menyediakan 3 pilihan level anda bisa memilih salah satunya dengan menekan tombol Mulai<br />
          3. Kemudian website akan diarahkan ke page level yang ada pilih yang disana berisi beberapa materi dan video
        </div>
      </div>
    </div>
  </div>


@endsection