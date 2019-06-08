            <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
                <div class="ds-footer-top">
                    <div class="ds-footer-top-image">
                        <img src="<?php the_field('footer_top_image'); ?>" alt="">
                    </div>
                </div>
				<div id="inner-footer" class="wrap cf">
                    <div class="ds-footer-inner">
                        <div class="ds-footer-left">
                            <a class="brand" href="<?php home_url('/'); ?>"><img src="<?php the_field('logo'); ?>" alt=""></a>

                            <button class="cta" href="<?php the_field('footer_cta_link'); ?>"><?php the_field('footer_cta_text'); ?></button>

                            <a href="<?php the_field('facebook'); ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="<?php the_field('instagram'); ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                            <a href="<?php the_field('yelp'); ?>" target="_blank"><i class="fa fa-yelp"></i></a>

                        </div>

                        <div id="footer-right"  class="ds-footer-right">
                            <div class="ds-footer-widget-1">
                                <nav role="navigation">
                                    <?php dynamic_sidebar( 'ds-footer-widget-left' ); ?>
                                </nav>
                            </div>
                            
                            <div class="ds-footer-widget-2">
                                <?php dynamic_sidebar( 'ds-footer-widget-rt' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
