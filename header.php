<!DOCTYPE html>
<html lang="en" prefix="og: http://ogp.me/ns#">
<head>
    <?php wp_head(); ?>
<link rel='stylesheet' href='<?php echo get_stylesheet_directory_uri();?>/style.css?counter=<?php echo time(); ?>' type='text/css' media='all' />
      </head>
<!-- Navigation -->
<div class="top-nav">
	<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
</div>
<!-- Intro Header -->
      <header class="intro" style="background: url()">
        <div class="intro-body">
          <div class="container">
            <div class="row">
              <div class="col-md-8 col-md-offset-2">
                <?php if(dynamic_sidebar('header_text') ) : else : endif; ?>
                <a href="#about" class="btn btn-circle page-scroll">
                  <i class="fa fa-angle-double-down animated"></i>
               </a>
              </div>
            </div>
          </div>
        </div>
      </header>