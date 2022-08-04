<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="UTF-8" />
    <meta name="description" content="Ogani Template" />
    <meta name="keywords" content="Ogani, unica, creative, html" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>PetsQu</title>

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap"
      rel="stylesheet"
    />

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <link rel="stylesheet" href="css/login-style.css" type="text/css" />
  </head>

  <body>
    <div class="login-page">
      <div class="form">
        <span
          ><h4><b>Login Page</b></h4></span
        >
        <hr />
        <?php 
          if(isset($_GET['alert'])){
            if($_GET['alert'] == "terdaftar"){
              echo "<div class='alert alert-success text-center'>
                      Berhasil terdaftar ke website.
                    </div>";
            }elseif($_GET['alert'] == "gagal"){
              echo "<div class='alert alert-danger text-center'>
                      Email atau Password salah.
                    </div>";
            }elseif($_GET['alert'] == "login-dulu"){
              echo "<div class='alert alert-warning text-center'>
                      Akses terbatas
                    </div>";
            }
          }
				?>

        <form class="login-form" method="POST" action="login-act.php">
          <input type="text" name="username" placeholder="Username" required="required" autocomplete="off" />
          <input type="password" name="password" placeholder="Password" required="required" autocomplete="off" />
          <button type="submit">LOGIN</button>
          <p class="message">
            Not registered? <a href="register.php">Create an account</a>
          </p>
          <p class="message">Back to <a href="index.php">Home</a></p> 
        </form>
      </div>
    </div>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
