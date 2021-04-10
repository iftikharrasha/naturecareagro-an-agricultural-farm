<?php
include "./includes/sessions.php";
include "./includes/functions.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $pass = $_POST['password'];
    $password = md5($pass);

    if (empty($username) || empty($password)) {
        $_SESSION['errorMessage'] = 'All Fields Must Be Fill Out!';
    } else {
        $foundAccount = LoginAttempt($username, $password);

        if ($foundAccount) {
            $_SESSION['admin_id'] = $foundAccount['admin_id'];
            $_SESSION['username'] = $foundAccount['admin_name'];

            Redirect_To('./control/dashboard.php?success');
        } else {
            $_SESSION['errorMessage'] = 'Username/Password Is Invalid';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vPanel
    </title>
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">
    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="./resource/css/bootstrap.min.css"/>
    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="./resource/css/font-awesome.min.css">
    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="./resource/css/style.css"/>
    <link type="text/css" rel="stylesheet" href="./resource/css/media.css"/>
  </head>
  <body>
    <div>
      <div class="login_wrapper">
        <div class="login_form">
          <section class="login_content">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
              <h1>Log in to your vPanel
              </h1>

              <p class="message">
				          <?php echo Message(); ?>
			        </p>

              <div style="margin-bottom: 10px;">
                <input type="text" id="userName" name="username" class="form-control" placeholder="Your Name">
              </div>
              <div>
                <input type="password" id="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div>
                <button type="submit" name="submit" class="btn btn-info submit">Log in
                </button>
              </div>
              <div class="clearfix">
              </div>
              <div class="bridge">
                <div>
                  <h1>
                    <i class="fa fa-asterisk">
                    </i> NATURE CARE AGRO!
                  </h1>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
