<?php
include("functions.php");

make_header();
?>

<html>
  <link rel="stylesheet" href="about_us.css">
  <div class="images">
    <div class="container-fluid">
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="plants.jpg" class="d-block w-100" alt="scrubslol">
                        </div>
                        <div class="carousel-item">
                            <img src="plant_hand.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
  </div>

  <body>
    <h1>About Us</h1>
    <div class="about_us">
    <p>Jejeti is a online plant store founded by Li Junpeng, Ivan Molina, Eder Reyna, Evan Smith, Trenton Vail, and Jack Zhang in the year 2019. We wanted to make an online store where you can buy a variety of plants for your home or business with ease. We deliver our plants healthy, and ready-to-go straight to your front door or office. We'll even plant them for you too if you'd like. Upon delivery we offer tips and tricks to keep your plants healthy and alive for as long as possible. Give your home or office a new fung shwa by buying our plants today.</p>
    </div>
  </body>
</html>

<?php
make_footer();
?>
