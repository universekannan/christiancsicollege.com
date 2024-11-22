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
   
    <script type="text/javascript" src="{{ asset('js/slick.min.js') }}"></script>
    <script type="text/javascript" type="text/javascript" src="{{ asset('js/modernizr.custom.79639.js') }}"></script>
   
    <script type="text/javascript" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('js/snap.svg-min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/hovers.js') }}"></script>

    <!-- Custom JS -->
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/tabber.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/menuscript.js') }}"></script>

    <script type="text/javascript" src="inc/gallery.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bootstrap-modalmanager.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bootstrap-modal.js') }}"></script>
	
	<script type="text/javascript" src="{{ asset('js/galleria/galleria-1.4.7.min.js') }}"></script>
  
@stack('page_scripts')
  <script type="text/javascript">
    $(document).ready(function() {
    $("#wedding").modal({
        show: false,
        backdrop: 'static'
    });
    });
        $(function() {
        $('.thumbnail').click(function(event){
		//----------------------- GALLERIA ---------------------------------
			Galleria.loadTheme('js/galleria/galleria.classic.min.js');					
			Galleria.ready(function() {
				if($('.galleria-fscr').length==0){
					var gallery = this;
					this.addElement('fscr');
					this.appendChild('stage','fscr');
					var fscr = this.$('fscr')
						.click(function() {
							gallery.toggleFullscreen();
						});
					this.addIdleState(this.get('fscr'), { opacity:0 });
					gallery.resize();
					this.attachKeyboard({
						left: this.prev,
						right: this.next
					});
					 //------- Add close Button ---------
        this.addElement('close');
        this.appendChild('stage','close');
        this.$('close').addClass('glyphicon glyphicon-remove');
        var close = this.$('close')
            .click(function() {
            	gallery.destroy();
                $('#wedding').modal("hide");
                $('#wedding').data('modal', null);
                $(".modal-body").val('');
                //$('#wedding').css('top','-100%');
            });
        //------------------------------------
				}
			});
			
				var eventGroup = event.target.attributes['data-type'].value;
				//alert(hash);
				$("#wedding").modal({
				        show: false,
				        backdrop: 'static'
				});
				$(".modal-body").val('');
				$.getJSON("admin/json08f7.html?title="+eventGroup, function(result){
					 $('#wedding').on('shown', function () {
					 	Galleria.run('#galleria',{
						dataSource:result,
						width: '100%', height: 500, showCounter: false, imageCrop: true, fullscreenCrop: false, imagePan: true, debug:false, keepSource: false, responsive:true
						});	
					});
					
					
					
				});
			});
        });
		//----------------------------------------------------------------------------------------------
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
    //$('#wedding').css('top','-100%');
    var thumbsSpacing = 10;
    var topspacing = 70;

	$('.filter').css('margin-bottom', thumbsSpacing + 'px');
	$('.thumbnail').addClass('showThumb').addClass('fancybox').attr('rel', 'group');

	var category = '';
	//alert(category);
	if(category === ""){
	category = 'all';
	}
	filterThumbs(category);
	$('a.sortLink').removeClass('selected');
	$('a.sortLink').each(function() {
		var a = $(this).data('category');
		if( a === category){
		$(this).addClass('selected');
		}
	});
	positionThumbs();
	setInterval(checkViewport, 750);

	function checkViewport() {

		var photosWidth = $('.photos').width(),
			thumbsContainerWidth = $('.thumbnail_wrap').width(),
			thumbnailWidth = $('a.thumbnail:first-child').outerWidth();

		if ( photosWidth < thumbsContainerWidth ) {
			positionThumbs();
		}

		if ( (photosWidth - thumbnailWidth) > thumbsContainerWidth ) {
			positionThumbs();
		}
	}

	function filterThumbs(category) {
		
		$('a.thumbnail').each(function() {
			var thumbCategory = $(this).data('categories');

			if ( category === 'all' ) {
				$(this).addClass('showThumb').removeClass('hideThumb').attr('rel', 'group');
			} else {
				if ( thumbCategory.indexOf(category) !== -1 ) {
					$(this).addClass('showThumb').removeClass('hideThumb').attr('rel', 'group');
				} else {
					$(this).addClass('hideThumb').removeClass('showThumb').attr('rel', 'none');
				}
			}
		});

		positionThumbs();

	}

	function positionThumbs() {

		$('a.thumbnail.hideThumb').animate({
			'opacity': 0
		}, 500, function() {
			$(this).css({
				'display': 'none',
				'top': '0px',
				'left': '0px'
			});
		});

		var containerWidth = $('.photos').width(),
			thumbRow = 0,
			thumbColumn = 0,
			thumbWidth = $('.thumbnail img:first-child').outerWidth() + thumbsSpacing,
			thumbHeight = $('.thumbnail img:first-child').outerHeight() + topspacing,
			maxColumns = Math.floor( containerWidth / thumbWidth );

		$('a.thumbnail.showThumb').each(function(index){
			var remainder = ( index%maxColumns ) / 100,
				maxIndex = 0;

			if( remainder === 0 ) {
				if( index !== 0 ) {
					thumbRow += thumbHeight;
				}
				thumbColumn = 0;
			} else {
				thumbColumn += thumbWidth;
			}

			$(this).css('display', 'block').animate({
				'opacity': 1,
				'top': thumbRow + 'px',
				'left': thumbColumn + 'px'
			}, 500);

			var newWidth = thumbColumn + thumbWidth,
				newHeight = thumbRow + thumbHeight;
			$('.thumbnail_wrap').css({
				'width': newWidth + 'px',
				'height': newHeight + 'px'
			});
		});

		//findFancyBoxLinks();
	}
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
<script type="text/javascript" src="{{ asset('js/jquery.flexisel.js') }}"></script>

  </body>


</html>
