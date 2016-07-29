<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trial</title>
  
   <?php $this->load->view('css'); ?>

  </head>
  <body>
    
  <?php $this->load->view('header'); ?>

  <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Login </h3>
             </div>

              <div class="panel-body">
                <form method="post" id="login-form" role="form" action="<?php echo base_url();?>welcome/checklogin">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name"  required>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                      <div class="form-group">
                        <input type="password"  id="password" class="form-control input-sm" placeholder="Password" required name="password" >
                      </div>
                    </div>
                 </div>

                <input type="submit" value="submit" class="btn btn-info btn-block">
                <center> or </center>
                  <a href ="<?php echo base_url().'reg';?>" class="btn btn-info btn-block"> Registration </a>
          </div>
                  </form>
            </div>
            <h6 align="center" style="color:red">
                 <?php
                    if(!empty($message)) 
                    {
                        print_r($message);
                    }     
                 ?>
                 </h6>
                  

        </div>
      </div>
    </div>  
  
   <?php
   //$ms = $this->load->vars($data);
   //print_r($ms['message']);
    $this->load->view('footer');
  ?>
</body>
</html>

  <script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
  <script >
  
$(document).ready(function() 
{
    $('#rlogin-form').bootstrapValidator
    ({
       
        feedbackIcons: 
        {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields:
         {
            first_name: 
            {
                validators: 
                {
                    notEmpty: 
                    {
                        message: 'Username or password is incorrect'
                    }

                }
            },
             
            password: 
            {
                validators: 
                {
                    notEmpty: 
                    {
                        message: 'Username or password is incorrect'
                    }                  
                                     
                }
            }


        }
    });
});


  
    </script>