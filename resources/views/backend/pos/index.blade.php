@extends('backend.layouts.app')

@push('styles')
<style>
    .cursor-pointer{
        cursor: pointer;
    }
</style>
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
                        @foreach ($products as $product)
                            <div class="col cursor-pointer" onclick="showModalQuantity('{{ $product->id }}')">
                                <div class="card">
                                    <img je src="{{ asset('product/image/' . $product->image) }}" class="card-img-top" alt="Product Image" width="250px">
                                    <div class="card-body p-0 text-center">
                                        <p class="card-title mb-0">{{ $product->product_name }}</p>
                                        <span style="font-size: 10px; margin: 0"> IDR {{ number_format($product->price, 2) }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-12">
                            {{ $products->links('vendor.pagination.custom') }}
                        </div>
                    </div>
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

    {{-- MODAL --}}
    <div id="modalProductQuantity" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalProductQuantityLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title" id="modalProductQuantityLabel">Input Quantity Product</h4>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
                    <div class="form-group">
                        <label for="">Input Quantity</label>
                        <input type="number" name="qty" min="1" class="form-control" id="qty">
                    </div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-success">Submit</button>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('scripts')
<script>
    function showModalQuantity(productID)
    {
        $('#product_id').html(productID);
        $('#qty').val('');
        var myModal = new bootstrap.Modal(document.getElementById('modalProductQuantity'));
        myModal.show();
    }
</script>
@endpush
