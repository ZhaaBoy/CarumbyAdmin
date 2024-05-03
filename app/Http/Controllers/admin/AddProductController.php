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
        $product = "dds";
        $color = Color::all();
        $size = Size::all();
        // $color = Color::all()->where("product_code", $code);
        return view('admin.addproduct.index', compact('size' , 'product','color'));
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
            // 'product_code' => 'string|required|unique:products',
            // 'name' => 'string|required',
            // 'image' => 'file|image|required',
            // 'video' => 'file|image|required',
            // 'description' => 'string|required',
            // 'format_size' => 'file|image|required',
            // 'weight' => 'string|required',
            // 'height' => 'string|required',
            // 'width' => 'string|required',
        ]);

        $product = new Product;
        $product->products_code = $request->code;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->colors = implode(",", $request->colors);
        $product->sizes = implode(",", $request->sizes);
        $product->weight = $request->weight;
        $product->height = $request->height;
        $product->width = $request->width;
        $product->lenght = $request->lenght;

        // Multiple Image product 
        $imageTemp = [];
        foreach($request->file('image') as $file) {
            $imageTemp[] = $file->store('asset/product','public');
        };
        $product['image'] = implode('|', $imageTemp);

        // Mutliple Image format size
        $imageFormatSizeTemp = [];
        foreach($request->file('format_size') as $file1) {
            $imageFormatSizeTemp[] = $file1->store('asset/product','public');
        };
        $product['format_size'] = implode('|', $imageFormatSizeTemp);

        // Multiple Video
        $videoTemp = [];
        foreach($request->file('video') as $file2) {
            $videoTemp[] = $file2->store('asset/product','public');
        };
        $product['video'] = implode(',', $videoTemp);

        if ($product->save()) {
            return redirect()->route('preorder');
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
