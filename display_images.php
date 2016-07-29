<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//frontend.reklamor.com/fancybox/jquery.fancybox.css" media="screen">
<script src="//frontend.reklamor.com/fancybox/jquery.fancybox.js"></script>
</head>

<body>  
     <form name ="f1" method="post">
      <div class="container">  
        <div class="row">
    <?php
       $imgdir = 'uploads/'; 
       $allowed_types = array('png','jpg','jpeg','gif'); //Allowed types of files
       $dimg = opendir($imgdir);//Open directory
       while($imgfile = readdir($dimg))
       {
          if( in_array(strtolower(substr($imgfile,-3)),$allowed_types) OR in_array(strtolower(substr($imgfile,-4)),$allowed_types) )
          {$a_img[] = $imgfile;}
       }
           $totimg = count($a_img); 
          for($x=0; $x < $totimg; $x++)
          {
          ?>
              <div class='list-group gallery'>
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                 <a class="thumbnail fancybox" rel="ligthbox" href="<?php echo base_url('uploads/'. $a_img[$x]);?>">
                   <img class="img-responsive" rel="ligthbox" src="<?php echo base_url('uploads/'. $a_img[$x]);?>" /> 
                   <div class='text-left'>
                   <small class='text-muted'><?php print_r($a_img[$x]); ?> </small> 
                   </div>
                 </a>
                 <div class='text-right'>
                  <small class='text-muted'><a href="<?php echo base_url().'upload_controllers/delete_image/'.$a_img[$x] ?>" > Delete <br/> </small> 
                 </div> 
                </div>
              </div>
      <?php } ?>
     </form>
  </body>
</html>

<script type="text/javascript">
  $(document).ready(function(){
    $(".fancybox").fancybox({
        openEffect: "none",
        closeEffect: "none"
    });
});
   
</script>