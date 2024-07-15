<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'title'       => 'All Products',
            'allProducts' => Product::all()
        ];
        return view('dashboard.admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = [
            'title' => 'Create Product',
        ];
        return view('dashboard.admin.product.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            '' => ['required'],
        ]);

        // $productImage = $this->imageInterventionUploadImage($request, $inputName, $path, $width, $height);

        Product::create([
            // 'unique_id'      => md5(time()),
            // 'name'           => $request->
            // 'category'       => $request->
            // 'original_price' => $request->
            // 'discount_price' => $request->
            // 'description'    => $request->
            // 'image'          => $productImage,
            // 'status'         => 'active'
        ]);

        toastr()->success('Product created successsfully');
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
        $data = [
            'title'   => 'Edit Product',
            'product' => Product::findOrFail($id)
        ];
        return view('dashboard.admin.product.edit', $data);
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
