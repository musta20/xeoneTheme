<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Webster - Responsive Multi-purpose HTML5 Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>{{ $setting->title }}</title>

    <!-- Favicon -->
    <link rel="shortcut icon" src="{{ asset('web/images/logoload.png') }}" />

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800" />

    <!-- Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/plugins-css.css') }}" />

    <!-- revoluation -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/revolution/css/settings.css') }}" media="screen" />

    <!-- Typography -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/typography.css') }}" />

    <!-- Shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/shortcodes/shortcodes.css') }}" />

    <!-- Style -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/style-rtl.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('sadana/style/all.min.css') }}" />

    <!-- Responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/responsive.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('web/css/responsive-rtl.css') }}" />
</head>

<body>
    <div class="wrapper">
        <!-- wrapper start -->

        <!--=================================
   preloader -->

        <div id="pre-loader">
            <img class='blinkdiv' src="{{ asset('web/images/logoload.png') }}" alt="" />
        </div>

<style>

@-webkit-keyframes blackWhite {  
  0% { filter: blur(10px); }
  50% { filter: blur(0px); }
  51% { filter: blur(10px); }
  100% { filter: blur(0px); }
}

.blinkdiv {
  
    -webkit-animation-name: blackWhite;  
    -webkit-animation-iteration-count: infinite;  
    -webkit-animation-duration: 2s; 

      transition: all 1s;

} 

</style>
  








        <x-header></x-header>

{{--  @if (Request::is('/'))

 @else
     <x-page-nav></x-page-nav>
 @endif --}}


        {{ $slot }}
    </div>
    <x-footer></x-footer>


    <div id="back-to-top">
        <a class="top arrow" href="#top"><i class="fa fa-angle-up"></i> </a>
    </div>

    <!--=================================
   javascripts -->

    <!-- jquery -->
    <script src="{{ asset('web/js/jquery-3.6.0.min.js') }}"></script>

    <!-- All plugins -->
    <script src="{{ asset('web/js/plugins-jquery.js') }}"></script>

    <!-- Plugins path -->
    <script>
        var plugin_path = "web/js/";
    </script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('web/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.actions.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.carousel.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.migration.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.navigation.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.parallax.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
    <script src="{{ asset('web/revolution/js/extensions/revolution.extension.video.min.js') }}"></script>

    <!-- revolution custom -->
    <script src="{{ asset('web/revolution/js/revolution-custom.js') }}"></script>

    <!-- custom -->
    <script src="{{ asset('web/js/custom.js') }}"></script>
</body>
</body>

</html>
