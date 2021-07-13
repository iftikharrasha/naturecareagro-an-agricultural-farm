<?php
include "./vpanel/includes/sessions.php";
include "./vpanel/includes/functions.php";

$view_count = "UPDATE nc_views SET views = views+1";
$exec = Query($view_count);

//total products counts
$countProducts = mysqli_query($con, "SELECT COUNT(product_id) as TOTAL FROM nc_products");
$totalProducts = mysqli_fetch_assoc($countProducts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nature & Care Agro Products Ltd. | Products</title>

    <link rel="icon" href="img/icon.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&display=swap" rel="stylesheet">

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

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
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
                                <a class="nav-link" href="#sister-concern">Sister Concern</a>
                            </li>
                            <li class="nav-item ml-lg-4 ml-cus">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>
                    <a class="text-uppercase ml-auto btn-tag-1 bg-tag-2 c-tag-7 py-2 px-3" href="index.php">About Us</a>
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="cover" id="home">
                <div class="product-text">
                    <div class="container mb-5">
                        <div class="row">
                            <div class="col-12 overflowX">
                                <h3 class="dela-80 c-tag-4"  data-aos="fade-right" data-aos-duration="1000">Sister Concern</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a class="reg-20 c-tag-4" href="index.php">Nature Care Agro</a></li>
                                        <li class="breadcrumb-item active reg-20 c-tag-2" aria-current="page">Sister Concern</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="sister-concern mt-5" id="sister-concern">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="my-5 c-tag-1 fan-30">Sister Concern of Nature Care of Agro Ltd.</h2>
                        <img src="./img/mark.svg" class="img-responsive my-5">
                            <p class="reg-20"><span class="c-tag-3 fan-80"  data-aos="fade-in" data-aos-duration="1500">[ Mark Trading ]</span> is our sister concern which was established in 2017 to intensify our market presence in Northern Bangladesh. Mrs. Nurun Nahar is the proprietor of the company and has been engaged with crucial managerial decisions of Nature & Care Agro Products Ltd. being an effective member of the Board of Directors. <br> <br> Mark Trading also offers a popular variety of products ranging from insecticides, herbicides, fungicides and growth promoters.
                        </p>
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
        /********* sticky header ********/
        $(window).scroll(function () {
            if ($(window).scrollTop() > 0) {
                $("header").addClass("stick");
                $(".top-nav").addClass("top-none");
            } else {
                $("header").removeClass("stick");
                $(".top-nav").removeClass("top-none");
            }

        /**logo changing**/
        if($(this).scrollTop()>5){
                    $(".navbar .navbar-brand img").attr("src","img/naturecare-xl-swip.svg");
                    $(".navbar .navbar-toggler img").attr("src","img/toggler-icon-swip.svg");
                }

                else{
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
