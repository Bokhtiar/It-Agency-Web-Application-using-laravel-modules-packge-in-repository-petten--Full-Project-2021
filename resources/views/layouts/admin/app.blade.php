<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Tach88</title>
  <!-- Favicon -->
  <link rel="icon" href="{{asset('admin')}}/assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('admin')}}/assets/vendor/quill/dist/quill.core.css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="{{asset('admin')}}/assets/css/argon.css?v=1.1.0" type="text/css">

</head>
<body>
    @include('layouts.admin._sidebar')
    @include('layouts.admin._header')
        <main class="py-4">
            @yield('admin_content')
        </main>
    @include('layouts.admin._footer')


        <script src="{{asset('admin')}}/assets/vendor/jquery/dist/jquery.min.js"></script>
        <script src="{{asset('admin')}}/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{asset('admin')}}/assets/vendor/js-cookie/js.cookie.js"></script>
        <script src="{{asset('admin')}}/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="{{asset('admin')}}/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
        <!-- Optional JS -->
        <script src="{{asset('admin')}}/assets/vendor/chart.js/dist/Chart.min.js"></script>
        <script src="{{asset('admin')}}/assets/vendor/chart.js/dist/Chart.extension.js"></script>
        <!-- Argon JS -->
        <script src="{{asset('admin')}}/assets/js/argon.js?v=1.1.0"></script>
        <!-- Demo JS - remove this in your project -->
        <script src="{{asset('admin')}}/assets/js/demo.min.js"></script>

        <script>
            new FroalaEditor('textarea#froala-editor')
        </script>

</body>
</html>
