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
                    <a class="btn btn-sm btn-primary" href="{{ route('admin.product.create') }}">Create New</a>
                </div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">{{ $title }}</h2>

            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Image</th>
                                <th scope="col">Product Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($allProducts as $product)
                            <tr>
                                <th><img src="{{ $product->image }}" alt="{{ $product->name }}" width="50"></th>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->category }}</td>
                                <td>${{ $product->discount_price }}</td>
                                <td>
                                    @if($product->status == 'active')
                                    <div class="text-success">Active</div>
                                    @else
                                    <div class="text-warning">{{ $product->status }}</div>
                                    @endif
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <div>
                                            <a class="btn btn-sm btn-info"
                                                href="{{ route('admin.product.edit', $product->id) }}">edit</a>
                                        </div>
                                        <div>
                                            <form action="{{ route('admin.product.destroy', $product->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer"></div>
            </div>

        </div>
    </section>
</div>

@endsection