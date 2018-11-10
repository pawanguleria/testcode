  <?php 
  session_start();
  error_reporting(0);
  global $baseUrl;
  global $adminUrl;
  if(empty($_SESSION['language'])) {
  $title=$_SESSION['title']="english_title";
  $content=$_SESSION['content']="english_content";
  $videou=$_SESSION['video']="english_url";
  }
if($_SESSION['language']=="english")
{
$title=$_SESSION['title']="english_title";
$content=$_SESSION['content']="english_content";
$videou=$_SESSION['video']="english_url";
}
if($_SESSION['language']=="kanadda")
{
$title=$_SESSION['title']="kannada_title";
$content=$_SESSION['content']="kannada_content";
$videou=$_SESSION['video']="kannada_url";
} 
 include('sports_admin/siteconnection.php');
  ?>
  <?php   $baseUrl="https://abcd.in"; 
          $adminUrl="https://abcd.in/sports_admin"; 

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Sports Portal</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="WELCOME TO SPORTS PORTAL">
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/bootstrap.min.css">
<script src="<?php echo $baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo $baseUrl; ?>/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="<?php echo $baseUrl; ?>/css/style.css">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<link rel="icon" type="image/png" href="<?php echo $baseUrl; ?>/themes/higher_education/images/fav_icon.png">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
 <div class="top-band">
  <div class="container">
    <div class="col-md-4">
      <ul class="social-network social-circle">
        <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#" class="iconyoutube" title="youtube"><i class="fa fa-youtube"></i></a></li>
       
      </ul>
    </div>

     <div class="col-md-8 text-right">
      <form action="languagchange.php" method="post">

     <select name="language">
     <option value=""> Select Language</option>
     <option value="english"> English</option>
     <option value="kanadda"> Kanadda </option>
     </select>
     <input type="hidden" name="rquesturl" value="<?php echo$_SERVER['REQUEST_URI'];;?> ">
     <button type="submit"> Change</button>
</form>
     </div>


  </div>
</div>
<section class="header-section fixed">
<div class="container">
<div class="row">
  <div class="col-sm-8 col-xs-12">
    <div class="logo"> <a href="#"> <img src="<?php echo $baseUrl; ?>/images/goklogo-new.png" "iti" class="logo_main"></a> </div>
    <div class="header_text">
      <h1><span class="top-hry-logo">&nbsp;</span>Department Youth Empowerment and Sports, Karnataka</h1>
    </div>
  </div>
  <div class="col-sm-4 col-xs-12 "> <img src="<?php echo $baseUrl; ?>/images/call.png" style="margin-top:10px; margin-bottom:10px;"></div>
  </section>


<div class="navbar yamm navbar-default custom-navbar " id="header_top">
    <div class="login-icon"> </div>
    <div class="container">
      <div class="navbar-header">
        <button type="button" data-toggle="collapse" data-target="#navbar-collapse-1" class="navbar-toggle"><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a href="#" class="navbar-brand">Yamm Megamenu</a> </div>
      <div id="navbar-collapse-1" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href='index.html' title='Home'>Home</a></li>
      
          
          
             <li class="dropdown"><a href='gamerule.html'>Coaches detail
</a>
            
          </li>
          
          
          
           <li class='dropdown'><a href='#'  title='RUSA HARYANA' data-submenu='' data-toggle='dropdown' class='dropdown-toggle'>Stadium Detail</a> </li>
             
             <li class="dropdown"><a href='gamerule.html'>Training Academy
</a>
            
          </li>
          
          
         
          
          
          
          
          
          
         
          
          
                                   <li class="dropdown"><a href='gamerule.html'>Leages and tournaments
</a>
            
          </li>
          
          
          
          
          
          
         
      
          
                <li class="dropdown"><a href="" title="RUSA HARYANA" data-submenu="" data-toggle="dropdown" class="dropdown-toggle">Others<b class="caret"></b></a>
  <ul class="dropdown-menu" id="menu1">
    <li><a href="#">Scheme<i class="icon-arrow-right"></i></a></li>
    <li><a href="#" >Sports policise<i class="icon-arrow-right"></i></a></li>
    
      <li><a href="#" > Awards<i class="icon-arrow-right"></i></a></li>

  </ul>
</li>
       
        </ul>
      </div>
    </div>
  </div>
  <div class="after-header" id="navigation-point-data">cdcdcd</div>