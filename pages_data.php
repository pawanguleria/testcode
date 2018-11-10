<?php
  session_start();
  error_reporting(1);
  global $baseUrl;
  global $adminUrl;
  if(empty($_SESSION['language'])) {
  $title=$_SESSION['title']="english_title";
  $content=$_SESSION['content']="english_content";
  $videou=$_SESSION['video']="english_url";
  $pdf=$_SESSION['pdf']="english_pdf";
  }
if($_SESSION['language']=="english")
{
$title=$_SESSION['title']="english_title";
$content=$_SESSION['content']="english_content";
$videou=$_SESSION['video']="english_url";
$pdf=$_SESSION['pdf']="english_pdf";
}
if($_SESSION['language']=="kanadda")
{
$title=$_SESSION['title']="kannada_title";
$content=$_SESSION['content']="kannada_content";
$videou=$_SESSION['video']="kannada_url";
$pdf=$_SESSION['pdf']="kannada_pdf";
}
 include('sports_admin/siteconnection.php');
 $urlkey=$_POST['url_key'];
 $pages = mysqli_query($conn, "SELECT * FROM pages_data where url_key='$urlkey'");
 $page=mysqli_fetch_assoc($pages);

  if($page['image']) {  
  	$imagurl=$page['image'];
      $data .=  '<div style="float: right;padding: 10px;margin-left: 1%;word-wrap: break-word;">
			<img src="http://sportskarnataka.in/sports_admin/'.$imagurl.'" width="100%">
		</div>';
		  }  

    $data .= $page["$content"]; 
   if(!empty($page["$pdf"])){ 
 	$pdf_url=$page["$pdf"];
        $data .=  '  <div style="float:right;">  
       <a href="http://sportskarnataka.in/sports_admin/'.$pdf_url.'" target="_blank"> View Complete Rule </a>
       </div>';
    } 

     echo $data ;


?>

