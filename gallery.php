<!doctype html>
<html lang="en">

<head>
    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Uniland - Real Estate HTML5 Template">
    <meta name="keywords" content="real estate, property, property search, agent, apartments, booking, business, idx, housing, real estate agency, rental">
    <meta name="author" content="unicoder">
    <title>Roninal International Schools</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Required style of the theme -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="assets/css/all.min.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/webfonts/flaticon/flaticon.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="assets/css/layerslider.css">
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/colors/color-4.css">
    <link rel="stylesheet" href="assets/css/clock.css">
    <link rel="stylesheet" href="assets/css/rtl.css">

    <link rel="stylesheet" href="custom.css">
</head>
<style>
    .image-section {
        display: block;
        justify-content: center;
        width: 95dvw;
    }
    img {
            margin: 10px;
            width: 200px;
            height: auto;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        img:hover {
            transform: scale(1.1); /* Slight zoom effect on hover */
        }
         /* Modal styles */
         .modal {
            display: none; /* Hidden by default */
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8); /* Black background with opacity */
            justify-content: center;
            align-items: center;
            animation: fadeIn 0.3s ease;
            z-index: 1000;
        }

        .modal img {
            width: 90%;
            max-width: 800px;
            height: auto;
            animation: zoomIn 0.3s ease;
            border-radius: 8px;
        }

        /* Close button */
        .modal .close {
            position: absolute;
            top: 20px;
            right: 30px;
            font-size: 30px;
            color: white;
            cursor: pointer;
        }

        /* Keyframes for animation */
        @keyframes fadeIn {
            from {
                background-color: rgba(0, 0, 0, 0);
            }
            to {
                background-color: rgba(0, 0, 0, 0.8);
            }
        }

        @keyframes zoomIn {
            from {
                transform: scale(0.8);
                opacity: 0;
            }
            to {
                transform: scale(1);
                opacity: 1;
            }
        }
</style>

<body>

    <!--<div class="preloader">
			<div class="loader clock xy-center"></div>
		</div>-->

    <div id="page_wrapper" class="bg-light">
        <!--============== Header Section Start ==============-->
        <!--============== Header Section Start ==============-->
        <header class="nav-on-banner bg-dark fixed-bg-dark shadow-none md-bg-secondary">
            <div class="main-nav py-2 xs-p-0">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <nav class="navbar navbar-expand-lg nav-white nav-primary-hover nav-line-active">
                                <a class="navbar-brand order-2 order-lg-2" href="#"><img class="nav-logo" width="50px"
                                    height="50px"
                                    src="assets/school/logonullbg.png" alt="Image not found !"></a>
                                <button class="navbar-toggler order-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon flaticon-menu flat-small text-primary"></span>
                                  </button>
                                <div class="collapse navbar-collapse order-3 order-lg-1" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto order-lg-3">
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle" href="index.html">Home</a>
                                            <!-- <ul class="dropdown-menu">

                                                <li><a class="dropdown-item" href="index.html">Home 01</a></li>
                                                <li><a class="dropdown-item" href="index-2.html">Home 02</a></li>
                                                <li><a class="dropdown-item" href="index-3.html">Home 03</a></li>
                                                <li><a class="dropdown-item" href="index-4.html">Home 04</a></li>
                                                <li><a class="dropdown-item" href="index-5.html">Home 05</a></li>
                                                <li><a class="dropdown-item" href="index-6.html">Home 06</a></li>
                                                <li><a class="dropdown-item" href="index-7.html">Home 07</a></li>
                                                <li><a class="dropdown-item" href="index-8.html">Home 08</a></li>
                                                <li><a class="dropdown-item" href="index-9.html">Home 09 <span class="text-primary ps-3 font-mini">New</span></a></li>
                                                <li><a class="dropdown-item" href="index-10.html">Home 10 <span class="text-primary ps-3 font-mini">New</span></a></li>
                                                <li><a class="dropdown-item" href="index-11.html">Home 11 <span class="text-primary ps-3 font-mini">New</span></a></li>
                                                <li><a class="dropdown-item" href="index-12.html">Home 12 <span class="text-primary ps-3 font-mini">New</span></a></li>
                                                <li><a class="dropdown-item" href="index-13.html">Home 13 <span class="text-primary ps-3 font-mini">New</span></a></li>
                                            </ul> -->
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#">About us</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="./our-school.html">Our School in Brief</a>
                                                
                                                </li>
                                                <!-- <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="property-list-v1.html">The Proprietor</a> -->
                                                    
                                                <!-- </li> -->
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="./mission.html">Mission, Vision and Values</a>
                                                    
                                                </li>
                                                <!-- <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="advance-search-v1.html">Head of School</a> -->
                                                    
                                                </li>
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="./staff.html">Staff</a>
                                                    
                                                </li>
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="./facilities.html">Facilities</a>
                                                    
                                                </li>
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="./policy.html">Learning Policy</a>
                                                    
                                                </li>
                                                <!-- <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="advance-search-v1.html">Withdrawal</a> -->
                                                    
                                                </li>
                                            </ul>
                                        </li>
                                        <!-- <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#">Schools</a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="property-single-v1.html">Creche</a>
                                                    
                                                </li>
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="left-filter-property-v1.html">Nursery</a>
                                                   
                                                </li>
                                                <li class="dropdown"> <a class="dropdown-toggle dropdown-item" href="dashboard.html">Primary</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-toggle dropdown-item" href="agent-grid-view.html">High SChool</a>
                                                    
                                                </li> -->
                                                <!-- <li class="dropdown">
                                                    <a class="dropdown-toggle dropdown-item" href="photo-gallery-v1.html">Photo Gallery</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="photo-gallery-v1.html">Photo Gallery V1</a></li>
                                                        <li><a class="dropdown-item" href="photo-gallery-v2.html">Photo Gallery V2</a></li>
                                                        <li><a class="dropdown-item" href="photo-gallery-v3.html">Photo Gallery V3</a></li>
                                                        <li><a class="dropdown-item" href="photo-gallery-v4.html">Photo Gallery V4</a></li>
                                                        <li><a class="dropdown-item" href="photo-gallery-v5.html">Photo Gallery V5</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="compare.html">Compare</a></li>
                                                <li><a class="dropdown-item" href="dashboard-submit-property.html">Submit Property</a></li> -->
                                            <!-- </ul> -->
                                        <!-- </li> -->
                                        <li class="nav-item dropdown mega-dropdown">
                                            <a class="nav-link dropdown-toggle" href="#">Admissions</a>
                                            <ul class="dropdown-menu mega-dropdown-menu">
                                                <li class="mega-container">
                                                    <div class="row row-cols-lg-4 row-cols-1">
                                                        <div class="col">
                                                            <ul>
                                                                <li><a class="dropdown-item" href="index.html">Why Choose Us</a></li>
                                                                <!-- <li><a class="dropdown-item" href="our-mission.html">Request a Prospectus</a></li> -->
                                                                <!-- <li><a class="dropdown-item" href="career.html">Careers</a></li>
                                                                <li><a class="dropdown-item" href="award.html">Awards</a></li>
                                                                <li><a class="dropdown-item" href="testimonials.html">Testimonials</a></li>
                                                                <li><a class="dropdown-item" href="timeline.html">Timeline</a></li> -->
                                                            </ul>
                                                        </div>
                                                        <div class="col">
                                                            <ul>
                                                                <!-- <li><a class="dropdown-item" href="dashboard-profile.html">How to Apply</a></li> -->
                                                                <!-- <li><a class="dropdown-item" href="dashboard-profile.html">Apply Online</a></li> -->
                                                                <!-- <li><a class="dropdown-item" href="dashboard-listing.html">My Properties</a></li>
                                                                <li><a class="dropdown-item" href="dashboard-favorite.html">Favorited Properties</a></li>
                                                                <li><a class="dropdown-item" href="dashboard-submit-property.html">Submit New Property</a></li>
                                                                <li><a class="dropdown-item" href="#">Shortcodes</a></li> -->
                                                            </ul>
                                                        </div>
                                                        <div class="co">
                                                            <ul>
                                                                <!-- <li><a class="dropdown-item" href="#">Eligibility</a></li> -->
                                                                 <!-- <li><a class="dropdown-item" href="#">Download Application Form</a></li> -->
                                                               <li><a class="dropdown-item" href="./tuition.html">Tuition and Fees</a></li>
                                                               <!--  <li><a class="dropdown-item" href="terms-and-condition.html">Terms And Condition</a></li>
                                                                <li><a class="dropdown-item" href="pricing-table.html">Pricing Table</a></li>
                                                                <li><a class="dropdown-item" href="dashboard-agency-profile.html">Agency Profile</a></li> -->
                                                            </ul>
                                                        </div>
                                                        <div class="col">
                                                            <ul>
                                                                <!-- <li><a class="dropdown-item" href="our-services.html">FAQs</a></li> -->
                                                                <li><a class="dropdown-item" href="./calender.html">School Calender</a></li>
                                                                <!-- <li><a class="dropdown-item" href="#">Arrange a Visit</a></li> -->
                                                                <!-- <li><a class="dropdown-item" href="dashboard-message.html">Message</a></li>
                                                                <li><a class="dropdown-item" href="404.html">Error Page</a></li>
                                                                <li><a class="dropdown-item" href="faq.html">FAQ</a></li> -->
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#">Academics</a>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="./calender.html">Calender</a></li>
                                                <!-- <li><a class="dropdown-item" href="blog-masonry-grid.html">Downloads</a></li> -->

                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="contact.html">Contact</a>
                                        </li>


                                    <li class="nav-item"
                                        style="background-color: white;
                                        border-radius: 50px;
                                        width: 100px;
                                        "
                                        >
                                            <a class="nav-link" style="color: black; 
                                            text-align: center; 
                                            " href="https://app.edusuite.ng/roninal/login">Portal</a>
                                        </li>

                                    </ul>
                                <!-- <a href="#" class="ms-2 btn btn-white md-mx-none rounded-pill order-1">Portal</a> -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!--============== Header Section End ==============-->
       
        <!--============== About Us Section Start ==============-->
        <div class="full-row" style="margin-top: 50px;">
            <div class="container">
                <div class="row row-cols-md-2 row-cols-1 dir-rtl">
                    <div class="col">
                        <span class="text-primary mb-2 d-table tagline-2 font-medium font-600">Roninal International School</span>
                        <h2 class="text-dark mb-4">Media Gallery</h2>

                    </div>
                    <div class="image-section" >
                        <!-- <img src="assets/sch/img30.png" alt="uniland real estate"> -->
                        <?php
                            // Define the folder path
                            $imageFolder = './storage/images';

                            // Check if the folder exists
                            if (is_dir($imageFolder)) {
                                // Scan the directory for image files
                                $images = array_diff(scandir($imageFolder), array('.', '..'));

                                // Loop through each file in the directory
                                foreach ($images as $image) {
                                    // Ensure the file is an image
                                    $filePath = $imageFolder . '/' . $image;
                                    if (is_file($filePath) && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $image)) {
                                        // Display the image
                                        echo '<img src="' . $filePath . '" alt="Image from ' . htmlspecialchars($imageFolder) . '" class="clickable" style="margin: 10px; width: 200px; height: auto;">';
                                    }
                                }
                            } else {
                                echo '<p>Image folder not found!</p>';
                            }
                            ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- Modal structure -->
        <div class="modal" id="imageModal">
            <span class="close" id="closeModal">&times;</span>
            <img id="modalImage" src="" alt="Enlarged image">
        </div>
        <!--============== Footer Section Start ==============-->
        <footer class="full-row p-0 footer-two bg-light">
            <div class="full-row">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget mb-5">
                                <h3 class="widget-title mb-4 font-400">Roninal International Schools</h3>
                                    <p>We are also registered with the Ministry of Education, State Commission on Education,  IPC and other educational bodies. We also give opportunities to our staff to attend trainings that are highly beneficial to the teaching practices and our children‟s growth.</p>
                                    <div class="footer-widget media-widget mt-5">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="row row-cols-1 row-cols-sm-3">
                                <div class="col">
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Learn More</h4>
                                        <ul>
                                            <li><a href="#">Privacy statement</a></li>
                                            <!-- <li><a href="#">Modern slavery statement</a></li> -->
                                            <li><a href="index.html">Roninal's past & present</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Academics</h4>
                                        <ul>
                                            <li><a href="#">Curriculum</a></li>
                                            <li><a href="#">Quality Assurance</a></li>
                                            <li><a href="#">E-learning</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Quick Links</h4>
                                        <ul>
                                            <li><a href="https://app.edusuite.ng/roninal/login">Portal login</a></li>
                                            <li><a href="#">Download Resistration form</a></li>
                                            <li><a href="gallery.php">Gallery</a></li>
                                        </ul>
                                    </div>
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Legal Process</h4>
                                        <ul>
                                            <li><a href="#">Cookie policy</a></li>
                                            <li><a href="#">Terms of services</a></li>
                                            <!-- <li><a href="#">Tax strategy</a></li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="footer-widget footer-nav mb-5">
                                        <h4 class="widget-title mb-4">Locations</h4>
                                        <ul>
                                            <li><a href="contact.html">Nigeria</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--============== Copyright Section Start ==============-->
            <div class="copyright-border text-secondary text-center text-xl-end pt-5">
                <div class="container py-4">
                    <div class="row row-cols-xl-2 row-cols-1 dir-rtl g-3">
                        <div class="col">
                            <span>Copyright © 2024 Roninal All rights reserved</span>
                        </div>
                        <div class="col">
                            <ul class="line-menu float-xl-start list-color-secondary mx-auto">
                                <li><a href="#">Advertise</a></li>
                                <li>|</li>
                                <li><a href="#">Questions</a></li>
                                <li>|</li>
                                <li><a href="#">Disclaimer</a></li>
                                <li>|</li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li>|</li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!--============== Copyright Section End ==============-->
        </footer>

        <!-- Scroll to top -->
        <!-- <a href="#" class="text-general scroll-top-vertical xs-mx-none" id="scroll">Scroll to top</a> -->
        <!-- End Scroll To top -->
        <!--============== Footer Section End ==============-->

        <!--============== Modal Start ==============-->
        <div class="overlay-dark modal fade quick-view-modal" id="quick-view">
            <div class="modal-dialog modal-dialog-centered modal-xl">
                <div class="modal-content">
                    <div class="close view-close">
                        <span aria-hidden="true">&times;</span>
                    </div>
                    <div class="modal-body property-block summary p-3">
                        <div class="row row-cols-xl-2 row-cols-1">
                            <div class="col">
                                <div class="overflow-hidden position-relative transation thumbnail-img bg-secondary hover-img-zoom m-2">
                                    <div class="cata position-absolute">
                                        <span class="sale bg-secondary text-white">For Rent</span>
                                        <span class="featured bg-primary text-white">Featured</span>
                                    </div>
                                    <a href="#"><img class="w-100" src="assets/images/property/2.png" alt=""></a>
                                    <ul class="position-absolute quick-meta">
                                        <li><a href="#"><i class="flaticon-transfer flat-mini"></i></a></li>
                                        <li><a href="#"><i class="flaticon-like-1 flat-mini"></i></a></li>
                                        <li><a href="#"><i class="flaticon-share flat-mini"></i></a></li>
                                        <li><a href="#"><i class="flaticon-printer flat-mini"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col">
                                <div class="property_text transation py-3 pe-3">
                                    <span class="d-inline-block text-primary">Condos</span>
                                    <h5 class="modal-title mb-1" id="staticBackdropLabel"><a href="#" class="text-secondary hover-text-primary transation">Luxury Condos Infront of the street of Green Park</a></h5>
                                    <span class="mt-1 mb-3 d-block font-fifteen"><i class="fas fa-map-marker-alt text-primary"></i> 2305 Tree Frog Lane Overlandpk, MO 66210</span>
                                    <a href="#" class="d-block text-light hover-text-primary font-small mb-2">( 100 People Recommended )</a>
                                    <div class="d-flex">
                                        <span class="text-secondary font-large">$5600 - $8300/<small>mo</small></span>
                                        <span class="text-white font-mini px-2 rounded product-status ms-5 my-1 bg-primary"><i class="fas fa-check"></i> Available</span>
                                    </div>
                                    <div class="product-offers mt-3">
                                        <ul class="product-offers-list">
                                            <li class="product-offer-item"> <strong>Special Price </strong>Get extra 19% off (price inclusive of discount)</li>
                                            <li class="product-offer-item"> <strong>Bank Offer </strong> 10% instant discount on VISA Cards</li>
                                            <li class="product-offer-item"> <strong>No cost EMI $49/month.</strong> Standard EMI also available</li>
                                        </ul>
                                    </div>
                                    <hr>
                                    <div class="quantity">
                                        <ul class="d-flex">
                                            <li><span>Rooms:</span> 5</li>
                                            <li><span>Beds:</span> 3</li>
                                            <li><span>Bathrooms:</span> 2</li>
                                            <li><span>Garage:</span> 1</li>
                                            <li><span>Area:</span> 1100 Sqft</li>
                                        </ul>
                                    </div>
                                    <h5 class="text-secondary my-3">Description</h5>
                                    <p>Bibendum purus aenean mus aenean eu interdum nonummy ipsum ad consequat. Dui eros donec faucibus convallis tempus rutrum id donec mus hymenaeos placerat congue curae mauris turpis gravida viverra consequat consequat
                                        gravida luctus.</p>
                                    <div class="short-description d-flex">
                                        <span class="me-4"><b>Highlights:</b></span>
                                        <div class="short-description">
                                            <ul class="list-style-tick">
                                                <li>Regular Fit.</li>
                                                <li>Full sleeves.</li>
                                                <li>Machine wash, tumble dry.</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center post-meta mt-2 py-3 border-top">
                                        <div class="agent">
                                            <a href="#" class="d-flex text-general align-items-center"><img class="rounded-circle me-2" src="assets/images/team/1.jpg" alt="avata"><span>Ali Tufan</span></a>
                                        </div>
                                        <div class="post-date ms-auto"><span>2 Month Ago</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--============== Modal End ==============-->

    </div>

    <!-- Javascript Files -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/greensock.js"></script>
    <script src="assets/js/layerslider.transitions.js"></script>
    <script src="assets/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/range/tmpl.js"></script>
    <script src="assets/js/range/jquery.dependClass.js"></script>
    <script src="assets/js/range/draggable.js"></script>
    <script src="assets/js/range/jquery.slider.js"></script>
    <script src="assets/js/wow.js"></script>
    <script src="assets/js/mixitup.min.js"></script>
    <script src="assets/js/paraxify.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        $('#slider').layerSlider({
            sliderVersion: '6.0.0',
            type: 'fullwidth',
            responsiveUnder: 0,
            maxRatio: 1,
            slideBGSize: 'auto',
            hideUnder: 0,
            hideOver: 100000,
            skin: 'numbers',
            fitScreenWidth: true,
            fullSizeMode: 'fitheight',
            thumbnailNavigation: 'disabled',
            height: 860,
            skinsPath: 'assets/skins/'
        });
    </script>
    <script>
    // JavaScript for modal functionality
    document.addEventListener('DOMContentLoaded', function () {
        const modal = document.getElementById('imageModal');
        const modalImage = document.getElementById('modalImage');
        const closeModal = document.getElementById('closeModal');

        // Add click event to each image
        document.querySelectorAll('.clickable').forEach(image => {
            image.addEventListener('click', function () {
                modal.style.display = 'flex'; // Show the modal
                modalImage.src = this.src; // Set modal image source
            });
        });

        // Close the modal when clicking the close button
        closeModal.addEventListener('click', function () {
            modal.style.display = 'none';
        });

        // Close the modal when clicking outside the image
        modal.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.style.display = 'none';
            }
        });
    });
</script>
</body>

</html>