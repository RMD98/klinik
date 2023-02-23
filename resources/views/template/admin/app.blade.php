<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Calendar</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('build/assets/admin/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- fullCalendar -->
  <link rel="stylesheet" href="{{asset('build/assets/admin/plugins/fullcalendar/main.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('build/assets/admin/dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    @include('template/admin/navbar')
    @include('template/admin/sidebar')
    <div class="content-wrapper">
      @yield('content')
    </div>
      <footer class="main-footer">
          <div class="float-right d-none d-sm-block">
            <b>Version</b> 3.2.0-rc
          </div>
          <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
      </footer>

      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>
  </div>
  
<script src="{{asset('build/assets/admin/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('build/assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- jQuery UI -->
<script src="{{asset('build/assets/admin/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('build/assets/admin/dist/js/adminlte.min.js')}}"></script>
<!-- fullCalendar 2.2.5 -->
<script src="{{asset('build/assets/admin/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('build/assets/admin/plugins/fullcalendar/main.js')}}"></script>
<!-- AdminLTE for demo purposes
<script src="{{asset('build/assets/admin/dist/js/demo.js')}}"></script> -->
@stack('script')
</body>