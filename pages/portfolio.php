<?php
require_once ROOT_DIR . '/pages/partials/header.php';
?>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-show">
        <div class="container">

            <div class="section-title">
                <h2>Gallery</h2>
                <p>My Works</p>
            </div>
<!---->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 d-flex justify-content-center">-->
<!--                    <ul id="portfolio-flters">-->
<!--                        <li data-filter="*" class="filter-active">All</li>-->
<!--                        <li data-filter=".filter-app">App</li>-->
<!--                        <li data-filter=".filter-card">Card</li>-->
<!--                        <li data-filter=".filter-web">Web</li>-->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->

            <div class="row portfolio-container" x-data="gallery">

                <template x-for="item in gallery">
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img x-bind:src="item.photo" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>App 1</h4>
                                <p>App</p>
                                <div class="portfolio-links">
                                    <a href="../assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="portfolio-details.html" data-gallery="portfolioDetailsGallery" data-glightbox="type: external" class="portfolio-details-lightbox" title="Portfolio Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>

            </div>

        </div>
    </section><!-- End Portfolio Section -->
<?php
require_once ROOT_DIR . '/pages/partials/footer.php';
