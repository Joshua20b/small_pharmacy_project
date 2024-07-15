@extends('dashboard.admin.layouts.master')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>{{ $title }}</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="{{ route('admin.dashboard') }}">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.product.index') }}">Back</a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">{{ $title }}</h2>

            <form action="{{ route('admin.product.update', $product->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card">
                    <div class="card-header">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" width="70">
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="image">Product Image</label>
                            <input class="form-control" type="file" name="image" id="image">
                        </div>
                        <div class="form-group">
                            <label for="name">Product Name</label>
                            <input class="form-control" type="text" value="{{ $product->name }}" name="name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="category">Product Category</label>
                            <input class="form-control" type="text" value="{{ $product->category }}" name="category"
                                id="category">
                        </div>
                        <div class="form-group">
                            <label for="original_price">Original Price</label>
                            <input class="form-control" type="text" value="{{ $product->original_price }}"
                                name="original_price" id="original_price">
                        </div>
                        <div class="form-group">
                            <label for="discount_price">Discount Price</label>
                            <input class="form-control" type="text" value="{{ $product->discount_price }}"
                                name="discount_price" id="discount_price">
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" cols="30"
                                rows="10">{{ $product->description }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select class="form-control" name="status" id="status">
                                <option {{ $product->status == 'active' ? 'selected' : '' }} value="active">Active
                                </option>
                                <option {{ $product->status == 'inactive' ? 'selected' : '' }} value="inactive">Inactive
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Product</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
</div>

@endsection