<?php
//header("Content-disposition: attachment; filename=huge_document.pdf");
//header("Content-type: application/pdf");
$path = getcwd();
$path = str_replace("\\", "/",$path);
$split = explode("/",$path);
$path='';
for($i = 0; $i < (count($split)-2); $i++){
    $path = $path.$split[$i].'/';
}
$pdfPath ='http://' . $_SERVER['HTTP_HOST'] .  '/letcheck_new/uploads/pdf/file.pdf';
//$pdfPath = getcwd()."\\prospects\\file.pdf";
//$pdfPath = str_replace("\\", "/",$pdfPath);
//readfile($pdfPath);

// place this code inside a php file and call it f.e. "download.php"
$path = $_SERVER['DOCUMENT_ROOT']."/path2file/"; // change the path to fit your websites document structure
$fullPath = $pdfPath;//$path.$_GET['download_file'];

//if ($fd = fopen ($fullPath, "r")) {
  //  $fsize = filesize($fullPath);
    //$path_parts = pathinfo($fullPath);
    //$ext = strtolower($path_parts["extension"]);
    //switch ($ext) {
      //  case "pdf":
        //header("Content-type: application/pdf"); // add here more headers for diff. extensions
        //header("Content-Disposition: attachment; filename=\"".$path_parts["basename"]."\""); // use //'attachment' to force a download
  //      break;
    //    default;
      //  header("Content-type: application/octet-stream");
       // header("Content-Disposition: filename=\"".$path_parts["basename"]."\"");
   // }
    //header("Content-length: $fsize");
    //header("Cache-control: private"); //use this to open files directly
    //while(!feof($fd)) {
      //  $buffer = fread($fd, 2048);
       // echo $buffer;
    //}
//}
//fclose ($fd);
//$filename = 'Custom file name for the.pdf';

header('Content-type: application/pdf');
header('Content-Disposition: inline; filename='.$pdfPath);
header('Content-Transfer-Encoding: binary');
//header('Content-Length: '.filesize($pdfPath));
//header('Accept-Ranges: bytes');

@readfile($pdfPath);
exit;
?> 