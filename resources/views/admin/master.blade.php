<!doctype html>
<html lang="en">

@include('admin.partials.head')


@include('admin.partials.sidebar')



<body class="vertical  light  ">
    <div class="wrapper">

        @include('admin.partials.navbar')

        @include('admin.partials.sidebar')

        <main role="main" class="main-content">

            @yield('content')

        </main> <!-- main -->
    </div> <!-- .wrapper -->




    @include('admin.partials.scripts')



</body>

</html>