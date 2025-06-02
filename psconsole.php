<?php
include_once 'design.php';

$path    = 'images/gallery/';
$gallery = glob($path . "*.{gif,jpg,png,jpeg,jfif,webp}", GLOB_BRACE);
foreach ($gallery as $g) {
    //echo $g . '<br>';
}
psheader();

?>
<!-- end header -->
<div class="container">

    <p class="h1 text-center mt-5 w-100">PlayStation 4</p>
    <div class="row">
        <div class="col-md-5">
            <a href="images/ps4.png">
                <img src="images/ps4.png" alt="PS4 Console" class="w-100 f-image" />
            </a>
        </div>
        <div class="col-md-7">
            <p class="text-justify">The PlayStation 4 (PS4) is a home video game console developed by Sony Computer Entertainment. Announced as the successor to the PlayStation 3 in February 2013, it was launched on November 15, 2013, in North America, November 29, 2013 in Europe, South America and Australia, and on February 22, 2014 in Japan. A console of the eighth generation, it competes with Microsoft's Xbox One and Nintendo's Wii U and Switch.</p>

            <p class="text-justify">The PlayStation 4 places an increased emphasis on social interaction and integration with other devices and services, including the ability to play games off-console on PlayStation Vita and other supported devices ("Remote Play"), the ability to stream gameplay online or to friends, with them controlling gameplay remotely ("Share Play"). The console's controller was also redesigned and improved over the PlayStation 3, with improved buttons and analog sticks, and an integrated touchpad among other changes. The console also supports HDR10 High-dynamic-range video and playback of 4K resolution multimedia.</p>

            <p class="text-justify">On September 7, 2016, Sony unveiled the PlayStation 4 Slim, a smaller version of the console; and a high-end version called the PlayStation 4 Pro, which features an upgraded GPU and a higher CPU clock rate to support enhanced performance and 4K resolution in supported games.</p>

            <p class="text-justify">Its successor, the PlayStation 5, was released in November 2020, with Sony discontinuing in Japan all PlayStation 4 models except the Slim version in January 2021, with it still being produced in Western markets following their statement of 3-year support of PS4. <br>
                -<a href="https://en.wikipedia.org/wiki/PlayStation_4">Wikipedia</a></p>
        </div>
        <div class="col-md-6">
            <table class="table border table-borderless">
                <thead class="thead-dark text-center">
                    <tr>
                        <th colspan="2">Details</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        <th>Also known as</th>
                        <td>PS4</td>
                    </tr>
                    <tr>
                        <th>Developer</th>
                        <td><a href="https://en.wikipedia.org/wiki/Sony_Computer_Entertainment" title="Sony Computer Entertainment">Sony Computer Entertainment</a></td>
                    </tr>
                    <tr>
                        <th>Manufacturer</th>
                        <td><a href="https://en.wikipedia.org/wiki/Sony" title="Sony">Sony Electronics</a>, <a href="https://en.wikipedia.org/wiki/Foxconn" title="Foxconn">Foxconn</a></td>
                    </tr>

                    <tr>
                        <th>Generation</th>
                        <td><a href="https://en.wikipedia.org/wiki/Eighth_generation_of_video_game_consoles" title="Eighth generation of video game consoles">Eighth generation</a></td>
                    </tr>
                    <tr>
                        <th>Release date</th>
                        <td>
                            <div>
                                <ul>
                                    <li><a href="https://en.wikipedia.org/wiki/North_America" title="North America">NA</a>:</span> November 15, 2013</li>
                                    <li><a href="https://en.wikipedia.org/wiki/PAL_region" title="PAL region">PAL</a>:</span> November 29, 2013</li>
                                    <li><a href="https://en.wikipedia.org/wiki/Japan" title="Japan">JP</a>:</span> February 22, 2014</li>
                                </ul>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <th>Introductory price</th>
                        <td>US$399.99, €399.99, £349.99</td>
                    </tr>

                    <tr>
                        <th>Units sold</th>
                        <td>106 million (as of December&nbsp;31, 2019)</td>
                    </tr>


                    <tr>
                        <th>Controller input</th>
                        <td>DualShock 4, PlayStation</td>
                    </tr>

                    <tr>
                        <th>Family</th>
                        <td>PS3 <i class="fa fa-arrow-left"></i> <strong>PS4</strong> <i class="fa fa-arrow-right"></i> PS5</td>
                    </tr>
                    <tr>
                        <th>Website</th>
                        <td><span class="url"><a rel="nofollow" href="http://playstation.com/ps4/">playstation<wbr>.com<wbr>/ps4<wbr>/</a></span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="col-md-6">
            <table class="table border table-borderless">
                <thead class="thead-dark text-center">
                    <tr>
                        <th colspan="2">Technical Specs</th>
                    </tr>
                </thead>
                <tr>
                    <th>CPU</th>
                    <td>Semi-custom 8-core AMD x86-64 Jaguar 1.6 GHz CPU (2.13 GHz on PS4 Pro) (integrated into APU)
                        Secondary low power processor (for background tasks)</td>
                </tr>
                <tr>
                    <th>Memory</th>
                    <td>
                        <div>
                            <ul>
                                <li><b>All models</b>: 8 GB GDDR5 RAM</li>
                                <li><b>PS4 &amp; Slim</b>: 256 MB DDR3 RAM (for background tasks)</li>
                                <li><b>Pro</b>: 1 GB DDR3 RAM (for background tasks)</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Storage</th>
                    <td>500 GB, 1 TB, 2 TB</td>
                </tr>
                <tr>
                    <th>Display</th>
                    <td>
                        <div>
                            <ul>
                                <li><b>PS4 &amp; Slim</b>:480p, 720p, 1080i, 1080p via HDMI 2.0a</li>
                                <li><b>Pro</b>: 4K UHD via HDMI 2.0b</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>



                <th>Dimensions</th>
                <td>
                    <div>
                        <ul>
                            <li><b>PS4</b>: 2.09 in × 12 in × 10.8 in (53 mm × 305 mm × 274 mm)</li>
                            <li><b>Slim</b>: 1.54 in × 11.3 in × 10.4 in (39 mm × 287 mm × 264 mm)</li>
                            <li><b>Pro</b>: 2.17 in × 12.9 in × 11.6 in (55 mm × 328 mm × 295 mm)</li>
                        </ul>
                    </div>
                </td>
                </tr>
            </table>
        </div>
    </div>

    <hr>
    <!-- Features -->
    <section>
        <div class="row">
            <div class="col-md-6">
                <p class="h2 text-left mt-1 w-100">Software and services</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">PlayStation 4 system software</li>
                    <li class="list-group-item">Multimedia </li>
                    <li class="list-group-item">PlayStation Network</li>
                    <li class="list-group-item">Second screen and remote play</li>
                </ul>
            </div>
            <div class="col-md-6">
                <p class="h2 text-left mt-1 w-100">Social features</p>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Community creation</li>
                    <li class="list-group-item">Media sharing</li>
                    <li class="list-group-item">Live streaming</li>
                    <li class="list-group-item">Share Play</li>
                </ul>
            </div>
        </div>

    </section>

    <hr>
    <!-- Gallery -->
    <section>
        <p class="h1 text-center w-100">Gallery</p>
        <!-- A Lightbox is basically a slider (carousel) inside of a modal.
            reference: https://codepen.io/nikki-peel/pen/oNLbzBZ
        -->

        <div class="row" data-toggle="modal" data-target="#lightbox">
            <?php $i = 0;
            foreach ($gallery as $gitem) { ?>
                <div class="col-12 col-md-6 col-lg-3">
                    <img class="w-100 p-2 card shadow" src="<?= $gitem ?>" data-target="#indicators" data-slide-to="<?= $i++ ?>" alt="" />
                </div>
            <?php } ?>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="lightbox" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close text-right p-2" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div id="indicators" class="carousel slide" data-interval="false">
                        <ol class="carousel-indicators">
                            <li data-target="#indicators" data-slide-to="0" class="active"></li>
                            <?php for ($i = 1; $i < sizeof($gallery); $i++) { ?>
                                <li data-target="#indicators" data-slide-to="<?= $i ?>"></li>
                            <?php } ?>
                        </ol>
                        <div class="carousel-inner">

                            <div class="carousel-item active">
                                <img class="d-block w-100 " src="<?= $gallery[0] ?>" alt="First slide">
                            </div>
                            <?php for ($i = 1; $i < sizeof($gallery); $i++) { ?>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="<?= $gallery[$i] ?>" alt="First slide">
                                </div>
                            <?php } ?>
                        </div>
                        <a class="carousel-control-prev" href="#indicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#indicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="clearfix"> </div>
    <hr>

</div>
<?php
psfooter();
?>