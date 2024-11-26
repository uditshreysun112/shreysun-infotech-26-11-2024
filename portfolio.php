<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Shreysun Global Infotech</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />

    <meta name="robots" content="noindex, nofollow" />

    <!-- Favicons -->
    <link href="images/favicon.png" rel="icon" />
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="" />
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
        rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <link href="css/bootstrap-icons.css" rel="stylesheet" />
    <link href="css/aos.css" rel="stylesheet" />
    <link href="css/glightbox.min.css" rel="stylesheet" />
    <link href="css/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Main CSS File -->
    <link href="css/main.css" rel="stylesheet" />
    <?php
    include("header.php");
    ?>

    <br /><br /><br />

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Portfolio</h2>
            <p>Check our latest work</p>
        </div>
        <!-- End Section Title -->

        <div class="container">
            <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
                <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                    <li data-filter="*" class="filter-active">All</li>
                    <li data-filter=".filter-app">App</li>
                    <li data-filter=".filter-product">Product</li>
                    <li data-filter=".filter-branding">Branding</li>
                    <li data-filter=".filter-books">Books</li>
                </ul>
                <!-- End Portfolio Filters -->

                <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="images/app-1.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/app-1.jpg" title="App 1"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="images/product-1.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Product 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/product-1.jpg" title="Product 1"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="images/branding-1.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Branding 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/branding-1.jpg" title="Branding 1"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="images/books-1.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Books 1</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/books-1.jpg" title="Branding 1"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="images/app-2.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>App 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/app-2.jpg" title="App 2"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="images/product-2.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Product 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/product-2.jpg" title="Product 2"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="images/branding-2.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Branding 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/branding-2.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="images/books-2.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Books 2</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/books-2.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
                        <div class="portfolio-content h-100">
                            <img src="images/app-3.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>App 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/app-3.jpg" title="App 3"
                                    data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                        <div class="portfolio-content h-100">
                            <img src="images/product-3.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Product 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/product-3.jpg" title="Product 3"
                                    data-gallery="portfolio-gallery-product" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
                        <div class="portfolio-content h-100">
                            <img src="images/branding-3.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Branding 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/branding-3.jpg" title="Branding 2"
                                    data-gallery="portfolio-gallery-branding" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->

                    <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-books">
                        <div class="portfolio-content h-100">
                            <img src="images/books-3.jpg" class="img-fluid" alt="" />
                            <div class="portfolio-info">
                                <h4>Books 3</h4>
                                <p>Lorem ipsum, dolor sit amet consectetur</p>
                                <a href="assets/img/portfolio/books-3.jpg" title="Branding 3"
                                    data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                        class="bi bi-zoom-in"></i></a>
                                <a href="portfolio-details.html" title="More Details" class="details-link"><i
                                        class="bi bi-link-45deg"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Portfolio Item -->
                </div>
                <!-- End Portfolio Container -->
            </div>
        </div>
    </section>
    <!-- /Portfolio Section -->
    <?php
    include("footer.php");
    ?>

    <!-- Vendor JS Files -->
    <script data-cfasync="false" src="js/email-decode.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/validate.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/glightbox.min.js"></script>
    <script src="js/purecounter_vanilla.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>

    <!-- Main JS File -->
    <script src="js/main.js"></script>
    </body>

</html>