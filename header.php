  <?php 
  session_start();
  error_reporting(0);
  global $baseUrl;
  global $adminUrl;
  if(empty($_SESSION['language'])) {
  $title=$_SESSION['title']="kannada_title";
  $content=$_SESSION['content']="kannada_content";
  $videou=$_SESSION['video']="kannada_url";
  $pdf=$_SESSION['pdf']="kannada_pdf";
  $hometext="ಮನೆ";
  }
if($_SESSION['language']=="english")
{
$title=$_SESSION['title']="english_title";
$content=$_SESSION['content']="english_content";
$videou=$_SESSION['video']="english_url";
$pdf=$_SESSION['pdf']="english_pdf";
$hometext="Home";
}
if($_SESSION['language']=="ಕನ್ನಡ")
{
$title=$_SESSION['title']="kannada_title";
$content=$_SESSION['content']="kannada_content";
$videou=$_SESSION['video']="kannada_url";
$pdf=$_SESSION['pdf']="kannada_pdf";
$hometext="ಮನೆ";
} 
 include('sports_admin/siteconnection.php');
  ?>
  <?php  

        /*$baseUrl="http://localhost/latestphp/"; 
         $adminUrl="http://localhost/latestphp/sports_admin"; */

  $baseUrl="http://abcd.in/"; 
  $adminUrl="http://abcd.in/sports_admin"; 

  $requesturl=explode('/', $_SERVER['REQUEST_URI']);
 $requesturl=array_filter($requesturl);
   ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sports Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="WELCOME TO SPORTS PORTAL">
<link rel="stylesheet" href="<?php echo $baseUrl; ?>css/bootstrap.min.css">
<script src="<?php echo $baseUrl; ?>js/jquery.min.js"></script>
<script src="<?php echo $baseUrl; ?>js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
 <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body style="background-color:#ccc;">
    

  <div class="container" style="background-color:#fff; padding:0px;">
       <div class="top-band">
    <div class="col-md-4">
      <ul class="social-network social-circle">
       
        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" class="iconyoutube" title="youtube"><i class="fa fa-youtube"></i></a></li>
       
      </ul>
    </div>

     <div class="col-md-8 text-right">
       <form method="post" action="<?php echo $baseUrl;?>languagchange.php">
        <ul>
        <li>Select Language </li>
        <li><input type="submit" name="language" value="english"/> </li>
         <li><input type="submit" name="language" value="ಕನ್ನಡ"/></li> 
      </ul>
      <input type="hidden" name="rquesturl" value="<?php echo$_SERVER['REQUEST_URI'];?> ">
      </form>

     </div>


  </div>

<section class="header-section fixed">
<div class="container">
<div class="row">
  <div class="col-sm-8 col-xs-12">
    <div class="logo"> <a href="<?php echo $baseUrl; ?>"> <img src="<?php echo $baseUrl; ?>/images/goklogo-new.png"   class="logo_main"></a> </div>
    <div class="header_text">
      <h1><span class="top-hry-logo">&nbsp;</span>Department Youth Empowerment and Sports, Karnataka</h1>
    </div>
  </div>
  <div class="col-sm-4 col-xs-12 "> <img src="<?php echo $baseUrl; ?>/images/call.png" class="img-responsive" style="margin-top:10px; margin-bottom:10px;">
  </div>
  </section>

 
<div class="navbar yamm navbar-default custom-navbar " id="header_top">
    <div class="login-icon"> </div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a href="#" class="navbar-brand">Yamm Megamenu</a> </div>
      <div id="navbar-collapse-1" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
         
          <li <?php if(empty($requesturl)){ ?> class="active" <?php } ?>>
          <a href='<?php echo $baseUrl; ?>' title='Home'><?php echo $hometext; ?></a>
          </li>

              <?php 
              $admin_menu = mysqli_query($conn, "SELECT * FROM menu");
              $admin_menue=mysqli_fetch_assoc($admin_menu);

              $admin_menuee=explode(",", $admin_menue['page_id']);
             foreach ($admin_menuee as $value) 
              {
               
                    $menu = mysqli_query($conn, "SELECT * FROM pages_data where id='$value'");
                     $menues=mysqli_fetch_assoc($menu);
                      
              ?>
           <li class='dropdown <?php if (in_array($menues["url_key"], $requesturl)){ ?> active <?php } ?>'>
           <a href='<?php  echo $baseUrl. $menues["url_key"]; ?>'  class='dropdown-toggle'>
           <?php   echo $menues["$title"]; ?>
           </a> 
           </li>
            <?php } ?>
          
    
    
       
        </ul>
      </div>
    </div>
  </div>
  
  <div class="after-header" id="navigation-point-data">cdcdcd</div>