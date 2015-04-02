<div class="container-fluid">
  <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 9">
    <div class="container-fluid">
  		<div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a href="<?php echo base_url()?>" class="navbar-brand">EsiOn KMHDI</a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $username; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Profile</a></li>
          	<li><a href="#">...</a></li>
          	<li><a href="#">...</a></li>
            <li class="divider"></li>
  	        <li><a href="<?php echo site_url('AdminController/logout'); ?>">Logout</a></li>
          </ul>
        </li>
      </ul>
  	</div>
  </nav>
</div>