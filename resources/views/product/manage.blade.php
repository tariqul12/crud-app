@extends('master')
@section('title','Manage Product')

@section('body')
    <section class="py-5 bg-danger-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> All Product Info</div>
                      <div class="card-body">
                          <table class="table">
                              <thead>
                              <tr>
                                  <th>SL NO</th>
                                  <th>Product Name</th>
                                  <th>Product Price</th>
                                  <th>Product Description</th>
                                  <th>Product Image</th>
                                  <th>Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              @foreach($products as $product)
                              <tr>
                                  <td>{{$loop->iteration}}</td>
                                  <td>{{$product->name}}</td>
                                  <td>{{$product->price}}</td>
                                  <td>{{$product->description}}</td>
                                  <td>
                                      <img src="{{asset($product->image)}}" height="50" width="50" alt="">
                                  </td>
                                  <td class="d-flex">
                                      <a href="" class="btn-sm btn btn-outline-success me-2">Edit</a>
                                      <a href="" class="btn-sm btn btn-outline-danger">Delete</a>
                                  </td>

                              </tr>
                              @endforeach
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
