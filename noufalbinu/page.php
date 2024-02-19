<?php include (TEMPLATEPATH . '/header.php'); ?> 

<div id="about">
<h1 class="entrytitle" id="post-<?php the_ID(); ?>"><?php the_title(); ?></h1>
  <div class="single-colum">

<div class="blogpostwrapper">
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="blogpost">
<?php the_content(); ?>
</div>
<?php endwhile; ?>
<?php else : ?>
<h6 class="center">Not Found</h6>
<p class="center">Sorry, but you are looking for something that isn't here.</p>
<?php include (TEMPLATEPATH . "/searchform.php"); ?>
<?php endif; ?>
</div>
</div>

</div>

<?php include (TEMPLATEPATH . '/footer.php'); ?> 
