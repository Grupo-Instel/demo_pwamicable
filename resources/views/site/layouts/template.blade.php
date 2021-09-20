<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MiCable</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Icons-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('./css/footer.css')}}">
    

    <!-- Slick -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
    
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/footerStyle.css') }}">
    
    <style>
        html {
            min-height: 100%;
            position: relative;
        }
        body {
            margin: 0;
            margin-bottom: 40px;
        }

        .navbar{
            background: black;
        }
        .footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            font-size: 20px;   
            color: white    
        }
        
        /* Make the image fully responsive */
        .carousel-inner img {
            width: 100%;
            height: 100%;
        }        

    </style>

    

    <!-- Theoplayer -->
        <!-- Chromecast SDK -->
        <script type="text/javascript" src="//www.gstatic.com/cv/js/sender/v1/cast_sender.js?loadCastFramework=1"></script>
        <!-- THEOplayer library and css -->
        <script type="text/javascript" src="https://cdn.myth.theoplayer.com/93c9b561-6745-4e44-bc7a-6bb0df67608d/THEOplayer.js"></script>
        <link rel="stylesheet" type="text/css" href="https://cdn.myth.theoplayer.com/93c9b561-6745-4e44-bc7a-6bb0df67608d/ui.css" />
        
    <!-- ------- -->
    
    <!-- Ultimate Player>
    <link rel="stylesheet" type="text/css" href="{{asset('content/global.css')}}">
    <script type="text/javascript" src="{{ asset('java/FWDUVPlayer.js')}}"></script -->
    
    <!-- Bootstrap Select -->
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <!-- -- -- -- -->
</head>


<body style="background-color: {{ session('backgroundColor') }}">    

   

    @yield('content')
    
    <br><br><br><br>
    <footer class="footer">
        @include('site.layouts.partials.footer')
    </footer>
   
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous"></script>
    
    <!-- ionic icons -->
    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!--brand icons-->
    <script src="https://code.iconify.design/1/1.0.7/iconify.min.js"></script>
   
    <!-- Bootstrap Select -->
         <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

        <!-- (Optional) Latest compiled and minified JavaScript translation files -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>
    <!-- -- -- -- -- -- -->


    <script type="text/javascript">
        $('.slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: {{ session('slideItem') }},
            slidesToScroll: 4,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 4,
                        infinite: true,
                        dots: true
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    </script>

    <!-- Include this after the sweet alert js file -->
    @include('sweetalert::alert')
    <!-- Referencias a section en player.blade.php -->
    @yield('js_theoplayer')
    @yield('slidePlayer')
    
</body>
</html>
