<!DOCTYPE html>
<html lang="en">
  <head>

  
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>Vali Admin - Free Bootstrap 4 Admin Template</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="{{url('dashboard_files/')}}/css/main.css">


    <script src="{{url('dashboard_files/')}}/js/jquery-3.3.1.min.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    
    <!-- noty -->
    <link rel="stylesheet" href="{{ asset('dashboard_files/plugins/noty/noty.css')}}">
    <script src="{{ asset('dashboard_files/plugins/noty/noty.min.js')}}"></script>



    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    @include('layouts.dashboard._header')
     

    <!-- Sidebar menu-->
    @include('layouts.dashboard._aside')

    <main class="app-content">

      @include('dashboard.partials._sessions')

      @yield('content')

    </main>


    <!-- Essential javascripts for application to work-->
    <script src="{{url('dashboard_files/')}}/js/popper.min.js"></script>
    <script src="{{url('dashboard_files/')}}/js/bootstrap.min.js"></script>
    <script src="{{url('dashboard_files/')}}/js/main.js"></script>
    <!-- The javascript plugin to display page loading on top-->
    <script src="{{url('dashboard_files/')}}/js/plugins/pace.min.js"></script>
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="{{url('dashboard_files/')}}/js/plugins/chart.js"></script>

    {{--movie--}}
    <script src="{{ asset('dashboard_files/js/custom/movie.js') }}"></script>
    {{--select 2--}}
    <script src="{{ asset('dashboard_files/js/plugins/select2.min.js') }}"></script>


 
    
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(document).ready(function () {

        $(document).on('click', '.delete', function (e) {
            e.preventDefault();

            var that = $(this);

            var n = new Noty({
                text: "Confirm deleting record",
                killer: true,
                buttons: [
                    Noty.button('Yes', 'btn btn-success mr-2', function () {
                        that.closest('form').submit()
                    }),

                    Noty.button('No', 'btn btn-danger', function () {
                        n.close();
                    }),
                ]
            });

            n.show();
        });

    });//end of document ready

    //select2
    $('.select2').select2({
        'width': '100%'
    });

</script>


  </body>
</html>





 