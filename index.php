<?php
include "./vpanel/includes/sessions.php";
include "./vpanel/includes/functions.php";

$view_count = "UPDATE nc_views SET views = views+1";
$exec = Query($view_count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature & Care Agro Products Ltd. | Home</title>

    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@600&display=swap" rel="stylesheet">

    <!--site details-->
    <meta name="description" content="Nature & Care Agro Products Ltd. is a private limited company involved in importing and repackaging of pesticides and micro fertilizers. We are an emerging agrochemical company thriving to provide superior quality agricultural commodities at the most competitive price.">
    <meta name="keywords" content="Nature & Care Agro Products Ltd., Nature and Care, Argiculture, Agrochemical , Fertilizers, Nourishment, Farmers, Bangladesh">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Nature & Care Agro Products Ltd.">
    <meta property="og:description" content="Nature & Care Agro Products Ltd. is a private limited company involved in importing and repackaging of pesticides and micro fertilizers.">
    <meta property="og:site_name" content="Nature & Care Agro Products Ltd.">
    <meta property="og:image:alt" content="Nature & Care Agro Products Ltd.">
    <meta property="og:image:width " content="1080">
    <meta property="og:image:height" content="564">
    <meta property="og:locale" content="en_US">
    <meta property="og:image" content="img/nc-thumb.jpg">
    <!--site details-->

    <script src="js/font-awesome.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-BNMYZ4D2WY"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-BNMYZ4D2WY');
    </script>
</head>
<body>
    <header class="header-sticky">
        <div class="top-nav d-none d-lg-block">
          <nav>
            <div class="container">
              <div class="row d-flex justify-content-between">
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                  <div class="py-2 m-lg-2">
                    <span>
                      <img class="img-fluid" src="img/phone.svg" alt="phone">
                    </span>
                    <span class="pl-2 c-tag-1">
                      + (880) 1785-788189
                    </span>
                  </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                  <div class="py-2 m-lg-2">
                    <span>
                        <img class="img-fluid" src="img/mail.svg" alt="mail">
                    </span>
                    <span class="pl-2 c-tag-1">
                      info@naturecareagro.com
                    </span>
                  </div>
                </div>
                <div class="col-md-4 d-flex justify-content-center align-items-center">
                  <div class="py-2 m-lg-2">
                    <span>
                        <img class="img-fluid" src="img/clock.svg" alt="clock">
                    </span>
                    <span class="pl-2 c-tag-1">
                      Sun - Thu: 8:00 - 18:00
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>

        <div class="main-nav">
            <nav class="navbar navbar-expand-xl py-2 cn-stick-nav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="index.php">
                        <img id="brand" src="img/naturecare-xl.svg" class="img-fluid" alt="nature care agro">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="img/toggler-icon.svg" alt="toggler">
                     </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto ml-lg-4 menu mb-xl-0 mb-4">
                        <li class="nav-item ml-lg-4 ml-cus">
                            <a class="nav-link" href="#home">Home</a>
                        </li>
                        <li class="nav-item ml-lg-4 ml-cus">
                            <a class="nav-link" href="#service">Services</a>
                        </li>
                        <li class="nav-item ml-lg-4 ml-cus">
                            <a class="nav-link" href="#about">About Us</a>
                        </li>
                        <li class="nav-item ml-lg-4 ml-cus">
                            <a class="nav-link" href="#history">Journey</a>
                        </li>
                        <li class="nav-item ml-lg-4 ml-cus">
                            <a class="nav-link" href="#retailer">Distributors & Retailers</a>
                        </li>
                        <li class="nav-item ml-lg-4 ml-cus">
                            <a class="nav-link" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                    <a class="text-uppercase ml-auto btn-tag-1 bg-tag-2 c-tag-7 py-2 px-3" href="products.php">Our products</a>
                </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero" id="home">
            <div class="hero-bg">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner hero-bg">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img/welcome.jpg" alt="Home of Nature">
                            <div class="carousel-caption hero-text" data-aos="fade-up">
                                <h1 class="dela-80 c-tag-4">Welcome to the<br>Home of Nature.</h1>
                                <div class="my-5">
                                    <a class="text-uppercase btn-tag-2 py-2 px-3" href="#history">
                                        EXPLORE AND DISCOVER
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/quality.jpg" alt="Quality">
                            <div class="carousel-caption hero-text" data-aos="fade-up">
                                <h1 class="dela-80 c-tag-4">Ensuring Quality<br>Across Country.</h1>
                                <div class="my-5">
                                    <a class="text-uppercase btn-tag-2 py-2 px-3" href="#history">
                                        EXPLORE AND DISCOVER
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="img/nourishment.jpg" alt="Nourishment">
                            <div class="carousel-caption hero-text" data-aos="fade-up">
                                <h1 class="dela-80 c-tag-4">Heart of Perfect<br>Farming</h1>
                                <div class="my-5">
                                    <a class="text-uppercase btn-tag-2 py-2 px-3" href="#history">
                                        EXPLORE AND DISCOVER
                                    </a>
                                </div>
                            </div>
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
        </section>

        <section class="services mt-5" id="service">
            <div class="container c_custom">
                <div class="row">
                    <div class="col-12">
                            <div class="text-center">
                                <h2 class="my-5 headline c-tag-3">Services <span class="c-tag-6">&</span> Products</h2>
                                <div class="row pt-5">
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="service-item" data-aos="fade-up" data-aos-duration="500">
                                            <img class="img-fluid w-50" src="img/wheelbarrow.svg" alt="wheelbarrow">
                                            <h3 class="my-3 semi-16">Fertilizing</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="service-item" data-aos="fade-up" data-aos-duration="900">
                                            <img class="img-fluid w-50" src="img/plant.svg" alt="plant">
                                            <h3 class="my-3 semi-16">Nourishment</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="service-item" data-aos="fade-up" data-aos-duration="1300">
                                            <img class="img-fluid w-50" src="img/farmer.svg" alt="farmer">
                                            <h3 class="my-3 semi-16">Farming</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-sm-6">
                                        <div class="service-item" data-aos="fade-up" data-aos-duration="1700">
                                            <img class="img-fluid w-50" src="img/sack.svg" alt="sack">
                                            <h3 class="my-3 semi-16">Sacking</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="products" id="products">
            <div class="pb-5" id="product-section">
                <div class="owl-carousel nonloop-block-13">
                    <a class="work-thumb" href="img/Boric-Acid.png" data-fancybox="gallery">
                        <div class="work-text">
                            <h3 class="c-tag-2">Boric Acid</h3>
                        </div>
                        <img src="img/Boric-Acid.jpg" alt="Boric Acid" class="img-fluid">
                    </a>

                    <a class="work-thumb" href="img/Great-vit-pack.png" data-fancybox="gallery">
                        <div class="work-text">
                            <h3 class="c-tag-2">Great-vit-pack</h3>
                        </div>
                        <img src="img/Great-vit-pack.jpg" alt="Great vit pack" class="img-fluid">
                    </a>

                    <a class="work-thumb" href="img/Unique-5-SG.png" data-fancybox="gallery">
                        <div class="work-text">
                            <h3 class="c-tag-2">Unique 5 SG</h3>
                        </div>
                        <img src="img/Unique-5-SG.jpg" alt="Unique 5 SG" class="img-fluid">
                    </a>

                    <a class="work-thumb" href="img/Greatzim-50-WP.png" data-fancybox="gallery">
                        <div class="work-text">
                            <h3 class="c-tag-2">Greatzim 50 WP</h3>
                        </div>
                        <img src="img/Greatzim-50-WP.jpg" alt="Greatzim 50 WP" class="img-fluid">
                    </a>

                    <a class="work-thumb" href="img/Mine-95-Sp.png" data-fancybox="gallery">
                        <div class="work-text">
                            <h3 class="c-tag-2">Mine 95 SP</h3>
                        </div>
                        <img src="img/Mine-95-Sp.jpg" alt="Mine 95 Sp" class="img-fluid">
                    </a>

                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center my-4">
                            <a class="text-uppercase ml-auto btn-tag-1 bg-tag-2 c-tag-7 py-3 px-4" href="products.php">Find more products</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="history my-5" id="history">
            <div class="container c_custom">
                <div class="row pt-4">
                    <div class="col-lg-3 about-height">
                        <div class="about-text">
                            <h2 class="headline c-tag-3">
                                Our Journey
                            </h2>
                            <h4>
                                <span class="c-tag-5 reg-20">13th May, 2013 - Present
                                </span>
                            </h4>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="row bg-tag-3">
                            <div class="col-md-12 my-4 overflowX">
                                <div class="farmers-img" data-aos="fade-left" data-aos-duration="1500">
                                    <img src="img/leaf.jpg" alt="leaf">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="about-history px-sm-4 my-4">
                                    <h3 data-aos="fade-up" data-aos-duration="500">
                                        <span class="fan-30 c-tag-1">Since 2013!
                                        </span>
                                    </h3>
                                    <p class="c-tag-5" data-aos="fade-up" data-aos-duration="500">One 13th May, 2013, a business that started with only 4 employees in the corner room of a rented apartment has now become a common name amongst agrochemical distributors, retailers and farmers almost all over Bangladesh. This overwhelming acceptance has been possible for ensuring the consistency of excellence in quality for the last seven years.</p>
                                    <div class="year-details" data-aos="fade-up" data-aos-duration="1000">
                                        <span class="fan-30 c-tag-1">2015
                                        </span>
                                        <p class="c-tag-5">With the increasing number of sales and distributors in 2015, the amount of import value increased twice and we built our own repackaging factory in BSCIC Industrial Area, Joypurhat. Our market size increased as well that facilitated the purchase of our own covered vans to ensure timely delivery.
                                        </p>
                                    </div>

                                    <div class="year-details" data-aos="fade-up" data-aos-duration="1100">
                                        <span class="fan-30 c-tag-1">2016
                                        </span>
                                        <p class="c-tag-5">We earned membership at Bangladesh Crop Protection Association (BCPA) as our market acceptance increased by the day. The number of our distributors all over Bangladesh increased from 200 to 700 by this time.
                                        </p>
                                    </div>

                                    <div class="year-details" data-aos="fade-up" data-aos-duration="1300">
                                        <span class="fan-30 c-tag-1">2017
                                        </span>
                                        <p class="c-tag-5">Both employees and sales increased remarkably in the 5th year since our inception and 6 dynamic sales centers have been developed in Bogura, Dhaka, Rangpur, Rajshahi, Jhenaidah and Chittagong. Our Central Depot also became operational this year from BSCIC Industrial Area of Joypurhat beside our factory.
                                        </p>
                                    </div>

                                    <div class="year-details" data-aos="fade-up" data-aos-duration="1400">
                                        <span class="fan-30 c-tag-1">2019
                                        </span>
                                        <p class="c-tag-5">We received 29 registered pesticides and 10 registered fertilizers by 2018 and we are successfully selling and marketing them without any negative review till date. Many local pesticide companies have started purchasing our products in bulk for its well reputation and effectiveness.
                                        </p>
                                    </div>

                                    <div class="year-details" data-aos="fade-up" data-aos-duration="1500">
                                        <span class="fan-30 c-tag-1">2021
                                        </span>
                                        <p class="c-tag-5">Due to the impact of COVID 19 we have gradually shifted our business model to cash program from credit program in 2020 to ensure sustainability. By 2021 we now stand as one of the few agrochemical companies in the market who are running a cash program successfully. We have been involved in farmer level activities and that has given us a customer base of over 5000 retailers and farmers all over the country.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 overflowX">
                                <div class="about-img" data-aos="fade-left" data-aos-duration="1500">
                                    <img src="img/crops.jpg" alt="crops">
                                </div>

                                <div class="bg-tag-1 p-4 p-sm-5 my-4" data-aos="fade-right" data-aos-duration="1500">
                                    <h3>
                                        <span class="fan-30 c-tag-4">Mission
                                        </span>
                                    </h3>
                                    <p class="text-white">
                                        In May 2013, Nature & Care Agro Products Ltd. commenced its operation as a private limited company with the aim of providing a complete solution for farmers to cultivate and harvest healthy crops without compromising with their natural nutrients. In order to make this successful we deliver the perfect amount and combination of agrochemicals suitable for each crop.
                                    </p>
                                </div>

                                <div class="bg-tag-2 p-4 p-sm-5" data-aos="fade-left" data-aos-duration="1500">
                                    <h3>
                                        <span class="fan-30 c-tag-1">Future Prospect
                                        </span>
                                    </h3>
                                    <p>
                                    Bangladesh without agriculture is quite an unimaginable entity. We at Nature & Care Agro Products Ltd. are proudly working every day relentlessly to make this country’s farmers offer the best quality crops ensuring proper nourishment at every stage of their life cycle.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="counts bg-tag-1 nature-pad-top" id="about">
            <div class="nature-first mt-5">
                <div class="container c_custom pt-5">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-none d-sm-block bg-absolute">
                                <img class="img-fluid" src="img/nature.png" alt="Nature">
                            </div>
                                <div class="py-5">
                                    <div class="nature-item">
                                        <span class="counter c-tag-2 fan-80">7</span>
                                        <p class="c-tag-4 reg-38">Years</p>
                                    </div>
                                    <div class="nature-item">
                                        <span class="counter c-tag-2 fan-80">180</span>
                                        <p class="c-tag-4 reg-38">Employees</p>
                                    </div>
                                    <div class="nature-item">
                                        <span class="counter c-tag-2 fan-80">400</span>
                                        <p class="c-tag-4 reg-38">Distributors</p>
                                    </div>
                                    <div class="nature-item">
                                        <span class="counter c-tag-2 fan-80">5000</span><span class="c-tag-2 fan-80">+</span>
                                        <p class="c-tag-4 reg-38">Customers</p>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nature-second">
                <div class="container c_custom">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-none d-sm-block bg-absolute">
                                <img src="img/care.png" class="img-fluid" alt="Care">
                            </div>
                            <div class="about-details py-5">
                                <div class="row align-items-center">
                                    <div class="col-12 col-lg-4 overflowX">
                                      <div data-aos="fade-right" data-aos-duration="1500">
                                        <h2 class="text-lg-right text-center headline c-tag-2 pb-3">About Us
                                        </h2>
                                        <p class="d-none d-sm-block text-lg-right text-sm-center my-4">
                                        <a class="text-uppercase ml-auto btn-tag-1 bg-tag-2 c-tag-7 py-3 px-4" href="#contact">Contact Us</a>
                                        </p>
                                      </div>
                                    </div>
                                    <div class="col-12 my-3 d-lg-none">
                                    </div>
                                    <div class="col-12 col-lg-4 d-none d-sm-block text-center">
                                      <div>
                                        <img src="img/and.png" class="img-fluid" alt="And">
                                      </div>
                                    </div>
                                    <div class="col-12 my-3 d-lg-none">
                                    </div>
                                    <div class="col-12 col-lg-4 overflowX">
                                      <div data-aos="fade-left" data-aos-duration="1500">
                                        <p class="c-tag-2 us">
                                            Nature & Care Agro Products Ltd. is a private limited company involved in importing and repackaging of pesticides and micro fertilizers. We are an emerging agrochemical company thriving to provide superior quality agricultural commodities at the most competitive price.
                                        </p>
                                      </div>
                                    </div>
                                  </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="nature-third">
                <div class="container c_custom">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="d-none d-sm-block bg-absolute">
                                <img src="img/agro.png" class="img-fluid" alt="Agro">
                            </div>
                            <div class="about-details">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                      <div data-aos="fade-up" data-aos-duration="1500">
                                        <div class="section-heading">
                                          <p class="text-center c-tag-2">Our tagline . . .</p>
                                          <h2 class="text-center c-tag-6 bangla">" সমৃদ্ধির পথে কৃষকের সাথে "
                                          </h2>
                                          <p class="text-center c-tag-2 pt-2">itself suggests our mission to be at<br>every step in the development of the<br>country’s agriculture and farmers.</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="video bg-tag-3 pb-5" id="video">
            <div class="container c_custom">
              <div class="row">
                    <div class="col-lg-6 text-center">
                        <h2 class="my-5 headline c-tag-3" data-aos="zoom-in" data-aos-duration="1500">Walk Through</h2>
                    </div>
                    <div class="offset-lg-1 col-lg-10 mb-5 text-left overflowX">
                          <p class="reg-20 p-3 px-sm-5 px-lg-0" data-aos="fade-right" data-aos-duration="1500">
                              We have always been focused to ensure this right combination from our well renowned Suppliers in China and India.  Providing the best quality of pesticides at the most affordable price has always been both a challenge and strength for our organization. Md. Iqbal Hossain, the Managing Director has initiated this challenging business proposition and has made it successful with his abundant experience of 23 years and the unending support of the entire team of Nature & Care Agro Products Ltd.
                          </p>
                </div>
                    <div class="col-lg-12 overflowX">
                          <div class="thumb-video text-center" data-aos="fade-left" data-aos-duration="1500">
                                  <a class="video-button video-img-bg" href="vdo/test.mp4" data-fancybox data-ratio="2">
                                      <span class="play-button">
                                          <img src="img/play.svg" alt="Image" class="img-fluid">
                                      </span>
                                          <img src="img/ythumb.jpg" alt="intro" class="img-fluid w-75">
                                  </a>
                          </div>
                    </div>
              </div>
            </div>
        </section>

        <section class="retailers my-5 section-pad" id="retailer">
            <div class="container c_custom">
                <div class="row">
                    <div class="col-lg-4">
                        <div data-aos="flip-left" data-aos-duration="1500">
                            <div class="retailer-img d-flex justify-content-center align-items-center">
                                <h2 class="headline c-tag-2">Our Retailers</h2>
                            </div>
                            <div class="bg-tag-1 p-4 p-sm-5">
                                <h4 class="c-tag-4 reg-30">We work with big and small.</h4>
                                <p class="my-4 c-tag-2">
                                    Within a period of 7 years Nature & Care Agro Ltd. has gained sustainable trust and popularity among the agrochemical retailers, distributors and farmers all over Bangladesh.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-7">

                        <div class="products-slick" data-nav="#slick-nav-1">

                            <div class="review">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="retailer-logo">
                                        <img src="img/company-1.png" alt="company">
                                    </div>
                                </div>
                                <p class="pt-5 px-5 text-center reg-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi vitae consequatur doloremque facere repellat optio, ex obcaecati voluptatibus omnis corrupti ipsa explicabo porro! Lorem, ipsum.</p>
                                <div class="star-rating text-center my-5">
                                    <span class="c-tag-6">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="review-author bold-16 c-tag-1">- AGRO FARMA</span>
                                </div>
                            </div>

                            <div class="review">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="retailer-logo">
                                        <img src="img/company-2.png" alt="company">
                                    </div>
                                </div>
                                <p class="pt-5 px-5 text-center reg-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi vitae consequatur doloremque facere repellat optio, ex obcaecati voluptatibus omnis corrupti ipsa explicabo porro! Lorem, ipsum.</p>
                                <div class="star-rating text-center my-5">
                                    <span class="c-tag-6">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="bold-16 c-tag-1">- THRYVIN LTD</span>
                                </div>
                            </div>

                            <div class="review">
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="retailer-logo">
                                        <img src="img/company-3.png" alt="company">
                                    </div>
                                </div>
                                <p class="pt-5 px-5 text-center reg-20">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi vitae consequatur doloremque facere repellat optio, ex obcaecati voluptatibus omnis corrupti ipsa explicabo porro! Lorem, ipsum.</p>
                                <div class="star-rating text-center my-5">
                                    <span class="c-tag-6">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </span>
                                    <span class="bold-16 c-tag-1">- NEO AGRO</span>
                                </div>
                            </div>

                        </div>
                        <div id="slick-nav-1"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact my-5" id="contact">
                <!-- new products -->
                <?php include "contact.php";?>
				<!-- new products -->
        </section>
    </main>

    <footer class="footer-section pb-0 py-lg-5 bg-tag-1">
        <div class="container c_custom">
          <div class="row">
            <div class="border-r-lg col-lg-5 text-center text-lg-left">
                <div data-aos="fade-right" data-aos-duration="1500">
                    <h3 class="headline text-white">About Us</h3>
                    <p class="mb-5 c-tag-2 light-16 us">Nature & Care Agro Products Ltd. is a private limited company involved in importing and repackaging of pesticides and micro fertilizers. We are an emerging agrochemical company thriving to provide superior quality agricultural commodities at the most competitive price.</p>
                    <a class="text-uppercase ml-auto btn-tag-1 bg-tag-2 c-tag-7 py-3 px-4" href="products.php">Our Products</a>
                </div>
            </div>

            <div class="col-lg-3 ml-auto mt-lg-0 mt-5 xs-center text-center">
              <div>
                <img class="img-fluid" data-aos="fade-zoom-in"  data-aos-duration="2000" src="img/nacl-xxl.svg" alt="brand">
                <div class="copyright mt-5">
                    <p class="c-tag-2 light-16">
                        NATURE AND CARE AGRO © <script>document.write(new Date().getFullYear());</script>
                        <br>All rights reserved
                    </p>
                </div>
              </div>
            </div>

            <div class="border-l-lg col-lg-4 mt-lg-0 mt-5 ml-auto text-center text-lg-right overflowX">
            <div data-aos="fade-left" data-aos-duration="1500">
                <h3 class="headline text-white">Contact Us</h3>
                <ul class="footer-list list-unstyled footer-links text-lg-right">
                <li>
                    <p class="c-tag-2 light-16">NATURE & CARE AGRO Ltd.<br>Company Number: C-109105</p>
                </li>
                <li>
                    <p class="c-tag-2 light-16">House 13, Road 08, Sector-10,
                        <br>Uttara Model Town, Dhaka-1230,
                        <br>Dhaka, Bangladesh.</p>
                </li>
                <li>
                    <p class="c-tag-2 light-16">info@natureandcare.com<br>01785-788189</p>
                </li>
              </ul>
            </div>
            </div>
          </div>
        </div>
    </footer>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <div class="message_box"></div>
                    <div class="pt-5">
                        <button class="btn-black1" data-dismiss="modal" aria-label="Close">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/script.js"></script>

    <script>
        $(document).ready(function () {
            $(".menu li a").click(function() {
                $(".menu li a").removeClass("active");
                $(this).addClass("active");
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            /* counter plugin */
            $('.counter').counterUp({
                delay: 10,
                time: 2000
            });
        });
    </script>

    <script>
        /********* sticky header ********/
        $(window).scroll(function () {
            if ($(window).scrollTop() > 5) {
                $("header").addClass("stick");
                $(".top-nav").addClass("top-none");

                $(".navbar .navbar-brand img").attr("src","img/naturecare-xl-swip.svg");
                $(".navbar .navbar-toggler img").attr("src","img/toggler-icon-swip.svg");
            } else {
                $("header").removeClass("stick");
                $(".top-nav").removeClass("top-none");

                $(".navbar .navbar-brand img").attr("src","img/naturecare-xl.svg");
                $(".navbar .navbar-toggler img").attr("src","img/toggler-icon.svg");
            }
        });
    </script>
    <script>
            $(document).ready(function() {
            var delay = 2000;

                //form for contact-pressed
                $('#contact-pressed').click(function(e){
                    e.preventDefault();
                    var name_typed = $('#name-typed').val();
                    if(name_typed == ''){
                        jQuery("#myModal").modal('show');
                        $('.message_box').html(
                            '<h5>Please Enter Your Name.</h5>'
                        );
                        $('#name-typed').focus();
                            return false;
                    }

                    var subject_typed = $('#subject-typed').val();
                    if(subject_typed == ''){
                        jQuery("#myModal").modal('show');
                        $('.message_box').html(
                            '<h5>Please Enter Your Subject.</h5>'
                        );
                        $('#subject-typed').focus();
                            return false;
                    }

                    var email_typed = $('#email-typed').val();
                    if(email_typed == ''){
                        jQuery("#myModal").modal('show');
                        $('.message_box').html(
                            '<h5>Please Enter Your Email.</h5>'
                        );
                        $('#email-typed').focus();
                            return false;
                    }
                    if( $("#email-typed").val()!='' ){
                        jQuery("#myModal").modal('show');
                        if( !isValidEmailAddress( $("#email-typed").val() ) ){
                            $('.message_box').html(
                                '<h5>Please Enter a Valid Email.</h5>'
                            );
                            $('#email-typed').focus();
                                return false;
                        }
                    }

                    var message_typed = $('#message-typed').val();
                    if(message_typed == ''){
                        $('.message_box').html(
                            '<h5>Please Enter Your Message.</h5>'
                        );
                        $('#message-typed').focus();
                            return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "mail.php",
                        data: "name_typed="+name_typed+"&email_typed="+email_typed+"&subject_typed="+subject_typed+"&message_typed="+message_typed,
                        beforeSend: function() {
                            jQuery("#myModal").modal('show');
                            $('.message_box').html(
                                '<img src="img/loader.gif" width="30" height="30"/>'
                            );
                        },
                        success: function(data)
                        {
                            setTimeout(function() {
                                $('.message_box').html(data);
                            }, delay);
                        }
                    });
                });
            });

            //Email validation Function
            function isValidEmailAddress(emailAddress) {
                var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;
                return pattern.test(emailAddress);
            };
    </script>
</body>
</html>
