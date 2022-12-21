<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('assets/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/vendors/css/vendor.bundle.base.css')}}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href=" {{asset('assets/images/favicon.ico')}}" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  </head>

<body>
    <div id="app" class="">

        @yield('content')

    </div>


    <script src=" {{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src=" {{asset('assets/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src=" {{asset('assets/js/off-canvas.js')}}"></script>
    <script src=" {{asset('assets/js/hoverable-collapse.js')}}"></script>
    <script src=" {{asset('assets/js/misc.js')}}"></script>

    <script src=" {{asset('assets/js/dashboard.js')}}"></script>
    <script src=" {{asset('assets/js/todolist.js')}}"></script>
</body>


<footer class="ftco-footer ftco-section img">

</footer>


</html>
