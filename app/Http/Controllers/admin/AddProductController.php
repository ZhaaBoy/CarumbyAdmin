<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Size;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $size = Size::all();
        $code = 'contohkode';
        return view('admin.addproduct.index', compact('size', 'code'));
    }

    public function live()
    {
        return view ('admin.addproduct.live');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'string',
            'product_code'=>'string'
        ]);

        $data = $request->all();

        if (Size::create($data)) {
            return redirect()->route('liveproduct');
        } else {
            alert()->error('Gagal');
            return redirect()->route('liveproduct');
        }
    }

    public function size(Request $request)
    {
        $request->validate([
            'name'=>'string',
            'product_code'=>'string'
        ]);

        $data = $request->all();

        if (Size::create($data)) {
            return redirect()->route('liveproduct');
        } else {
            alert()->error('Gagal');
            return redirect()->route('liveproduct');
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
