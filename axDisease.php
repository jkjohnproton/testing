<?php
ob_start();
header("Cache-Control: no-store, no-cache");
set_time_limit (60);

$includePath		= "../";
include_once($includePath."axCommon.php");
include_once($includePath."classes/axPaginate.cls.php");
include_once($includePath."classes/axDisease.cls.php");

$clsaxDisease	= new clsaxDisease($connect, $includePath);
$clsaxDisease->setPostVars();

$pageTitle			= (($clsaxDisease->diseaseId == "")?"Add":"Edit")." a Disease in ".getProductName();	
$metaDescription	= "";
$metaKeywords		= "";
?>
<!DOCTYPE html>
<html>
<head>
	<title><?php echo getTitle()?></title>
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta charset="UTF-8">
        <meta name="description" content="Admin Dashboard Template" />
        <meta name="keywords" content="admin,dashboard" />
        <meta name="author" content="Steelcoders" />
        
        <!-- Styles -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
        <link href="<?php echo $includePath?>assets/plugins/pace-master/themes/blue/pace-theme-flash.css" rel="stylesheet"/>
        <link href="<?php echo $includePath?>assets/plugins/uniform/css/uniform.default.min.css" rel="stylesheet"/>
        <link href="<?php echo $includePath?>assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $includePath?>assets/plugins/fontawesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $includePath?>assets/plugins/line-icons/simple-line-icons.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo $includePath?>assets/plugins/offcanvasmenueffects/css/menu_cornerbox.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo $includePath?>assets/plugins/waves/waves.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo $includePath?>assets/plugins/switchery/switchery.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $includePath?>assets/plugins/3d-bold-navigation/css/style.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo $includePath?>assets/plugins/slidepushmenus/css/component.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $includePath?>assets/plugins/datatables/css/jquery.datatables.min.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo $includePath?>assets/plugins/datatables/css/jquery.datatables_themeroller.css" rel="stylesheet" type="text/css"/>	
        <link href="<?php echo $includePath?>assets/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet" type="text/css">
        <link href="<?php echo $includePath?>assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"/>
        
        <!-- Theme Styles -->
        <link href="<?php echo $includePath?>assets/css/modern.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $includePath?>assets/css/themes/green.css" class="theme-color" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $includePath?>assets/css/custom.css" rel="stylesheet" type="text/css"/>
        
        <script src="<?php echo $includePath?>assets/plugins/3d-bold-navigation/js/modernizr.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/offcanvasmenueffects/js/snap.svg-min.js"></script>
		<script language="javascript" src="<?php echo $includePath?>scripts/axCommon.js"></script>
	<script language="JavaScript" src="<?php echo $includePath?>js/calendar_us.js"></script>
	<link rel="stylesheet" href="<?php echo $includePath?>css/calendar.css">
     <script src="<?php echo $includePath?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
     <script src="<?php echo $includePath?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
</head>
<body>
	<?php 
		include_once($includePath."includes/axAdminCommonBody.inc.php"); 
	?>
    
        <script src="<?php echo $includePath?>assets/plugins/jquery/jquery-2.1.3.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/pace-master/pace.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/jquery-blockui/jquery.blockui.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/switchery/switchery.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/uniform/jquery.uniform.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/offcanvasmenueffects/js/classie.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/offcanvasmenueffects/js/main.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/waves/waves.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/3d-bold-navigation/js/main.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/jquery-mockjax-master/jquery.mockjax.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/moment/moment.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/datatables/js/jquery.datatables.min.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js"></script>
        <script src="<?php echo $includePath?>assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
        <script src="<?php echo $includePath?>assets/js/modern.min.js"></script>
        <script src="<?php echo $includePath?>assets/js/pages/table-data.js"></script>
         <script src="<?php echo $includePath?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
        
</body>
</html>
<?php
function writeMain($connect, $includePath) 
{
	global $clsaxDisease;
	$clsaxDisease->postDisease();
	if ($clsaxDisease->returnUrl == "") 
	{
		$clsaxDisease->returnUrl = "axDiseaseList.php";
	}
	
	$arrDiseaseTest = $clsaxDisease->getDiseaseTests($clsaxDisease->diseaseId);
	
	if($_SESSION["AXADMINID"]=="")
	{
		header("location: index.php");
	} 
	$clsaxDisease->returnUrl	 = $clsaxDisease->returnUrl;
	include_once($includePath."templates/axDisease.tmpl.php");
}
ob_end_flush(); 
?>