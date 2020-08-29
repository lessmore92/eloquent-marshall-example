<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ isset($page_title) ? $page_title . ' | ' :  '' }} {{config('app.name')}}</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    @yield('css')
</head>
<body>
<!-- Navigation -->
@include('components.nav-bar')

<!-- Page Content -->
@yield('content')
<!-- /.container -->

<!-- Footer -->
@include('components.footer')

<!-- Bootstrap core JavaScript -->
<script src="{{asset('js/app.js')}}"></script>
@yield('js')
</body>
</html>
