<?php get_header();?>

<div class="container">

  <div class="blog-header">
    <h1 class="blog-title">Testimonials</h1>
  </div>
<?php while ( have_posts() ) : the_post(); ?>
  <div class="row" style="margin-bottom: 20px;">

    <div class="col-sm-12">
    
      <h3><?php the_title(); ?></h3><br />
      <blockquote><?php the_content(); ?></blockquote>
    </div>

  </div><!-- /.row -->
<?php endwhile; ?>

</div><!-- /.container -->

<?php get_footer();?>