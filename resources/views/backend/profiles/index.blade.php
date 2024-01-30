@extends('backend.layouts.app')

@push('styles')
    <style>
        .card {
            cursor: pointer;
            transition: all 0.7s;
        }

        .card:hover {
            transform: scale(1.07) !important;
            box-shadow: 0 10px 20px rgba(0, 0, 0, .12), 0 5px 8px rgba(0, 0, 0, .06);
        }
    </style>
@endpush

@section('content')
    <div class="col-12 col-lg-5 col-xl-4">
        <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-img bbsr-0 bber-0"
                style="background: url({{ asset('images/full/10.jpg') }}) center center;" data-overlay="5">
                <h3 class="widget-user-username text-white">Michael Jorden</h3>
                <h6 class="widget-user-desc text-white">Designer</h6>
            </div>
            <div class="widget-user-image">
                <img class="rounded-circle" src="{{ asset('images/avatar/avatar.png') }}" alt="User Avatar">
            </div>
            <div class="box-footer">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">12K</h5>
                            <span class="description-text">FOLLOWERS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 be-1 bs-1">
                        <div class="description-block">
                            <h5 class="description-header">550</h5>
                            <span class="description-text">FOLLOWERS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4">
                        <div class="description-block">
                            <h5 class="description-header">158</h5>
                            <span class="description-text">TWEETS</span>
                        </div>
                        <!-- /.description-block -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
        </div>
        <div class="box">
            <div class="box-body box-profile">
                <div class="row">
                    <div class="col-12">
                        <div>
                            <p>Email :<span class="text-gray ps-10">{{ $user->email }}</span> </p>
                            <p>Phone :<span class="text-gray ps-10">+11 123 456 7890</span></p>
                            <p>Address :<span class="text-gray ps-10">123, Lorem Ipsum, Florida, USA</span></p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="pb-15">
                            <p class="mb-10">Social Profile</p>
                            <div class="user-social-acount">
                                <button class="btn btn-circle btn-social-icon btn-facebook"><i
                                        class="fa fa-facebook"></i></button>
                                <button class="btn btn-circle btn-social-icon btn-twitter"><i
                                        class="fa fa-twitter"></i></button>
                                <button class="btn btn-circle btn-social-icon btn-instagram"><i
                                        class="fa fa-instagram"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div>
                            <div class="map-box">
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2805244.1745767146!2d-86.32675167439648!3d29.383165774894163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c1766591562abf%3A0xf72e13d35bc74ed0!2sFlorida%2C+USA!5e0!3m2!1sen!2sin!4v1501665415329"
                                    width="100%" height="100" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
