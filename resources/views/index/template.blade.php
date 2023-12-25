<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--icon/logo-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" 
    integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" 
    crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- js -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <!-- home css -->
    <link href="{{ url('/css/home.css') }}" rel="stylesheet">

    <!-- tailwindcss -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- bootstrap-icons -->
    <link href="{{ URL('css/bootstrap-icons.css') }}" rel="stylesheet">

    <title>ALF SAHEL</title>
    @yield('css')

</head>
<body>
        <main class="section"> 
            <div class="container"> @yield('content') </div> 
        </main> 

        <style>

            /* css scroll */
            .hide-scroll-bar {
                -ms-overflow-style: none;
                scrollbar-width: none;
            }
            .hide-scroll-bar::-webkit-scrollbar {
                display: none;
            }

            h1 .lytgreen-head 
            {
                color: #009048;
            }

        </style>

    <!-- js -->
    <script >
        $(document).ready(function(){
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover:false,
                responsive: [{
                    breakpoint: 768,
                    setting: {
                        slidesToShow:4
                    }
                }, {
                    breakpoint: 520,
                    setting: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
    
</body>
</html>