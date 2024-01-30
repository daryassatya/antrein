@extends('backend.layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="mdi mdi-view-grid"></i></a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('mainmenu') }}">Main Menu</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection

@push('styles')
@endpush

@section('content')
    <div class="col-lg-6 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Edit Post Category</h4>
            </div>

            <form class="form" action="{{ route('dashboard.categories.post-categories.update', $category->slug) }}"
                method="POST" enctype="multipart/form-data">
                @csrf @method('patch')

                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-12">


                            <div class="form-group @error('name') error @enderror">
                                <label class="form-label">Name <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Name" name="name" id="name"
                                    value="{{ old('name', $category->name) }}">

                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('slug') error @enderror">
                                <label class="form-label">Slug <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Slug" name="slug" id="slug"
                                    value="{{ old('slug', $category->slug) }}" readonly>

                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="box-footer">
                                <a href="{{ route('dashboard.categories.post-categories.index') }}"
                                    class="btn btn-dark me-1">
                                    <i class="ti-back-right"></i> Back
                                </a>

                                <button type="submit" class="btn btn-success">
                                    <i class="ti-save-alt"></i> Save
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#name").on('change', function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('check-slug') }}",
                    data: {
                        title: $('#name').val()
                    },
                    success: (response) => {
                        $("#slug").val(response.slug);
                    },
                    error: (e) => {
                        console.log(e.responseText);
                    }
                });
            });
        });
    </script>
@endpush
