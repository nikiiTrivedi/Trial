<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Trial</title>

    <!-- Bootstrap -->
        <?php $this->load->view('css'); ?>
        


  </head>
  <body>
    
  <?php $this->load->view('header'); ?>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Sign up </h3>
            </div>
            <div class="panel-body">

              <form method="post" id="register-form" role="form" action="<?php echo base_url();?>welcome/insertdata" onsubmit="validate_form()">

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" >
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name"  >
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" >
                </div>

                <div class="row">
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password"  id="password" class="form-control input-sm" placeholder="Password"  name="password" >
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" >
                    </div>
                  </div>
                </div>
                
                <input type="submit" value="Submit" class="btn btn-info btn-block">
              <center> or </center>
            
             <a href ="<?php echo base_url();?>" class="btn btn-info btn-block"> Login </a>
                         <h6 align="center" style="color:red">
                 <?php
                    if(!empty($message)) 
                    {
                        print_r($message);
                    }     
                 ?>
                 </h6>
               </form>
            </div>
          </div>
        </div>
      </div>
    </div>  
    <div class="stepwizard col-md-offset-3">
   <div class="stepwizard-row setup-panel">
      <div class="stepwizard-step">
         <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
         <p>Register yourself</p>
         </div>
         <div class="stepwizard-step">
         <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
         <p>Upload a picture</p>
         </div>
         
       </div>
     </div>
  
<?php $this->load->view('footer'); ?>
</body>
</html>

  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>  
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>  
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
  <script  src="http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
   <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
  <script >
  
  
  $(document).ready(function() 
{
    $('#register-form').validate(
    {
       
       rules:
       {
        first_name:
        {
          required:true,
        },
        email:
        {
          required:true,
          emailAddress:true,
        },
        last_name:
        {
          required:true,
        },
        password:
        {
          required:true,
          minlength:5,
        },
        password_confirmation:
        {
          required:true,
          equalTo: "#password",
        },
       },

       messages:
       {
          first_name:
          {
            required:"can not be empty..!!",
          },
          last_name:
          {
            equired:"can not be empty..!!",
          },
          email:
          {
            required:"can not be empty..!!",
            emailAddress: "Email address is not correct",
          },
          password:
          {
            required: "can not be empty ",
            minlength: "password at least 3 characters",
          },
          password_confirmation:
          {
            required:"can not be empty",
            equalTo:"password not match",
          }
       }
    });
}); 
/*$(document).ready(function() 
{
    $('#register-form').bootstrapValidator(
    {
       
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
                        message: 'The full name is required and cannot be empty'
                    }
                }
            },
             last_name: 
             {
                validators: 
                {
                    notEmpty: {
                        message: 'The full name is required and cannot be empty'
                    }
                }
            },
            email:
             {
                validators: 
                {
                    notEmpty: 
                    {
                        message: 'The email address is required and cannot be empty'
                    },
                    emailAddress: 
                    {
                        message: 'The email address is not valid'
                    }
                }
            },
            password: 
            {
                validators:
                 {
                    notEmpty: 
                    {
                        message: 'password is required and cannot be empty'
                    },
                    stringLength: 
                    {
                        max: 12,
                        message: 'password must be less than 12 characters long'
                    },
                    
                }
            },
            password_confirmation:
            {
                    validators:
                    {
                      notEmpty: 
                      {
                          message: 'password is required and cannot be empty'
                      },

                      equalTo: '#password'
                    }  
            }
        }

    });
}); */

 </script>