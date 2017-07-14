<section id="portfolio" class="content-section text-center">
<div class="portfolio">
    <div class="container">
            <div class="row">
              <div class="large-12 text-center">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <h2 class="section-heading">Portfolio</h2>

        <?php endwhile; endif; ?>
    
       </div>
    </div>

<?php 

    $args = array(
        'post_type' => 'portfolio'
    );
    $query = new WP_Query( $args );

?>

<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

    <div class="medium-4 small-6 columns portfolio-item">
        <a href="<?php the_permalink(); ?>" class="portfolio-link" data-toggle="modal">
            <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    <i class="fa fa-plus fa-3x"></i>
                </div>
            </div>
            <img src="<?php the_post_thumbnail('large'); ?>" class="img-responsive" alt="">
        </a>
    </div>

<?php endwhile; endif; wp_reset_postdata(); ?>

</section>