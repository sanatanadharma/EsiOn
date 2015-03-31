<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Login EsiOn KMHDI</title>

	<link href="<?php echo base_url()?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php echo form_open("Otentifikasi/cek_login"); ?>
    <div class="container" style="margin-top:30px">
    	<div class="row">
    		<div class="col-md-4"></div>
     			<div class="col-md-4">
      			<div class="panel panel-default">
      				<div class="panel-body">
     						<form role="form">
         					<div class="form-group">
          					<label for="username">Email or Username</label>
           					<div class="input-group">
         							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
         							<input class="form-control" name="username" placeholder="Enter email">
     								</div>
       						</div>
       						<div class="form-group">
         						<label for="password">Password</label>
            				<div class="input-group">
           						<span class="input-group-addon"><span class="glyphicon glyphicon-star"></span></span>
           						<input type="password" class="form-control" name="password" placeholder="Password">
        						</div>
         					</div>
         					<hr/>
         					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-lock"></span> Login</button>
          			</form>
       				</div>
    				</div>
   				</div>
 				</div>
			</div>
		<?php echo form_close(); ?>

<script src="<?php echo base_url()?>assets/bootstrap/js/jquery-1.11.2.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>