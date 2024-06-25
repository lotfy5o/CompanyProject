<!doctype html>
<html lang="en">

@include('admin.partials.head')


@include('admin.partials.sidebar')



<body class="vertical  light @if (LaravelLocalization::getCurrentLocale() == 'ar') rtl  @endif) ">
    <div class="wrapper">

        @include('admin.partials.navbar')

        @include('admin.partials.sidebar')

        <main role="main" class="main-content">

            @yield('content')

        </main> <!-- main -->
    </div> <!-- .wrapper -->




    @include('admin.partials.scripts')

    <script>
        function confirmDelete(id){
            if(confirm('Are you sure you want to delete this?')){
                document.getElementById('deleteForm-' + id).submit();
            }
        }
    </script>



</body>

</html>
