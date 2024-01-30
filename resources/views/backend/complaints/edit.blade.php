@extends('backend.layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="mdi mdi-view-grid"></i></a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('mainmenu') }}">Company List</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
@endsection

@push('styles')
@endpush

@section('content')
    <div class="col-lg-12 col-12">
        <div class="box">
            <div class="box-header with-border">
                <h4 class="box-title">Edit A Complaint</h4>
            </div>

            <form class="form" action="{{ route('manage-complaint.update', $complaint->slug) }}" method="POST"
                enctype="multipart/form-data">
                @csrf @method('patch')

                <div class="box-body">
                    <div class="row">
                        <div class="col-lg-6">


                            <div class="form-group @error('title') error @enderror">
                                <label class="form-label">Title <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Name" name="title" id="title"
                                    value="{{ old('title', $complaint->title) }}">

                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('slug') error @enderror">
                                <label class="form-label">Slug <span class="text-danger">*</span></label>

                                <input type="text" class="form-control" placeholder="Slug" name="slug" id="slug"
                                    value="{{ old('slug', $complaint->slug) }}">

                                @error('slug')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('complaint_category_id') error @enderror">
                                <label class="form-label">Categories <span class="text-danger">*</span></label>

                                <select name="complaint_category_id" id="complaint_category_id" class="form-select">
                                    <option value="">Select Category</option>
                                    @foreach ($complaintCategories as $category)
                                        <option value="{{ $category->id }}"
                                            {{ old('complaint_category_id', $complaint->complaint_category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}</option>
                                    @endforeach
                                </select>

                                @error('complaint_category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('image') error @enderror">
                                <label for="image" class="form-label">Complaint Thumbnail</label>

                                <img class="img-preview img-fluid mb-3 col-sm-5"
                                    @if ($complaint->image) src="{{ asset('storage/' . $complaint->image) }}" @endif>
                                <input class="form-control @error('image') is-invalid @enderror" type="file"
                                    id="image" name="image">

                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group @error('dokumen') error @enderror">
                                <label for="dokumen" class="form-label">Dokumen Pengaduan</label>
                                <div class="row mb-5">
                                    @if ($complaint->dokumen)
                                        <a href="{{ route('manage-complaint.view-pdf', $complaint->slug) }}"
                                            target="_blank" type="button"
                                            class="waves-effect waves-light btn mb-5 bg-gradient-success">Lihat
                                            Dokumen</a>

                                        <a href="{{ route('manage-complaint.download-pdf', $complaint->slug) }}"
                                            type="button"
                                            class="color-hover waves-effect waves-light btn mb-5 bg-gradient-warning">Download
                                            Dokumen</a>
                                    @else
                                        <span class="badge-xl badge-warning text-center">Tidak ada Dokumen!</span>
                                    @endif
                                </div>
                                <input class="form-control @error('dokumen') is-invalid @enderror" type="file"
                                    id="dokumen" name="dokumen">

                                @error('dokumen')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="form-group @error('body') error @enderror">
                        <label class="form-label">Text Body <span class="text-danger">*</span></label>

                        <textarea name="body" id="body">{{ old('body', $complaint->body) }}</textarea>

                        @error('body')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="box-footer">
                        <a href="{{ route('manage-complaint.index') }}" class="btn btn-dark me-1">
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
