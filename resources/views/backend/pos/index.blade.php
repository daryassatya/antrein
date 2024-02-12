@extends('backend.layouts.app')

@push('styles')
    <style>
        .cursor-pointer {
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
                                    <img je src="{{ asset('product/image/' . $product->image) }}" class="card-img-top"
                                        alt="Product Image" height="250px" width="250px">
                                    <div class="card-body p-0 text-center">
                                        <p class="card-title mb-0">{{ $product->product_name }}</p>
                                        <span style="font-size: 10px; margin: 0"> IDR
                                            {{ number_format($product->price, 2) }}</span>
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

                <div class="box-body overflow-auto" style="max-height: 300px;">
                    {{-- loop data here --}}
                    <div class="row" id="item-chart-area">
                        {{-- <div class="col-12">
                            <div class="card col-12 mb-3">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="http://127.0.0.1:8000/product/image/yhKWsjXs3R3wBDw9rqCi.png"
                                            class="img-fluid rounded-start" alt="..." style="height: 100px">
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
                        </div> --}}
                        {{-- <div class="col-12">
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
                        </div> --}}
                    </div>

                </div>
                <div class="box-footer text-center">
                    {{-- <span>Current User: Dimas Aryasatya</span> --}}
                    <hr>
                    <div class="row">
                        <div class="col-6 text-end">Total Harga:</div>
                        <div class="col-6 mx-auto" id="total-harga"></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-6 text-end">Total Pajak:</div>
                        <div class="col-6 mx-auto" id="total-pajak"></div>
                    </div>
                    <hr>
                    <h5 id="total-price"></h5>
                    <button type="button" class="btn btn-outline-primary">Checkout ></button>
                </div>
            </div>
            <div class="box">
                <div class="box-header with-border d-flex">
                    <h4 class="box-title">Queue List</h4>
                </div>

                <div class="box-body">
                    <div class="list-group">
                        @foreach ($queues as $queue)
                        <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <img height="25" width="25" src="{{ asset('images/'.$queue->user->image) }}"
                                    alt="...">
                                </div>
                                <div class="flex-grow-1 ms-3">
                                    <span>{{ $loop->iteration }}. {{ $queue->user->name }}</span>
                                    <span class="d-flex flex-end">Current Queue</span>
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MODAL --}}
    <div id="modalProductQuantity" class="modal fade" tabindex="-1" role="dialog"
        aria-labelledby="modalProductQuantityLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modalProductQuantityLabel">Input Quantity Product</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Input Quantity</label>
                        <input type="hidden" name="product_id" min="1" class="form-control" id="product_id"
                            id="product_id">
                        <input type="number" name="qty" min="1" class="form-control" id="qty"
                            value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" onclick="addCItem()">Submit</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        let tempCart = [];

        function showModalQuantity(productID) {
            $('#product_id').val(productID);
            $('#qty').val(0);
            let myModal = new bootstrap.Modal(document.getElementById('modalProductQuantity'));
            myModal.show();
        }

        async function addCItem() {
            // let myModal = new bootstrap.Modal(document.getElementById('modalProductQuantity'));
    
            // // Call hide() to prevent showing the modal immediately
            // myModal.hide();
            $('#modalProductQuantity').modal('hide');
            const productId = $('#product_id').val();
            const qty = $('#qty').val();
            console.log(qty == null);
            if (qty < 1) {
                alert("Tidak boleh kurang dari 1")
            } else {
                let cartList = await getCart({
                    "product_id": productId,
                    "qty": qty
                });


                $('#item-chart-area').html('');
                var totalHarga = 0;
                
                $.each(cartList, function(index, item) {
                            $.ajax({
                                type: 'POST',
                                url: @JSON(route('backend.get-product')),
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },
                                data: {
                                    "product_id": item.product_id,
                                },
                                async: false,
                                success: function(response) {
                                    totalHarga += response.price;
                                    $('#item-chart-area').append(`<div class="col-12">
                    <div class="card col-12 mb-3">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('product/image') }}/${ response.image }"
                                    class="img-fluid rounded-start" alt="..." style="height: 100px">
                            </div>
                            <div class="col-6">
                                <div class="card-body">
                                    <h5 class="card-title">${ response.product_name }</h5>
                                    <span style="font-size: 15px; margin: 0">Rp${numberWithCommas(response.price)}.00</span>
                                </div>
                            </div>
                            <div class="col-2 my-auto">
                                <h5>x${item.qty}</h5>
                            </div>
                        </div>
                    </div>
                </div>`);
                                },
                                error: function(response) {
                                    $.alert(response.responseJSON.message);
                                    console.log(response);
                                }
                            });
                    document.getElementById('')
                    $('#modalProductQuantity').hide()
                    console.log();
                });
                var totalPajak = totalHarga*0.11;
                $('#total-harga').text(numberWithCommas(totalHarga)+'.00')
                $('#total-pajak').text(numberWithCommas(totalPajak)+'.00')
                $('#total-price').text(numberWithCommas(totalHarga+totalPajak) +'.00')
                
            }

        }

        function getCart(data) {
            return $.ajax({
                type: 'POST',
                url: @JSON(route('backend.add-item')),
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: data,
                cache: false
            });
        }

        function numberWithCommas(x) {
            return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
        }
        

    </script>
@endpush
