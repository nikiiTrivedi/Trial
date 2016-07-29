<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Destination</title>
 <?php $this->load->view('css'); ?>


  </head> 
  <body>
    
  <?php $this->load->view('header'); ?>

    
  <div class="container">
        <div class="jumbotron"  >
        
          <h3> New Journey.. </h3>
          <p> Beginning is always beautiful </p>
          <!-- <a href ="<?php echo base_url();?>" class="btn btn-primary"> Login </a> -->
          <!-- <a href ="<?php echo base_url().'reg';?>" class="btn btn-primary"> Registration </a> -->
          <br><br>
           <?php $user = $this->session->userdata('username');

         if (isset($user)) 
          { 
             ?>
              <h5> <b>

              <?php 
              echo 'Welcome ';
              print_r($user);
              echo "..!!";
               ?> </b>
              </h5>

              <?php
          }
          else
          { ?>
            <h5> <b> 

              <?php 
              echo 'please login or register yourself.. ';
               ?> 
               </b>
              </h5>
              <?php
          }
        ?>
        </div>
  
        <!-- col-md/sm - size see the difference -->
        <div class="row">
          <div class="col-md-4">

              <h3> Leh Ladakh </h3>
              <p> Ladakh is a region in Indian state of Jammu and Kashmir that currently extends from the Kunlun mountain range to the main Great Himalayas to the south, inhabited by people of Indo-Aryan and Tibetan descent. </p>
                <a href="<?php echo base_url();?>leh" class="btn btn-danger"> view </a>
          </div> 
       
          <div class="col-md-4">       
            <h3> Roopkund </h3>
              <p> Roopkund is a high altitude glacial lake in the Uttarakhand state of India. It lies in the lap of Trishul massif and is famous for the hundreds of human skeletons found at the edge of the lake. </p>
                <a href="#" class="btn btn-danger"> view </a>
          </div> 

           <div class="col-md-4">
            <h3> Tibet </h3>
              <p> Tibet is a region on the Tibetan Plateau in Asia. It is the traditional homeland of the Tibetan people as well as some other ethnic groups such as Monpa, Qiang and Lhoba peoples and is now also inhabited. </p>
                <a href="#" class="btn btn-danger"> view </a>
          </div>  
        </div>
  </div>

</body>
</html>
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
 