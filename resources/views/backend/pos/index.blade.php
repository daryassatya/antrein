@extends('backend.layouts.app')

@section('breadcumb')
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}"><i class="mdi mdi-view-grid"></i></a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('mainmenu') }}">Main Menu</a></li>
    <li class="breadcrumb-item active" aria-current="page">Create</li>
@endsection

@push('styles')
@endpush

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Menu Lists</h4>
                </div>

                <div class="box-body">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card">
                                <img je src="https://decotatoo.systems/images/product/981699866232.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-0 text-center">
                                    <p class="card-title mb-0">TYPHOON</p>
                                    <span style="font-size: 10px; margin: 0"> IDR 338,949.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img je src="https://decotatoo.systems/images/product/541698750131.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-0 text-center">
                                    <p class="card-title mb-0">ORIGIN (BIG)</p>
                                    <span style="font-size: 10px; margin: 0">IDR 338,949.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img je src="https://decotatoo.systems/images/product/161698721883.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-0 text-center">
                                    <p class="card-title mb-0">QUENELLE</p>
                                    <span style="font-size: 10px; margin: 0">IDR 338,949.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img je src="https://decotatoo.systems/images/product/221698721935.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-0 text-center">
                                    <p class="card-title mb-0">NOEL SAVARIN</p>
                                    <span style="font-size: 10px; margin: 0">IDR 387,370.00 </span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img je src="https://decotatoo.systems/images/product/651698722072.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-0 text-center">
                                    <p class="card-title mb-0">SIGNATURE</p>
                                    <span style="font-size: 10px; margin: 0">IDR 338,949.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                                <img je src="https://decotatoo.systems/images/product/321698380795.png" class="card-img-top"
                                    alt="...">
                                <div class="card-body p-0 text-center">
                                    <p class="card-title mb-0">TED-Y'S</p>
                                    <span style="font-size: 10px; margin: 0">IDR 338,949.00</span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="box-footer d-flex justify-content-center m-0 p-0 text-center">
                    <nav class="m-0 p-0" aria-label="...">
                        <ul class="pagination m-0 p-0">
                            <li class="page-item disabled">
                                <a class="page-link">Previous</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="box">
                <div class="box-header with-border">
                    <h4 class="box-title">Purchase Order</h4>
                </div>

                <div class="box-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card col-12 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://decotatoo.systems/images/product/161698721883.png"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <h5 class="card-title">QUENELLE</h5>
                                            <span style="font-size: 15px; margin: 0">IDR 338,949.00</span>
                                        </div>
                                    </div>
                                    <div class="col-2 my-auto">
                                        <h5>1x</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="card col-12 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="https://decotatoo.systems/images/product/651698722072.png"
                                            class="img-fluid rounded-start" alt="...">
                                    </div>
                                    <div class="col-6">
                                        <div class="card-body">
                                            <h5 class="card-title">QUENELLE</h5>
                                            <span style="font-size: 15px; margin: 0">IDR 338,949.00</span>
                                        </div>
                                    </div>
                                    <div class="col-2 my-auto">
                                        <h5>1x</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="box-footer text-center">
                    <span>Current User: Dimas Aryasatya</span>
                    <hr>
                    <div class="row">
                        <div class="col-6 text-end">All items price:</div>
                        <div class="col-6 mx-auto">IDR 677,898.00</div>
                    </div>
                    <div class="row">
                        <div class="col-6 text-end">Shipment price:</div>
                        <div class="col-6 mx-auto">IDR 100,000.00</div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-6 text-end">Tax price:</div>
                        <div class="col-6 mx-auto">IDR 77,000.00</div>
                    </div>
                    <hr>
                    <span class="fw-bold" style="font-size: 15px; margin: 0 10px 0 0">Total IDR 854,898.00</span>
                    <button type="button" class="btn btn-outline-primary">Checkout ></button>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border d-flex">
                    <h4 class="box-title">Queue List</h4>
                </div>

                <div class="box-body">
                    <div class="list-group">
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img height="25" width="25" src="{{ asset('images/profile1.jpg') }}"
                                        alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span>1. Dimas Aryasatya</span>
                                    <span class="d-flex flex-end">Current Queue</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img height="25" width="25" src="{{ asset('images/profile2.jpg') }}"
                                        alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span>2. Alandra Ravi</span>
                                </div>
                            </div>
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img height="25" width="25" src="{{ asset('images/profile3.jpg') }}"
                                        alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span>3. Eza Faizal Gibran</span>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
