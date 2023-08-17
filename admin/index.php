<?php
  session_start();
  if(isset($_SESSION['admin'])){
    header('location:home.php');
  }
?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition login-page">
<div class="login-box">
  
 

  	<div class="login-box-body" style="border-radius: 20px;">
	  <div class="logo" style="text-align: center;padding:30px;font-size:50px;">
  	 <i class='bx bx-network-chart'></i>
   	 <span class="logo_name">Payroll</span>
 </div>
		<div class="login-logo">
    		<b style="font-size: 20px;">ADMIN LOGIN</b>
    	</div>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="username" style="background-color: #D2D6DE;height:40px;" placeholder="username" required autofocus>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" style="background-color: #D2D6DE;height:40px;" placeholder="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-flat" 
					  style="background-color: #00B863;width:320px;border-radius:5px;margin-top:10%;" name="login">
					  <i class="fa fa-sign-in"></i> Log In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>