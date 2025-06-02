<?php
include_once 'design.php';
include_once 'myfunctions.php';

$games  = readGames();
$games = array_chunk($games, 3);
$games = $games[0];
psheader();

?>
<div class="col-md-12"><img src="images/home-banner.jpg" alt="banner" class="w-100" /></div>
<!-- end header -->
<div class="container">

	<?php foreach ($games as $game) { ?>
		<p class="h1 text-center mt-5 w-100 border-bottom"><?= $game->title ?></p>
		<div class="row">
			<div class="col-md-5 text-center">
				<a href="game-details.php?gameid=<?=$game->gameid?>">
					<img src="<?= $game->picture ?>" alt="<?= $game->title ?>" style="max-height: 300px" />
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

	<?php } ?>

	<div class="clearfix"> </div>
	<hr>

</div>
<?php
psfooter();
?>