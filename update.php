<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <?php $this->load->view('css'); ?>
<?php $this->load->view('js'); ?>

<!--Data tables -->
  </head>
  
  <body>
  <div class="container">
  <table class="table table-responsive" id="example" class="display" cellspacing="0" width="100%" >
   <thead>
    <tr >
      <th>Id</th>
    </tr>
    </thead>
     <tbody>
      <?php foreach($result as $res){ ?>
        <tr class="success" >
          <td><a href="<?php echo base_url() . "edit_content/show_result_id/".$res->id; ?>"><?php echo $res->first_name; ?></a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table >

</div>
<div id="detail">
<?php foreach ($single_result as $sres): ?>

<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Make Changes</h3>
            </div>
            <div class="panel-body">
              <form method="post" action="<?php echo base_url()."edit_content/update_result_id"?>">
              <div class="row">
               
                    <div class="form-group">
                      <input type="hidden" name="id" id="id" class="form-control input-sm" value="<?php echo $sres->id; ?>" >
                   
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="first_name" id="first_name" class="form-control input-sm" value="<?php echo $sres->first_name; ?>" >
                    </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="text" name="last_name" id="last_name" class="form-control input-sm" value="<?php echo $sres->last_name; ?>" >
                    </div>
                  </div>
              <div class="col-xs-6 col-sm-6 col-md-12">
                 <div class="form-group">
                    <input type="text" name="email" id="email" class="form-control input-sm" value="<?php echo $sres->email; ?>" >
                    </div>
                </div>
                </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                      <input type="submit" id="submit" name="submit" value="Update"> 
                    </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6">
                    <div class="form-group">
                     <input type="submit" id="submit" name="submit" value="Delete">
                    </div>
                  </div>
              </form>
<?php endforeach; ?>
</div>
</div>
</body>
</html>