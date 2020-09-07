<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Netflixify</title>


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!--font awesome-->
    <link rel="stylesheet" href="{{asset('front/')}}/css/font-awesome.min.css">

    <!--bootstrap-->
    <link rel="stylesheet" href="{{asset('front/')}}/css/bootstrap.min.css">

    <!--vendor css-->
    <link rel="stylesheet" href="{{asset('front/')}}/css/vendor.min.css">


    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,500,700&display=swap" rel="stylesheet">

    <!--main styles -->
    <link rel="stylesheet" href="{{asset('front/')}}/css/main.min.css">
    <style>
         .heart-shape{
            position: relative;
            width: 13px;
            height: 13px;
            -webkit-transform: rotate(42deg);
            -moz-transform: rotate(42deg);
            -ms-transform: rotate(42deg);
            -o-transform: rotate(42deg);
            transform: rotate(42deg);
            background-color: #fff;
            }
.heart-shape:before,
.heart-shape:after{
  position: absolute;
  width: 13px;
  height: 13px;
  content: '';
  -webkit-border-radius: 50%;
  -moz-border-radius: 50%;
  -o-border-radius: 50%;
  border-radius: 50%;
  background-color: #fff;
}
.heart-shape:before{
  bottom: 0px;
  left: -5px;
}
.heart-shape:after{
  top: -5px;
  right: 0px;
}
 
    </style>
</head>

<body>

     

        @yield('content')
      

        <!--jquery-->
        <script src="{{asset('front/')}}/js/jquery-3.4.0.min.js"></script>

        <!--bootstrap-->
        <script src="{{asset('front/')}}/js/bootstrap.min.js"></script>
        <script src="{{asset('front/')}}/js/popper.min.js"></script>

        <!--vendor js-->
        <script src="{{asset('front/')}}/js/vendor.min.js"></script>

        <!--main scripts-->
        <script src="{{asset('front/')}}/js/main.min.js"></script>

        <!-- playes js -->
        <script src="{{asset('front/')}}/js/playerjs.js"></script>

        <script src="{{asset('front/')}}/js/custom/movie.js"></script>

        <script>

        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(document).ready(function () {

                $("#banner .movies").owlCarousel({
                    loop: true,
                    nav: false,
                    items: 1,
                    dots: false,
                });

                $(".listing .movies").owlCarousel({
                    loop: true,
                    nav: true,
                    stagePadding: 50,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 3
                        },
                        900: {
                            items: 3
                        },
                        1000: {
                            items: 4
                        }
                    },
                    dots: false,
                    margin: 15,
                    loop: true,
                });

            });
        </script>

    @stack('scripts')

    </body>

    </html>


 

 