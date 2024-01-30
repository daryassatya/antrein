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
    <div class="row">
        <div class="col-xl-4">
            <a href="#" class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-dark fw-700 h2 mb-2 mt-5"></div>
                            <div class="fs-16">User</div>
                        </div>
                        <div class="bg-secondary rounded-circle h-80 w-80 text-center l-h-100">
                            <span class="text-success fs-40 icon-User"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a href="#" class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-dark fw-700 h2 mb-2 mt-5"></div>
                            <div class="fs-16">Post</div>
                        </div>
                        <div class="bg-success-light rounded-circle h-80 w-80 text-center l-h-100">
                            <span class="text-dark fs-40 icon-Article"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-xl-4">
            <a href="#" class="box">
                <div class="box-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <div class="text-dark fw-700 h2 mb-2 mt-5"></div>
                            <div class="fs-16">Aduan Masuk</div>
                        </div>
                        <div class="bg-danger-light rounded-circle h-80 w-80 text-center l-h-100">
                            <span class="icon-Mail text-warning fs-40"></span>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">
                        Grafik Jumlah Pengaduan Perbulan
                    </h4>
                </div>
                <div class="box-body">
                    <div id="charts_widget_43_chart"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title">
                        Kategori Pengaduan Yang Masuk
                    </h4>
                </div>
                <div class="box-body pb-0">
                    <div id="earning-chart" class="min-h-250"></div>
                    <div>
                        <hr>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header">
                    <h4 class="box-title align-items-start flex-column">
                        New Arrivals
                        <small class="subtitle">More than 400+ new members</small>
                    </h4>
                </div>
                <div class="box-body">
                    <div class="table-responsive">
                        <table class="table no-border">
                            <thead>
                                <tr class="text-uppercase bg-lightest">
                                    <th style="min-width: 250px" class="text-center"><span
                                            class="text-dark">Title&Slug</span>
                                    </th>
                                    <th style="min-width: 100px" class="text-center"><span class="text-fade">Excerpt</span>
                                    </th>
                                    <th style="min-width: 100px" class="text-center"><span class="text-fade">Complaint
                                            Category</span></th>
                                    <th style="min-width: 130px" class="text-center"><span class="text-fade">status</span>
                                    </th>
                                    <th style="min-width: 120px" class="text-center"></th>
                                </tr>
                            </thead>
                            <tbody>
                               
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $('body').addClass('sidebar-collapse');
    </script>
@endpush
