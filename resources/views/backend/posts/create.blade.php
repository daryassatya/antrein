@extends('backend.layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="mdi mdi-view-grid"></i></a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('mainmenu') }}">Main Menu</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
@endsection

@push('styles')
@endpush

@section('content')
    <div class="col-lg-12 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Create A New Post</h4>
            </div>

            <form class="form" action="{{ route('dashboard.posts.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6">


                            <div class="form-group @error('title') error @enderror">
                                <label class="form-label">Title <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Name" name="title" id="title"
                                    value="{{ old('title') }}">

                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('slug') error @enderror">
                                <label class="form-label">Slug <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Slug" name="slug" id="slug"
                                    value="{{ old('slug') }}">

                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('category_id') error @enderror">
                                <label class="form-label">Categories <span class="text-danger">*</span></label>

                                <select name="category_id" id="category_id" class="form-select">
                                    <option value="">Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('image') error @enderror">
                                <label for="image" class="form-label">Post Image</label>

                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    id="image" name="image">

                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group @error('body') error @enderror">
                        <label class="form-label">Text Body <span class="text-danger">*</span></label>

                        <textarea name="body" id="body">{{ old('body') ?? 'Welcome to TinyMCE!' }}</textarea>

                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="box-footer">
                        <a href="{{ route('dashboard.posts.index') }}" class="btn btn-dark me-1">
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

@push('scripts')
    <script src="https://cdn.tiny.cloud/1/krwwm2eezcbfw8uacjbp7a1epnlpdt5zjf5tsrjtdri1sma7/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        $(document).ready(function() {
            $("#title").on('change', function() {
                $.ajax({
                    type: "GET",
                    url: "{{ route('check-slug') }}",
                    data: {
                        title: $('#title').val()
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

        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ]
        });
    </script>
@endpush
