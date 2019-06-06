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


								<section id="about" style="background-image: url(<?php the_field('about_background_image') ?>)">
								  <div class="container">

								    <div class="row top-row">
								      <div class="col-md-6">
								        <h2>ABOUT US</h2>
								        <img class="top-left" src="<?php the_field('top_left_image') ?>" alt="">
								      </div>
								      <div class="col-md-6">
								        <div class="top-right-text" style="background-image:url(<?php the_field('top_right_text_bg') ?>);">
								          <?php the_field('top_right_text') ?>
								        </div>
								      </div>
								    </div>

								    <div class="row bottom-row">
								      <div class="col-md-6">
								        <div class="bottom-left-text" style="background-image:url(<?php the_field('bottom_left_text_bg') ?>)">
								          <?php the_field('bottom_left_text') ?>
								        </div>
								      </div>
								      <div class="col-md-6">
								        <img class="bottom-right" src="<?php the_field('bottom_right_image') ?>" alt="">
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

								<section id="when-where">
								  <div class="container">
								    <div class="row">
								      <div class="col-md-6">
								        <div class="where">
								          <h3 class="where-title">WHERE</h3>
								          <img src="<?php the_field('where_image') ?>" alt="" class="where-img">
								          <div class="where-address">
								            <?php the_field('where_address') ?>
								          </div>
								        </div>
								      </div>
								      <div class="col-md-6">

								      </div>
								    </div>
								  </div>
								</section>

							<?php endwhile; else : ?>


							<?php endif; ?>

						</main>


<?php get_footer(); ?>