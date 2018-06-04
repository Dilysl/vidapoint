<?php get_header();?>

<div class="container">

<div class="row">

  <div class="col-sm-3">
  </div>

  <div class="col-sm-8">
    <div class="blog-header">
      <h1 class="blog-title">The Bootstrap Blog</h1>
      <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
    </div>
  </div>
</div><!-- end-row -->

  <div class="row">

    <div class="col-sm-3 blog-sidebar">
     <?php if(is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
     <?php endif; ?>
    </div><!-- /.blog-sidebar -->

    <div class="col-sm-8 blog-main">

     <?php while ( have_posts() ) : the_post(); ?>

     
      <?php get_template_part( 'content', get_post_format() ); ?>
      <div class="post-item"> 
        <div class="post-info"> 
          <h2 class="post-title"> 
              <?php the_title(); ?> </h2> 
                <p class="post-meta">Posted by <?php the_author(); ?></p> 
        </div> 
        <div class="post-content"> 
          <?php the_content(); ?> 
        </div> 
      </div> 
      
    <?php endwhile; ?>

    </div><!-- /.blog-main -->

  </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer();?>