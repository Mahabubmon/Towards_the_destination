<?php include 'includes/header.php' ?>

<!-- start nav-bar -->
<?php include 'includes/navbar.php' ?>

<!-- End nav-bar -->
<!-- Sidebar -->
<?php if ($username) { ?>
  <input type="checkbox" id="check">
  <label for="check">
    <i class="fas fa-bars" id="btn" onclick="toggleSidebar()"></i>

  </label>
  <div class="sidebar">
    <i class="fas fa-times" id="closeBtn" onclick="closebtn()"></i>
    <header>Test Case</header>
    <ul class="sidebarlink">
      <li><a href="#"><i class="fas fa-qrcode"></i>Home</a></li>
      <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>
      <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>
      <li><a href="#"><i class="fas fa-qrcode"></i>Content</a></li>
    </ul>
  </div>
<?php } ?>
<!-- End Sidebar -->
<!-- start header jumbotron -->
<div class="back-image">
</div>

<!-- Main Content Section -->
<section class="main-content py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <?php if ($username) { ?>
          <h2 class="section-heading text-dark">Welcome,
            <?php echo $username; ?>!
          </h2>
          <p class="text-dark">Thank you for using our platform. Explore and enjoy the journey!</p>
        <?php } else { ?>
          <h2 class="section-heading text-dark">Explore the Best Routes</h2>
          <p class="text-dark">Find the perfect route for your journey with ease and convenience.</p>
        <?php } ?>
      </div>
    </div>
  </div>
</section>
<!-- End Main Content Section -->

<!-- Contact Section -->
<section class="contact-section py-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h2 class="section-heading text-white">Contact Us</h2>
        <p class="text-white">Feel free to get in touch with us if you have any questions or concerns.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 mx-auto text-center">
        <i class="fas fa-envelope fa-3x mb-3 text-white"></i>
        <p>
          <a href="mailto:info@example.com" class="text-white">info@example.com</a>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Section -->

<!-- Explore Section (visible to logged-in users) -->
<?php if ($username) { ?>
  <section id="explore" class="explore-section py-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <h2 class="section-heading text-dark">Explore Routes</h2>
          <p class="text-dark">Browse through our curated routes to find the one that suits your preferences. Make your
            journey memorable with Ganter Beye Dike.</p>
          <a href="#featured-routes" class="btn btn-info btn-lg">View Featured Routes</a>
        </div>
      </div>
    </div>
  </section>
<?php } ?>
<!-- End Explore Section -->
<!-- Featured Routes Section (visible to logged-in users) -->
<?php include 'includes/feature.php' ?>


<!-- End Featured Routes Section -->


<!-- end header jumbotron -->
<?php include 'includes/footer.php' ?>