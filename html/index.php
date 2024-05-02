<!DOCTYPE html>
<html lang="en">
<?php include('../db_connection/connect.php');?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../css/all.min.css" type="text/css" media="all">

    <style>
        .booking {
            outline: 1px solid #a33434;
            height: 150px;
            margin: 10px 50px;
            border-radius: 6px;
        }
    </style>

</head>

<body>

    <header style="margin: 0; padding-top: 10px;" id="home">
        <nav>
            <ul>
                <img src="/images/Uzbekistan_Airways_logo.svg" class="logo">
                <li><a href="#home">Home</a></li>
                <li><a href="#book">Book</a></li>
                <li><a href="cities.html">Cities</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>

        <section class="img">
            <div>
                <img src="/images/316607_1712153776.jpg">
            </div>
        </section>

        <section class="book" id="book">
            <div class="book-wrapper">
                <div class="btn-wrapper">
                    <button class="btn btn-book active">Book</button>
                    <button class="btn a-space">Avaiable Space</button>
                </div>
                <div class="booking">
                    <form>
                        <input class="from" type="text" placeholder="From">
                        <input class="to" type="text" placeholder="To">
                        <input type="time">
                        <input type="submit" value="book">
                    </form>
                </div>
                <div class="free-space">
                    <div class="f-class">
                        <span class="class">
                            First class
                        </span>
                        <div>
                            <span>Price: 200 $</span>
                            <span>Food: 20 $</span>
                            <span>Headphone: 5$</span>
                        </div>
                    </div>
                    <div class="b-class">
                        <span class="class">
                            Business class
                        </span>
                        <div>
                            <span>Price: 100 $</span>
                            <span>Food: 10$</span>
                            <span>Headphone: 1$</span>
                        </div>
                    </div>
                    <div class="e-class">
                        <span class="class">
                            Economy class
                        </span>
                        <div>
                            <span>Price: 50 $</span>
                            <span>Food: Free</span>
                            <span>Headphone: 0.5$</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </header>

    <main style="margin-top:200px;">

        <section>
            <div>
                <span class="title">Flying with Emirates</span>
                <h2 class="block__title"> Make it an incredible journey </h2>
                <div class="block__description">
                    <p>Explore the Emirates experience and plan an unforgettable trip beyond your flight.</p>
                </div>
            </div>

            <div class="experience-block__grid">

                <a class="card">
                    <div class="card-item">
                        <div class="item-container">
                            <span class="section-title">DUBAI EXPERIENCE</span>
                            <h3 class="item-title">Create your Dubai Experience</h3>
                            <span class="learn-more"> L earn more </span>
                        </div>
                        <img src="/images/dubai-downtown-skyline-at-sunset-d800x600.jpg" class="item-image">
                    </div>
                </a>

                <a class="card">
                    <div class="card-item">
                        <div class="item-container">
                            <span class="section-title">CABIN FEATURES</span>
                            <h3 class="item-title">First Class</h3>
                            <span class="learn-more"> Learn more </span>
                        </div>
                        <img src="/images/first-class-dessert-w800x600.jpg" class="item-image">
                    </div>
                </a>

                <a class="card">
                    <div class="card-item">
                        <div class="item-container">
                            <span class="section-title">CABIN FEATURES</span>
                            <h3 class="item-title">Business Class</h3>
                            <span class="learn-more"> Learn more </span>
                        </div>
                        <img src="/images/business-class-meal-w800x600.jpg" class="item-image">
                    </div>
                </a>

                <a class="card">
                    <div class="card-item">
                        <div class="item-container">
                            <span class="section-title">CABIN FEATURES</span>
                            <h3 class="item-title">Premium Economy</h3>
                            <span class="learn-more"> Learn more </span>
                        </div>
                        <img src="/images/premium-economy-menu-w800x600.jpg" class="item-image">
                    </div>
                </a>

                <a class="card">
                    <div class="card-item">
                        <div class="item-container">
                            <span class="section-title">Expect the
                                exceptional</span>
                            <h3 class="item-title">Economy Class</h3>
                            <span class="learn-more"> Read more </span>
                        </div>
                        <img src="/images/economy-class-chocolate-dessert-w800x600.jpg" class="item-image">
                    </div>
                </a>
            </div>
        </section>

        <section id="about">
            <div class="container">

                <h2 class="heading" style="text-align:center" >About us</h2>

                <p class="description">Learn more about our history, our business and sustainability
                    initiatives</p>

                <ul class="links__list">

                    <li class="list-item">
                        <a class="link">
                            <div class="rounded-image">
                                <img class="deffer-image" src="/images/a380-sky-view-w300x300.jpg">
                            </div>
                            <span class="link-text">Our business</span>
                        </a>
                    </li>

                    <li class="list-item">
                        <a class="link ">
                            <div class="rounded-image">
                                <img class="deffer-image"
                                    src="/images/sunlight-baths-the-blyde-river-canyon-w300x300.jpg">
                            </div>
                            <span class="link-text">Our planet</span>
                        </a>
                    </li>

                    <li class="list-item">
                        <a class="link">
                            <div class="rounded-image"><img class="deffer-image"
                                    src="/images/emirates-group-staff-group-photo-m300x300.jpg">
                            </div>
                            <span class="link-text">Our people</span>
                        </a>
                    </li>

                    <li class="list-item">
                        <a class="link ">
                            <div class="rounded-image">
                                <img class="deffer-image" src="/images/family-planting-tree-w300x300.jpg">
                            </div>
                            <span class="link-text">Our communities</span>
                        </a>
                    </li>
                </ul>
            </div>
        </section>
        <?php foreach($comments as $comment)
        { ?>
        <div class="container d-flex justify-content-center align-items-center height-vh">
            <div class="row d-flex justify-content-center">
              <div class="col-md-8">
                <div class="d-flex flex-column" id="comment-container">
                  <div class="bg-white">
                    <div class="flex-row d-flex">
                      <!-- <img src="images/810x270_3.jpg" width="40" class="rounded-circle"> -->
                      <div class="d-flex flex-column justify-content-start ml-2">
                        <span class="d-block font-weight-bold name"><?=$comment['name']?></span>
                        <span class="date text-black-50">Public - 09Jun, 2021</span>
                      </div>
                    </div>
                    <div class="mt-3">
                      <p class="comment-text"><?=$comment['text']?></p> 
                  </div>
                  <div class="bg-white">
                    <div class="d-flex flex-row fs-14">
                      <div class="p-2 cursor p-2"><i class="fa fa-thumbs-o-up"></i><span class="ml-1">Like</span></div>
                      <div class="p-2 cursor p-2"><i class="fa fa-comment"></i><span class="ml-1">Reply</span></div>
                      <div class="p-2 cursor p-2"><i class="fa fa-share"></i><span class="ml-1">Share</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
    </main>

    <footer>
        <div class="footer-wrapper">
            <div id="contact" class="contact">
                <h4>Contact</h4>
                <div>
                    <p>
                        German Airways GmbH & Co. KG
                        <br>Frankfurter Straße 720-726
                        <br>51145 Cologne
                        <br>Germany
                    </p>
                </div>
                <div>
                    <p>
                        Verkauf/Charteranfragen:
                        <br>Phone: +49 (0) 2203 / 967 – 180
                        <br>sales@germanairways.com
                    </p>
                </div>
                <div>
                    <p>
                        Allgemeine Informationen:
                        <br>Phone: +49 (0) 2203 / 967 – 100
                        <br>info@germanairways.com
                    </p>
                </div>
            </div>
            <div class="location">
                <h4>Our location</h4>
                <img src="/images/Map_Cologne_Bonn-1.png" alt="">
            </div>
            <div class="email">
                <h4>Contact Us</h4>
                <div>
                    <input type="email" placeholder="E-Mail adress">
                    <input type="button" value="submit">
                </div>
                <div>
                    <span>
                        <a><span style="display: none;">Instagram</span>
                            <i class="fab fa-instagram"></i>
                        </a>
                    </span>
                    <span>
                        <a><span style="display: none;">Linkedin</span>
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </span>
                    <span>
                        <a><span style="display: none;">Youtube</span>
                            <i class="fab fa-youtube"></i>
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <script src="/js/script.js"></script>
</body>

</html>