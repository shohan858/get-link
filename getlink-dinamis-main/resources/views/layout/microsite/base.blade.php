<!DOCTYPE html>
<html lang="en">

@include('layout.microsite._head')

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layout.microsite._sidebar')
        <div id="content-wrapper" class="d-flex flex-column">
            @include('layout.microsite._navbar')
            <div id="content">
    
                <!-- Begin Page Content -->
                <div class="container-fluid">
            @include('sweetalert::alert')
            <!-- Main Content -->
            @yield('konten')
            <!-- End of Main Content -->
                </div>
            </div>
            <!-- Footer -->
            @include('layout.microsite._footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

     <!-- Bootstrap core JavaScript-->
     <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
     <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 
     <!-- Core plugin JavaScript-->
     <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
 
     <!-- Custom scripts for all pages-->
     <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
 
     <!-- Page level plugins -->
     <script src="{{ asset('admin/vendor/chart.js/Chart.min.js') }}"></script>
 
     <!-- Page level custom scripts -->
     <script src="{{ asset('admin/js/demo/chart-area-demo.js') }}"></script>
     <script src="{{ asset('admin/js/demo/chart-pie-demo.js') }}"></script>
 

</body>

</html>






