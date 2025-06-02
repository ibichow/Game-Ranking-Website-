<?php
include_once 'design.php';
include_once 'myfunctions.php';

$gameid = -1;
$games = readGames();
if (isset($_GET['gameid']))
	$gameid = $_GET['gameid'];

$game = getMatchingGame($games, $gameid);
if ($game === NULL)
	header("location: games.php");

$userid = -1;
$fav = false;
start_session();
if (isset($_SESSION['userid'])) {
	$userid = $_SESSION['userid'];
	$user = getMatchingUser(readUsers(), $userid);
	$fav = ($user->favoritegame == $gameid) ? true : false;
}

$reviews = readUserReviews();
$hasReviews = false;
psheader();

?>
<!-- end header -->
<div class="container">

	<p class="h1 text-center mt-5 w-100 border-bottom"><?= $game->title ?></p>
	<?php if (isLogin()) { ?>
		<form action="myfunctions.php" method="post">
			<input type="text" value="<?= $gameid ?>" name="gameid" class="form-control hidden" hidden required>
			<?php if ($fav) { ?>
				<input type="submit" value="Remove as favorite" class="btn btn-primary float-right" name="submitRemoveFavoriteGame">
			<?php } else { ?>
				<input type="submit" value="Add as favorite" class="btn btn-primary float-right" name="submitAddFavoriteGame">
		<?php }
			echo '</form>';
		} ?>
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
		<!-- Retailer Section -->
		<div class="row justify-content-center">
			<p class="h2 text-center w-100">Buy</p>
			<div class="card-deck col-md-12 text-center">
				<?php foreach ($game->retailers as $rid) {
					$retailer = getMatchingRetailer(readRetailers(), $rid);
					if ($retailer != NULL) {
				?>
						<div class="card shadow ">
							<div class="card-body text-center bg-info">
								<h4 class="card-title">&pound;<?= $retailer->price ?></h4>
								<p>@ <?= $retailer->info ?></p>

							</div>
							<div class="card-footer"><a href="<?= $retailer->link ?>" class="btn btn-primary">Buy</a>

							</div>

						</div>

				<?php }
				} ?>

			</div>
		</div>
		<hr>
		<!-- Recommendation Section -->
		<div class="row justify-content-center">
			<p class="h2 text-center w-100">Recommendation</p>
			<?php $reviewed = false;
			foreach ($reviews as $review) {
				if ($review->gameid == $gameid) {
					if ($review->userid == $userid) {
						$reviewed = true;

			?>
						<div class="col-md-8 ml-5">
							<p><?= $review->review ?></p>
						</div>
						<div class="col-md-3 text-center">
							<p class="h3">Score</p>
							<p class="h1"><?= $review->rating ?>/10</p>
						</div>
				<?php
						break;
					}
				}
			}
			if (!$reviewed) { ?>
				<div class="col-md-12 ml-5">
					<p>You have not reviewed this Game yet. Review it now</p>
					<form action="myfunctions.php" method="post">
						<div class="form-group">
							<span>Review/Recommendation*</span>
							<textarea type="text" placeholder="Enter your Review/Recommendation" value="" name="review" class="form-control" required></textarea>
						</div>
						<div class="form-group">
							<span>Rating (1-10)*</span>
							<input type="number" value="1" name="rating" min="1" max="10" class="form-control" required>
							<input type="text" value="<?= $gameid ?>" name="gameid" class="form-control hidden" hidden required>
						</div>
						<?php if (!isLogin()) echo '<p>you need to login to post review</p>';
						else { ?>
							<input type="submit" value="Submit" class="btn btn-primary float-right" name="submitUserReview">
						<?php } ?>
					</form>
				</div>
			<?php } ?>
		</div>
		<hr>
		<!-- Official Reviews Section -->
		<div class="row justify-content-center">
			<p class="h2 text-center w-100">Official Reviews</p>
			<div class="col-md-12">
				<ul class="">
					<?php foreach ($game->officialreviews as $orid) {
						$officialreview = getMatchingOfficialReview(readOfficialReviews(), $orid);
						if ($officialreview != NULL) {
					?>
							<li class=""><a href="<?= $officialreview->orlink ?>"><?= $officialreview->ortitle ?></a></li>

					<?php }
					} ?>
				</ul>
			</div>
		</div>
		<hr><!-- User Reviews Section -->
		<div class="row justify-content-center">
			<p class="h2 text-center w-100">User Reviews</p>
			<div class="col-md-12">
				<table class="table">
					<?php foreach ($reviews as $review) {
						if ($review->gameid == $gameid) {
							$hasReviews = true;
							$userInfo = getMatchingUser(readUsers(), $review->userid);
					?>
							<tr>
								<td class="w-75">
									<blockquote class="blockquote">
										<p class="mb-0"><?= $review->review ?></p>
										<footer class="blockquote-footer"><?= $userInfo->fullname ?></footer>
									</blockquote>
								</td>
								<td class="w-25">
									<p class="h3"><?= $review->rating / 2 ?>/5</p>
								</td>
							</tr>

					<?php }
					} ?>
				</table>
				<?php if (!$hasReviews) echo '<p class="ml-5">No Reviews</p>'; ?>
			</div>
		</div>
		<div class="clearfix"> </div>
		<hr>

</div>
<?php
psfooter();
?>