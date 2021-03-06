<?php
/*
 Template Name: Front Page Template
 */
?>

<?php get_header() ?>

<div class="front-page-wrapper">
  <div class="container"> 
    <div class="d-flex justify-content-center">
      <div class="main-content">
        <ul>
          <li><a href="<?php echo site_url('/development') ?>">development</a></li>
          <li><a href="<?php echo site_url('/marketing') ?>">marketing</a></li>
          <li><a href="<?php echo site_url('/about-me') ?>">about me</a></li>
          <li><a href="<?php echo site_url('/contact') ?>">contact</a></li>
          <li><a href="<?php echo site_url('/experimental') ?>">experimental</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php get_footer() ?>