<?php
$pageTitle  = 'Peeps Studio LLC – Dance Studio in Florida';
$activePage = 'home';
require 'includes/header.php';
?>

<!-- HERO -->
<section class="hero">
  <h1>Move. <span>Create.</span> Inspire.</h1>
  <p>Peeps Studio LLC brings world-class dance instruction to Florida. Classes for every age and every level.</p>
  <a href="/classes.php" class="btn">Explore Classes</a>
  <a href="/contact.php" class="btn btn-outline">Get in Touch</a>
</section>

<!-- WHY US -->
<section style="background:#fff;">
  <div class="container">
    <h2 class="section-title">Why <span>Peeps Studio?</span></h2>
    <p class="section-sub">A welcoming community where passion meets performance.</p>
    <div class="cards">
      <div class="card">
        <div class="card-icon">&#x1F3C6;</div>
        <h3>Award-Winning Instructors</h3>
        <p>Our faculty brings decades of professional stage and teaching experience directly to your child's class.</p>
      </div>
      <div class="card">
        <div class="card-icon">&#x1F476;</div>
        <h3>All Ages Welcome</h3>
        <p>From tiny tots to adult beginners and competitive teens — we have the perfect class for every dancer.</p>
      </div>
      <div class="card">
        <div class="card-icon">&#x1F3AD;</div>
        <h3>Diverse Styles</h3>
        <p>Ballet, Hip Hop, Contemporary, Jazz, Tap, Acro &mdash; find your rhythm with us.</p>
      </div>
      <div class="card">
        <div class="card-icon">&#x2764;&#xFE0F;</div>
        <h3>Community First</h3>
        <p>We believe dance builds confidence, friendship, and joy. Our studio is your second home.</p>
      </div>
    </div>
  </div>
</section>

<!-- QUICK CLASS PREVIEW -->
<section style="background:var(--light);">
  <div class="container">
    <h2 class="section-title">Popular <span>Classes</span></h2>
    <p class="section-sub">A taste of what we offer — <a href="/classes.php" style="color:var(--pink);font-weight:700;">see the full schedule &rarr;</a></p>
    <div class="cards">
      <div class="card">
        <div class="card-icon">&#x1FA70;</div>
        <h3>Ballet</h3>
        <p>Build grace, strength, and technique with our classical ballet program from Pre-Ballet through Pointe.</p>
      </div>
      <div class="card">
        <div class="card-icon">&#x1F3B6;</div>
        <h3>Hip Hop</h3>
        <p>High-energy choreography rooted in street dance culture. Grooves, isolations, and freestyle flows.</p>
      </div>
      <div class="card">
        <div class="card-icon">&#x1F30A;</div>
        <h3>Contemporary</h3>
        <p>Expressive movement blending modern, lyrical, and ballet — perfect for creative storytellers.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section style="background:linear-gradient(135deg,var(--dark),var(--accent));color:#fff;text-align:center;padding:3.5rem 1.5rem;">
  <div class="container">
    <h2 style="font-size:clamp(1.4rem,4vw,2rem);margin-bottom:.75rem;">Ready to start dancing?</h2>
    <p style="opacity:.9;margin-bottom:1.5rem;">Register for a free trial class today — no experience needed.</p>
    <a href="/contact.php" class="btn">Sign Up for a Trial Class</a>
  </div>
</section>

<?php require 'includes/footer.php'; ?>
