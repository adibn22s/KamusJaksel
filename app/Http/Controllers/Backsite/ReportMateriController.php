<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;

// use library here
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

// request
use App\Http\Requests\Materi\StoreMateriRequest;
use App\Http\Requests\Materi\UpdateMateriRequest;

// use everything here
use Gate;
use Auth;
use File;

// use model here
use App\Models\MasterData\Materi;
use App\Models\User;

// thirdparty package
class ReportMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        abort_if(Gate::denies('materi_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        Auth::user();
        // for table grid
        $materi = Materi::orderBy('created_at', 'desc')->get();

        

        return view('pages.backsite.master-data.materi.index', compact('materi'));
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
    public function store(StoreMateriRequest $request)
    {
        /// get all request from frontsite
        $data = $request->all();

        $data['user_id'] = Auth::user()->id;


        // upload process here
        $path = public_path('app/public/assets/file-video');
        if(!File::isDirectory($path)){
            $response = Storage::makeDirectory('public/assets/file-video');
        }

        // change file locations
        if(isset($data['video'])){
            $data['video'] = $request->file('video')->store(
                'assets/file-video', 'public'
            );
        }else{
            $data['video'] = "";
        }

        // store to database
        $event = Materi::create($data);

        alert()->success('Success Message', 'Successfully added new materi');
        return redirect()->route('backsite.materi.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Materi $materi)
    {
        abort_if(Gate::denies('materi_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('pages.backsite.master-data.materi.show', compact('materi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Materi $materi)
    {
        abort_if(Gate::denies('materi_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // for select2 = ascending a to z

        return view('pages.backsite.master-data.materi.edit', compact('materi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMateriRequest $request, Materi $materi)
    {
        // get all request from frontsite
        $data = $request->all();
        // upload process here
        // change format video
        if(isset($data['video'])){

             // first checking old video to delete from storage
            $get_item = $materi['video'];

            // change file locations
            $data['video'] = $request->file('video')->store(
                'assets/file-video', 'public'
            );

            // delete old video from storage
            $data_old = 'storage/'.$get_item;
            if (File::exists($data_old)) {
                File::delete($data_old);
            }else{
                File::delete('storage/app/public/'.$get_item);
            }

        }

        // update to database
        $materi->update($data);

        alert()->success('Success Message', 'Successfully updated materi');
        return redirect()->route('backsite.materi.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Materi $materi)
    {
        abort_if(Gate::denies('materi_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // first checking old file to delete from storage
        $get_item = $materi['video'];

        $data = 'storage/'.$get_item;
        if (File::exists($data)) {
            File::delete($data);
        }else{
            File::delete('storage/app/public/'.$get_item);
        }

        $materi->forceDelete();

        alert()->success('Success Message', 'Successfully deleted materi');
        return back();
    }
}
