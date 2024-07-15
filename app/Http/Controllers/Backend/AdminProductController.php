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
            'image'          => ['required'],
            'name'           => ['required'],
            'category'       => ['required'],
            'original_price' => ['required'],
            'discount_price' => ['required'],
            'description'    => ['required'],
        ]);

        $productImage = $this->imageInterventionUploadImage($request, 'image', '/uploads/product/', 300, 300);

        Product::create([
            'unique_id'      => md5(time()),
            'name'           => $request->name,
            'category'       => $request->category,
            'original_price' => $request->original_price,
            'discount_price' => $request->discount_price,
            'description'    => $request->description,
            'image'          => $productImage,
            'status'         => 'active'
        ]);

        toastr()->success('Product created successfully');
        return redirect()->route('admin.product.index');
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
        $request->validate([
            'name'           => ['required'],
            'category'       => ['required'],
            'original_price' => ['required'],
            'discount_price' => ['required'],
            'description'    => ['required'],
        ]);

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $updateProductImage = $this->imageInterventionUpdateImage($request, 'image', '/uploads/product/', 300, 300, $product->image);
            $request->validate([
                'image' => ['required']
            ]);

            $product->image          = $updateProductImage;
            $product->name           = $request->name;
            $product->category       = $request->category;
            $product->original_price = $request->original_price;
            $product->discount_price = $request->discount_price;
            $product->description    = $request->description;
            $product->status         = $request->status;
            $product->save();

            toastr()->success('Product Updated Successfully');
            return redirect()->route('admin.product.index');
        }

        $product->name           = $request->name;
        $product->category       = $request->category;
        $product->original_price = $request->original_price;
        $product->discount_price = $request->discount_price;
        $product->description    = $request->description;
        $product->status         = $request->status;
        $product->save();

        toastr()->success('Product Updated Successfully');
        return redirect()->route('admin.product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        $this->removeImage($product->image);
        $product->delete();
        toastr()->success('Product deleted successfully');
        return back();
    }
}
