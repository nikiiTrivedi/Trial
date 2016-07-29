<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Trial</title>
    <?php $this->load->view('css'); ?>
       <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
       <script src="//code.jquery.com/jquery-1.10.2.js"></script>
       <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
      <script src="http://malsup.github.com/jquery.form.js"></script>
      
  </head>
  <body>
       <?php $this->load->view('header'); ?>
         <div class="container">
            <div class="row centered-form">
               <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                  <div class="panel panel-default">
                     <div class="panel-heading">
                        <h3 class="panel-title">upload a profile </h3>
                     </div>
                     <div class="panel-body">
                     <form method="post" accept-charset="utf-8" action="<?php echo base_url();?>upload_controllers/do_upload"  id="myForm" name="myForm" enctype="multipart/form-data" />                     
                     <div id="imagePreview"></div>
                     <input id="uploadFile" type="file" name="userfile" class="img" />
                     <input type='submit' name='submit' id='submit' value='upload'>
                     <br/><br/>
                     <div id="progress">
                        <div id="bar"></div>
                        <div id="percent">0%</div >
                     </div>
                     <div id="message"></div>
                      </form>
                     </div>

                     <h6 align="center" style="color:red">
                     <?php
                        if(!empty($error)) 
                        {
                           print_r($error);
                        }     
                     ?>
                     </h6>

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
         <a href="#step-2" type="button" class="btn btn-primary btn-circle">2</a>
         <p>Upload a picture</p>
         </div>
      </div>
     </div>
   </body>
</html>


<script>
$(document).ready(function()
{
     $("#uploadFile").on("change", function()
    {
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; 
        if (/^image/.test( files[0].type)){ 
            var reader = new FileReader(); 
            reader.readAsDataURL(files[0]); 
 
            reader.onloadend = function(){ 
                $("#imagePreview").css("background-image", "url("+this.result+")");
            }
        }
    });

    var options = {

    uploadProgress: function(event, position, total, percentComplete)
    {
        $("#bar").width(percentComplete+'%');
        $("#percent").html(percentComplete+'%');
 
    },
  
    success: function()
    {
        $("#bar").width('100%');
        $("#percent").html('100%');
 
    },
  
    complete: function(response)
    {
        //$("#message").html("<font color='green'>"+response.responseText+"</font>");
         //redirect(base_url().'display_images' , response.responseText);
         document.write(response.responseText);
    },
    error: function()
    {
        // $("#message").html("<font color='red'> ERROR: unable to upload files</font>");
        document.write(response.responseText);
 
    }
 
};
     $("#myForm").ajaxForm(options);
 
});   
</script>