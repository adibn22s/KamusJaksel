@extends('layouts.default')

@section('title', 'Home')

@section('content')

<div class="content -mt-1">
    <img src="{{ asset('/assets/frontsite/images/Background.png') }}" alt="" class="bg-1">
      <h1 class="greetings">belajar bahasa inggris lebih menarik</h1>
      <div class="border-b garis focus:outline-none focus:border-b-2"></div>
      <h2 class="ajakan">ayo latihan dengan metode pembelajaran bahasa inggris yang mudah dan menarik di kamus jaksel!</h2>
      <a href="{{ route('register') }}"><button class="tombol-gabung rounded-full text-white">Ayo Bergabung</button></a>
  </div>
  <div class="content">
    <img src="{{ asset('/assets/frontsite/images/kuning.png') }}" class="bg-2" alt="" />
    <div class="section card3 grid grid-cols-3 gap-16">
      <div class="card-content grid-cols-1">
        <div class="top-content"><img src="{{ asset('/assets/frontsite/images/1.png') }}" class="flex card-img ml-8" alt="" /></div>
        <div class="text-card">
          <h1 class="judul mt-10 mx-7">Belajar Online</h1>
          <p class="isi mt-10 mx-7">
            Website belajar online yang sangat mudah untuk diakses atau disimpan secara offline sehingga bisa dibawa di mana saja dan kapan saja.
          </p>
        </div>
      </div>
      <div class="card-content grid-cols-1">
        <div class="top-content"><img src="{{ asset('/assets/frontsite/images/2.png') }}" class="flex card-img ml-8" alt="" /></div>
        <div class="text-card">
          <h1 class="judul mt-10 mx-7">Rencana Aksi & Tujuan</h1>
          <p class="isi mt-5 mx-7">Bertujuan untuk membantu pengguna dalam strategi dan teknik percakapan yang efektif untuk berkomunikasi.</p>
        </div>
      </div>
      <div class="card-content grid-cols-1">
        <div class="top-content"><img src="{{ asset('/assets/frontsite/images/3.png') }}" class="flex card-img ml-8" alt="" /></div>
        <div class="text-card">
          <h1 class="judul mt-10 mx-7">Pelatihan Tersertifikasi</h1>
          <p class="isi mt-5 mx-7">
            Kurikulum-kurikulum dalam pembelajaran Bahasa Inggris Kamus Jaksel telah didesain oleh institusi pembelajaran kredibel.
          </p>
        </div>
      </div>
      <div class="motivasi flex mt-36"><img src="{{ asset('/assets/frontsite/images/banner.png') }}" class="banner" alt="" /></div>
      <div>
        <h1 class="judul-mot mt-80 mx-32">
          Tingkatkan kepercayaan diri melalui kelas tambahan berbasis interaksi sosial
          <h2 class="desc-mot">
            Kamus Jaksel menggunakan kurikulum dan bahan ajar yang telah diakui organisasi global untuk meningkatkan peluang siswa dalam meraih
            kesuksesan di tingkat internasional.
          </h2>
        </h1>
      </div>
      <div class="content" >
      <div class="mt-[860px] mx-[-430px]" >
        <button class="next"><svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 384 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#ffffff" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg></button>
        <button class="prev"><svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.2.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#ffffff" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></button>
        <div class="level" id="program">Program Kamus Jaksel</div>
        <p class="desc-level -mx-36 mt-2">Kami Menyediakan Banyak Program Untuk Menyesuaikan Kebutuhan Anda</p>
        <div class="grid grid-cols-3 mr-[440px] -ml-[200px]">
          <div class="card-level-1 grid-cols-1 ml-[10px] mt-20">
            <div><img src="{{ asset('/assets/frontsite/images/level1.png') }}" class="flex level-img-1 ml-10 mt-8" alt="" /></div>
            <div class="level-beginner">
              <h1 class="level-judul-1 ml-[40px] mt-5">Fundamental</h1>
              <p class="level-dsc-1 ml-6 mt-3">
                Pada level pertama, diperuntukkan untuk orang yang mempunyai kemampuan bahasa inggris yang masih sangat dasar, sehingga topik yang
                diberikan hanya kosa kata yang umum saja.
              </p>
              <a href="{{ url('fundamental') }}"><button class="mulai mx-12">Mulai</button></a>
            </div>
          </div>
          <div class="card-level grid-cols-1 -ml-[30px] mt-10">
            <div><img src="{{ asset('/assets/frontsite/images/level2.png') }}" class="flex level-img ml-14 mt-8" alt="" /></div>
            <div class="level-beginner">
              <h1 class="level-judul ml-[63px] mt-5">Beginner</h1>
              <p class="level-dsc ml-7 mt-3">
                Pada level kedua ini, diperuntukkan untuk orang yang dapat berkomunikasi dengan bahasa Inggris, tetapi pembahasan hanya mencakup
                hal-hal tertentu yang telah dikuasai.
              </p>
              <a href="{{ url('beginner') }}"><button class="mulai2 mx-14">Mulai</button></a>
            </div>
          </div>
          <div class="card-level-3 grid-cols-1 -ml-[30px] mt-20">
            <div><img src="{{ asset('/assets/frontsite/images/level3.png') }}" class="flex level-img ml-6 mt-3" alt="" /></div>
            <div class="level-3">
              <h1 class="level-judul-3 ml-[45px] mt-3">Intermediate</h1>
              <p class="level-dsc-3 ml-6 mt-3">
                Pada level ketiga ini, diperuntukkan untuk orang yang bisa berbahasa inggris secara pasif dan aktif dengan topik yang lebih variatif
                dibandingkan dengan level-level sebelumnya.
              </p>
              <a href="{{ url('intermediate') }}"><button class="mulai3 mx-12">Mulai</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="content">
      <div class="banner2">
        <img src="{{ asset('/assets/frontsite/images/banner2.png') }}" alt="" />
        <div class="judul-banner-2">
          <h1>Kursus Bahasa Inggris Terbaik di Indonesia</h1>
        </div>
        <div class="konten-banner-2">
          <p>Kami terpercaya lebih dari 50 tahun & telah melayani lebih dari 60.000 siswa per triwulannya.</p>
        </div>
        <div>
          <a href="{{ route('register') }}"><button class="mulai-banner-2 mx-20"><p class="text-mulai-banner-2">Mulai</p></button></a>
        </div>
      </div>
    </div>
    <div class="content">
      <div class="border-hp"><img src="{{ asset('/assets/frontsite/images/hp.png') }}" alt="" class="hp">
      </div>
    </div>
    <div class="content">
  <div class="kotak-penjelasan">
    <svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 576 512" class="bintang -ml-12"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path fill="#f1c644" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>
    <svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 576 512" class="bintang -ml-2 "><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path fill="#f1c644" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>
    <svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 576 512" class="bintang ml-9"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path fill="#f1c644" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>
    <svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 576 512" class="bintang ml-20"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path fill="#f1c644" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>      
    <svg xmlns="{{ url('http://www.w3.org/2000/svg') }}" viewBox="0 0 576 512" class="bintang ml-[125px]"><!-- Font Awesome Pro 5.15.4 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) --><path fill="#f1c644" d="M259.3 17.8L194 150.2 47.9 171.5c-26.2 3.8-36.7 36.1-17.7 54.6l105.7 103-25 145.5c-4.5 26.3 23.2 46 46.4 33.7L288 439.6l130.7 68.7c23.2 12.2 50.9-7.4 46.4-33.7l-25-145.5 105.7-103c19-18.5 8.5-50.8-17.7-54.6L382 150.2 316.7 17.8c-11.7-23.6-45.6-23.9-57.4 0z"/></svg>  
      <h1 class="hubungi-kami">Hubungi Kami</h1>
         <div class="kotak-logo"><img src="{{ asset('/assets/frontsite/images/ig.png') }}" alt="" class="ig"><hr class="garis1">
              <img src="{{ asset('/assets/frontsite/images/whatsapp.png') }}" alt="" class="wa"><hr class="garis2">
              <img src="{{ asset('/assets/frontsite/images/twitter.png') }}" alt="" class="twitter"><hr class="garis3">
              <img src="{{ asset('/assets/frontsite/images/email.png') }}" alt="" class="email"></div>
          <div class="keterangan">
              <p class="instagram">Instagram</p>
              <p class="whatsapp">Whatsapp</p>
              <p class="twitter2">Twitter</p>
              <p class="email2">Email</p>
          </div>
          <div class="bg-nyoba"><img src="{{ asset('/assets/frontsite/images/nyoba2.png') }}" alt="" >
          </div>
          <div class="kanan"><img src="{{ asset('/assets/frontsite/images/nyoba2.png') }}" alt=""></div>
          
          </div>  
        </div>

@endsection