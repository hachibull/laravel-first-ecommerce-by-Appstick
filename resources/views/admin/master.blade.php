<!DOCTYPE html>
<html lang="en">
@include('admin.head')
<body class="hold-transition sidebar-mini">
  @include('sweetalert::alert')


  <!-- Navbar -->
 @include('admin.header')
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
@include('admin.sidebar')
    <!-- /.content-header -->
@yield('content')
    <!-- Main content -->


</div>



<!-- REQUIRED SCRIPTS -->
@include('admin.footer')
<!-- jQuery -->
@include('admin.scripts')
</body>
</html>
