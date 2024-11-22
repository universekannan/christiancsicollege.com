     <link rel="shortcut icon" type="image/icon" href="{!! asset('img/logo.png') !!}"/>    
    <!-- Bootstrap css file-->
    <link type="text/css" rel="stylesheet" href="{!! asset('css/bootstrap.min.css') !!}" />
    <!-- Font awesome css file-->
    <link type="text/css" rel="stylesheet" href="{!! asset('css/font-awesome.min.css') !!}" />       
    <!-- Default Theme css file -->
    <link type="text/css" rel="stylesheet" id="switcher" href="{!! asset('css/themes/default-theme.css') !!}" />   
    <!-- Slick slider css file -->
    <link type="text/css" rel="stylesheet" href="{!! asset('css/slick.css') !!}" /> 
   
  <link type="text/css" rel="stylesheet" href="{!! asset('css/menustyle.css') !!}" />
    <!-- Main structure css file -->
    <link type="text/css" rel="stylesheet" href="{!! asset('css/style.css') !!}" />
   <link type="text/css" rel="stylesheet" href="{!! asset('css/slider/style.css') !!}" />
    <link type="text/css" rel="stylesheet" href="{!! asset('css/jquery.simplyscroll.css') !!}" media="all" />
   <link type="text/css" rel="stylesheet" href="{!! asset('css/flexisel.css') !!}"/>
     <style>

.circle_s{
  color: #f3d014;
    font-size: 10px;
}
.b_header{
  background-color: #5e1b24;
    width: fit-content;
    opacity: .8;
}
.navbar-fixed-bottom, .navbar-fixed-top {
  position: sticky!important;
  z-index: 1030;
}
.navbar {
  margin-bottom: unset!important;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.top-container {
  
  /*padding: 30px;*/
  text-align: center;
}

.header {
  padding: 6px 16px;
}
.sticky {
  position: fixed;
  top: 0;
  width: 100%;
}

.sticky + .content {
  padding-top: 102px;
}
#cssmenu ul ul li a {
  background: #2c2a2bd9!important;
}
 #wowslider-container1 .ws-title{
      /*background-color: #6f312fd6;*/
    /*border-radius: 25px;*/
    font-family: 'FontAwesome';
    }
    .ws-title span{
    background-color: #6f312fd6;
    border-radius: 35px;
    padding: 5px 10px;
    }
   </style>
   @yield('third_party_stylesheets')

@stack('page_css')
</head>
  <body>  
 @include('layouts.header')

    @yield('content')
	
 @include('layouts.footer')

@yield('third_party_scripts')

<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>    
    <!-- Bootstrap default js -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- slick slider -->
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>    
    <script type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>      
    <!-- counter -->
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- Doctors hover effect -->
    <script type="text/javascript" src="{{ asset('js/snap.svg-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hovers.js') }}"></script>
    <!-- Custom JS -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/menuscript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('engine1/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('engine1/wowslider.js') }}"></script>
  <script type="text/javascript" src="{{ asset('engine1/script.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.simplyscroll.min.js') }}"></script>


@stack('page_scripts')

    <script type="text/javascript">
(function($) {
  $(function() {
    $("#scroller").simplyScroll({
      customClass: 'custom',
      direction: 'backwards',
      pauseOnHover: false,
      frameRate: 20,
      speed: 300
    });
  });
})(jQuery);
</script>

<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>
<script type="text/javascript">
$(window).load(function() {
    $("#flexiselDemo3").flexisel({
        visibleItems: 4,
        animationSpeed: 1000,
        autoPlay: true,
        autoPlaySpeed: 3000,            
        pauseOnHover: true,
        enableResponsiveBreakpoints: true,
        responsiveBreakpoints: { 
            portrait: { 
                changePoint:480,
                visibleItems: 1
            }, 
            landscape: { 
                changePoint:640,
                visibleItems: 2
            },
            tablet: { 
                changePoint:768,
                visibleItems: 2
            }
        }
    });    
});
</script>
<script>
  $('.count').each(function () {
    $(this).prop('Counter',0).animate({
        Counter: $(this).text()
    }, {
        duration: 4000,
        easing: 'swing',
        step: function (now) {
            $(this).text(Math.ceil(now));
        }
    });
});
</script>
 <script type="text/javascript">
    
    $(document).ready(function(){
    $("#filter").keyup(function(){
        var filter = $(this).val(), count = 0;
        $("nav ul li").each(function(){
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).fadeOut();
            } else {
                $(this).show();
                count++;
            }
        });
        var numberItems = count;
        $("#filter-count").text("Number of Comments = "+count);
    });
});
</script>
<!-- <script type="text/javascript">
$(document).ready(function () {
    $("body").on("contextmenu",function(e){
        return false;
    });
  
});
</script> -->

<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-92838068-1', 'auto');
  ga('send', 'pageview');

</script>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Organization",
  "url": "http://www.millennialschoice.in/",
  "contactPoint": [{
    "@type": "ContactPoint",
    "telephone": "+91 81488 14142",
    "contactType": "customer service"
  }]
}
</script>

<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Review",
  "itemReviewed": {
    "@type": "Thing",
    "name": "Wedding"
  },
  "author": {
    "@type": "Person",
    "name": "Arun"
  },
  "reviewRating": {
    "@type": "Rating",
    "ratingValue": "7",
    "bestRating": "10"
  },
  "publisher": {
    "@type": "Organization",
    "name": "Millennials Choice"
  }
}
</script>
<script>
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
}
</script>
  </body>


</html>
