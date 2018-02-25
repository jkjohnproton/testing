<?php
ob_start();
header("Cache-Control: no-store, no-cache");

set_time_limit (60);

$includePath		= "./";

$downfile			=	$_GET["downName"];
$dispname			=	$_GET["dispname"]; 
$downfilename		=	$downfile;
$displayfilename	=	$dispname;

$file				=	$downfilename;
$dispname			=	$displayfilename;
$len 	 		  	= 	filesize($file);
$filename  	  		= 	basename($file);
$file_extension 	= 	strtolower(substr(strrchr($filename,"."),1));
if($dispname<>"")	
{
	$dispname		  = $dispname; 
}
else
{
	$dispname		  =	$filename ;	
}
switch($file_extension) 
{
	case "pdf" 	: $ctype="application/pdf"; break;
	case "exe" 	: $ctype="application/octet-stream"; break;
    case "zip" 	: $ctype="application/zip"; break;
    case "doc" 	: $ctype="application/msword"; break;
    case "xls" 	: $ctype="application/vnd.ms-excel"; break;
    case "ppt" 	: $ctype="application/vnd.ms-powerpoint"; break;
    case "gif" 	: $ctype="image/gif"; break;
	case "png" 	: $ctype="image/png"; break;
	case "jpeg"	:
	case "jpg" 	: $ctype="image/jpg"; break;
	case "mp3" 	: $ctype="audio/mpeg"; break;
 	case "wav" 	: $ctype="audio/x-wav"; break;
	case "mpeg"	:
	case "mpg" 	:
	case "mpe" 	: $ctype="video/mpeg"; break;
	case "avi" 	: $ctype="video/x-msvideo"; break;
	default		: $ctype="application/force-download"; 
}
@ob_end_clean(); 
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Expires: " . gmdate("D, d M Y H:i:s", mktime(date("H")+2, date("i"), date("s"), date("m"), date("d"), date("Y"))) . " GMT");
header("Last-Modified: ".gmdate("D, d M Y H:i:s")." GMT");
header('Content-type: $ctype');
header('Content-Disposition: attachment; filename="'.$dispname . '"');
readfile($file);
ob_end_flush(); 
?>