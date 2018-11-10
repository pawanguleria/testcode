
  
        <div class="footer">
      <div class="row">
      <?php $abouquery = mysqli_query($conn, "SELECT * FROM about_us");
        $abourecord=mysqli_fetch_assoc($abouquery);

 ?>
        <div class="col-sm-3">
          <h6><?php   echo $abourecord["$title"]; ?></h6>
          <p style="color:#fff;">
          <?php  $homeabout= substr($abourecord["$content"],0,300); 

            echo strip_tags($homeabout, '<a>');
              
            ?>

          </p>
        </div>

        <div class="col-sm-3">
          <h6>Quick Links</h6>

          <ul>

          <?php 
                    $pages = mysqli_query($conn, "SELECT * FROM pages_data where page_id='0'");
                    while ($page=mysqli_fetch_assoc($pages))
                      {
              ?>


            <li>
            <a href="<?php echo $baseUrl.$page["url_key"];?>" ><i class="fa fa-arrow-right"></i><?php   echo $page["$title"]; ?>
		      	</a></li>

       <?php } ?>

             

          </ul>
        </div>
        <div class="col-sm-3">
          <h6>CONTACT DETAIL</h6>
          <ul>
            <li>State Youth Centre
              Nrupathunga Road,
              Bangalore-560001 </li>
          </ul>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d124416.07477111636!2d77.51684995888672!3d12.971702035644043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae16739e948459%3A0x4eba744c5baffb90!2sPWD+Annexe+Building%2C+Nunegundlapalli%2C+Ambedkar+Veedhi%2C+Sampangi+Rama+Nagar%2C+Bengaluru%2C+Karnataka+560001!5e0!3m2!1sen!2sin!4v1529974929582" width="230" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <div class="col-sm-3">
          <h6>EMAIL AND HELPLINE</h6>
          <img src="images/call.jpg" class="img-responsive">
          <ul>
            <li>Phone: 080 22215601</li>
            <li>Email: dyesdept@gmail.com</li>
          </ul>
        </div>
      </div>
        </div>
    

  <section class="copyright">
    <div class="container">
      <div class="row">
      <div class="col-sm-12 text-center">
          <!-- Start of SimpleHitCounter Code -->
          <p> 2018 &copy; CopyrightAll rights Reserved</p>
          <!-- End of SimpleHitCounter Code -->
          </p>
        </div>
      </div>
    </div>
  </section>
  <div></div>

</div>
<script>function toggleIcon(e) {
    $(e.target)
        .prev('.panel-heading')
        .find(".more-less")
        .toggleClass('glyphicon-plus glyphicon-minus');
}
$('.panel-group').on('hidden.bs.collapse', toggleIcon);
$('.panel-group').on('shown.bs.collapse', toggleIcon);</script>
</body>
</html>