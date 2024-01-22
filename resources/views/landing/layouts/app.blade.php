<!doctype html>
<html lang="en">

<!-- Mirrored from preview.uiuxassets.com/opalin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 17:10:17 GMT -->

<head>
    @include('layouts.partials.head')
</head>

<body class="page page-home preload">

    <header class="header-main dark">
        <nav>
            @include('layouts.partials.navbar')
        </nav>
    </header>

    <main>
        <!-- Main content -->
        @yield('content')
        <!-- /.content -->

    </main>

    {{-- Footer --}}
    @include('layouts.partials.footer')

    {{-- Scirpt --}}
    @include('layouts.partials.script')
    
</body>

<!-- Mirrored from preview.uiuxassets.com/opalin/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 17:10:21 GMT -->

</html>
