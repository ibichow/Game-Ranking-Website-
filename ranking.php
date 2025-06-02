<?php
include_once 'design.php';
include_once 'myfunctions.php';

$games = readGames();
$topgames = topRankedGames();
arsort($topgames);
//disp($topgames);
psheader();

?>
<!-- end header -->
<div class="container">

    <p class="h1 text-center mt-5 w-100">Top Ranked Games</p>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Title</th>
                        <th>Genre</th>
                        <th>Developer</th>
                        <th>Score</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($topgames as $gameid => $score) {
                        $game = getMatchingGame(readGames(), $gameid);
                    ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $game->title ?></td>
                            <td><?= $game->genre ?></td>
                            <td><?= $game->developer ?></td>
                            <td><?= $score ?></td>
                            <td><a href="game-details.php?gameid=<?= $game->gameid ?>"><i class="fa fa-eye"></i></a></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
    <div class="clearfix"> </div>
    <hr>

</div>
<?php
psfooter();
?>