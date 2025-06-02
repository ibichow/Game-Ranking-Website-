<?php
include_once 'design.php';
include_once 'myfunctions.php';

$games  = readGames();

psheader();

?>
<!-- end header -->
<div class="container">

    <p class="h1 text-center mt-5 w-100 border-bottom">All PS4 Games</p>
    <div class="row">
        <!-- <div class="card-deck"> -->
            <?php foreach ($games as $game) { ?>
                <div class="col-lg-4 md-2 mt-2">
                    <div class="card shadow">
				        <a href="game-details.php?gameid=<?=$game->gameid?>">
                        <img src="<?= $game->picture ?>" alt="<?= $game->title ?>" class="card-img" alt="<?= $game->title ?>" style="height: 400px" />
                        </a>
                        <div class="card-body">
                            <h5 class="card-title"><?= $game->title ?></h5>

                        </div>
                        <div class="card-footer"> <a href="game-details.php?gameid=<?= $game->gameid ?>" class="btn btn-primary float-right">Details</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <!-- </div> -->
    </div>
    <div class="clearfix"> </div>
    <hr>

</div>
<?php
psfooter();
?>