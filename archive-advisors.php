<?php get_header();?>

<div class="container">

  <div class="blog-header">
    <h1 class="blog-title">Our Advisors</h1>
  </div>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="row" style="margin-bottom: 20px;">

    <div class="col-sm-4">
      
      <?php the_post_thumbnail('advisors-thumbnail'); ?>
    </div>
    <div class="col-sm-6">
      <h3><?php the_title(); ?></h3><br />
      <?php the_content('description'); ?><br /><br />
      <a href="mailto:<?php echo get_field ("contact_advisor"); ?>"> Contact me</a>
    </div>

  </div><!-- /.row -->
<?php endwhile; ?>

</div><!-- /.container -->

<?php get_footer();?>