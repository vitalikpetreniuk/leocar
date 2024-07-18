<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package ninesquares
 */

get_header();
?>

  <main id="primary" class="site-main">
      <section class="leo-page-title-catalog pt-8">
          <div class="container">
              <nav class="breadcrumbs flex justify-center items-center text-[12px] opacity-70 820:text-sm">
                  <span><a href="<?=home_url()?>"><?=get_the_title( get_option('page_on_front') )?></a></span>
                  <?php if(get_page_by_path('catalog')) { ?>
                      <span><a href="<?=home_url()?>/catalog/"><?=get_page_by_path('catalog')->post_title?></a></span>
                  <?php } ?>
                  <span><?php the_title(); ?></span>
              </nav>
          </div>
      </section>
      <section class="leo-car pt-5 1100:pt-8">
          <div class="container 1100:flex 1100:flex-wrap 1100:justify-between 1100:items-start">
              <div class="820:flex 820:flex-row-reverse 820:justify-between 820:gap-x-3 1100:w-[calc(50%+20px)]">
                  <div class="swiper mySwiperCarousel 820:w-[calc(100%-220px)] 1024:w-[calc(100%-270px)] 1100:w-[calc(100%-170px)]">
                          <div class="swiper-wrapper">
                              <div class="swiper-slide">
                                  <?php the_post_thumbnail('full', ['class' => "block w-full h-full object-contain"]); ?>
                              </div>
                              <?php if(get_field('gallery')) { ?>
                              <?php foreach(get_field('gallery') as $image) { ?>
                                  <div class="swiper-slide">
                                      <?php echo wp_get_attachment_image($image, 'full', false, ['class' => "block w-full h-full object-contain"]); ?>
                                  </div>
                              <?php } ?>
                              <?php } ?>
                          </div>
                      <div class="swiper-pagination !bottom-4"></div>

                      <!-- If we need navigation buttons -->
                      <div class="swiper-button-prev"></div>
                      <div class="swiper-button-next"></div>
                  </div>
                  <div class="swiper mySwiperThumbs mt-2 820:mt-0 820:w-[200px] 1024:w-[250px] 1100:w-[150px]" thumbsSlider="">

                      <div class="swiper-wrapper">
                          <div class="swiper-slide">
                              <?php the_post_thumbnail('full', ['class' => "block w-full h-full object-contain"]); ?>
                          </div>
                          <?php if(get_field('gallery')) { ?>
                              <?php foreach(get_field('gallery') as $image) { ?>
                                  <div class="swiper-slide">
                                      <?php echo wp_get_attachment_image($image, 'full', false, ['class' => "block w-full h-full object-cover"]); ?>
                                  </div>
                              <?php } ?>
                          <?php } ?>
                      </div>
                  </div>
              </div>
              <div class="mt-4 1100:w-[calc(50%-40px)] 1100:pl-4 1100:box-border 1100:mt-0 1100:flex 1100:flex-col">
                  <h1 class="!text-base py-2.5 820:!text-xl 1100:pt-0 1100:order-1"><?php the_title(); ?></h1>
                  <form class="block mt-0 1100:flex 1100:flex-col 1100:order-2">
                      <div class="pt-2.5 flex justify-between items-baseline 1100:order-4">
                          <?php if(get_field('home_price')) { ?>
                          <div class="flex justify-start items-baseline gap-x-1.5"><span class="text-accent text-[26px]/[1.6]"><?=explode(PHP_EOL,get_field('home_price'))[0]?> €</span>/<?php esc_html_e('день','leocar'); ?></div>
                          <?php } ?>
                          <?php if(get_field('min')) { ?>
                          <div><span><?php get_field('min'); ?></span> €  - <?php esc_html_e('передплата','leocar'); ?></div>
                          <?php } ?>
                      </div>
                      <input type="submit" class="button !bg-none !pr-0 mt-2.5 1100:order-5 1100:max-w-[260px]" value="<?php esc_html_e('Оформити','leocar'); ?>">

                      <ul class="car-info mt-4 py-4 flex flex-wrap gap-[5px] justify-start 1100:order-1 1100:mt-0">
                          <?php if(get_field('type')) { ?>
                            <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?=get_field('type')['label']?><img class="block !w-auto h-8 1100:w-24" src="<?php renderImages('sort/comfort.png'); ?>" alt="<?=get_field('type')['value']?>"></li>
                          <?php } ?>
                          <?php if(get_field('drive')) { ?>
                          <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?=get_field('drive')?> <?php esc_html_e('привід','leocar'); ?></li>
                          <?php } ?>
                          <?php if(get_field('transmission')['value'] == 'automat') { ?>
                          <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?php renderAssetsSVG('svg/automatic'); ?><?php esc_html_e('Автомат','leocar'); ?></li>
                          <?php } else { ?>
                          <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?php renderAssetsSVG('svg/mechanics'); ?><?php esc_html_e('Механика','leocar'); ?></li>
                          <?php } ?>
                          <?php if(get_field('volume')&&get_field('fuel')) { ?>
                          <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?php renderAssetsSVG('svg/gas'); ?><?=get_field('volume')?>, <?=get_field('fuel')?></li>
                          <?php } ?>
                          <?php if(get_field('year')) { ?>
                          <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?=get_field('year')?> <?php esc_html_e('р.','leocar'); ?></li>
                          <?php } ?>
                      </ul>

                      <fieldset class="py-4 flex flex-wrap gap-[5px] 1100:items-center 1100:order-2">
                          <?php if(in_array(get_field('type')['value'],['comfort','compact']))
                              $add_security_arr = get_field('additional_security_1','options');
                          else $add_security_arr = get_field('additional_security_2','options');
                          $add_security = [];
                          foreach($add_security_arr as $a_s) $add_security[] = ['slug' => $a_s['slug'],'title'=>$a_s['title'],'price_day'=>$a_s['price_day']];
                          ?>
                          <?php foreach($add_security as $key=>$a_s) {?>
                          <div>
                              <input class="hidden" type="radio" id="<?=str_replace('additional-','',$a_s['slug'])?>" name="safety" value="<?=$a_s['slug']?>" data-price="<?=$a_s['price_day']?>" <?=$key==0?'checked':''?> />
                              <label for="<?=str_replace('additional-','',$a_s['slug'])?>" class="flex justify-center items-center block px-3 h-10 rounded-[15px] text-sm cursor-pointer"><?=$a_s['title']?></label>
                          </div>
                          <?php } ?>
                          <span class="show-prices hidden w-9 h-9 rounded-[15px] bg-dark justify-center items-center cursor-pointer 1100:flex">?</span>
                      </fieldset>

                      <div class="mt-4 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 820:w-auto 820:flex 820:justify-start 1100:order-3">
                          <fieldset class="min-w-[546px] flex w-auto bg-car rounded-[15px] 820:w-auto">
                              <?php $arr = get_period_home_prices(explode(PHP_EOL, get_field('home_price')), explode(PHP_EOL, get_field('home_min'))); ?>
                              <?php foreach($arr as $key=>$item) {?>
                              <div>
                                  <input class="hidden" type="radio" id="<?=$item['slug']?>" name="term" value="<?=$item['slug']?>" <?=$key==0?'checked':''?> />
                                  <label for="<?=$item['slug']?>" class="flex justify-center items-center block px-6 h-10 rounded-[15px] text-[12px] whitespace-nowrap cursor-pointer 1100:h-11"><?=$item['period']?></label>
                              </div>
                              <?php } ?>
                          </fieldset>
                      </div>
                  </form>
              </div>
              <div class="car-description mt-8 text-center 1100:mt-20">
                  <?php if(get_field('title_before_description','options')) { ?>
                      <h2><?=get_field('title_before_description','options')?></h2>
                  <?php   } ?>
                  <div class="mt-2.5 text-white/[.7] text-base/[1.4]">
                      <?php the_content(); ?>
                  </div>
              </div>
          </div>
      </section>
      <?php
      if(in_array(get_field('type')['value'],['compact','comfort'])) renderBlock('safety');
      else renderBlock('safety-pro');
      renderBlock('additional-services');
      renderBlock('fines');
      ?>
  </main>

<?php
get_footer();
