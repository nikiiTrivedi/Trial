<!DOCTYPE html>
<html lang="en">
  <head>
 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->load->view('css'); ?>
    <?php $this->load->view('js'); ?>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/bs-3.3.5/jq-2.1.4,dt-1.10.8/datatables.min.css"/>
     <script type="text/javascript" src="https://cdn.datatables.net/r/bs-3.3.5/jqc-1.11.3,dt-1.10.8/datatables.min.js"></script>
 
  </head>
 
  <body>
    <div class="container">
     <table class="table table-striped table-bordered" id="example" class="display" cellspacing="0" width="100%" >
    <thead>
    <tr>
      <th>User Name</th>
      <th>last_name</th>
      <th>email</th>
      <th>Update</th>
    </tr>
    </thead>
     <tbody>
      <?php foreach($result as $row){ ?>
        <tr class="success" >
         <?php
          $a = $row->id; 
          ?>         
          <td><?php  echo $row->first_name;?> 
          </td>
          <td><?php  echo $row->last_name;?> 
          </td>
          <td><?php  echo $row->email;?> 
          </td>
          <td> <a href ="<?php echo base_url().'edit_content/show_result_id/'.$a ?>"> Edit 
          </a> </td>
        </tr>
        <?php } ?>
    </tbody>
  </table >
</div>
</div>
</body>
</html>
 </body>
</html>
  
 <script type="text/javascript">
   $(document).ready(function(){
     $('#example').DataTable();
   });
 </script>