 <?php  include('header.php'); ?>

<?php 

  $v1 = $_GET['p'];
 
$URL =  explode('/',$v1);
 $url_param = array_filter($URL);
 //$urlcount=count($url_param);
 $requesturl=explode('/', $_SERVER['REQUEST_URI']);
 $requesturl=array_filter($requesturl);
 //print_r($requesturl);
/*echo "<br>";
 print_r($url_param);
 exit();*/
if(count($requesturl)==2)
{

	$urlkey=$requesturl[2];
}
else
{
	  $urlkey=$requesturl[1];
}
  
 ?>
   <?php 
        $pages = mysqli_query($conn, "SELECT * FROM pages_data where url_key='$urlkey'");
        $page=mysqli_fetch_assoc($pages);

     

  if(count($requesturl)==2)
{

	$page_id=$page["page_id"];
}
else
{
	  $page_id=$page["id"];;
}

          
  ?>
<div class="container">
    <div class="col-md-12">
      <h4 style="font-size:17px; font-weight:bold; margin-top:20px; display:block; ">
      <?php   echo $page["$title"]; ?>
      </h4>

      <div  class="col-md-3" style="padding-left:0px;">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

        <?php 
        $count=1;
        	$category = mysqli_query($conn, "SELECT * FROM category where page_id='$page_id'");
        	while ($categories=mysqli_fetch_assoc($category))
    		{
    			$catid=$categories["id"];
        ?>	
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading<?php  echo $categories["id"]; ?>">
              <h4 class="panel-title">
               <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $catid; ?>"   aria-expanded="false" class="collapsed" aria-controls="collapse<?php  echo $catid; ?>"> 
               <i class="more-less glyphicon glyphicon-plus"></i> 
              <?php   echo $categories["$title"]; ?>
               </a> 
               </h4>
            </div>
            <div id="collapse<?php  echo $catid; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php  echo $catid; ?>">
              <div class="panel-body">
                <ul class="list-group">
                <?php
                $pages_data = mysqli_query($conn, "SELECT * FROM pages_data where cat_id='$catid'");
	        	while ($pagestitle=mysqli_fetch_assoc($pages_data))
	    		{
	    			$page_idd=$pagestitle['page_id'];
	    			 $parent_page = mysqli_query($conn, "SELECT * FROM pages_data where id='$page_idd'");
	    			 $parenturl=mysqli_fetch_assoc($parent_page);

	    			  $ppurl=$parenturl['url_key'];
                ?>
                  <li class="list-group-item" url='<?php echo $pagestitle["url_key"] ?>' >
                  
                  <?php echo $pagestitle["$title"]; ?>
                  
                </li>
                 
                  <?php } ?>
                </ul>
              </div>
            </div>
          </div>
          <?php $count++; } ?>

 
        </div>
      </div>

      <div class="col-md-9 pd" id="displayed" style=" border:1px solid #ccc; padding:10px; margin-bottom:13px; text-align:justify;">

     		
      <?php if($page['image']) { ?>
        <div style="float: right;padding: 10px;margin-left: 1%;word-wrap: break-word;">
			<img src="<?php echo $adminUrl; ?>/<?php echo $page['image']; ?>" width="100%">
		</div>
		<?php } ?>

        <?php   echo $page["$content"]; ?>
         
 <div style="float:right;">  
<?php if(!empty($page["$pdf"])){ ?>
<a href='<?php echo $adminUrl."/".$page["$pdf"];?> ' target="_blank"> View Complete Rule </a>
<?php } ?>
  </div>

  </div>
 
    </div>


  </div>


<script type="text/javascript">

 

$('li').click(function() {

    //alert($(this).attr('url'));

    var url_key=$(this).attr('url');

     $.ajax({
            url: "http://sportskarnataka.in/pages_data.php",
            type: "POST",
            async: true, 
            data: { url_key:url_key }, //your form data to post goes here as a json object
            dataType: "html",

            success: function(data) {
             // alert(data);
                $('#displayed').html(data);    
            },  
        });





});

</script>
  <?php include('footer.php');  ?>