@extends('layouts.default2')

@section('title', 'Fundamental')

@section('content')

<div class="content mb-[-2px]">
    
  @forelse ($materi as $key => $materis)
    <h1 class="judul-fundamental">{{ $materis->kategori}}</h1>
    @empty
    no event
    @endforelse  
    <div class="pembungkus-button ">
      @forelse ($materi as $key => $materis)
      <a href="{{ route('detail-materi.materi3', $materis->id) }}"><button class="materi1 hover:bg-[#FFCC51] " >{{ $materis->judul}}</button></a><br><br>
      @empty
    no event
@endforelse
    </div>
    <div class="vidio">
      <video controls="true" src="{{ asset('assets/frontsite/images/video.mp4') }}" type="video/webm" class="vidio2"></video>
    </div>
    <div class="materi">
      <h1 class="judulmateri ml-10 mt-2.5">Materi</h1>
      <button id="hamburger" name="hamburger" type="button"
      class="block absolute ml-[703px] mt-5">
        <span class="plus-datar block transition duration-300 ease-in-out"></span>
        <span class="plus-bawah block mt-[-20px] ml-[12px] transition duration-300 ease-in-out"></span>
      </button>
      <div id="isi-materi" class="hidden box-materi ml-[-2px] mt-[-2px]">
        <pre class="judulmateri2">Adjective</pre>
        <pre class="isi-materi">
          Adjective dalam bahasa Indonesia disebut juga dengan kata sifat. Adjective 
          ini berfungsi untuk menjelaskan dan menggambarkan kata benda (nouns) 
          atau kata ganti (pronouns). Adjective bisa diletakan sebelum kata benda 
          (noun) dan juga bida diletakkan setelah to be, baik itu “is, am, are, was, were, 
          been, be”. berbagai kata sifat dalam bahasa inggris :
          > Numeric : six, one hundred and one
          > Quantitative : more, all, some, half, more than enough
          > Qualitative : colour, size, smell, etc
          > Interrogative : which, whose, what
          > Demonstrative : this, that, those, these
          </pre>
          <h1 class="contoh">contoh</h1>
          <div class="box-putih">
            <h1 class="isi-box-putih mt-5 ml-5">Adjective sebelum kata Benda (noun)</h1>
            <pre class="materi-box-putih ml-[-45px] mt-20">
              They live in a <strong>big City</strong>
              (Mereka tinggal di sebuah <strong>kota besar</strong>)
              
              Dika bought a <strong>new car</strong>
              (Dika membeli sebuah <strong>mobil baru</strong>)
              
              My sister has <strong>curly hair</strong>
              (Kakak perempuanku mempunyai 
              <strong>rambut keriting</strong>)
              
              i ate <strong>much bread</strong>
              (Saya makan <strong>banyak roti</strong>)
              
              
              </pre>
          </div>
          <div class="box-putih ml-[350px]"><h1 class="isi-box-putih mt-5 ml-5">Adjective setelah to be</h1>
            <pre class="materi-box-putih ml-[-45px] mt-20">
              This material is <strong>quite difficult</strong>. i must 
              study hard
              (Materi ini <strong>sangat sulit</strong>. saya harus giat 
              belajar)

              They are <strong>cool</strong>
              (Mereka <strong>keren</strong>)

              Vina is very <strong>popular</strong> in her school. she is <strong>
              smart</strong> and <strong>kind</strong>
              (Vina sangat <strong>populer</strong> di sekolahnya. dia <strong>
              pandai</strong> dan <strong>ramah</strong>)
              </pre></div>
      </div>
    </div>
</div>


@endsection