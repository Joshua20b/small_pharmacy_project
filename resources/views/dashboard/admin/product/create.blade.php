@extends('dashboard.admin.layouts.master')
@section('content')

<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>Advanced Forms</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Forms</a></div>
                <div class="breadcrumb-item">Advanced Forms</div>
            </div>
        </div>

        <div class="section-body">
            <h2 class="section-title">Advanced Forms</h2>

            <form action="" method="post">
                @csrf
                <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for=""></label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Create Product</button>
                    </div>
                </div>
            </form>

        </div>
    </section>
</div>

@endsection