<?php if ($username) { ?>
    <section id="featured-routes" class="featured-routes-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-dark">Featured Routes</h2>
                    <p class="text-dark">Explore our featured routes, carefully selected for an amazing travel experience.
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- Featured Route 1 -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="images/route1.jpg" class="img-fluid" alt="Featured Route 1">
                        <div class="card-body">
                            <h5 class="card-title">Scenic Mountain Drive</h5>
                            <p class="card-text">Experience breathtaking views on this scenic mountain drive.</p>
                        </div>
                    </div>
                </div>

                <!-- Featured Route 2 -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="images/route2.jpg" class="img-fluid" alt="Featured Route 2">
                        <div class="card-body">
                            <h5 class="card-title">Coastal Adventure</h5>
                            <p class="card-text">Embark on an adventurous journey along the beautiful coastline.</p>
                        </div>
                    </div>
                </div>

                <!-- Featured Route 3 -->
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm">
                        <img src="images/route3.jpg" class="img-fluid" alt="Featured Route 3">
                        <div class="card-body">
                            <h5 class="card-title">City Lights Tour</h5>
                            <p class="card-text">Explore the city lights and landmarks on this captivating tour.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- End Featured Routes Section -->
<!-- Featured Routes Section (visible to logged-in users) -->
<?php if ($username) { ?>
    <section id="featured-routes" class="featured-routes-section py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-dark">Featured Routes</h2>
                    <p class="text-dark">Explore our featured routes, carefully selected for an amazing travel experience.
                    </p>
                </div>
            </div>
            <div class="row">
                <!-- Carousel/Slideshow Section -->
                <div class="col-md-8 mx-auto">
                    <div id="featuredCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Featured Route 1 -->
                            <div class="carousel-item active">
                                <img src="images/route1.jpg" class="d-block w-100" alt="Featured Route 1">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Scenic Mountain Drive</h5>
                                    <p>Experience breathtaking views on this scenic mountain drive.</p>
                                </div>
                            </div>

                            <!-- Featured Route 2 -->
                            <div class="carousel-item">
                                <img src="images/route2.jpg" class="d-block w-100" alt="Featured Route 2">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Coastal Adventure</h5>
                                    <p>Embark on an adventurous journey along the beautiful coastline.</p>
                                </div>
                            </div>

                            <!-- Featured Route 3 -->
                            <div class="carousel-item">
                                <img src="images/route3.jpg" class="d-block w-100" alt="Featured Route 3">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>City Lights Tour</h5>
                                    <p>Explore the city lights and landmarks on this captivating tour.</p>
                                </div>
                            </div>
                        </div>

                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#featuredCarousel"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#featuredCarousel"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>