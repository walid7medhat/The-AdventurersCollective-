<footer class="main-footer">
  
</footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{url('/')}}/public/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{url('/')}}/public/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="{{url('/')}}/public/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{url('/')}}/public/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{url('/')}}/public/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{url('/')}}/public/admin/dist/js/demo.js"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
@yield('script')

@if(\Session::has('success'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: '{{session()->get('success')}}',
  showConfirmButton: false,
  timer: 1500
})

</script>
@endif
@if(\Session::has('error'))
<script>
  Swal.fire({
  position: 'center',
  icon: 'error',
  title: '{{session()->get('error')}}',
  showConfirmButton: false,
  timer: 1500
})

</script>
@endif

</body>
</html>
