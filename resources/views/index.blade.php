<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta name="description" content="Mintech  IT Solutions &  Services Template">
 
  <title>DSP</title>

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@400;700;800;900&family=Roboto:wght@400;700&display=swap">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css">
  <link rel="stylesheet" href="{{secure_asset('frontend/assets/css/libraries.css')}}">
  <link rel="stylesheet" href="{{secure_asset('frontend/assets/css/style.css')}}">
</head>

<body>

    <!-- =========================
        Header 
    =========================== -->
  @include('pages.includes.header')
    <!-- ============================
        main
    ============================== -->
    @yield('content')
    <!-- ========================
      Footer
    ========================== -->
    @include('pages.includes.footer')
    <button id="scrollTopBtn"><i class="fas fa-long-arrow-alt-up"></i></button>

    
  <script src="{{asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
  <script src="{{asset('frontend/assets/js/plugins.js')}}"></script>
  <script src="{{asset('frontend/assets/js/main.js')}}"></script>
</body>

</html>