<!DOCTYPE html>
<html lang="en">
  <head>
    <title>APlikasi Kasir</title>
    <!-- Bootstrap core CSS -->
    <link href="admin/asset/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="admin/asset/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="admin/asset/css/style.css" rel="stylesheet">
    <link href="admin/asset/css/style-responsive.css" rel="stylesheet">

    </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" action="cek_login.php" method="post">
				
		        <h2 class="form-login-heading"><center><img src="config/logo.jpg" ></center><p><center>Sign in Admin APlikasi Kasir</center></p></h2>
		        <div class="login-wrap">
				<center>
		            <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
		            <br>
		            <input type="password" class="form-control" placeholder="Password" name="password"> 
					</center>
		             <br> <br> 
		            <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            <hr>
		            
		            
		
		        </div>
		
		          
		      </form>	  	
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch('', {speed: 500});
    </script>


  </body>
</html>
