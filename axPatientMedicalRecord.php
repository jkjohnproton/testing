<?php
ob_start();
header("Cache-Control: no-store, no-cache");
set_time_limit (60);
$includePath		= "./";
include_once($includePath."axCommon.php");
include_once($includePath."classes/axUserMedicalReport.cls.php");
include_once($includePath."classes/axPatient.cls.php");
include_once($includePath."classes/axDisease.cls.php");
include_once($includePath."classes/axDistrict.cls.php");
include_once($includePath."classes/axLocation.cls.php");
include_once($includePath."classes/axProduct.cls.php");

include_once($includePath."classes/axSubClients.cls.php");

$clsaxUserMedicalReport	= new clsaxUserMedicalReport($connect, $includePath);
$clsaxUserMedicalReport->setPostVars();

$pageTitle			= (($clsaxUserMedicalReport->userId == "")?"Add":"Edit")." a Patient Medical Report in ".getProductName();	
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


<link href="template_assets/table_css/style.css" rel="stylesheet" type="text/css">

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
<script src="template_assets/jquery.form.min.js" type="text/javascript"></script>
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
	global $clsaxUserMedicalReport,$arrMedication,$arrFamilyDisease,$arrExercise,$arrSmoking,$arrDrinking,$arrDiet;
	
	$clsaxProduct	= new clsaxProduct($connect, $includePath);
	$clsaxProduct->setPostVars();
	
	$clsaxSubClients	= new clsaxSubClients($connect, $includePath);
	$clsaxSubClients->setPostVars();
	
	$clsaxDistrict = new clsaxDistrict($connect, $includePath);
	$clsaxDistrict->setPostVars();
	$clsaxDistrict->setGetVars();
	
	$clsaxDisease = new clsaxDisease($connect, $includePath);
	$clsaxDisease->setPostVars();
	$clsaxDisease->setGetVars();
	$clsaxDisease->status=1;
	$arrDisease		= 	$clsaxDisease->retrieveDiseaseArray();
	
	$clsaxLocation	= new clsaxLocation($connect, $includePath);
	$clsaxLocation->setPostVars();
	$clsaxLocation->setGetVars();
	
	$clsaxPatient	= new clsaxPatient($connect, $includePath);
	
	$arrPatient = array();   
	$clsaxPatient->sortDirection = "ASC";
	$clsaxPatient->userId = $_SESSION["AXUSERID"];
	$arrPatient = $clsaxPatient->retrievePatientArray();
	
	$clsaxDistrict->status = 1;
	$arrDistrict = array();   
	$arrDistrict = $clsaxDistrict->retrieveDistrictArray();
	

	$clsaxLocation->status = 1;
	$arrLocation = array(); 
	$arrLocation = $clsaxLocation->retrieveLocationArray();
	
	
	$clsaxPatient->setPostVars();

	$clsaxPatient->postPatient();
	
	$locationList = HTMLOption2DArray($arrLocation,"locationId","locationName",$clsaxPatient->locationId);
	$districtList = HTMLOption2DArray($arrDistrict,"districtId","districtName",$clsaxPatient->districtId);
	$patientList = HTMLOption2DArray($arrPatient,"patientId","patientName",$clsaxPatient->patientId);
	
	$diseaseList = HTMLOption2DArray($arrDisease,"diseaseId","diseaseName",$clsaxPatient->diseaseId);

	if($clsaxPatient->patientId	==	""){
		$clsaxPatient->retrieveFirstInsertedPatient($clsaxPatient->userId);
	}
	if($clsaxPatient->patientId){
		$clsaxPatient->medicalReportId = "";
		$clsaxPatient->weight = "";
		$clsaxPatient->height = "";
		$clsaxPatient->familyDisease = "";
		$clsaxPatient->otherDisease = "";
		$clsaxPatient->exercise = "";
		$clsaxPatient->smoking = "";
		$clsaxPatient->alcohol = "";
		$clsaxPatient->cholesterol = "";
		$clsaxPatient->sugar = "";
		$clsaxPatient->liver = "";
		$clsaxPatient->diet = "";
		$clsaxPatient->isMedication = "";
		$clsaxPatient->isDisease = "";
		$clsaxPatient->duration = "";
		$clsaxPatient->isFamily = "";

		$clsaxPatient->retrievePatientMedicalReport($clsaxPatient->patientId);

		//$arrMedicine = array(); 
	//	$arrMedicine	=	$clsaxPatient->retrievePatientMedicines($clsaxPatient->patientId);
		
		$arrPatientMedication = array(); 
		$arrPatientMedication	=	$clsaxPatient->retrievePatientMedicationNames($clsaxPatient->patientId);
		$medicationList = HTMLOption2DArray($arrPatientMedication,"medicationName","medicationName",$clsaxPatient->medicationName);
		
		$arrPatientMedication=$clsaxPatient->retrievePatientMedicationNames($clsaxPatient->patientId); 
			if(is_array($arrPatientMedication) && count($arrPatientMedication)>0){
				$i=0;
						foreach($arrPatientMedication as $value){
							if($i==0)
								$diseaseIds =  $value["medicationName"];
							else	
								$diseaseIds =  $diseaseIds.",".$value["medicationName"];	
							$i++;
					}
			}

		$arrPatientTest = $clsaxPatient->retrievePatientSuggestedTests($diseaseIds);
		if(is_array($arrPatientTest) && count($arrPatientTest)>0){
			$j=0;
			foreach($arrPatientTest as $image){	
				if(!in_array($image["productId"], explode(',', $productIds)))
					{
						if($j==0)
							$productIds =  $image["productId"];
						else
							$productIds = $productIds.",". $image["productId"];
					}
					$j++;
			}
			$clsaxProduct->sortDirection = "DESC";
			$clsaxProduct->productIds1  = $productIds;
			$clsaxProduct->sortColumn = "category";
			$arrProductSubClients = array();   
			
			$arrProductSubClients = $clsaxProduct->retrieveProductSubClients1($clsaxProduct->productId);
			}
		$arrMedicine = array(); 
		$clsaxPatient->sortColumn ="medicationName";
		$arrMedicine	=	$clsaxPatient->retrievePatientMedicines($clsaxPatient->patientId);
		$arrPatientReport = array();
		$arrPatientReport	=	$clsaxPatient->retrievePatientMedicationReportsArray();
		
	}

	if($clsaxPatient->returnUrl == "")
		$clsaxPatient->returnUrl	 = "axPatientMedicalRecord.php";
	$medicationList	= HTMLOptionKeyValArray($arrMedication,$clsaxPatient->medicationName);
	
	$familyDiseaseList	= HTMLOptionKeyValArray($arrFamilyDisease,$clsaxPatient->familyDisease);
	
	$exerciseList	= HTMLOptionKeyValArray($arrExercise,$clsaxPatient->exercise);
	
	$smokingList	= HTMLOptionKeyValArray($arrSmoking,$clsaxPatient->smoking);
	
	$drinkingList	= HTMLOptionKeyValArray($arrDrinking,$clsaxPatient->alcohol);
	
	$dietList	= HTMLOptionKeyValArray($arrDiet,$clsaxPatient->diet);
	
	
	

	if(trim($_SESSION["AXUSERID"])=="")

		header("Location:index.php");
 
	$clsaxPatient->returnUrl	 = $clsaxPatient->returnUrl;
	include_once($includePath."templates/axPatientMedicalRecord.tmpl.php");

}

ob_end_flush(); 

?>