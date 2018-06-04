<?php get_header();?>

    <section class="showcase">
      <div class="container">
        <h1>Custom Theme</h1>
        <p>Lorum Ipsum Dolor</p>
      </div>
    </section>

    <?php if(have_posts()) : ?>
      <?php while(have_posts()) : the_post(); ?>
        
    <section class="page-content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h3><?php the_title(); ?></h3>
              <p><?php the_content(); ?></p>             
            </div>
          </div>
        </div>
      </div>
    
      <?php endwhile; ?>
      <?php else : ?>
        <p> <?php __('Page not found'); ?></p>
      <?php endif; ?>
    </section>

    <?php get_footer();?>
