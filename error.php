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
        <?php $this->load->view('css'); ?>
  </head>
  <body>
       <div class="container">
        <div class="row">
          <div class="span12">
            <div class="hero-unit center">
              <h1>Page Not Found <small><font face="Tahoma" color="red">Error 404</font></small></h1>
                <br />
                  <p>The page you requested could not be found, either contact your webmaster or try again. Use your browsers <b>Back</b> button to navigate to the page you have prevously come from</p>
                  <p><b>Or you could just press this neat little button:</b></p>
                  <a href="<?php echo base_url();?>" class="btn btn-large btn-info"><i class="icon-home icon-white"></i> Take Me Home</a>
            </div>
            <br />       
          </div>
        </div>
      </div>
  </body>
</html>