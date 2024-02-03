<!doctype html>
<html lang="en">

<head>

  
  @include('frontend.layouts.partials.head')

</head>

<body class="page page-home preload">

  @include('frontend.layouts.partials.header')

  <main>

    
    @yield('content')
  </main>
  @include('frontend.layouts.partials.footer')

  @include('frontend.layouts.partials.foot')

  @stack('scripts')
  
  
</body>
</html>