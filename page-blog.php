<?php /* Template Name: Blog */ ?>
<?php get_header();?>

<div class="container">

  <div class="row">

    <div class="col-sm-3">
    </div>

    <div class="col-sm-8">
      <div class="blog-header">
        <h1 class="blog-title">Blog</h1>
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

      <?php $myposts = get_posts(''); foreach($myposts as $post) : setup_postdata($post); ?> 
      <div class="post-item"> 
        <div class="post-info"> 
          <h2 class="post-title"> 
            <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"> 
              <?php the_title(); ?> </a> </h2> 
                <p class="post-meta">Posted by <?php the_author(); ?></p> 
        </div> 
        <div class="post-content"> 
          <?php the_excerpt(); ?> 
        </div> 
      </div> 
      
      <?php endforeach; wp_reset_postdata(); ?>

    </div><!-- /.blog-main -->

  </div><!-- /.row -->

</div><!-- /.container -->


<?php get_footer();?>