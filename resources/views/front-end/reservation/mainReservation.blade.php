<!DOCTYPE html>
<html>
<head>
    @include('front-end.includes.meta')
    <title>@yield('title')</title>
    @include('front-end.includes.css')
</head>

<body>

<div class="container-fluid" id="reservationBody">
    @yield('content')
</div>

@include('front-end.includes.js')
@yield('script')

@include('front-end.includes.footer')

</body>
</html>