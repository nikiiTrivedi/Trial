
<div class="container">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only" > Toggle navigation </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
                <span class="icon-bar"> </span>
              </button>
              <a class="navbar-brand" href="#" > journey is the destination.. </a>
          </div>

          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"> <a href="<?php echo base_url();?>index.php/welcome"> Home </a></li>
            <li> <a href="#"> About </a></li>
            <li calss="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown"> Services<b class="caret"></b> </a>
              
              <ul class="dropdown-menu">
                <li class="dropdown-header">Products</li>
                <li><a href="#"> abc
                <li class="dropdown-header">Other Services</li>
                <li><a href="#"> Saas </a>
                <li><a href="#"> Mobile Application </a>
                <li><a href="#"> Web Development </a>
              </ul>

            </li>

            <li>
               <a href="#contact" data-toggle="modal">Contact</a>
            </li>

             <li>
               <a href="<?php echo base_url();?>index.php/welcome/logout" data-toggle="modal">Logout</a>
            </li>

          </ul>
          </div>
      </div>

      