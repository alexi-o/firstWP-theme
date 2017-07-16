<?php get_header(); ?>
      <section id="about" class="container content-section text-center">
        <div class="row about">
          <div class="large-8 large-offset-2">
            <?php if(dynamic_sidebar('main_content_box') ) : else : endif; ?>
            </div>
        </div>
      </section>
	<section id="portfolio">
		<h2 class="section-heading">Portfolio</h2>
	
<div class="portfolio-container row">
	<?php 
    //Portfolio query
    $query_args = array(
        'post_type' => 'post',
        'category_name' => 'portfolio'
    );
    $portfolioQuery = new WP_query( $query_args ); 

    ?>
    <?php
    //Portfolio loop
    while ( $portfolioQuery->have_posts() ) : $portfolioQuery->the_post(); ?>
            <div class="card">
                <img class="portfolio-image" src="<?php the_post_thumbnail_url(); ?>" style="width:100%">
                    <div class="card-container">
                        <h1><?php the_title(); ?></h1>
                            <p class="title">Description</p>
                                <p class="portfolio-caption"><?php the_content(); ?></p>
                        <a href="<?php the_post_thumbnail_url(); ?>"><button>More</button></a>
                    </div>
            </div>
	    <?php endwhile; ?>
        <?php rewind_posts(); ?>
    </section>
    <section id="skills">
		<h2 class="section-heading">Skills</h2>
        <?php 
    //Portfolio query
        $query_args = array(
            'post_type' => 'post',
            'category_name' => 'skills'
        );
        $skillsQuery = new WP_query( $query_args ); 

        ?>
        <?php $skillsQuery = new WP_query( 'category=skills$posts_per_page=10' ); ?>
            <?php while ( $skillsQuery->have_posts() ) : $skillsQuery->the_post(); ?>
                <div class="card effect_random" data-id="4">
                    <div class="card__front">
                        <span class="card__text"><img src="<?php the_post_thumbnail_url(); ?>"></span>
                    </div>
                  <div class="card__back">
                    <span class="card__text"><?php the_title(); ?></span>
                  </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
    </section>
    <section id="contact">
		<h2 class="section-heading">Contact</h2>
    </section>
<?php get_footer(); ?>