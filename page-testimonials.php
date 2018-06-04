<?php get_header();?>

<div class="container">

  <div class="blog-header">
    <h1 class="blog-title">Our Advisors</h1>
  </div>
<?php while ( have_posts('testimonials') ) : the_post('testimonial'); ?>
  <div class="row" style="margin-bottom: 20px;">

    <div class="col-sm-12">
    
      <h3><?php the_title(); ?></h3><br />
      <quote><?php the_content(); ?></quote>
    </div>

  </div><!-- /.row -->
<?php endwhile; ?>

</div><!-- /.container -->

<?php get_footer();?>