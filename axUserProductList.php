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

include_once($includePath."classes/axPatient.cls.php");

$clsaxProduct	= new clsaxProduct($connect, $includePath);
$clsaxProduct->setPostVars();

$clsaxSubClients	= new clsaxSubClients($connect, $includePath);
$clsaxSubClients->setPostVars();


$clsaxPatient	= new clsaxPatient($connect, $includePath);
$clsaxPatient->setPostVars();

$clsaxPrescriptions	= new clsaxPrescriptions($connect, $includePath);
$clsaxPrescriptions->setPostVars();

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
<!--Theme Color-->
<link href="template_assets/css/theme-color/default.css" rel="stylesheet" id="theme-color" type="text/css">

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
<!--<script src="template_assets/js/appointment-index-page.js" type="text/javascript"></script>-->  
<script src="template_assets/js/custom.js" type="text/javascript"></script>
<script language="javascript" src="<?php echo $includePath?>scripts/axCommon.js"></script>

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
	global $arrPageRange,$clsaxPrescriptions,$clsaxProduct,$clsaxPatient,$clsaxSubClients;
	
	$clsaxProduct	= 	new clsaxProduct($connect, $includePath);
	$clsaxProduct	->	sortDirection = "ASC";
	$clsaxProduct	->	postProduct();
	$pageRange				= 	HTMLOptionKeyValArray($arrPageRange,$clsaxProduct->pageSize);
	$arrProduct			= 	array();
	$clsaxProduct->submitted = 1;
	
	

	if($clsaxProduct->submitted==1){
		if($clsaxProduct->productId <> ""){
		$arrProductSubClients = array();   
		$clsaxProduct->locationId = $_GET["locationId"];
		$arrProductSubClients = $clsaxProduct->retrieveProductSubClients($clsaxProduct->productId);
		
		}
	
	}
	
	
		$arrProductType = array();   
		$arrProductType = $clsaxProduct->retrieveProductType();
		$productTypeList = HTMLOption2DArray($arrProductType,"productTypeId","productTypeName",$clsaxPrescriptions->productTypeId);
		
		$arrPatient = array();   
		$clsaxPatient->userId = $clsaxPrescriptions->userId;
		$arrPatient = $clsaxPatient->retrievePatientArray();
		$patientList = HTMLOption2DArray($arrPatient,"patientId","patientName",$clsaxPrescriptions->patientId);
	
	include_once($includePath."templates/axUserProductList.tmpl.php");

}

ob_end_flush(); 

?>