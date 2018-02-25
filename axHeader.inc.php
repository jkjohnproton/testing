
<?php

$includePath		= "./";

	include_once($includePath."classes/axSettings.cls.php");

	$clsaxSettings 				= new clsaxSettings($connect, $includePath);

			

	$clsaxSettings->retrieveSettings(1);

	 

?>




 <!-- HEADER -->
  <header id="header" class="header header-1">
    <div id="top-bar" class="top-bar-section top-bar-bg-color">
      <div class="container">
        <div class="row">
          <div class="col-sm-12"> 
            <!-- Top Contact -->
            <div class="top-contact link-hover-black hidden-xs"> <a href="#"> <i class="fa fa-phone"></i>+56 (0) 012 345 6789</a> <a href="#"> <i class="fa fa-envelope"></i>letcheck@support.com</a></div>
            <!-- Top Social Icon -->
            <div class="top-social-icon icons-hover-black">
              <ul>
                <li> <a href="#"> <i class="ion-power"></i> Login </a> / <a href="#"> Signup </a> </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="nav-wrap">
      <div class="container">
        <div class="row">
          <div class="col-sm-3">
            <div class="logo"> <a href="javascript:avoid(0);"><img src="template_assets/images/logo1.png" alt="Letcheck"></a> </div>
            <!-- Phone Menu button -->
           <button id="menu" class="menu visible-xs"></button>
          </div>
          <div class="col-sm-9 nav-bg">
            <nav class="navigation">
              <ul>
                <li><a href="index.php">Home</a> <i class="ion-ios-plus-empty visible-xs"></i>
                  
                </li>
                <li><a href="#">About us</a></li>
                <li><a href="javascript:avoid(0);">services</a> <i class="ion-ios-plus-empty visible-xs"></i>
                  <ul class="sub-nav">
                    <li> <a href="#">services</a> </li>
                    <li> <a href="#">service Details</a> </li>
                  </ul>
                </li>
                <li><a href="javascript:avoid(0);">Doctors</a> <i class="ion-ios-plus-empty visible-xs"></i>
                  <ul class="sub-nav">
                    <li> <a href="#">Doctors</a> </li>
                    <li> <a href="#">Doctor Details</a> </li>
                  </ul>
                </li>
                <li><a href="javascript:avoid(0);">bolg</a> <i class="ion-ios-plus-empty visible-xs"></i>
                  <ul class="sub-nav">
                    <li> <a href="#">Blog</a> </li>
                    <li> <a href="#">Blog Details</a> </li>
                  </ul>
                </li>
                <li><a href="javascript:avoid(0);">pages</a> <i class="ion-ios-plus-empty visible-xs"></i>
                  <ul class="sub-nav">
                    <li> <a href="#">appointment</a> </li>
                    <li class="sub-menu"> <a href="javascript:avoid(0);">Gallery</a>  <i class="ion-ios-plus-empty visible-xs"></i> 
					<ul class="sub-nav">
                    <li> <a href="#">gallery-col-2</a> </li>
                    <li> <a href="#">gallery-col-3</a> </li>
					<li> <a href="#">gallery-col-4</a> </li>
					<li> <a href="#">gallery-masonry</a> </li>
                  </ul>
					</li>
					 <li class="sub-menu"> <a href="javascript:avoid(0);">real-stories</a>  <i class="ion-ios-plus-empty visible-xs"></i> 
					<ul class="sub-nav">
                    <li> <a href="#">real-stories-col-2</a> </li>
                    <li> <a href="#">real-stories-col-3</a> </li>
					<li> <a href="#">real-stories-col-4</a> </li>
					<li> <a href="#">story-detail</a> </li>
                  </ul>
					</li>
                    <li> <a href="#">login</a> </li>
					  <li> <a href="#">register</a> </li>
					<li> <a href="#">calender</a> </li>
					<li> <a href="#">time-table</a> </li>
					<li> <a href="#">coming-soon</a> </li>
                  
					<li> <a href="#">faq</a> </li>
                    <li> <a href="#">404 page</a> </li>
                  </ul>
                </li>
                <li><a href="#">contact us</a></li>
              </ul>
            </nav>
		  </div>
        </div>
      </div>
    </div>
  </header>
  <!-- END HEADER --> 	

<!-- Main Header end --> 