<?php get_header();?>

<div class="container">

  <div class="blog-header">
    <h1 class="blog-title">The Bootstrap Blog</h1>
    <p class="lead blog-description">The official example template of creating a blog with Bootstrap.</p>
  </div>

  <div class="row">

  	<div class="col-sm-3 blog-sidebar">
     <?php if(is_active_sidebar('sidebar')) : ?>
      <?php dynamic_sidebar('sidebar'); ?>
     <?php endif; ?>
    </div><!-- /.blog-sidebar -->

    <div class="col-sm-8 blog-main">

    <?php if(have_posts()) : ?>
   		<?php while(have_posts()) : the_post(); ?>

      <div class="blog-post">
        <h2 class="blog-post-title"><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
        <p class="blog-post-meta"> <?php the_date(); ?> by <?php the_author(); ?></p>
        <?php has_posts_thumbnail()) : ?>
	        <div class="post-thumbnail">
	        	<?php the_post_thumbnail(); ?>
	        </div>
    	<?php endif;?>
        <?php the_excerpt(); ?>

      </div><!-- /.blog-post -->

  	  <?php endwhile; ?> 
	  <?php else : ?>
	  	<p><?php echo "No blog posts available at this moment"; ?></p>    
	  <?php endif; ?>

      <nav>
        <ul class="pager">
          <li><a href="#">Previous</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </nav>

    </div><!-- /.blog-main -->

  </div><!-- /.row -->

</div><!-- /.container -->

<?php get_footer();?>