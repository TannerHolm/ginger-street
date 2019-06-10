<?php
/*
 Template Name: Home
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<?php $www_icons = get_field('www_icons'); ?>

						<main id="main" class="" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<section id="hero" style="background-image:url(<?php the_field('hero_background_image') ?>)">
								  <div class="container">
								    <div class="row">
								      <div class="col-md-12">
								        <img src="<?php the_field('hero_title') ?>" alt="">
								      </div>
								    </div>
								  </div>
								  <div class="wave-menu">
								    <img class="hero-wave" src="<?php the_field('hero_wave') ?>" alt="">
								    <?php
								      wp_nav_menu([
								        'items_wrap' => '%3$s',
								        'theme_location' => 'primary_navigation',
								        'menu' => 'Home Nav'
								      ])
								    ?>
								  </div>
								</section>

								 <!-- <section id="nav-menu">
								  <div class="container">
								    <div class="row">
								      <div class="col-md-12">
								        <?php
								        					wp_nav_menu([
								        						'items_wrap' => '%3$s',
								        						'theme_location' => 'primary_navigation',
								                    'menu' => 'Home Nav'
								        						// 'walker' => new LiquidNavigation()
								        					])

								                ?>
								      </div>
								    </div>
								  </div>
								</section> -->


								<section id="about">
								  

								    <div class="row top-row">
                                        <div class="top-left-image col-md-6">
                                            <img class="top-left" src="<?php the_field('about_image') ?>" alt="">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="300" width="400">
                                                <polygon points="0,0 300,0 0,300" style="fill:#178974" />
                                            </svg>
                                        </div>
                                        <div class="col-md-6 right-justify">
                                            <h2><?php the_field('about_title'); ?></h2>
                                            <article><?php the_field('about_text'); ?></article>
                                            <button class="cta learn-more-cta" href="<?php the_field('about_cta_link'); ?>"><?php the_field('about_cta_text'); ?></button>
                                        </div>
								    </div>

								    <div class="row bottom-row">
								      <div class="col-md-6">
								        <div class="bottom-left">
                                            
								        </div>
								      </div>
								      <div class="col-md-6">
                                      <div class="bottom-right" style="background-image:url(<?php the_field('about_bottom_right_bg') ?>)">
								        </div>
								      </div>
								    </div>
								  </div>
								</section>

								<section id="menu" style="background-image:url(<?php the_field('menu_background_image') ?>)">
								  <img class="top-left" src="<?php the_field('top_left_menu_image') ?>" alt="">
								  <div class="container">
								      <h2>MENU</h2>
								    <div class="row">
								      <div class="col-md-12">
								          <ul class="top-nav">
								            <?php if( have_rows('menu') ): ?>

								              <?php  while ( have_rows('menu') ) : the_row(); ?>
								                <li><a href="#"><?php the_sub_field('menu_group_title') ?></a></li>

								              <?php endwhile; ?>

								            <?php else : ?>

								            <?php endif; ?>
								          </ul>
								          <div class="menu-items">
								            <?php if( have_rows('menu') ): ?>

								              <?php  while ( have_rows('menu') ) : the_row(); ?>
								                  <ul class="menu-items-list" data-attribute="<?php the_sub_field('menu_group_title') ?>">
								                    <?php if( have_rows('menu_items') ): ?>

								                      <?php  while ( have_rows('menu_items') ) : the_row(); ?>

								                          <li>
								                            <div class="title-description">
								                              <p class="menu-item-title">
								                                <?php the_sub_field('menu_item_title') ?>
								                              </p>
								                              <div class="menu-item-description">
								                                <?php the_sub_field('menu_item_description') ?>
								                              </div>
								                            </div>
								                            <div class="price">
								                              $<?php the_sub_field('menu_item_price') ?>
								                            </div>
								                          </li>

								                      <?php endwhile; ?>

								                    <?php else : ?>
								                  </ul>

								                  <?php endif; ?>

								              <?php endwhile; ?>

								            <?php else : ?>

								            <?php endif; ?>
								          </div>
								      </div>
								    </div>
								  </div>
								  <img class="bottom-right" src="<?php the_field('bottom_right_menu_image') ?>" alt="">
								</section>
                                
								<section id="when-where" style="background-image: url(<?php the_field('when_where_background_image'); ?>">
								  <div class="container">
								    <div class="row">
								      <div class="col-md-6">
								        <div class="where" style="background-image:url('./wp-content/themes/bones/library/images/where-bg-2x.png');">
                                          <h3 class="where-title">WHERE</h3>
                                          <img src="<?php echo $www_icons['where_icon']; ?>" alt="" class="www-icon where-icon">
								          <img src="<?php the_field('where_image') ?>" alt="" class="where-img">
								          <div class="where-address">
								            <?php the_field('where_address') ?>
								          </div>
								        </div>
								      </div>
								      <div class="col-md-6">
                                        <div class="when" style="background-image:url('./wp-content/themes/bones/library/images/when-bg-2x.png');">
                                            <h3 class="when-title">When</h3>
                                            <img src="<?php echo $www_icons['when_icon']; ?>" alt="" class="www-icon when-icon">
                                            <div class="when-info">
                                                <?php if( have_rows('when_info') ): ?>
                                                    <ul class="when-info-list">
                                                        <?php  while ( have_rows('when_info') ) : the_row(); ?>
                                                            <li>
                                                                <span class="days"><?php the_sub_field('days'); ?></span><span class="times"><?php the_sub_field('times'); ?></span>
                                                            </li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div>
                                        
                                            <div class="wok-up-window">
                                                <h3 class="wok-up">Wok Up</h3>
                                                <img src="<?php echo $www_icons['wok_up_icon']; ?>" alt="" class="www-icon wok-up-icon">
                                                <div class="wok-up-info">
                                                    <?php if( have_rows('wok_up_window') ): ?>
                                                        <ul class="wok-up-info-list">
                                                            <?php  while ( have_rows('wok_up_window') ) : the_row(); ?>
                                                                <li>
                                                                    <span class="days"><?php the_sub_field('days'); ?></span><span class="times"><?php the_sub_field('times'); ?></span>
                                                                </li>
                                                            <?php endwhile; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                      </div>
								    </div>
								  </div>
                                </section>
                                
                                

							<?php endwhile; else : ?>


							<?php endif; ?>

						</main>


<?php get_footer(); ?>
