<?php
ob_start();
header("Cache-Control: no-store, no-cache");
set_time_limit (60);

$includePath		= "./";
include_once($includePath."axCommon.php");
include_once($includePath."classes/axPaginate.cls.php");
include_once($includePath."classes/axClients.cls.php");
include_once($includePath."classes/axState.cls.php");
include_once($includePath."classes/axDistrict.cls.php");
include_once($includePath."classes/axLocation.cls.php");

include_once($includePath."classes/axCity.cls.php");

$clsaxClients	= new clsaxClients($connect, $includePath);
$clsaxClients->setPostVars();

$clsaxCity	= new clsaxCity($connect, $includePath);
$clsaxCity->setPostVars();

$clsaxState = new clsaxState($connect, $includePath);
$clsaxState->setPostVars();
$clsaxState->setGetVars();

$clsaxDistrict = new clsaxDistrict($connect, $includePath);
$clsaxDistrict->setPostVars();
$clsaxDistrict->setGetVars();

$clsaxLocation	= new clsaxLocation($connect, $includePath);
$clsaxLocation->setPostVars();
$clsaxLocation->setGetVars();

$pageTitle			= (($clsaxClients->clientId == "")?"Add":"Edit")." a Clients in ".getProductName();	
$metaDescription	= "";
$metaKeywords		= "";
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title><?php echo getTitle()?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<!-- Favicone Icon -->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
<!-- CSS -->
<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900%7CLato:400,100,200,300,500" rel="stylesheet" type="text/css">
<link href="template_assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/ionicons.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/plugin/owl.carousel.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/plugin/owl.transitions.css" rel="stylesheet" type="text/css">
<!--Main Slider-->
<link href="template_assets/css/settings.css" type="text/css" rel="stylesheet" media="screen">
<link href="template_assets/css/layers.css" type="text/css" rel="stylesheet" media="screen">
<link href="template_assets/css/style.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/responsive.css" rel="stylesheet" type="text/css">
<link href="template_assets/css/main.css" rel="stylesheet" type="text/css">
<!--Theme Color-->
<link href="template_assets/css/theme-color/default.css" rel="stylesheet" id="theme-color" type="text/css">

<link rel="stylesheet" href="./template_assets/style.css">


<link href="<?php  echo $includePath?>assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>

<script src="template_assets/js/jquery.min.js" type="text/javascript"></script>  
<script src="template_assets/js/plugin/jquery.easing.js" type="text/javascript"></script> 
<script src="template_assets/js/jquery-ui.js" type="text/javascript"></script> 
<script src="template_assets/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="template_assets/js/plugin/owl.carousel.min.js" type="text/javascript"></script> 
<script src="<?php  echo $includePath?>assets/plugins/toastr/toastr.min.js"></script>
<!-- revolution Js --> 
<script type="text/javascript" src="template_assets/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="template_assets/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="template_assets/js/jquery.revolution.js"></script> 

<script type="text/javascript" src="template_assets/js/main.js"></script> 
<!-- revolution Js --> 
<script src="template_assets/js/plugin/isotope.pkgd.min.js" type="text/javascript"></script> 
<script src="template_assets/js/plugin/masonry.pkgd.min.js" type="text/javascript"></script>
<!--<script src="template_assets/js/appointment-index-page.js" type="text/javascript"></script>-->  
<script src="template_assets/js/custom.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo $includePath?>scripts/axCommon.js"></script>

<script src="<?php echo $includePath?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>

<script type="text/javascript" src="./template_assets/chosen.min.js"></script>
<script type="text/javascript" src="<?php echo $includePath?>template_assets/scripts/slick.min.js"></script>
<script type="text/javascript" src="<?php echo $includePath?>template_assets/scripts/magnific-popup.min.js"></script>
<script type="text/javascript" src="./template_assets/jquery.jpanelmenu.js"></script>
<script type="text/javascript" src="./template_assets/tooltips.min.js"></script>
<script type="text/javascript" src="./template_assets/custom.js"></script>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyCLVFYxADqUdcuudShAAcewPFQBHwXVEtw&sensor=false&amp;libraries=places" type="text/javascript"></script>

</head>

<body>

<!--loader-->
<div id="preloader">
  <div class="sk-circle">
    <div class="sk-circle1 sk-child"></div>
    <div class="sk-circle2 sk-child"></div>
    <div class="sk-circle3 sk-child"></div>
    <div class="sk-circle4 sk-child"></div>
    <div class="sk-circle5 sk-child"></div>
    <div class="sk-circle6 sk-child"></div>
    <div class="sk-circle7 sk-child"></div>
    <div class="sk-circle8 sk-child"></div>
    <div class="sk-circle9 sk-child"></div>
    <div class="sk-circle10 sk-child"></div>
    <div class="sk-circle11 sk-child"></div>
    <div class="sk-circle12 sk-child"></div>
  </div>
</div>
<!--loader--> 
<!-- Site Wraper -->
<div class="wrapper"> 

	<?php
				
		include_once($includePath."includes/axCommonBody.inc.php"); 
	
	?>



</div>
<!-- Wrapper / End -->





</body>


</html>


<?php
function writeMain($connect, $includePath) 
{
	global $clsaxClients,$clsaxState,$clsaxDistrict,$clsaxLocation,$clsaxCity;
	$clsaxClients->postClients();
	
	if($clsaxClients->returnUrl == ""){
			$clsaxClients->returnUrl = "axLabRegistration.php";
	}
	$clsaxState->status = 1;
	$arrState = array();   
	$arrState = $clsaxState->retrieveStateArray();
	$stateList = HTMLOption2DArray($arrState,"stateId","stateName",$clsaxClients->stateId);
	
	$clsaxDistrict->status = 1;
	$arrDistrict = array();   
	$arrDistrict = $clsaxDistrict->retrieveDistrictArray();
	$districtList = HTMLOption2DArray($arrDistrict,"districtId","districtName",$clsaxClients->districtId);
	
	$clsaxCity->status = 1;
	$arrCity = array();   
	$arrCity = $clsaxCity->retrieveCityArray();
	$cityList = HTMLOption2DArray($arrCity,"cityId","cityName",$clsaxClients->cityId);

	$clsaxLocation->status = 1;
	$arrLocation = array(); 
	$arrLocation = $clsaxLocation->retrieveLocationArray();
	$locationList = HTMLOption2DArray($arrLocation,"locationId","locationName",$clsaxClients->locationId);
	
	$clsaxClients->returnUrl	 = $clsaxClients->returnUrl;
	include_once($includePath."templates/axLabRegistration.tmpl.php");
}
ob_end_flush(); 
?>