<?php require("basic.php");?>
<!DOCTYPE html>

<?php
if(isset($_POST['submit_login']))
{
	if($_POST['user']=="admin")
	{
		if($_POST['password']=="1234")
		{
			$_SESSION['usr_nm']="admin";
			header("location:index.php");
		}else $message_login="Your password is wrong";
	}else $message_login="Your username or password is wrong";
}

?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo WebName;?></title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="" method="POST">
              <h1>Login Form</h1>
			  
              <div>
                <input type="text" name="user" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <input type="submit" name="submit_login" class="btn btn-default submit" value="Log in">
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />
					<?php if(@$message_login!=""){?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
							</button>
							<strong><?php echo $message_login;?>!</strong>
						</div>
					<?php }?>
                <div>
                  <h1><i class="fa fa-paw"></i> <?php echo WebName;?>! Admin Panel</h1>
                  <p>©2017 All Rights Reserved. <?php echo WebName;?>!</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
