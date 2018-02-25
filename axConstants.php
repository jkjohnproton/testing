<?php



define("HTTP",							"http://" .   $_SERVER['HTTP_HOST'] . "/letcheck_new/");

//define("HTTP",							"http://" .   $_SERVER['HTTP_HOST']);

define("AXADMINLOGIN",	                "http://" .   $_SERVER['HTTP_HOST'] . "/letcheck_new/admin/");


define("LOGO",	                        "http://" .   $_SERVER['HTTP_HOST'] . "/images/logo_1.png");



define("AXDEFAULTPAGESIZE",				50);



define("NORMALDATEFORMAT",				"%d-%b-%Y");



define("DISPLAYDATEFORMAT",				"'%d-%b-%Y'");







define("AXRANGEVAL",					5);











define("AXUPLOADSIDEBARIMAGEPATH",	"uploads/sidebar/");



define("AXUPLOADLOGOIMAGEPATH",		"uploads/clients/");

define("AXUPLOADDOCUMENTPATH",		"uploads/clients/documents/");



define("AXUPLOADPATH",					"uploads/");



define("AXUPLOADPRESCRIPTIONIMAGEPATH",		"uploads/prescriptions/");



define("AXUPLOADBANNERPHOTOPATH",	    	"uploads/banner/");



define("AXUPLOADBLOGIMAGEPATH",	    	"uploads/blogs/");



define("AXUPLOADUSERIMAGEPATH",	    	"uploads/user/");

define("AXUPLOADCMSIMAGEPATH",	    	"uploads/cms/");
define("AXREPORTUPLOADPATH",	    	"uploads/reports/");

define("AXUPLOADPATIENTIMAGEPATH",	    	"uploads/patients/");

define("AXPERSONALDOCTORREPORTS",	    	"uploads/personal_doctor reports/");

define("AXEXCELPATH",	    	"uploads/excel/");







define("EMAIL_MODE",					"TEST");		    			// TEST - For testing the mails







define("AXFROMMAILID",					"binil@ekselan.com");



define("ADMINEMAIL",					"binil@ekselan.com"); 



define("ADMINTO",						"binil@ekselan.com");



define("ADMINFROM",						"binil@ekselan.com");











define("REPORTROWHIGHLIGHTCOLOR",		"#FFFFCC");



header("Cache-control: private");







session_start();



?>



