<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>{{ env('APP_NAME') . ' - ' . ($title ?? '') }} </title>

<!-- Vendors Style-->
<link rel="stylesheet" href="{{ asset('css/vendors_css.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor_plugins/jquery-confirm/jquery-confirm.min.css') }}">

<!-- Style-->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel="stylesheet" href="{{ asset('css/app.css') }}">
<link rel="stylesheet" href="{{ asset('css/skin_color.css') }}">

<script src="https://cdn.jsdelivr.net/npm/autonumeric@4.1.0"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />


<!-- Pignose Calender -->
{{-- <link rel="stylesheet" href="{{ asset('assets/vendor_plugins/pg-calender/css/pignose.calendar.min.css') }}"> --}}

<!-- Font Awesome 6 -->
<script src="https://kit.fontawesome.com/2b5ebc41ed.js" crossorigin="anonymous"></script>

<style>
    #listFiltered {
        list-style-type: none;
        padding: 0;
        margin: 0;
        max-height: 300px;
        overflow-y: auto;
    }

    #listFiltered ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    #listFiltered li a {
        margin: 0;
        background-color: #f6f6f6;
        padding: 2px 5px 2px 17px;
        text-decoration: none;
        font-size: 15px;
        color: black;
        display: block
    }

    .background {
        background-color: #858282 !important;
        color: white !important;
    }

    #listFiltered li ul li a {
        margin: 0;
        background-color: #f6f6f6;
        padding: 1px 5px 1px 25px;
        text-decoration: none;
        font-size: 14px;
        color: rgb(92, 92, 92);
        display: block
    }

    #listFiltered li ul li a:hover:not(.header) {
        background-color: #eee;
    }

    #listFiltered li a:hover:not(.header) {
        background-color: #eee;
    }


    table.dataTable {
        border-collapse: collapse !important;
    }

    .bd-deco {
        background: #FFA500;
        color: white;
    }

    .text-deco {
        color: #FFA500;
    }

    .form-select {
        display: block !important;
    }
</style>
@stack('styles')
