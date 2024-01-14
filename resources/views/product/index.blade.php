@extends('master')
@section('title','Add Product')

@section('body')
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto">
                    <div class="card">
                        <div class="card-header">Add Product</div>
                        <span class="text-success text-center">{{session('message')}}</span>
                        <div class="card-body">
                            <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="row mb-3">
                                    <label class="col-lg-3">Product Name</label>
                                    <div class="col-md-9">
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-lg-3">Product Price</label>
                                    <div class="col-md-9">
                                        <input type="number" class="form-control" name="price">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-lg-3">Product Price</label>
                                    <div class="col-md-9">
                                        <textarea class="form-control" name="description"></textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-lg-3">Product Image</label>
                                    <div class="col-md-9">
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label class="col-lg-3"></label>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-danger">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
