<?php get_header();?>

    <section class="slider">
      <?php wd_slider(1); ?>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <?php if(is_active_sidebar('box1')) : ?>
              <?php dynamic_sidebar('box1'); ?>
            <?php endif; ?>   
            </div>

            <div class="col-md-4">
              <?php if(is_active_sidebar('box2')) : ?>
                <?php dynamic_sidebar('box2'); ?>
              <?php endif; ?>         
            </div>

            <div class="col-md-4">
              <?php if(is_active_sidebar('box3')) : ?>
                <?php dynamic_sidebar('box3'); ?>
              <?php endif; ?>    
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php get_footer();?>
