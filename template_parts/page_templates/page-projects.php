<!-- Header --><?php include (TEMPLATEPATH . '/header.php'); ?> <!-- End Header -->

<div class='page-container' id='page-container'>
<h1><?php the_title(); ?></h1>
<!-- WordPress Loop -->
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php the_content(); ?>
hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh
<?php endwhile; ?>
<?php else : ?>
<h6 class="center">Not Found</h6>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
<!-- End WordPress Loop --></div><!-- End page Container -->
<!-- Footer --><?php include (TEMPLATEPATH . '/footer.php'); ?> <!-- Footer -->