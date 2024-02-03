@extends('backend.layouts.app')

@section('content')
    <div class="col-lg-12 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Create A New User</h4>
            </div>

            <form class="form" action="{{ route('backend.user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group @error('name') error @enderror">
                                <label class="form-label">Name<span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Nama" name="name" id="name"
                                    value="{{ old('name') }}">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('username') error @enderror">
                                <label class="form-label">Username <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Username" name="username"
                                    id="username" value="{{ old('username') }}">

                                @error('username')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('email') error @enderror">
                                <label class="form-label">Email <span class="text-danger">*</span></label>

                                <input type="email" class="form-control" placeholder="Email" name="email" id="email"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('phone') error @enderror">
                                <label class="form-label">Phone Number <span class="text-danger">*</span></label>

                                <input type="phone" class="form-control" placeholder="Phone Number" name="phone" id="phone"
                                    value="{{ old('phone') }}">

                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('address') error @enderror">
                                <label class="form-label">Address <span class="text-danger">*</span></label>

                                <textarea class="form-control" name="address" id="address" cols="30" rows="10">{!! old('address') !!}</textarea>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                        <div class="col-lg-6">
                            <div class="form-group @error('image') error @enderror">
                                <label for="image" class="form-label">User Profile Image (PNG, JPG, JPEG)</label>

                                <img class="img-preview img-fluid col-sm-5 mb-3">
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    id="image" name="image">

                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('password') error @enderror">
                                <label class="form-label">Password <span class="text-danger">*</span></label>

                                <input type="password" class="form-control" placeholder="Password" name="password" id="password"
                                    value="">

                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group @error('password_confirmation') error @enderror">
                                <label class="form-label">Confirm Password <span class="text-danger">*</span></label>

                                <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation" id="password_confirmation"
                                    value="">

                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="box-footer px-0 py-2">
                        <a href="{{ route('backend.user.index') }}" class="btn btn-dark me-1">
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
