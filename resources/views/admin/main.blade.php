<!DOCTYPE html>
<html>
<head>

    @include('admin.includes.meta')
    @include('admin.includes.head')

</head>
<body>
    <div class="container">

        <header class="header">
            @yield('header')
        </header>

        <div id="main" class="row">

            <!-- sidebar content -->
            <div id="sidebar" class="col-md-2">
                @include('admin.includes.sidebar')
            </div>

            <!-- main content -->
            <div id="content" class="col-md-10">
                @yield('content')
            </div>

        </div>
            @include('admin.includes.footer')
            @include('admin.includes.js')
            @yield('script')
    </div>
</body>
</html>