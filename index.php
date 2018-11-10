 <?php  include('header.php'); ?>


  <section class="banner">
  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">

  <?php 
     $sliderquery = mysqli_query($conn, "SELECT * FROM sliderimages");
     $sliderqueryy = mysqli_query($conn, "SELECT * FROM sliderimages");
   ?>
  <!-- Indicators -->
  <ol class="carousel-indicators">
  <?php $islideratv=0;
   while ($row=mysqli_fetch_assoc($sliderquery))
    {
   ?>
    <li data-target="#myCarousel" data-slide-to="<?php echo $islideratv; ?>" <?php if($islideratv==0){ ?> class="active" <?php } ?> >
    </li>
   <?php $islideratv++; } ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
   <?php
  $isliderimg=1;
   while ($row=mysqli_fetch_assoc($sliderqueryy))
    {
   ?>
    <div class="item <?php if($isliderimg==1){ ?> active <?php } ?>">
    <img src="sports_admin/<?php echo $row['sliderimage']; ?>">
    </div>
     <?php $isliderimg++; } ?>
   </div>



  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <i class="fa fa-arrow-left" aria-hidden="true"></i>

  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <i class="fa fa-arrow-right" aria-hidden="true"></i>
  </a>
</div>
</section>





 <div id="outer-content">
      <section class="tab-section">
        <div class="container">
          <div class="row">
            <div class="col-md-8 left collapse-panel">

  <?php $abouquery = mysqli_query($conn, "SELECT * FROM about_us");
        $abourecord=mysqli_fetch_assoc($abouquery);

 ?>

            <h2><?php   echo $abourecord["$title"]; ?></h2>
            
            <p><?php  $homeabout= substr($abourecord["$content"],0,500); 

            echo strip_tags($homeabout, '<p><a>');
              
            ?>

            ...<strong>read more</strong></p>
            <br>
              <!-- panel-group -->
              <!--- icon section start -->
              <div class="row ">
              <?php 
                    $pages = mysqli_query($conn, "SELECT * FROM pages_data where page_id='0'");
                    while ($page=mysqli_fetch_assoc($pages))
                      {
              ?>
                <div class="col-sm-3 box text-center"> 
                <a href="<?php echo $baseUrl.$page["url_key"];?>">

                <img src="sports_admin/<?php echo $page['image']; ?>" class="img-circle" alt="Cinque Terre" width="304" height="236">
                   <h2 style=" font-size:15px; margin-top:3px;"><?php   echo $page["$title"]; ?></h2>
                   </a>
                 </div>

                <?php } ?>
              </div>
              <!-- icon section closed -->
              <div style="clear: both;"></div>
            </div>
           
            
            
            <div class="col-md-4 tab-bottom-down">
              <!-- Nav tabs -->
              <ul class="nav nav-tabs my-tab" role="tablist">
                <li role="presentation" class="active"><a href="#Notice" aria-controls="Notice" role="tab" data-toggle="tab"><strong>Upcoming Events</strong></a></li>
                              

         <li role="presentation"><a href="#important-links" aria-controls="Events" role="tab" data-toggle="tab">News</a></li>
         
         
                  <li role="presentation"><a href="#important-links" aria-controls="Events" role="tab" data-toggle="tab">Score Board
</a></li>
                
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="Notice">
                  <div class="tab_height">
                    <marquee scrollamount="5" direction="up" onMouseOver="this.setAttribute('scrollamount', 0, 0); this.stop();" onMouseOut="this.setAttribute('scrollamount', 5, 0); this.start(); " height="91%">
                    <ul>
                    <?php $tournaments = mysqli_query($conn, "SELECT * FROM tournaments"); 
                            while ($tournament=mysqli_fetch_assoc($tournaments))
                          { 

                    ?>

                      <li><a href="#" target="_blank">
                        <p class="tab-in"> <span class="news-img"></span>

                       <?php echo substr(strip_tags($tournament[$content]),0,300); ?>

                        </p>
                        </a>
                        </li>
                        <?php } ?>

                    </ul>
                    </marquee>
                    <a href="#" class="view-all" target="_blank">View All </a> </div>
                </div>
                <!-- Tab panes -->
                <div role="tabpanel" class="tab-pane " id="News">
                  <div class="tab_height">

                    <marquee scrollamount="3" direction="up" onMouseOver="this.setAttribute('scrollamount', 0, 0); this.stop();" onMouseOut="this.setAttribute('scrollamount', 5, 0); this.start(); " height="91%">
                    <ul>
                      <li><a href="https://sportskarnataka.in/index.php/newsdata?id=2E08DF1DB76CC872AAFA6107C9D1B4D79CCAF3328C0578A3A8F0023088E01C23" target="_blank">
                        <p class="tab-in" title="amazon223"> <span class="news-img"></span>amazon223</p>
                        </a></li>
                      <li><a href="https://sportskarnataka.in/index.php/newsdata?id=17F32A4A247EB1CEA9FEE787109D2DF61A13AF241BD423542C7D61FB9E429CEB" target="_blank">
                        <p class="tab-in" title="testcircular3243"> <span class="news-img"></span>testcircular3243</p>
                        </a></li>
                    </ul>
                    </marquee>

                    <a href="https://sportskarnataka.in/newsupdatesdata?page=1" class="view-all" target="_blank">View All News...</a> </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="important-links">
                  <div class="tab_height">
                    <div class="microsoft marqueeContainer">
                      <div class="">
                        <ul>
                        <?php 
                          $news = mysqli_query($conn, "SELECT * FROM news");
                          while ($neww=mysqli_fetch_assoc($news))
                          {
                        ?>
                          <li>   <?php echo substr(strip_tags($neww[$content]),0,300); ?> </li>

                           <?php } ?>

                      
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

      </section>
      <div class="container">
        <div class="row">
            
            <div class="col-sm-12">
            
          <h3 class="text-left h3-title"> <span>Videos Galllery</span></h3>
          <div class='list-group gallery'>
          <?php
                 $videos = mysqli_query($conn, "SELECT * FROM videos");
                 while ($video=mysqli_fetch_assoc($videos))
                  {

                    $eurl=$video[$videou];
                    $embdurl=explode("?v=", $eurl);
                    $video_url=$embdurl[1];
                    
          ?>
            <div class='col-sm-4 col-xs-6 col-md-4 col-lg-3'> <a class="thumbnail fancybox" rel="ligthbox" href="#">
              <iframe width="250" height="220" src="https://www.youtube.com/embed/<?php echo $video_url; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              <div class='text-right'> <small class='text-muted'><?php echo $video[$title];?></small> </div>
              <!-- text-right / end -->
              </a> </div>

              <?php } ?>

            <!-- col-6 / end -->
           

          </div>
          <!-- list-group / end -->
        </div>
        <!-- row / end -->
      </div>
</div>
     
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h3 class="text-left h3-title"> <span>Associations</span></h3>
            <div class="bottombig-box">
              <div id="myCarousel" class="carousel slide">
                <!-- Carousel items -->
                <div class="carousel-inner">
                  <div class="item active">
                    <div class="row" style="padding-bottom: 10px;">
                    <?php 
                    $associations = mysqli_query($conn, "SELECT * FROM association");
                     while ($association=mysqli_fetch_assoc($associations))
                      {
                    ?>
                       <div class="allLogo-img mb10"> 
                       <a href="#"> 
                       <img src="sports_admin/<?php echo $association['image']; ?>"  class="img-responsive">
                       </a> </div>
                    <?php } ?>

                       

                    </div>
                  </div>
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Digital Initiatives -->
      <div class="clearfix"> </div>
    </div>


    <?php  include('footer.php'); ?>
