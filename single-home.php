<?php
/*
Template Name: Home Page

*/ 
get_header();
?>

<section class="hero-section">
    <div class="container-fluid">
        <div class="row">
            <?php if( have_rows('flexible_content') ): ?>
                <?php while( have_rows('flexible_content') ): the_row(); ?>
                    <?php if( get_row_layout() == 'content' ): ?>
                        <?php 
                            $info = get_sub_field('info_btn');
                            $hero_heading = get_sub_field('heading');
                            $hero_description = get_sub_field('description');
                            $link = get_sub_field('hero_button');
                            $hero_img = get_sub_field('hero_image');
                        ?>
                        <div class="col-lg-6 md-6 sm-12 hero-info">
                            <div class="info-btn"><?php echo $info ?></div>
                            <h1 class="hero-heading"><?php echo $hero_heading ?></h1>
                            <p class="hero-description"><?php echo $hero_description ?></p>
                            <?php                               
                                if( $link ): 
                                    $link_url = $link['url'];
                                    $link_title = $link['title'];
                                    $link_target = $link['target'] ? $link['target'] : '_self';
                                    ?>
                                    <a class="hero-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                        </div>
                        <div class="col-lg-6 md-6 sm-12 justify-content-end">
                            <img class="hero-img" src="<?php echo esc_url($hero_img['url']); ?>" alt="<?php echo esc_attr($hero_img['alt']); ?>" />
                        </div>
                    <?php endif; ?> 
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
         
    
    </div>
</section>
<section class="info-boxes">
<div class="container text-center info-box-container">
            <div class="row hero-boxes">
                   <?php if( have_rows('flexible_content') ): ?>
                        <?php while ( have_rows('flexible_content') ) : the_row(); ?>

                            <?php if( get_row_layout() == 'blocks' ): ?>
                                <?php if( have_rows('info_blocks') ): ?>
                                      <?php  while ( have_rows('info_blocks') ) : the_row(); ?>

                                          <?php  
                                            $image = get_sub_field('image_block');
                                            $block_title = get_sub_field('block_title');
                                            $block_description = get_sub_field('block_description');
                                           ?>
                                                <div class="col-lg-4 md-2 sm-12 info-box">   
                                                    <img class="h" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                                    <h3><?php echo $block_title ?></h3>
                                                    <p><?php echo $block_description ?> </p> 
                                                </div>    
                                        <?php  endwhile;
			                         endif;
                                endif;
                        endwhile;
                endif;?>                 
            </div>
        </div>
</section>
<section class="apps-section">
    <div class="container text-center">
        <div class="row app-info-boxes">
        
        <?php if( have_rows('flexible_content') ): ?>
                <?php while( have_rows('flexible_content') ): the_row(); ?>
                    <?php if( get_row_layout() == 'apps_section' ): ?>
                        <?php 
                            $title_app = get_sub_field('add_title');                       
                        ?>
                        <h2 class="app-title"><?php echo $title_app ?></h2>

                            <?php if( get_row_layout() == 'apps_section' ): ?>
                                    <?php if( have_rows('app_info') ): ?>
                                        <?php  while ( have_rows('app_info') ) : the_row(); ?>
                                            <?php  
                                                $app_heading = get_sub_field('title_app');
                                                $app_desc = get_sub_field('description_app');
                                                $app_img = get_sub_field('add_image');
                                                $app_link = get_sub_field('app_button');
                                            ?>
                                                <div class="img-box-container">
                                                        <div class="col-lg-6 col-sm-12 app-content">
                                                            <h3><?php echo $app_heading ?></h3>
                                                            <span><?php echo $app_desc ?></span>
                                                            <?php                               
                                                                if( $app_link ): 
                                                                    $link_url = $app_link['url'];
                                                                    $link_title = $app_link['title'];
                                                                    $link_target = $app_link['target'] ? $app_link['target'] : '_self';
                                                                    ?>
                                                                    <a class="btn app-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                                            <?php endif; ?>
                                                        </div>                              
                                                        <div class="col-lg-6 col-sm-12 app-img">
                                                            <img class="h" src="<?php echo esc_url($app_img['url']); ?>" alt="<?php echo esc_attr($app_img['alt']); ?>" />
                                                        </div>
                                                </div>
                                            <?php  endwhile;
                                        endif;
                                    endif; ?>



                    
                        <?php endif; ?> 
                <?php endwhile; ?>
            <?php endif; ?>      
        </div>
        
    </div>
</section>

<?php get_footer(); ?>