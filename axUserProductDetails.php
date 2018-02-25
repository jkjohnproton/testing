<?php
ob_start();
header("Cache-Control: no-store, no-cache");
set_time_limit (60);
$includePath		= "./";
include_once($includePath."axCommon.php");
include_once($includePath."classes/axPaginate.cls.php");
include_once($includePath."classes/axPrescriptions.cls.php");
include_once($includePath."classes/axProduct.cls.php");
include_once($includePath."classes/axPackage.cls.php");
include_once($includePath."classes/axSubClients.cls.php");
include_once($includePath."classes/axState.cls.php");
include_once($includePath."classes/axDistrict.cls.php");
include_once($includePath."classes/axLocation.cls.php");
include_once($includePath."classes/axCity.cls.php");

include_once($includePath."classes/axPatient.cls.php");

include_once($includePath."classes/axUser.cls.php");

include_once($includePath."classes/axSidebar.cls.php");


$clsaxProduct	= new clsaxProduct($connect, $includePath);
$clsaxProduct->setPostVars();

$clsaxSubClients	= new clsaxSubClients($connect, $includePath);
$clsaxSubClients->setPostVars();

$clsaxPatient	= new clsaxPatient($connect, $includePath);
$clsaxPatient->setPostVars();

$clsaxState = new clsaxState($connect, $includePath);
$clsaxState->setPostVars();
$clsaxState->setGetVars();

$clsaxDistrict = new clsaxDistrict($connect, $includePath);
$clsaxDistrict->setPostVars();
$clsaxDistrict->setGetVars();

$clsaxLocation	= new clsaxLocation($connect, $includePath);
$clsaxLocation->setPostVars();
$clsaxLocation->setGetVars();

$clsaxCity	= new clsaxCity($connect, $includePath);
$clsaxCity->setPostVars();



$page = "home";
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
<link href="http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" rel="stylesheet" type="text/css">
<link href="http://fonts.googleapis.com/css?family=lato:400,100,200,300,500" rel="stylesheet" type="text/css">
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
<!--Theme Color-->
<link href="template_assets/css/theme-color/default.css" rel="stylesheet" id="theme-color" type="text/css">

<link href="<?php  echo $includePath?>assets/plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css"/>


<link href="<?php  echo $includePath?>template_assets/star-rating.min.css" rel="stylesheet" type="text/css"/>

<link href="<?php echo $includePath?>assets/plugins/bootstrap-datetimepicker-master/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

<script src="template_assets/js/jquery.min.js" type="text/javascript"></script> 
<script src="template_assets/js/plugin/jquery.easing.js" type="text/javascript"></script> 
<script src="template_assets/js/jquery-ui.js" type="text/javascript"></script> 
<script src="template_assets/js/bootstrap.min.js" type="text/javascript"></script> 
<script src="template_assets/js/plugin/owl.carousel.min.js" type="text/javascript"></script> 
<!-- revolution Js --> 
<script type="text/javascript" src="template_assets/js/jquery.themepunch.tools.min.js"></script> 
<script type="text/javascript" src="template_assets/js/jquery.themepunch.revolution.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.slideanims.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.layeranimation.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.navigation.min.js"></script> 
<script type="text/javascript" src="template_assets/extensions/revolution.extension.parallax.min.js"></script> 
<script type="text/javascript" src="template_assets/js/jquery.revolution.js"></script> 
<!-- revolution Js --> 
<script src="template_assets/js/plugin/isotope.pkgd.min.js" type="text/javascript"></script> 
<script src="template_assets/js/plugin/masonry.pkgd.min.js" type="text/javascript"></script> 
<script src="template_assets/js/custom.js" type="text/javascript"></script>

<script src="<?php echo $includePath?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>

<script src="<?php  echo $includePath?>assets/plugins/toastr/toastr.min.js"></script>

<script type="text/javascript"  src="<?php echo $includePath?>assets/plugins/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
		 <script type="text/javascript"  src="<?php echo $includePath?>assets/plugins/bootstrap-datetimepicker-master/js/bootstrap-datetimepicker.js" charset="UTF-8"></script> 
</head>

<body>
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
	global $arrPageRange,$clsaxProduct,$clsaxSubClients,$clsaxPatient,$clsaxState,$clsaxDistrict,$clsaxLocation,$clsaxCity;

	
	$arrProduct	=	array();

	$clsaxProduct			= new clsaxProduct($connect, $includePath);
	
	$clsaxProduct->postProduct();
	
	$clsaxSubClients->postSubClients();
	
	
	$arrSubClientsRating			= 	array();
	$clsaxSubClients->submitted = 1;
	if($clsaxSubClients->submitted==1)
	{	$clsaxSubClients->isApproved = 1;
		if($clsaxSubClients->isRating == 1)
			$arrSubClientsRating		= 	$clsaxSubClients->retrieveSubClientsRatingArray();
	}
	if(count($arrSubClientsRating)>0){
		$totalSubclientsRating=0;
		foreach($arrSubClientsRating as $row){
			
			$totalSubclientsRating = $row["rating"] + $totalSubclientsRating;
		
		}
		$clsaxSubClients->subclientsRating = $totalSubclientsRating/count($arrSubClientsRating) ;
	}
	
 	$clsaxProduct->submitted = 1;
	$clsaxProduct->status = 1;
	if($clsaxProduct->submitted == 1){
		$arrProduct = $clsaxProduct->retrieveProductArray();
	}
	
	$clsaxPatient->postPatient();
	
	$arrPatient = array();   
	$clsaxPatient->userId = $_SESSION["AXUSERID"];
	$arrPatient = $clsaxPatient->retrievePatientArray();
	$patientList = HTMLOption2DArray($arrPatient,"patientId","patientName",$clsaxPatient->patientId);
	
	$clsaxState->status = 1;
	$arrState = array();   
	$arrState = $clsaxState->retrieveStateArray();
	$stateList = HTMLOption2DArray($arrState,"stateId","stateName",$clsaxPatient->stateId);
	
	$clsaxDistrict->status = 1;
	$arrDistrict = array();   
	$arrDistrict = $clsaxDistrict->retrieveDistrictArray();
	$districtList = HTMLOption2DArray($arrDistrict,"districtId","districtName",$clsaxPatient->districtId);

	$clsaxLocation->status = 1;
	$arrLocation = array(); 
	$arrLocation = $clsaxLocation->retrieveLocationArray();
	$locationList = HTMLOption2DArray($arrLocation,"locationId","locationName",$clsaxPatient->locationId);
	
	$clsaxCity->status = 1;
	$arrCity = array();   
	$arrCity = $clsaxCity->retrieveCityArray();
	$cityList = HTMLOption2DArray($arrCity,"cityId","cityName",$clsaxPatient->cityId);

	$clsaxUser	= new clsaxUser($connect, $includePath);
	
	$clsaxUser->checkFlag1 = 1;
	
	$clsaxUser->subClientId = $clsaxSubClients->subClientId;
	
	$clsaxUser->productIds = $clsaxProduct->productIds;
	
	$clsaxUser->productTypeId = $clsaxProduct->productTypeId;
	
	$clsaxUser->postUser();
	
	$clsaxSidebar	= 	new clsaxSidebar($connect, $includePath);
	$clsaxSidebar	->	sortDirection = "ASC";
	$arrSidebar			= 	array();
	$clsaxSidebar->status = 1;
	$clsaxSidebar->submitted = 1;
	if($clsaxSidebar->submitted==1)
	{
		$arrSidebar		= 	$clsaxSidebar->retrieveSidebarArray();
	}
	
	
	include_once($includePath."templates/axUserProductDetails.tmpl.php");

}

ob_end_flush(); 

?>