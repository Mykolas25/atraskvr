<!DOCTYPE html>
<html>
<head>
    @include('frontend.menu')
    @include('frontend.includes.meta')
    @include('frontend.includes.head')

</head>
{{--<header>@include('frontend.includes.header')</header>--}}
<body>
    <div class="container">

        <header class="header">
            @yield('header')
        </header>

        <div id="main" class="row">

            <!-- sidebar content -->
            {{--<div id="sidebar" class="col-md-2">--}}
                {{--@include('frontend.includes.sidebar')--}}
            {{--</div>--}}

            <!-- main content -->
            <div id="content" class="col-md-10">
                @yield('content')
            </div>

        </div>
            @include('frontend.includes.footer')
            @include('frontend.includes.js')
            @yield('script')
    </div>
</body>
</html>