<?php
include_once('myfunctions.php');

function psheader()
{
  $login = isLogin();

?>
  <!DOCTYPE html>
  <html>

  <head>
    <title>PS4 Games</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.min.js"></script>
  </head>

  <body>
    <!--header-->
    <div class="header bg-dark">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
          <a href="#" class="navbar-brand">PS4 GAMES</a>
          <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
              <li class="nav-item">
                <a href="index.php" class="nav-link">Home</a>
              </li>
              <li class="nav-item">
                <a href="games.php" class="nav-link">Games</a>
              </li>
              <li class="nav-item">
                <a href="ranking.php" class="nav-link">Ranking</a>
              </li>
              <li class="nav-item">
                <a href="psconsole.php" class="nav-link">Console</a>
              </li>

              <?php
              if ($login) {
                $user = updateUserSession();
              ?>

            </ul>

            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Welcome <?= $user->username ?></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="profile.php" class="dropdown-item">Profile</a>
                  <div class="dropdown-divider"></div>
                  <a href="myfunctions.php?logout=yes" class="dropdown-item">Logout</a>
                </div>
              </li>
            </ul>
          <?php } else { ?>
            </ul>
            <ul class="nav navbar-nav ml-auto">
              <li class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Login</a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a href="account.php" class="dropdown-item">Login</a>
                  <a href="account.php" class="dropdown-item">Sign Up</a>
                </div>
              </li>
            </ul>
          <?php } ?>

          </div>
        </nav>
      </div>

    </div>
  <?php
}

function psfooter()
{
  ?>
    <footer>
      <div class="card-footer text-center bg-dark text-white h5">
        <p>Copyright &copy; | PS4 Games | <?= date('Y'); ?> </p>
      </div>
    </footer>
  </body>

  </html>
<?php }
?>