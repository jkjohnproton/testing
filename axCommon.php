<?php

/*if (file_exists("index.html")) {	// This is set for redirecting to the login page if the index.html file is there in the root.

	header("location: index.html");

	exit;

}*/



//error_reporting(E_ALL ^ E_USER_NOTICE);

//error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);



include_once($includePath."axConstants.php");

include_once($includePath."axFunctions.php");

include_once($includePath."classes/axConnect.cls.php");

include_once($includePath."classes/axBase.cls.php");

include_once($includePath."classes/axPaginate.cls.php");





$debugString = "";

$className	 = "";

// To create js functions into a single function for ajax loading in onload event.

$functionList = "";	

$connect		= new dbConnect();



// (Start) Getting the current date and time values

$clsaxBase	= new clsaxBase($connect, $includePath, 'clsaxBase');



/* added to maintain the drop down in the admin side

$clsscLanguage	= new clsscLanguage($connect, $includePath);

$clsscLanguage->setPostVars();

$clsscLanguage->postLanguage();



$arrLanguage		= $clsscLanguage->retrieveLanguageArray();

if($clsscLanguage->langName == ""){

$clsscLanguage->langName = "English.php";

}

include_once($includePath."lang/".$clsscLanguage->langName);

/* end of added to maintain the drop down in the admin side*/





$date		= explode(' ', $clsaxBase->today);

$today		= explode(':', $date[1]);

$arrDay		= explode('-', $date[0]); 

			   

$hr			= $today[0] ;

$min		= $today[1] ;

$sec		= $today[2] ;



$day		= $arrDay[2];

$month		= $arrDay[1];

$year		= $arrDay[0];



$currentTime = $year."-".$month."-".$day." ".$hr.":".$min.":00";



/*			$currentTime = date("Y-m-d g:i:s" );

			echo "currentTime->".$currentTime;

			echo "<br>last time->".$lastClickTime = "2009-10-09 08:20:30";

			echo "<br>Diff in Minutes-> ".$diff = abs(dateTimeDiff($currentTime, $lastClickTime, 'n'));

			echo "<br> Zone=>".date("e");

*/



//$indianTime = date("H:i", mktime($hr, $min, $sec, $month, $day, $year));	

// (End) Getting the current date and time values



$arrPageRange		= 	array(	

								5	=>	5,

								10  => 10,

								25	=> 25,

					  			50	=> 50,

								100	=> 100,

								200	=> 200,

								500	=> 500								

							 );



for($i = 2000; $i<= date("Y")+20; $i++) {

	$yearArray[] = str_pad($i, 2 , "0", STR_PAD_LEFT);

}	



for($i=1; $i<=31; $i++) {

	$dayArray[$i] = str_pad($i, 2 , "0", STR_PAD_LEFT);

}



for($i=0; $i<=23; $i++) {

	$hourArray[] = str_pad($i, 2 , "0", STR_PAD_LEFT);

}



for($i=0; $i<=59; $i++) {

	$minuteArray[] = str_pad($i, 2 , "0", STR_PAD_LEFT);

}



for($i=0; $i<=59; $i++) {

	$secondArray[] = str_pad($i, 2 , "0", STR_PAD_LEFT);

}



for($i=1; $i<=5; $i++) {

	$arrSequence[] = str_pad($i, 2 , "0", STR_PAD_LEFT);

}



for($i=date('Y');$i>date('Y')-100;$i--){

	$yearsOfBirth[$i] =$i;



}



$arrSex					= 	array(	

								"0"=>"Male",

								"1"=>"Female"									

						 		);	

								

$arrMonth			   = array( 

							"01" => "January",

							"02" => "February",

							"03" => "March",

							"04" => "April",

							"05" => "May",

							"06" => "June",

							"07" => "July",

							"08" => "August",											

							"09" => "September",

							"10" => "October",

							"11" => "November",

							"12" => "December"

							);

							

$arrDate  			 =    array(

                            "01" => "01",

							"02" => "02",

							"03" => "03",

							"04" => "04",

							"05" => "05",

							"06" => "06",

							"07" => "07",

							"08" => "08",											

							"09" => "09",

							"10" => "10",

							"11" => "11",

							"12" => "12",

							"13" => "13",

							"14" => "14",

							"15" => "15",

							"16" => "16",

							"17" => "17",

							"18" => "18",											

							"19" => "19",

							"20" => "20",

							"21" => "21",

							"22" => "22",

							"23" => "23",

							"24" => "24",

							"25" => "25",

							"26" => "26",

							"27" => "27",

							"28" => "28",											

							"29" => "29",

							"30" => "30",

							"31" => "31"

                  		  ); 

					

$arrYear 				= array( 

							 "2010" => "2010",

							 "2011" => "2011",

							 "2012" => "2012",

							 "2013" => "2013",

							 "2014" => "2014",

							 "2015" => "2015",

							 "2016" => "2016",

							 "2017" => "2017",

							 "2018" => "2018",

							 "2019" => "2019",

							 "2020" => "2020",

							 "2021" => "2021",

							 "2022" => "2022",

							 "2023" => "2023",

							 "2024" => "2024",

							 "2025" => "2025",

							 "2026" => "2026", 

							 "2027" => "2027", 

							 "2028" => "2028", 

							 "2029" => "2029",

							 "2030" => "2030"

							

						   );				 

						   

$arrAdminStatus			= 	array(	

								"0"  =>  "InActive",

								"1"  =>  "Active"

								);		

$arrStatus			    = 	array(	

								"0"  =>  "InActive",

								"1"  =>  "Active"

								);



$arrMedication			= 	array(	

								"1"  =>  "Hypertension",

								"2"     =>  "Heart Disease",

								"3"  =>  "Diabetes",
								
								"4"  =>  "Cholesterol",

								"5"     =>  "Cancer",

								"6"  =>  "Other Disease"

								);

/*$arrMedication			= 	array(	

								"Hypertension"  =>  "Hypertension",

								"Heart"     =>  "Heart",

								"Diabetes"  =>  "Diabetes",
								
								"Cholesterol"  =>  "Cholesterol",

								"Cancer"     =>  "Cancer",

								"Other"  =>  "Other"

								);	*/							

$arrFamilyDisease			= 	array(	

								"1"  =>  "BP",

								"2"     =>  "Diabetes",

								"3"  =>  "Cardiac",
								
								"4"  =>  "Cholesterol",

								"5"     =>  "Cancer",

								"6"  =>  "Other Disease"

								);
/*$arrFamilyDisease			= 	array(	

								"BP"  =>  "BP",

								"Diabetes"     =>  "Diabetes",

								"Cardiac"  =>  "Cardiac",
								
								"Cholesterol"  =>  "Cholesterol",

								"Cancer"     =>  "Cancer",

								"Other"  =>  "Other"

								);	*/									
								
$arrExercise			= 	array(	

								"1"  =>  "Active",

								"2"     =>  "Moderatly Active",

								"3"  =>  "Sedentary"

								);
/*$arrExercise			= 	array(	

								"Active"  =>  "Active",

								"Moderatly Active"     =>  "Moderatly Active",

								"Sedentary"  =>  "Sedentary"

								);	*/									

$arrSmoking			= 	array(	

								"1"  =>  "Non Smoker",

								"2"     =>  "2- 10 Per Day",

								"3"  =>  "More Than 10 Per Day"

								);
/*$arrSmoking			= 	array(	

								"Non Smoker"  =>  "Non Smoker",

								"2- 10 Per Day"     =>  "2- 10 Per Day",

								"More Than 10 Per Day"  =>  "More Than 10 Per Day"

								);*/									

$arrDrinking			= 	array(	

								"1"  =>  "Non Drinker",

								"2"     =>  "5-6 Pegs Per Week",

								"3"  =>  "More Than 12 Per Week"

								);
/*$arrDrinking			= 	array(	

								"Non Drinker"  =>  "Non Drinker",

								"5-6 Pegs Per Week"     =>  "5-6 Pegs Per Week",

								"More Than 12 Per Week"  =>  "More Than 12 Per Week"

								);*/										

$arrDiet			= 	array(	

								"1"  =>  "Vegetarian",

								"2"     =>  "Eggatarian",

								"3"  =>  "Non Vegetarian"

								);
								
/*$arrDiet			= 	array(	

								"Vegetarian"  =>  "Vegetarian",

								"Eggatarian"     =>  "Eggatarian",

								"Non Vegetarian"  =>  "Non Vegetarian"

								);	*/								
								
$arrCorporateType			= 	array(	

								"Housing Board"  =>  "Housing Board",

								"Company"     =>  "Company"

								);																																															

						

$arrFlatStatus			= 	array(	

								"1"  =>  "Occupied",

								"2"  =>  "Non Occupied"

								);

								

$arrFlatUserType		= 	array(	

								"1"  =>  "Owner",

								"2"  =>  "Tenant"

								);

					

$arrPageRangeUser		= 	array(	

								2	=>	2,

								3	=>	3,

								5	=>	5							

							 );

							 

$arrCategory		=	array(

								"4"=> "Diamond",

								"3"=> "Platinum",

								"2"=> "Gold",

								"1"=> "Silver"

							);

$arrTimeFrom 			 =    array(

							"00" => "00",

                            "01" => "01",

							"02" => "02",

							"03" => "03",

							"04" => "04",

							"05" => "05",

							"06" => "06",

							"07" => "07",

							"08" => "08",											

							"09" => "09",

							"10" => "10",

							"11" => "11",

							"12" => "12",

							"13" => "13",

							"14" => "14",

							"15" => "15",

							"16" => "16",
							
							"17" => "17",

							"18" => "18",											

							"19" => "19",

							"20" => "20",

							"21" => "21",

							"22" => "22",

							"23" => "23",

							"24" => "24"

							

                  		  ); 
						  	
$arrTimeTo 			 =    array(

							"00" => "00",

                            "01" => "01",

							"02" => "02",

							"03" => "03",

							"04" => "04",

							"05" => "05",

							"06" => "06",

							"07" => "07",

							"08" => "08",											

							"09" => "09",

							"10" => "10",

							"11" => "11",

							"12" => "12",

							"13" => "13",

							"14" => "14",

							"15" => "15",

							"16" => "16",
							
							"17" => "17",

							"18" => "18",											

							"19" => "19",

							"20" => "20",

							"21" => "21",

							"22" => "22",

							"23" => "23",

							"24" => "24"

							

                  		  ); 	
$arrExpierenceMonth			   = array( 

							"00" => "00",

							"01" => "01",

							"02" => "02",

							"03" => "03",

							"04" => "04",

							"05" => "05",

							"06" => "06",

							"07" => "07",

							"08" => "08",											

							"09" => "09",

							"10" => "10",

							"11" => "11"

							

							);						  						



?>