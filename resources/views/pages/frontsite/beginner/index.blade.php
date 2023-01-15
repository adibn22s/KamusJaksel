@extends('layouts.default2')

@section('title', 'Beginner')

@section('content')

<div class="content mb-[-2px]">
    
  @forelse ($materi as $key => $materis)
    <h1 class="judul-fundamental">{{ $materis->kategori}}</h1>
    @empty
    no event
    @endforelse  
    <div class="pembungkus-button ">
      @forelse ($materi as $key => $materis)
      <a href="{{ route('detail-materi.beginner', $materis->id) }}"><button class="materi1 hover:bg-[#FFCC51] " >{{ $materis->judul}}</button></a><br><br>
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
        <pre class="judulmateri2">{{ $materis->judul}}</pre>
        <pre class="isi-materi">
            {{ $materis->judul}}
          </pre>
          <h1 class="contoh">contoh</h1>
          <div class="box-putih">
            <h1 class="isi-box-putih mt-5 ml-5">{{ $materis->judul}}</h1>
            <pre class="materi-box-putih ml-[-45px] mt-20">
                {{ $materis->judul}}
              
              </pre>
          </div>
          <div class="box-putih ml-[350px]"><h1 class="isi-box-putih mt-5 ml-5">{{ $materis->judul}}</h1>
            <pre class="materi-box-putih ml-[-45px] mt-20">
                {{ $materis->judul}}
              </pre></div>
      </div>
    </div>
</div>


@endsection