<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta http-equiv="X-UA-Compatible" content="ie=edge"> --}}
    <title>@yield('title','Fruit Station')</title>

<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/templatemo.css') }}" rel="stylesheet" >
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" >

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link href="{{ asset('css/fontawesome.min.css') }}" rel="stylesheet" >

</head>
<body class="d-flex flex-column h-100">
    @include('customer.layouts.header')

<!-- Begin page content -->
<main class="flex-shrink-0">
    <div class="container">
      @yield('content')
    </div>
</main>

@include('customer.layouts.footer')

<script src="js/bootstrap.bundle.min.js" ></script>
<!-- Start Script -->
<script src="js/jquery-1.11.0.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/templatemo.js"></script>
<script src="js/custom.js"></script>
<!-- End Script -->

</body>
</html>
