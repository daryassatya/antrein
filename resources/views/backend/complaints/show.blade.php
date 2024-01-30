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
                <h4 class="box-title">{{ $complaint->title }}</h4>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="col-lg-6">


                        <div class="form-group @error('title') error @enderror">
                            <label class="form-label">Title <span class="text-danger">*</span></label>

                            <input type="text" class="form-control" placeholder="Name" name="title" id="title"
                                value="{{ old('title', $complaint->title) }}" disabled>
                        </div>

                        <div class="form-group @error('slug') error @enderror">
                            <label class="form-label">Slug <span class="text-danger">*</span></label>

                            <input type="text" class="form-control" placeholder="Slug" name="slug" id="slug"
                                value="{{ old('slug', $complaint->slug) }}" disabled>
                        </div>

                        <div class="form-group @error('complaint_category_id') error @enderror">
                            <label class="form-label">Categories <span class="text-danger">*</span></label>

                            <select name="complaint_category_id" id="complaint_category_id" class="form-select" disabled>
                                <option disabled selected>{{ $complaint->complaintCategory->name }}</option>
                            </select>
                        </div>

                        <div class="form-group @error('image') error @enderror">
                            <label for="image" class="form-label">Complaint Thumbnail</label>

                            <img class="img-preview img-fluid mb-3 col-sm-5"
                                @if ($complaint->image) src="{{ asset('storage/' . $complaint->image) }}" @endif>
                        </div>

                        <div class="form-group @error('dokumen') error @enderror">
                            <label for="dokumen" class="form-label">Dokumen Pengaduan</label>
                            <div class="row">
                                @if ($complaint->dokumen)
                                    <a href="{{ route('manage-complaint.view-pdf', $complaint->slug) }}" target="_blank"
                                        type="button" class="waves-effect waves-light btn mb-5 bg-gradient-success">Lihat
                                        Dokumen</a>

                                    <a href="{{ route('manage-complaint.download-pdf', $complaint->slug) }}" type="button"
                                        class="color-hover waves-effect waves-light btn mb-5 bg-gradient-warning">Download
                                        Dokumen</a>
                                @else
                                    <span class="badge-xl badge-warning text-center">Tidak ada Dokumen!</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="my-4">
                <div class="row bg-white shadow p-3 mb-5 bg-white rounded">
                    <h4 class="box-title mb-5">Isi Laporan</h4>
                    {!! $complaint->body !!}
                </div>
            </div>
            <div class="box-footer">
                <a href="{{ route('manage-complaint.index') }}" class="btn btn-dark me-1">
                    <i class="ti-back-right"></i> Back
                </a>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
