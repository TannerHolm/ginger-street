@php the_content() @endphp
{!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav"><p>' . __('Pages:', 'sage'), 'after' => '</p></nav>']) !!}

<section id="hero" style="background-image:url({{ the_field('hero_background_image') }})">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <img src="{{ the_field('hero_title') }}" alt="">
      </div>
    </div>
  </div>
  <div class="wave-menu">
    <img class="hero-wave" src="{{ the_field('hero_wave') }}" alt="">
    {{
      wp_nav_menu([
        'items_wrap' => '%3$s',
        'theme_location' => 'primary_navigation',
        'menu' => 'Home Nav'
      ])
    }}
  </div>
</section>

{{-- <section id="nav-menu">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        {{
        					wp_nav_menu([
        						'items_wrap' => '%3$s',
        						'theme_location' => 'primary_navigation',
                    'menu' => 'Home Nav'
        						// 'walker' => new LiquidNavigation()
        					])

                }}
      </div>
    </div>
  </div>
</section> --}}


<section id="about" style="background-image: url({{ the_field('about_background_image') }})">
  <div class="container">

    <div class="row top-row">
      <div class="col-md-6">
        <h2>ABOUT US</h2>
        <img class="top-left" src="{{ the_field('top_left_image') }}" alt="">
      </div>
      <div class="col-md-6">
        <div class="top-right-text" style="background-image:url({{ the_field('top_right_text_bg') }});">
          {{ the_field('top_right_text') }}
        </div>
      </div>
    </div>

    <div class="row bottom-row">
      <div class="col-md-6">
        <div class="bottom-left-text" style="background-image:url(<?php the_field('bottom_left_text_bg') ?>)">
          {{ the_field('bottom_left_text') }}
        </div>
      </div>
      <div class="col-md-6">
        <img class="bottom-right" src="{{ the_field('bottom_right_image') }}" alt="">
      </div>
    </div>
  </div>
</section>

<section id="menu" style="background-image:url({{ the_field('menu_background_image') }})">
  <img class="top-left" src="{{ the_field('top_left_menu_image') }}" alt="">
  <div class="container">
      <h2>MENU</h2>
    <div class="row">
      <div class="col-md-12">
          <ul class="top-nav">
            <?php if( have_rows('menu') ): ?>

              <?php  while ( have_rows('menu') ) : the_row(); ?>
                <li><a href="#">{{ the_sub_field('menu_group_title') }}</a></li>

              <?php endwhile; ?>

            <?php else : ?>

            <?php endif; ?>
          </ul>
          <div class="menu-items">
            <?php if( have_rows('menu') ): ?>

              <?php  while ( have_rows('menu') ) : the_row(); ?>
                  <ul class="menu-items-list" data-attribute="{{ the_sub_field('menu_group_title') }}">
                    <?php if( have_rows('menu_items') ): ?>

                      <?php  while ( have_rows('menu_items') ) : the_row(); ?>

                          <li>
                            <div class="title-description">
                              <p class="menu-item-title">
                                {{ the_sub_field('menu_item_title') }}
                              </p>
                              <div class="menu-item-description">
                                {{ the_sub_field('menu_item_description') }}
                              </div>
                            </div>
                            <div class="price">
                              ${{ the_sub_field('menu_item_price') }}
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
  <img class="bottom-right" src="{{ the_field('bottom_right_menu_image') }}" alt="">
</section>

<section id="when-where">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="where">
          <h3 class="where-title">WHERE</h3>
          <img src="{{ the_field('where_image') }}" alt="" class="where-img">
          <div class="where-address">
            {{ the_field('where_address') }}
          </div>
        </div>
      </div>
      <div class="col-md-6">

      </div>
    </div>
  </div>
</section>
