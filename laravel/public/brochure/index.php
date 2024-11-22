<?php
include "config.php";
?>
<!doctype html>
<html>
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
   
    <!-- viewport -->
    <meta content="width=device-width,initial-scale=1" name="viewport">
       
    <!-- title -->
    <link rel="shortcut icon" type="image/icon" href="../img/logo.png"/>
  <title>CSI Christian College</title>      
        
    <!-- add css and js for flipbook -->
    <link type="text/css" href="css/style.css" rel="stylesheet">
	<link type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Play:400,700">
    <script src="js/jquery.js"></script>
    <script src="js/turn.js"></script>              
	<script src="js/jquery.fullscreen.js"></script>
    <script src="js/jquery.address-1.6.min.js"></script>
    <script src="js/wait.js"></script>
	<script src="js/onload.js"></script>
    <!-- style css  -->
	<style>	
	    html,body {
          margin: 0;
          padding: 0;
		  overflow:auto !important;
        }
	</style>
      
	</head>
 
<body>
 
<div style="width:100%;margin:0 auto">
<div id="fb5-ajax">	
       <div data-current="book5" class="fb5" id="fb5">              
            <div class="fb5-bcg-book"></div>                      
            <div id="fb5-container-book">
                <div id="fb5-book">
				    <?php
                         $sql = "select * from brochure";
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div >
                         <div class="fb5-cont-page-book">
                              <div class="fb5-page-book">
                                <img class="fb5-double fb5-first" style="width: 100%;" src="img/pages/<?php echo $row['photo']; ?>" >
                              </div> 
                         </div>
                    </div>
					 <?php } ?>
              </div>
              <a class="fb5-nav-arrow prev"></a>
              <a class="fb5-nav-arrow next"></a>
			  </div>
   </div>
    <script>    
    jQuery('#fb5').data('config',
    {
    "page_width":"750",
    "page_height":"600",
	"email_form":"",
    "zoom_double_click":"1",
    "zoom_step":"0.06",
    "double_click_enabled":"true",
    "tooltip_visible":"true",
    "toolbar_visible":"true",
    "gotopage_width":"30",
    "deeplinking_enabled":"true",
    "rtl":"false",
    'full_area':'false',
	'lazy_loading_thumbs':'false',
	'lazy_loading_pages':'false'
    })
    </script>
</div>
</div> 
       
</body>
</html>