@extends('backend.layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="mdi mdi-view-grid"></i></a></li>
    <li class="breadcrumb-item active" aria-current="page">Complaints List</li>
@endsection

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-12">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="box-title align-items-start flex-column">
                                Complaint categories
                                <small class="subtitle">List of complaints</small>
                            </h4>

                            {{-- @if (auth()->user()->can('company-create')) --}}
                            <div class="text-end">
                                <a href="{{ route('dashboard.categories.complaint-categories.create') }}"
                                    class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Add New</a>
                            </div>
                            {{-- @endif --}}
                        </div>
                    </div>

                    <div class="col-12 mt-5">
                        @include('components.flash-message')
                    </div>
                </div>

                <div class="box-body">
                    <div class="table-responsive">
                        <table id="companyTable" class="table no-border">
                            <thead>
                                <tr class="text-uppercase bg-lightest">
                                    <th style="max-width: 19px"><span class="text-dark">No</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Name</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Slug</span></th>
                                    <th style="min-width: 100px" class="text-center"><span class="text-dark">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td class="text-center">
                                            <span class="text-dark">
                                                {{ $loop->iteration }}
                                            </span>
                                        </td>

                                        <td class="text-start">
                                            <span class="text-dark">
                                                {{ $category->name }}
                                            </span>
                                        </td>

                                        <td class="text-start">
                                            <span class="text-fade">
                                                {{ $category->slug }}
                                            </span>
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('dashboard.categories.complaint-categories.edit', $category->slug) }}"
                                                class="waves-effect waves-light btn btn-sm btn-warning-light btn-circle mx-5"><span
                                                    class="icon-Write"><span class="path1"></span><span
                                                        class="path2"></span></span></a>
                                            {{-- <a href="#"
                                                class="waves-effect waves-light btn btn-sm btn-danger-light btn-circle"
                                                onclick="modalDelete('Categories', 'Nama Category : {{ $category->slug }}', '{{ route('dashboard.categories.complaint-categories.destroy', $category->slug) }}', '{{ route('dashboard.categories.complaint-categories.index') }}')"><span
                                                    class="icon-Trash1 fs-18"><span class="path1"></span><span
                                                        class="path2"></span></span></a> --}}

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
@endsection

@push('scripts')
    <script src="{{ asset('assets/vendor_components/datatable/datatables.min.js') }}"></script>

    <script>
        $(function() {
            $('#companyTable').DataTable();
        });
    </script>
@endpush
