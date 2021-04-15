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
                            <a class="nav-link" href="#products">Products</a>
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
                                <h3 class="dela-80 c-tag-4"  data-aos="fade-right" data-aos-duration="1000">Products</h3>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a class="reg-20 c-tag-4" href="index.php">Nature Care Agro</a></li>
                                        <li class="breadcrumb-item active reg-20 c-tag-2" aria-current="page">Products</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section class="products mt-5" id="products">
            <div class="container c_custom">
                <div class="row">
                    <div class="col-12">
                            <div class="text-center" data-aos="zoom-in" data-aos-duration="1500">
                                <h2 class="my-5 headline c-tag-3">Our Products</h2>
                            </div>
                    </div>
                </div>
                <div class="row mb-5">

<?php
$numOfCols = 3;
$bootstrapColWidth = 12 / $numOfCols;
$page = 1;
$query = "";
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    $showPost = ($page * 16) - 16;
    if ($page <= 0) {
        $showPost = 0;
    }
    $query = "SELECT * FROM nc_products ORDER BY date_time DESC LIMIT $showPost,16";
} else {
    $query = "SELECT * FROM nc_products ORDER BY date_time DESC LIMIT 0,16";
}

$exec = Query($query) or die(mysqli_error($con));
if ($exec) {
    global $results;
    $results = mysqli_num_rows($exec);
    if (mysqli_num_rows($exec) > 0) {
        while ($post = mysqli_fetch_assoc($exec)) {
            $pro_id = $post['product_id'];
            $pro_title = $post['product_title'];
            $pro_image = $post['product_image'];
            $pro_cat = $post['product_category'];
            $pro_comp = $post['product_composition'];

            ?>
                                <!-- Item -->
                                <div class="col-lg-3 col-sm-4">
                                    <div class="product" data-aos="fade-up" data-aos-duration="500">
                                        <a class="work-thumb" href="#contact" data-fancybox="gallery">
                                            <div class="work-text">
                                                <h5 class="text-uppercase btn-tag-1 bg-tag-2 c-tag-7 py-3 px-4">Order Now</h5>
                                            </div>
                                            <img src="products/<?php echo $pro_image; ?>" alt="<?php echo htmlentities($pro_title); ?>" class="img-fluid">
                                        </a>
                                        <h2 class="mt-3 semi-16 reg-20 bg-tag-4 py-3 c-tag-2"><?php echo htmlentities($pro_title); ?></h2>
                                        <p class="mb-0 light-16"><?php echo htmlentities($pro_comp); ?></p>
                                        <p class="mb-3 semi-16"><?php echo htmlentities($pro_cat); ?></p>
                                    </div>
                                </div>
                                <!-- Item -->

<?php
}
    } else {
        echo "<div class='text-uppercase text-center reg-30' style='padding-bottom: 20px;'>No products have been found!</div>";
    }
}
?>
                </div>
            </div>
        </section>

        <section class="pagi-numbers">
            <div class="container overflow-hidden">
            <div class="row float-right">
						<div class="col-xs-12 pr-5">
                            <ul class="pagination product-pagi" id="pageno">
<?php
if ($page > 1) {
    ?>
									<li>
										<a href="products.php?page=<?php echo $page - 1; ?>" aria-label="Previous">
										  <span aria-hidden="true">&laquo;
										  </span>
										  <span class="sr-only">Previous
										  </span>
										</a>
									</li>
<?php
}
$sql = "SELECT COUNT(*) FROM nc_products";

$exec = Query($sql);
$rowCount = mysqli_fetch_array($exec);
$totalRow = array_shift($rowCount);
$postPerPage = ceil($totalRow / 16);

for ($count = 1; $count <= $postPerPage; $count++) {
    if ($page == $count) {
        ?>
									<li class="active">
										<a class="page-link" href="products.php?page=<?php echo $count ?>"><?php echo $count ?>
										</a>
									</li>
<?php
} else {
        ?>
									<li>
										<a href="products.php?page=<?php echo $count ?>"> <?php echo $count ?>
										</a>
									</li>
<?php
}
}
if ($page < $postPerPage) {
    ?>
									<li>
										<a href="products.php?page=<?php echo $page + 1; ?>" aria-label="Next">
										  <span aria-hidden="true">&raquo;
										  </span>
										  <span class="sr-only">Next
										  </span>
										</a>
									</li>
<?php
}
?>
								</ul>
                        </div>
                </div>
            </div>
        </section>

        <section class="contact my-5" id="contact">
            <div class="container c_custom">
                <div class="row pt-0 pt-lg-5">
                    <div class="col-lg-12 text-center mb-5">
                        <h2 class="my-5 headline c-tag-3" data-aos="zoom-in" data-aos-duration="1500">Contact Us</h2>
                    </div>
                </div>
                <div class="row contact-shadow mx-2">
                    <div class="col-lg-6 px-4">
                        <div class="contact-heading">
                            <h2 class="my-5 semi-30 c-tag-1">
                                <span>Bring nature to your home.</span>
                            </h2>
                            <form id="contact-form" method="post" action="">
                                <div class="row">
                                  <div class="col-md-6">
                                    <div class="form-input mb-4 mb-md-0">
                                      <input type="text" id="name-typed" name="name" class="form-control py-4" placeholder="Your name" subject_typed>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="form-input mb-0">
                                      <input type="text" id="subject-typed" name="subject" class="form-control" placeholder="Your subject" subject_typed>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-input my-4">
                                        <input type="email" id="email-typed" name="email" class="form-control" placeholder="Your email" required>
                                      </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="form-input mb-4">
                                      <textarea type="text" id="message-typed" name="description" rows="5" class="form-control md-textarea" placeholder="Drop your query Here" required></textarea>
                                    </div>
                                  </div>
                                </div>

                                <div class="text-center text-md-left">
                                    <button id="contact-pressed" name="contact-pressed" class="text-uppercase ml-auto btn-tag-1 bg-tag-2 c-tag-7 py-3 px-4" type="submit">Submit</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <div class="col-lg-6 mt-lg-0 mt-5 px-4 pt-2">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d542.307100573765!2d90.38803404704723!3d23.88278195296678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c5404f3eeecb%3A0xab1b1f6c864ecc55!2sNature%20%26%20Care%20Agro%20Products%20Limited!5e0!3m2!1sen!2sbd!4v1616468614318!5m2!1sen!2sbd" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy">
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="footer-section pb-0 py-lg-5 bg-tag-1">
        <div class="container c_custom">
          <div class="row">
            <div class="border-r-lg col-lg-5 text-center text-lg-left">
                <div data-aos="fade-right" data-aos-duration="1500">
                    <h3 class="headline text-white">About Us</h3>
                    <p class="mb-5 c-tag-2 us">Nature & Care Agro Products Ltd. is a private limited company involved in importing and repackaging of pesticides and micro fertilizers. We are an emerging agrochemical company thriving to provide superior quality agricultural commodities at the most competitive price.</p>
                    <a class="text-uppercase ml-auto btn-tag-1 bg-tag-2 c-tag-7 py-3 px-4" href="#">Our Products</a>
                </div>
            </div>

            <div class="col-lg-3 ml-auto mt-lg-0 mt-5 xs-center text-center">
              <div>
                <img class="img-fluid" data-aos="fade-zoom-in"  data-aos-duration="2000" src="img/nacl-xxl.svg" alt="brand">
                <div class="copyright mt-5">
                    <p class="c-tag-2">
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
                    <p class="c-tag-2">NATURE & CARE AGRO Ltd.<br>Company Number: C-109105</p>
                </li>
                <li>
                    <p class="c-tag-2">House 13, Road 08, Sector-10,
                        <br>Uttara Model Town, Dhaka-1230,
                        <br>Dhaka, Bangladesh.</p>
                </li>
                <li>
                    <p class="c-tag-2">info@natureandcare.com<br>01785-788189</p>
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

    <script src="js/counter/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/script.js"></script>

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
