<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    @yield('css')
    @vite('resources/css/app.css')
    <style>
        .fade-in-section {
            opacity: 0;
            transform: translateY(10vh);
            visibility: hidden;
            transition: opacity 0.6s ease-out, transform 1.2s ease-out;
            will-change: opacity, visibility;
        }

        .fade-in-section.is-visible {
            opacity: 1;
            transform: none;
            visibility: visible;
        }
    </style>
</head>

<body class="home bg-[#F6F9FB]">
    @yield('header')
    @yield('content')
    @yield('footer')
    <script src="https://kit.fontawesome.com/a4a657385d.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
    @yield('script')
    <script>
        function checkElementLocation() {
            var $window = $(window);
            var bottom_of_window = $window.scrollTop() + $window.height();
            $('.elem').each(function (i) {
                var $that = $(this);
                var bottom_of_object = $that.position().top + $that.outerHeight();

                //if element is in viewport, add the animate class
                if (bottom_of_window > bottom_of_object) {
                    $(this).addClass('is-visible');
                }
            });
        }
        // if in viewport, show the animation
        checkElementLocation();

        $(window).on('scroll', function () {
            checkElementLocation();
        });
    </script>
</body>

</html>