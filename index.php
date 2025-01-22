<!doctype html>
<html lang="en">
 <?php require_once('inc\header.php');?>
<body class="">
  <div class="wrapper">
  <?php require_once('inc/navbar.php');?>
    <div class="main-content">
    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <?php require_once('home.php');?>
    </section>
    <!-- /Hero Section -->
    <!-- Clients Section -->
    <section id="clients" class="clients section">
      <?php require_once('clients.php');?>
    </section><!-- /Clients Section -->
    <!-- About Section -->
    <section id="about" class="about section">
      <!-- Section Title -->
       <?php require_once('about.php');?>
    </section>
    <!-- Services Section -->
    <section id="services" class="membership section">

      <!-- Section Title -->
      <?php require_once('services.php');?>
    </section><!-- /Services Section -->

    <!-- Team Section -->
    <section id="team" class="team section">

      <?php require_once('team.php');?>
    </section>
    <!-- /Team Section -->

    <!-- membership Section -->
    <section id="pricing" class="pricing section">
    <?php require_once('membership.php');?>
    </section>
    <!-- /Membership Section -->
    <?php if(isset($_SESSION['email'])): ?>
     <section id="articles">
      <?php require_once('articles.php');?>
     </section>

     <section id="courses">
      <?php require_once('courses.php');?>
     </section>
     <?php endif;?>
    <!-- Faq 2 Section -->
    <section id="faq-2" class="faq-2 section">

      <?php require_once('faq.php');?>

    </section><!-- /Faq 2 Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">
    <?php require_once('contact.php');?>
     
    </section><!-- /Contact Section -->

  </div>

  <footer id="footer" class="footer">

  <?php require_once('inc/footer.php');?>
  </div>

</body>

</html>