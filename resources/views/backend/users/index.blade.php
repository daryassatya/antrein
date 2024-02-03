@extends('backend.layouts.app')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <div class="col-12">
                        <div class="d-flex flex-row justify-content-between">
                            <h4 class="box-title align-items-start flex-column">
                                {{ $page_title }}
                                <small class="subtitle">A list of User</small>
                            </h4>

                            {{-- @if (auth()->user()->can('company-create')) --}}
                            <div class="text-end">
                                <a href="{{ route('backend.user.create') }}" class="btn btn-primary btn-rounded"><i
                                        class="fa fa-plus"></i> Add New</a>
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
                                    <th style="min-width: 100px"><span class="text-dark">username</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Company</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Email</span></th>
                                    <th style="min-width: 100px" class="text-center"><span class="text-dark">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->perusahaan->nama_perusahaan }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            <a href="{{ route('backend.user.edit', $user->username) }}"
                                                class="waves-effect waves-light btn btn-warning-light btn-circle mx-5"><span
                                                    class="icon-Write"><span class="path1"></span><span
                                                        class="path2"></span></span></a>

                                            <a href="#" class="waves-effect waves-light btn btn-danger-light btn-circle"
                                                onclick="modalDelete('User', '{{ $user->name }}', '{{ route('backend.user.destroy', $user->username) }}', '{{ route('backend.user.index') }}')"><span
                                                    class="icon-Trash1 fs-18"><span class="path1"></span><span
                                                        class="path2"></span></span></a>
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
            $('#companyTable').DataTable({});
        });
    </script>
@endpush
