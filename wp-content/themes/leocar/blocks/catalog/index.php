<section id="leo-catalog" class="leo-catalog relative z-[2] mt-32 pt-4 pb-4 1100:mt-36">
    <div class="container">
        <h2><?php esc_html_e('Каталог автомобілів','leocar'); ?></h2>
        <div class="catalog-list mt-11 flex flex-col gap-y-14 768:flex-row 768:flex-wrap 768:gap-x-5">
            <!-- якщо додати клас mechanics для ітема, то виведеться плашка механіки -->
            <?php $args = [
                'post_type' => 'car',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'meta_query' => [
                        ['key' => 'available',
                         'value' => true]
                ]
            ];
            $query = new WP_Query($args);
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    if(!in_array('Rent',get_field('visibility',get_the_id()))) continue;
                    ?>
                    <?php $colors = get_field('colors',get_the_id()); ?>
                    <div data-product="<?=get_the_title().' '.get_field('volume',get_the_id()).', '.get_field('fuel',get_the_id())?>" class="<?=get_field('transmission',get_the_id())?get_field('transmission',get_the_id())['value']:''?> catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                        <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                            <!-- може бути передній привід або задній привід -->
                            <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?=get_field('drive',get_the_id())?> <?php esc_html_e('привід','leocar'); ?></span>
                            <div class="gear absolute z-[5] -top-5 right-4">
                                <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?><?php esc_html_e('Автомат','leocar'); ?></span>
                                <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?><?php esc_html_e('Механіка','leocar'); ?></span>
                            </div>

                            <div class="flip-card-inner rounded-2xl cursor-pointer">
                                <div class="flip-card-front rounded-2xl px-4">
                                    <div>
                                    <?php if(has_post_thumbnail(get_the_id())) { ?>
                                    <img class="relative z-[2] block" src="<?=get_the_post_thumbnail_url(get_the_id(), 'full')?>" alt="<?=get_the_title()?>">
                                    <?php   } ?>
                                    <?php if(get_field('hover_image',get_the_id())) { ?>
                                    <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?=get_field('hover_image',get_the_id()); ?>" alt="<?=get_the_title()?>-hover">
                                    <?php   } ?>
                                    </div>
                                    <div class="absolute z-[2] right-5 bottom-5 colors flex justify-end items-center gap-x-2.5">
                                        <?php if($colors) foreach($colors as $color) { ?>
                                        <div class="w-4 h-4 border border-white rounded-full indent-[-9999px]" style="background:<?=$color['color']?>;"><?=$color['color']?></div>
                                        <?php   } ?>
                                    </div>
                                </div>
                                <div class="flip-card-back rounded-2xl">
                                    <div>
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                            <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?><?=get_field('volume', get_the_id())?>, <?=get_field('fuel', get_the_id())?></span>
                            <span class="text-small text-white/[.7]"><?=get_field('year',get_the_id())?> р.</span>
                        </div>
                        <h4 class="font-700 my-4 1100:my-2.5"><?=get_the_title()?></h4>
                        <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                            <?php $arr = get_period_prices(explode(PHP_EOL,get_field('rent_price', get_the_id()))); ?>
                            <?php foreach($arr as $key=>$p_price) { ?>
                                <li class="<?=($key==0?'active':'')?> w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="<?=(int)$p_price['price']?number_format($p_price['price'],0,'',' '):''?>"><?=$p_price['period']?></li>
                            <?php   } ?>
                        </ul>
                        <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> €</span>/<?php esc_html_e('місяць','leocar'); ?></div>
                        <button class="test-drive button mt-2 max-w-none"><?php esc_html_e('Замовити тест-драйв','leocar'); ?></button>
                    </div>
                <?php }
            }
            ?>
            <div class="catalog-item catalog-item-require 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="relative flex flex-wrap items-center justify-center px-4 bg-car rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <img class="relative z-[2] block" src="<?php renderImages('cars/car-none.png'); ?>" alt="">
                </div>
                <?php if(get_field('empty_card_title','options')) { ?>
                    <h4 class="font-700 mt-7 1100:mt-3.5 1100:pt-1"><?=get_field('empty_card_title','options')?></h4>
                <?php   } ?>
                <div class="info mt-5 opacity-70">
                    <?=get_field('empty_card_text','options')?>
                </div>
                <button class="require-call button mt-7 max-w-none"><?php esc_html_e('Підібрати автомобіль','leocar'); ?></button>
            </div>
        </div>
        <button class="show-catalog button button-transparent mt-2.5 font-400 1024:max-w-[300px] 1024:mx-auto 1100:max-w-[335px]"><?php esc_html_e('Показати все','leocar'); ?></button>
    </div>
</section>
<script>
    jQuery('.test-drive').on('click', function()    {
        var product = jQuery(this).parent().data('product');
        jQuery('.modal.drive form input.product').val(product);
    });
</script>