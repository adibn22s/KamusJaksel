@extends('layouts.app')

{{-- set title --}}
@section('title', 'Materi')

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
                    <h3 class="content-header-title mb-0 d-inline-block">materi</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('backsite.dashboard.index') }}">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">materi</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>

            {{-- add card --}}
            {{-- @can('materi_create') --}}
            <div class="content-body">
                <section id="add-home">
                    <div class="row">
                        <div class="col-12">

                            <div class="card">
                                <div class="card-header bg-success text-white">
                                    <a data-action="collapse">
                                        <h4 class="card-title text-white">Add Data</h4>
                                        <a class="heading-elements-toggle"><i
                                                class="la la-ellipsis-v font-medium-3"></i></a>
                                        <div class="heading-elements">
                                            <ul class="list-inline mb-0">
                                                <li><a data-action="collapse"><i class="ft-plus"></i></a></li>
                                                <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            </ul>
                                        </div>
                                    </a>
                                </div>

                                <div class="card-content collapse hide">
                                    <div class="card-body card-dashboard">

                                        <form class="form form-horizontal" action="{{ route('backsite.materi.store') }}"
                                            method="POST" enctype="multipart/form-data">

                                            @csrf

                                            <div class="form-body">
                                                <div class="form-section">
                                                    <p>Please complete the input <code>required</code>, before you click the
                                                        submit button.</p>
                                                </div>



                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control" for="judul">Judul Materi<code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <input type="text" id="judul" name="judul"
                                                            class="form-control" placeholder="example Pronoun"
                                                            value="{{ old('judul') }}" autocomplete="off" required>

                                                        @if ($errors->has('judul'))
                                                            <p style="font-style: bold; color: red;">
                                                                {{ $errors->first('judul') }}</p>
                                                        @endif
                                                    </div>
                                                </div>

                                                

                                                <div class="form-group row">
                                                    <label class="col-md-3 label-control">Kategori <code
                                                            style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <select name="kategori" id="kategori" class="form-control select2"
                                                            required>
                                                            <option value="{{ '' }}" disabled selected>Choose
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
                                                    <label class="col-md-3 label-control" for="isi_materi">Isi Materi
                                                        <code style="color:red;">required</code></label>
                                                    <div class="col-md-9 mx-auto">
                                                        <textarea type="text" id="isi_materi" name="isi_materi"
                                                            class="form-control" placeholder="A-Z"
                                                            value="{{ old('isi_materi') }}" autocomplete="off" required></textarea>

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
                                                <button type="submit" style="width:120px;" class="btn btn-cyan"
                                                    onclick="return confirm('Are you sure want to save this data ?')">
                                                    <i class="la la-check-square-o"></i> Submit
                                                </button>
                                            </div>
                                    </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                    </div>
            </div>
            </section>
        </div>
        {{-- @endcan --}}

        {{-- table card --}}
        {{-- @can('event_table') --}}
        <div class="content-body">
            <section id="table-home">
                <!-- Zero configuration table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">List Materi</h4>
                                <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                <div class="heading-elements">
                                    <ul class="list-inline mb-0">
                                        <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                        <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                        <!-- <li><a data-action="close"><i class="ft-x"></i></a></li> -->
                                    </ul>
                                </div>
                            </div>

                            <div class="card-content collapse show">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table
                                            class="table table-striped table-bordered text-inputs-searching default-table">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>User</th>
                                                    <th>Judul</th>
                                                    <th>Kategori</th>
                                                    <th>Isi Materi</th>
                                                    <th>Video</th>
                                                    <th style="text-align:center; width:150px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse($materi as $key => $materi_item)
                                                    <tr data-entry-id="{{ $materi_item->id }}">
                                                        <td>{{ isset($materi_item->created_at) ? date('d/m/Y', strtotime($materi_item->created_at)) : '' }}</td>
                                                        <td>{{ $materi_item->users->name ?? ''  }}</td>
                                                        <td>{{ $materi_item->judul ?? ''  }}</td>
                                                        <td>{{ $materi_item->kategori ?? '' }}</td>
                                                        <td>{{ $materi_item->isi_materi ?? '' }}</td>
                                                        <td><a data-fancybox="gallery" data-src="{{ request()->getSchemeAndHttpHost().'/storage'.'/'.$materi_item->video }}" class="blue accent-4 text-center">Show</a></td>
                                                        <td class="text-center">

                                                            <div class="btn-group mr-1 mb-1">
                                                                <button type="button"
                                                                    class="btn btn-info btn-sm dropdown-toggle"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false">Action</button>
                                                                <div class="dropdown-menu">

                                                                    {{-- @can('event_show') --}}
                                                                    <a href="#mymodal"
                                                                        data-remote="{{ route('backsite.materi.show', $materi_item->id) }}"
                                                                        data-toggle="modal" data-target="#mymodal"
                                                                        data-title="materi Detail" class="dropdown-item">
                                                                        Show
                                                                    </a>
                                                                    {{-- @endcan --}}

                                                                    {{-- @can('event_edit') --}}
                                                                    <a class="dropdown-item"
                                                                        href="{{ route('backsite.materi.edit', $materi_item->id) }}">
                                                                        Edit
                                                                    </a>
                                                                    {{-- @endcan --}}

                                                                    {{-- @can('materi_delete') --}}
                                                                    <form
                                                                        action="{{ route('backsite.materi.destroy', $materi_item->id) }}"
                                                                        method="POST"
                                                                        onsubmit="return confirm('Are you sure want to delete this data ?');">
                                                                        <input type="hidden" name="_method"
                                                                            value="DELETE">
                                                                        <input type="hidden" name="_token"
                                                                            value="{{ csrf_token() }}">
                                                                        <input type="submit" class="dropdown-item"
                                                                            value="Delete">
                                                                    </form>
                                                                    {{-- @endcan --}}

                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    {{-- not found --}}
                                                @endforelse
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Name</th>
                                                    <th style="text-align:center; width:150px;">Action</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        {{-- @endcan --}}

    </div>
    </div>
    <!-- END: Content-->

@endsection

@push('after-style')
    <link rel="stylesheet" href="{{ url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css') }}">

    <style>
        .label {
            cursor: pointer;
        }
        .img-container img {
            max-width: 100%;
        }
    </style>
@endpush

@push('after-script')
<script src="{{ url('https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js') }}" type="text/javascript"></script>
    <script>
        jQuery(document).ready(function($) {
            $('#mymodal').on('show.bs.modal', function(e) {
                var button = $(e.relatedTarget);
                var modal = $(this);

                modal.find('.modal-body').load(button.data("remote"));
                modal.find('.modal-title').html(button.data("title"));
            });

            $('.select-all').click(function() {
                let $select2 = $(this).parent().siblings('.select2-full-bg')
                $select2.find('option').prop('selected', 'selected')
                $select2.trigger('change')
            })

            $('.deselect-all').click(function() {
                let $select2 = $(this).parent().siblings('.select2-full-bg')
                $select2.find('option').prop('selected', '')
                $select2.trigger('change')
            })
        });

        $('.default-table').DataTable({
            "order": [],
            "paging": true,
            "lengthMenu": [
                [5, 10, 25, 50, 100, -1],
                [5, 10, 25, 50, 100, "All"]
            ],
            "pageLength": 10
        });

        // fancybox
        Fancybox.bind('[data-fancybox="gallery"]', {
            infinite: false
        });
    </script>

    <div class="modal fade" id="mymodal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"></h5>
                    <button class="btn close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <i class="fa fa-spinner fa spin"></i>
                </div>
            </div>
        </div>
    </div>
@endpush
