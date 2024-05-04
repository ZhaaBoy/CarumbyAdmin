<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        {
            $banner = Banner::simplepaginate(5);
            return view('admin.other.banner.index', compact('banner'));
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.other.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'banner' => 'file|image|required',
            'sk' => 'file|image|max:2048|required'

        ]);
        $bnr = new Banner;
        $banner = [];
        foreach($request->file('banner') as $file) {
            $banner[] = $file->store('asset/banner','public');
        };
        $bnr['banner'] = implode('|', $banner);

        $sk = [];
        foreach($request->file('sk') as $file2) {
            $sk[] = $file2->store('asset/sk','public');
        };
        $bnr['sk'] = implode('|', $sk);


        if ($bnr->save()) {
            alert()->success('Berhasil Di Tambah');
            return to_route('banner.index');
        } else {
            alert()->error('Gagal');
            return back();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
