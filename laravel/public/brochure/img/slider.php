    <section id="home">
      <div class="container-fluid p-0">
       
        <!-- Slider Revolution Start -->
        <div class="rev_slider_wrapper">
          <div class="rev_slider" data-version="5.0">
            <ul>
			<?php
    date_default_timezone_set("Asia/Kolkata");
    $mysql_hostname = "localhost";
    $mysql_user = "galaxy";
    $mysql_password = "Galaxy123$";
    $mysql_database = "christiancsicollege";
    $conn = new mysqli($mysql_hostname, $mysql_user, $mysql_password, $mysql_database);


                       
                            $sql = "select * from slideshow";
                        
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                            ?>
	             <!-- SLIDE 1 -->
	            <li data-index="rs-1" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="admin/photo/slideshow/<?php echo $row['photo']; ?>" data-rotate="0" data-saveperformance="off" data-title="Slide 1" data-description="">
	                <!-- MAIN IMAGE -->
	                <img src="admin/photo/slideshow/<?php echo $row['photo']; ?>"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-bgparallax="10" data-no-retina>
	                <!-- LAYERS -->

	                <!-- LAYER NR. 1 -->
	                <div class="tp-caption tp-resizeme text-uppercase  bg-dark-transparent text-white font-raleway pl-30 pr-30"
	                  id="rs-1-layer-1"
	                
	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-90']" 
	                  data-fontsize="['28']"
	                  data-lineheight="['54']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:400; border-radius: 30px;">C.S.I Kanyakumari Diocese 
	                </div>

	                <!-- LAYER NR. 2 -->
	                <div class="tp-caption tp-resizeme text-uppercase bg-theme-colored-transparent text-white font-raleway pl-30 pr-30"
	                  id="rs-1-layer-2"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['-20']"
	                  data-fontsize="['48']"
	                  data-lineheight="['70']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1000" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 7; white-space: nowrap; font-weight:700; border-radius: 30px;">CSI Christian College of Physiotherapy
	                </div>
 <!-- LAYER NR. 4 -->
	                <div class="tp-caption tp-resizeme" 
	                  id="rs-2-layer-4"

	                  data-x="['left']"
	                  data-hoffset="['35']"
	                  data-y="['middle']"
	                  data-voffset="['95']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;"
	                  data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power4.easeInOut;" 
	                  data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
	                  data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" 
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:1px;"><a class="btn btn-colored btn-lg btn-theme-colored pl-20 pr-20" href="#">
</a> 
	                </div>

	                <!-- LAYER NR. 3 -->
	                <div class="tp-caption tp-resizeme text-white text-center" 
	                  id="rs-1-layer-3"

	                  data-x="['center']"
	                  data-hoffset="['0']"
	                  data-y="['middle']"
	                  data-voffset="['50']"
	                  data-fontsize="['16']"
	                  data-lineheight="['28']"
	                  data-width="none"
	                  data-height="none"
	                  data-whitespace="nowrap"
	                  data-transform_idle="o:1;s:500"
	                  data-transform_in="y:100;scaleX:1;scaleY:1;opacity:0;"
	                  data-transform_out="x:left(R);s:1000;e:Power3.easeIn;s:1000;e:Power3.easeIn;"
	                  data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
	                  data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;"
	                  data-start="1400" 
	                  data-splitin="none" 
	                  data-splitout="none" 
	                  data-responsive_offset="on"
	                  style="z-index: 5; white-space: nowrap; letter-spacing:0px; font-weight:400;">The church of South India institution for higher learning and <br />holistic development of the individuals and the society..
	                </div>

	               
	            </li>

 <?php

                        }
                        ?>
            </ul>
          </div><!-- end .rev_slider -->
        </div>
        <!-- end .rev_slider_wrapper -->
        <script>
          $(document).ready(function(e) {
            $(".rev_slider").revolution({
              sliderType:"standard",
              sliderLayout: "auto",
              dottedOverlay: "none",
              delay: 5000,
              navigation: {
                  keyboardNavigation: "off",
                  keyboard_direction: "horizontal",
                  mouseScrollNavigation: "off",
                  onHoverStop: "off",
                  touch: {
                      touchenabled: "on",
                      swipe_threshold: 75,
                      swipe_min_touches: 1,
                      swipe_direction: "horizontal",
                      drag_block_vertical: false
                  },
                arrows: {
                  style:"zeus",
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  tmp:'<div class="tp-title-wrap">    <div class="tp-arr-imgholder"></div> </div>',
                  left: {
                    h_align:"left",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  },
                  right: {
                    h_align:"right",
                    v_align:"center",
                    h_offset:30,
                    v_offset:0
                  }
                },
                bullets: {
                  enable:true,
                  hide_onmobile:true,
                  hide_under:600,
                  style:"metis",
                  hide_onleave:true,
                  hide_delay:200,
                  hide_delay_mobile:1200,
                  direction:"horizontal",
                  h_align:"center",
                  v_align:"bottom",
                  h_offset:0,
                  v_offset:30,
                  space:5,
                  tmp:'<span class="tp-bullet-img-wrap">  <span class="tp-bullet-image"></span></span><span class="tp-bullet-title">{{title}}</span>'
                }
              },
              responsiveLevels: [1240, 1024, 778],
              visibilityLevels: [1240, 1024, 778],
              gridwidth: [1170, 1024, 778, 480],
              gridheight: [600, 768, 960, 720],
              lazyType: "none",
              parallax: {
                  origo: "slidercenter",
                  speed: 1000,
                  levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 100, 55],
                  type: "scroll"
              },
              shadow: 0,
              spinner: "off",
              stopLoop: "on",
              stopAfterLoops: 0,
              stopAtSlide: -1,
              shuffle: "off",
              autoHeight: "off",
              fullScreenAutoWidth: "off",
              fullScreenAlignForce: "off",
              fullScreenOffsetContainer: "",
              fullScreenOffset: "0",
              hideThumbsOnMobile: "off",
              hideSliderAtLimit: 0,
              hideCaptionAtLimit: 0,
              hideAllCaptionAtLilmit: 0,
              debugMode: false,
              fallbacks: {
                  simplifyAll: "off",
                  nextSlideOnWindowFocus: "off",
                  disableFocusListener: false,
              }
            });
          });
        </script>
        <!-- Slider Revolution Ends -->
      </div>
    </section>