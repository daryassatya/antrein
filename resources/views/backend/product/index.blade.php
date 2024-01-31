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
                                <small class="subtitle">A list of Product</small>
                            </h4>

                            {{-- @if (auth()->user()->can('company-create')) --}}
                            <div class="text-end">
                                <a href="{{ route('backend.product.create') }}" class="btn btn-primary btn-rounded"><i
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
                                    <th style="min-width: 100px"><span class="text-dark">Product ID</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Product Name</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Price</span></th>
                                    <th style="min-width: 100px"><span class="text-dark">Product Image</span></th>
                                    <th style="min-width: 100px" class="text-center"><span class="text-dark">Action</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->product_id }}</td>
                                        <td>{{ $item->product_name }}</td>
                                        <td>{{ 'Rp. ' . number_format($item->price, 2) }}</td>
                                        <td><img src="{{ asset('product/image/' . $item->image) }}" width="100px" alt=""></td>
                                        <td>
                                            <a href="{{ route('backend.product.edit', $item->id) }}"
                                                class="waves-effect waves-light btn btn-warning-light btn-circle mx-5"><span
                                                    class="icon-Write"><span class="path1"></span><span
                                                        class="path2"></span></span></a>

                                            <a href="#" class="waves-effect waves-light btn btn-danger-light btn-circle"
                                                onclick="modalDelete('Product', '{{ $item->product_name }}', '{{ route('backend.product.destroy', $item->id) }}', '{{ route('backend.product.index') }}')"><span
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
