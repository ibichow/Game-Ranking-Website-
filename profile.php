<?php
include_once('design.php');
include_once('myfunctions.php');


if (!isLogin()) {
  header('Location: account.php');
}
start_session();
updateUserSession();

$data = ($_SESSION['userinfo']);
//var_dump($data);

$gameid = $data->favoritegame;
if ($gameid != "")
  $game = getMatchingGame(readGames(), $gameid);

psheader();

?>
<!-- end header -->
<div class="container">

  <p class="h1 text-center mt-5 w-100 border-bottom">Update Profile</p>
  <form action="myfunctions.php" method="post">
    <div class="row">
      <div class="col-md-6 form-group">
        <span>Full Name</span>
        <input type="text" placeholder="Enter your name" value="<?= $data->fullname; ?>" name="fullname" class="form-control" required>
      </div>
      <div class="col-md-6  form-group">
        <span>Email</span>
        <input type="email" placeholder="Enter your Email" value="<?= $data->useremail; ?>" name="useremail" class="form-control" required>
      </div>
      <div class="col-md-6  form-group">
        <span>Username</span>
        <input type="text" placeholder="Enter your username" value="<?= $data->username; ?>" name="username" class="form-control" readonly disabled required>
      </div>
      <div class="col-md-6  form-group">
        <span>Password</span>
        <input type="password" placeholder="Enter your password" value="<?= $data->password; ?>" name="password" class="form-control" required>
      </div>

      <div class="col-md-12">
        <input type="submit" class="btn btn-primary" value="Update" name="submitUpdate" style="margin-left: 43%;">
      </div>
    </div>
  </form>

  <hr>
  <p class="h1 text-center mt-5 w-100 border-bottom">Favorite Game</p>
  <?php if ($gameid != "") { ?>
    <p class="h3 text-center w-100"><?= $game->title ?></p>
    <form action="myfunctions.php" method="post">
      <input type="text" value="<?= $gameid ?>" name="gameid" class="form-control hidden" hidden required>
      <input type="submit" value="Remove as favorite" class="btn btn-primary float-right" name="submitRemoveFavoriteGame">
    </form>
    <div class="row">
      <div class="col-md-5">
        <a href="game-details.php?gameid=<?= $game->gameid ?>">
          <img src="<?= $game->picture ?>" alt="<?= $game->title ?>" class="w-100 f-image" />
        </a>
      </div>
      <div class="col-md-6">
        <ul class="list-group list-group-flush">
          <li class="list-group-item"><strong>Genre: </strong><?= $game->genre ?></li>
          <li class="list-group-item"><strong>Release date: </strong><?= $game->releasedate ?></li>
          <li class="list-group-item"><strong>Age rating: </strong><?= $game->agerating ?></li>
          <li class="list-group-item"><strong>Developer: </strong><?= $game->developer ?></li>
          <li class="list-group-item"><strong>Platforms: </strong><?= $game->platforms ?></li>
        </ul>
      </div>
    </div>
    <hr>
  <?php } else echo '<p class="text-center">No favorite game set.</p>'; ?>
  <div class="clearfix"> </div>
  <hr>
</div>

<!-- end header -->

<?php
psfooter();
?>