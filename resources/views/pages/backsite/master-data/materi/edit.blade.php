@extends('layouts.app')

{{-- set title --}}
@section('title', 'Edit - Materi')

@section('content')
<!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">

            {{-- error --}}
            @if ($errors->any())
                <div class="alert bg-danger alert-dismissible mb-2" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- breadcumb --}}
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Edit Materi</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Dashboard</li>
                                <li class="breadcrumb-item">Materi</li>
                                <li class="breadcrumb-item active">Edit</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- forms --}}
            <div class="content-body"><!-- Basic form layout section start -->
                <section id="horizontal-form-layouts">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="horz-layout-basic">Form Input</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collpase show">
                                    <div class="card-body">
                                        <div class="card-text">
                                            <p>Please complete the input <code>required</code>, before you click the submit button.</p>
                                        </div>
                                        <form class="form form-horizontal" action="{{ route("backsite.materi.update", [$materi->id]) }}" method="POST" enctype="multipart/form-data">

                                                @method('PUT')
                                                @csrf

                                                <div class="form-body">

                                                    <h4 class="form-section"><i class="fa fa-edit"></i> Form Materi</h4>

                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="judul">Judul Materi<code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="judul" judul="judul" class="form-control" placeholder="Pronoun" value="{{ old('judul', isset($materi) ? $materi->judul : '') }}" autocomplete="off" required>

                                                            @if($errors->has('judul'))
                                                                <p style="font-style: bold; color: red;">{{ $errors->first('judul') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                             
                                                    <<div class="form-group row">
                                                        <label class="col-md-3 label-control">Kategori <code
                                                                style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <select name="kategori" id="kategori" class="form-control select2"
                                                                required>
                                                                <option value="{{ old('kategori', isset($materi) ? $materi->kategori : '') }}" disabled selected>{{ $materi->kategori }}
                                                                </option>
    
                                                                <option value="Fundamental"> Fundamental
                                                                </option>
                                                                <option value="Beginner"> Beginner
                                                                </option>
                                                                <option value="Intermediate"> Intermediate
                                                                </option>
    
                                                            </select>
    
                                                            @if ($errors->has('kategori'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('kategori') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="isi_materi">Isi Materi <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <textarea type="text" id="isi_materi"
                                                                name="isi_materi" class="form-control"
                                                                placeholder="A-Z"
                                                                value="{{ old('isi_materi', isset($materi) ? $materi->isi_materi : '') }}" autocomplete="off"
                                                                required></textarea>
    
                                                            @if ($errors->has('isi_materi'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('isi_materi') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="contoh1">Judul Contoh 1 <code style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="contoh1"
                                                            name="contoh1" class="form-control"
                                                            placeholder="Adjective"
                                                            value="{{ old('contoh1') }}" autocomplete="off"
                                                            required>

                                                        @if ($errors->has('contoh1'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('contoh1') }}</p>
                                                        @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="isi_contoh1">Isi Contoh 1
                                                            <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <textarea type="text" id="isi_contoh1" name="isi_contoh1"
                                                                class="form-control" placeholder="A-Z"
                                                                value="{{ old('isi_contoh1') }}" autocomplete="off" required></textarea>
    
                                                            @if ($errors->has('isi_contoh1'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('isi_contoh1') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
    
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="contoh1">Judul Contoh 2 <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <input type="text" id="contoh2"
                                                                name="contoh2" class="form-control"
                                                                placeholder="Adjective"
                                                                value="{{ old('contoh2') }}" autocomplete="off"
                                                                required>
    
                                                            @if ($errors->has('contoh2'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('contoh2') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="isi_contoh1">Isi Contoh 2
                                                            <code style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <textarea type="text" id="isi_contoh2" name="isi_contoh2"
                                                                class="form-control" placeholder="A-Z"
                                                                value="{{ old('isi_contoh2') }}" autocomplete="off" required></textarea>
    
                                                            @if ($errors->has('isi_contoh2'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('isi_contoh2') }}</p>
                                                            @endif
                                                        </div>
                                                    </div>
    
                                                    <div class="form-group row">
                                                        <label class="col-md-3 label-control" for="video">Video <code
                                                                style="color:red;">required</code></label>
                                                        <div class="col-md-9 mx-auto">
                                                            <div class="custom-file">
                                                                <input type="file"
                                                                    accept="video/mp4,video/x-m4v,video/webm"
                                                                    class="custom-file-input" id="video" name="video"
                                                                    required>
                                                                <label class="custom-file-label" for="video"
                                                                    aria-describedby="video">Choose File</label>
                                                            </div>
    
                                                            <p class="text-muted"><small class="text-danger">Hanya dapat
                                                                    mengunggah 1 file</small><small> dan yang dapat
                                                                    digunakan
                                                                    Mp4 & Maksimal ukuran file hanya 100
                                                                    MegaBytes</small></p>
    
                                                            @if ($errors->has('video'))
                                                                <p style="font-style: bold; color: red;">
                                                                    {{ $errors->first('video') }}</p>
                                                            @endif
    
                                                        </div>
                                                </div>
                                               

                                            </div>

                                            <div class="form-actions text-right">
                                                <a href="{{ route('backsite.materi.index') }}" style="width:120px;" class="btn bg-blue-grey text-white mr-1" onclick="return confirm('Are you sure want to close this page? , Any changes you make will not be saved.')">
                                                    <i class="ft-x"></i> Cancel
                                                </a>
                                                <button type="submit" style="width:120px;" class="btn btn-cyan" onclick="return confirm('Are you sure want to save this data ?')">
                                                    <i class="la la-check-square-o"></i> Submit
                                                </button>
                                            </div>
                                            </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

        </div>
    </div>
<!-- END: Content-->

@endsection
