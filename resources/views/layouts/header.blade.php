<a class="scrollToTop" href="#"><i class="fa fa-angle-double-up"></i></a>
<!--=========== BEGIN HEADER SECTION ================-->
<header id="header">
   <div class="menu_area">
      <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
         <div class="container top-container">
            <div class="navbar-header">
               <div class="col-md-2">
                  <img src="{!! asset('img/bg/header_logo.png') !!}" tittel="Christian College Of Physiotherapy">
               </div>
               <div class="col-md-10">
                  <a class="navbar-brand" href="home"><img  src="{!! asset('img/bg/header_text.png') !!}" alt="CSI christian college" title="CSI christian college" /></a>   
               </div>
            </div>
         </div>
         <div class="menu-part header" style="background: #b50505!important;" id="myHeader">
            <div id='cssmenu'>
               <ul>
                  <li><a href="{{ url('home') }}">HOME</a> </li>
                  <li class="has-sub">
                     <a href="#">ABOUT</a>
                     <ul>
                        <li id="bewnn"><a href="{{ url('about') }}">About CCP</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('correspondent_messag') }}e">Correspondent Message</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('principal_message') }}">Principal Message</a>
                        </li>
                     </ul>
                  </li>
                  <li ><a href="admission">ADMISSION </a></li>
                  <li class="has-sub">
                     <a href="#">COURSE</a>
                     <ul>
                        <li  id="bewnn"><a href="{{ url('bpt') }}">Bachelor of Physiotherapy 
                           (BPT)</a>
                        </li>
                     </ul>
                  </li>
                  <li class="has-sub">
                     <a href="#">BPT DEPARTMENT</a>
                     <ul>
                        <li  id="bewnn"><a href="{{ url('anatomy') }}">Anatomy</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('physiology') }}">Physiology</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('exercise_therapy') }}">Exercise Therapy</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('massage_and_manipulative_therapy') }}">Massage &  Manipulative therapy</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('electrotherapy') }}">Electrotherapy</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('cardiology_and_intensive_care_unit') }}">Cardiology & Intensive Care Unit</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('orthopaedics') }}">Orthopaedics</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('laser_therapy') }}">Laser Therapy</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('neurology') }}">Neurology</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('rehabilitation') }}">Rehabilitation</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('fitness_and_yoga') }}">Fitness & Yoga</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('meditation_hall') }}">Meditation Hall</a>
                        </li>
                        <li  id="bewnn"><a href="{{ url('library') }}">Library</a>
                        </li>
                     </ul>
                  </li>
                  <li><a href="{{ url('facilities') }}">FACILITIES</a></li>
                  <li><a href="{{ url('brochure') }}">BROCHURE</a></li>
                  <li><a href="{{ url('gallery') }}">GALLERY </a></li>
                  <li><a href="{{ url('contact') }}">CONTACT US</a></li>
               </ul>
            </div>
         </div>
      </nav>
   </div>
   <!-- END MENU -->    
</header>