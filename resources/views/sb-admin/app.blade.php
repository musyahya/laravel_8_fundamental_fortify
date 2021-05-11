
<!DOCTYPE html>
<html lang="en">

@include('sb-admin/head')

<body id="page-top" class="@yield('bg-blue')">

    @hasSection ('content')
        
          <!-- Page Wrapper -->
            <div id="wrapper">

                @include('sb-admin/sidebar')

                <!-- Content Wrapper -->
                <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    @include('sb-admin/navbar')

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        @yield('content')

                    </div>
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->

                @include('sb-admin/footer')

                </div>
                <!-- End of Content Wrapper -->

            </div>
            <!-- End of Page Wrapper -->
        
    @endif

    @hasSection ('body')
        @yield('body')        
    @endif


  @include('sb-admin/scroll-top')

  @include('sb-admin/logout')

@include('sb-admin/script')

 @yield('script')

</body>

</html>
