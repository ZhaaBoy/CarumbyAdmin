<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;

class AddProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $product = Product::IDGenerator(new Product, 'products_code', 2, 'CRMBY');
        $product = rand(1,2000);
        $code = "samples";
        $color = Color::all();
        $size = Size::all();
        // $color = Color::all()->where("product_code", $code);
        return view('admin.addproduct.index', compact('size' , 'code','product','color'));
    }

    public function live()
    {
        $product = Product::all();
        return view ('admin.addproduct.live', compact('product'));
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
            // 'name' => 'string|required',
            // 'image' => 'file|image|required',
            // 'video' => 'file|image|required',
            // 'description' => 'string|required',
            // 'format_size' => 'file|image|required',
            // 'weight' => 'string|required',
            // 'height' => 'string|required',
            // 'width' => 'string|required',
            // 'lenght' => 'string|required'
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->products_code = "eqr";
        $product->description = $request->description;
        $product['colors'] = implode(',', $request->input('colors'));
        $product['sizes'] = implode(',', $request->input('sizes'));
        $product->weight = $request->weight;
        $product->height = $request->height;
        $product->width = $request->width;
        $product->lenght = $request->lenght;
        // $product['image'] = "svel";
        $product['video'] = "sdgsls";
        $product['format_size'] = "se";
        $product['image'] = implode(',', $imageTemp);
        // $product['video'] =  '$request->file('video')->move(public_path("assets"), "sd")';
        // $product['format_size'] = $request->file('format_size')->move(public_path("assets"), "sdoo");
        if ($product->save()) {
            return redirect()->route('liveproduct');
        } else {
            alert()->error('Gagal');

            return back();
        };
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
     * Re`mo`ve the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
