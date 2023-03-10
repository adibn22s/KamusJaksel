<?php

namespace App\Http\Controllers\Frontsite;

use App\Http\Controllers\Controller;// use library here
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

// use everything here
// use Gate;
use Auth;

use App\Models\User;
use App\Models\MasterData\Materi;

class DetailMateriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pages\frontsite\detail-materi\index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // custom
    public function detailmaterifundamental($id)
    {
        $materi = Materi::where('id',$id)->get();
        $materi2 = Materi::where('kategori', 'Fundamental')->orderBy('judul', 'desc')->limit(10)->get();
        return view('pages.frontsite.detail-materi.index',compact('materi','materi2'));
    }
    public function detailmateriintermediate($id)
    {
        $materi = Materi::where('id',$id)->get();
        $materi2 = Materi::where('kategori', 'Intermediate')->orderBy('judul', 'desc')->limit(10)->get();
        return view('pages.frontsite.detail-materi-intermediate.index',compact('materi','materi2',));
    }
    
}
