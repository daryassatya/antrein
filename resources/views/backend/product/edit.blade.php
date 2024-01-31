@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Update A New Post</h4>
            </div>
            @include('components.flash-message')
            <form class="form" action="{{ route('backend.product.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6">


                            <div class="form-group @error('prod_id') error @enderror">
                                <label class="form-label">Product ID <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Product ID" name="prod_id" id="prod_id" value="{{ $product->product_id }}">

                                @error('prod_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('prod_name') error @enderror">
                                <label class="form-label">Product Name <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Product Name" name="prod_name" id="prod_name" value="{{ $product->product_name }}">

                                @error('prod_name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('price') error @enderror">
                                <label class="form-label">Price (Rupiah) <span class="text-danger">*</span></label>

                                <input type="number" min="1" name="price" id="" class="form-control" placeholder="Minimum Price Rp. 1" step="0.1" value="{{ $product->price }}">

                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('image') error @enderror">
                                <label for="image" class="form-label">Product Image (PNG, JPG, JPEG)</label>

                                <img class="img-fluid mb-3 col-sm-5" src="{{ asset('product/image/' . $product->image) }}" width="100px;">
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    id="image" name="image">

                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="box-footer">
                        <a href="{{ route('backend.product.index') }}" class="btn btn-dark me-1">
                            <i class="ti-back-right"></i> Back
                        </a>

                        <button type="submit" class="btn btn-success">
                            <i class="ti-save-alt"></i> Save
                        </button>
                    </div>
            </form>
        </div>
    </div>
@endsection