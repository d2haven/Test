<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
		    <h2 class="footer-title"><?php the_field('footer_title', 'option'); ?></h2>
			<?php   
			        $footer_button = get_field('footer_button', 'option');                         
                if( $footer_button ): 
                    $link_url_button = $footer_button['url'];
                    $link_title_button = $footer_button['title'];
                    $link_target_button = $footer_button['target'] ? $footer_button['target'] : '_self';
            ?>
                <a class="btn footer-button" href="<?php echo esc_url( $link_url_button ); ?>" target="<?php echo esc_attr( $link_target_button ); ?>"><?php echo esc_html( $link_title_button ); ?></a>
            <?php endif; ?>
		</div>
	</footer>
</div>
<?php wp_footer(); ?>

</body>
</html>
