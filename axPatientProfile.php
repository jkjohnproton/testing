<?php
ob_start();
header("Cache-Control: no-store, no-cache");
set_time_limit (60);
$includePath		= "./";
include_once($includePath."axCommon.php");
include_once($includePath."classes/axUserMedicalReport.cls.php");
include_once($includePath."classes/axPatient.cls.php");
include_once($includePath."classes/axPrescriptions.cls.php");
include_once($includePath."classes/axCheckout.cls.php");

$clsaxUserMedicalReport	= new clsaxUserMedicalReport($connect, $includePath);
$clsaxUserMedicalReport->setPostVars();

$pageTitle			= (($clsaxUserMedicalReport->userId == "")?"View":"View")." a Patient Medical Record in ".getProductName();	
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

<script src="<?php echo $includePath?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>

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
	
	$clsaxPatient	= new clsaxPatient($connect, $includePath);
	
	$clsaxPatient->postPatient();
	
	if($clsaxPatient->patientId){
		$clsaxPatient->retrievePatientMedicalReport($clsaxPatient->patientId);
		$arrMedicine = array(); 
		$clsaxPatient->sortColumn ="medicationName";
		$arrMedicine	=	$clsaxPatient->retrievePatientMedicines($clsaxPatient->patientId);
		$arrReport = array();
		$arrReport	=	$clsaxPatient->retrievePatientReports($clsaxPatient->patientId);
		
		$arrPatientReport = array();
		$arrPatientReport	=	$clsaxPatient->retrievePatientMedicationReportsArray();
		
		
	}
	
	$clsaxPrescriptions	= 	new clsaxPrescriptions($connect, $includePath);
	$clsaxPrescriptions	->	sortDirection = "DESC";
	
	
	$arrPrescriptions			= 	array();
	$clsaxPrescriptions->patientId = $clsaxPatient->patientId;

	$clsaxPrescriptions->submitted = 1;
	if($clsaxPrescriptions->submitted==1)
	{
		$arrPrescriptions		= 	$clsaxPrescriptions->retrievePrescriptionsArray();
		$clsaxPrescriptions->sortColumn="patientReportId";
		$arrReportsUploaded		= 	$clsaxPrescriptions->retrievePatientReportsArray();
	}
	
	$clsaxCheckout	= new clsaxCheckout($connect, $includePath);
	$clsaxCheckout->setPostVars();
	$arrSubCheckout = array();   
	$clsaxCheckout->patientId = $clsaxPatient->patientId;
	$arrSubCheckout = $clsaxCheckout->retrieveSubCheckout();
	
	
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
$arrPatientTest = array();
	if($diseaseIds <> ""){
		$arrPatientTest = $clsaxPatient->retrievePatientSuggestedTests($diseaseIds);
	}
	
	$arrDiseaseReadings = $clsaxPatient->retrievePatientDiseaseReadings($clsaxPatient->patientId);	

	if ($clsaxPatient->returnUrl == "") 
	{
		$clsaxPatient->returnUrl = "axUserPatients.php";
	}
	
	

	if(trim($_SESSION["AXUSERID"])=="")

		header("Location:index.php");
 
	$clsaxPatient->returnUrl	 = $clsaxPatient->returnUrl;
	include_once($includePath."templates/axPatientProfile.tmpl.php");

}

ob_end_flush(); 

?>