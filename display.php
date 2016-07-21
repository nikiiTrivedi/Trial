<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Trial</title>
 <?php $this->load->view('css'); ?>


  </head>
  <body>
    
  <?php $this->load->view('header'); ?>
    <!-- Bootstrap -->
    
  <div class="container">
        <div class="jumbotron">
          <h1> New Journey.. </h1>
          <p> Beginning is always beautiful </p>
          <a href ="<?php echo base_url();?>index.php/welcome/login1" class="btn btn-primary"> Login </a>
          <a href ="<?php echo base_url();?>index.php/welcome/reg" class="btn btn-primary"> Registration </a>
        </div>
  </div>
   <table border="1">
<tr>
<th>User Name</th>

</tr>
<?php foreach($result as $row){ ?>
<tr><td><?php  echo $row->first_name;?> </td>

 </tr>
<?php } ?>
</table >

 <!-- <div class="row">
  <div class="col-md-15 ">
    <a href="#" class="thumbnail">
      
      <img src="<?php echo base_url().'images/abc.jpg'?>" alt="leh ladakh" style="width:200px;height:100px">
    </a>
  </div> -->

<?php $this->load->view('footer'); ?>
</body>
</html>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
 