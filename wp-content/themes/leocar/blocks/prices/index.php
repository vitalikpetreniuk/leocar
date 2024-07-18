<?php $periods_home = get_periods_home(); ?>
<section class="leo-prices pt-12 1100:pt-20">
    <div class="prices-mobile 1100:hidden">
        <?php $args = [
            'post_type' => 'car',
            'post_status' => 'publish'
        ];
        $query = new WP_Query($args);
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post(); ?>
                <div class="px-5 py-4">
                    <div><?=get_the_title(get_the_id())?></div>
                    <?php
                            $prices = explode(PHP_EOL,get_field('home_price', get_the_id()));
                            $old_prices = explode(PHP_EOL,get_field('home_price_old', get_the_id()));
                            $min = explode(PHP_EOL,get_field('home_min', get_the_id()));
                            if(get_period_home_prices($prices, $min, $old_prices)) { ?>
                    <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0">
                        <ul class="terms min-w-[546px] flex w-auto bg-car rounded-[15px]">
                            <?php foreach(get_period_home_prices($prices, $min, $old_prices) as $key=>$p_h) { ?>
                                <li class="px-2 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] <?=$key==0?'active':''?>" data-price="<?=$p_h['price']?>" data-old-price="<?=$p_h['old_price']?>"><?=$p_h['period']?></li>
                            <?php   } ?>

                        </ul>
                    </div>
                    <div class="price discount mt-2.5 text-[24px] font-700 text-white flex items-baseline gap-x-1"><span>33</span> €<span class="old-price font-400 text-sm text-[#999999] line-through"><span><?=get_period_home_prices($prices, $min, $old_prices)[0]['price']?></span> €</span></div>
                    <a href="<?php the_permalink(get_the_id())?>" class="mt-2 button bg-transparent border border-accent text-accent w-[160px]"><?php esc_html_e('Забронювати','leocar'); ?></a>
                    <?php   } ?>
                </div>
            <?php     }
        }
        ?>
    </div>
    <div class="prices-desktop hidden 1100:block">
        <div class="container">
            <div class="table-header flex items-center py-4">
                <div class="w-2/12"></div>
                <div class="flex-grow flex">
                    <?php foreach($periods_home as $key=>$p_h) { $label = explode(' : ',$p_h)[1]?explode(' : ',$p_h)[1]:'';
                        if($key == count($periods_home)-1) $label = explode(' – ', $label)[0].'+ '.esc_html__('днів','leocar');?>
                    <div class="w-[20%] flex-grow text-white flex gap-x-1"><?=$label?></div>
                    <?php   } ?>
                </div>
                <div class="w-[160px]"></div>
            </div>
            <?php $args = [
                'post_type' => 'car',
                'post_status' => 'publish'
            ];
            $query = new WP_Query($args);
            if ($query->have_posts())
            while ($query->have_posts()) {
            $query->the_post(); ?>

            <div class="flex items-center py-4">
                <div class="w-2/12"><?=get_the_title(get_the_id())?></div>
                <div class="flex-grow flex">
                    <?php
                    $prices = explode(PHP_EOL,get_field('home_price', get_the_id()));
                    $old_prices = explode(PHP_EOL,get_field('home_price_old', get_the_id()));
                    $min = explode(PHP_EOL,get_field('home_min', get_the_id()));
                    if(get_period_home_prices($prices, $min, $old_prices)) foreach(get_period_home_prices($prices, $min, $old_prices) as $p_h) { ?>
                    <div class="price w-[20%] flex-grow discount text-xl font-700 text-white flex items-baseline gap-x-1">
                        <?php if($p_h['price']) { ?>
                            <span><?=$p_h['price']?></span> €
                        <?php   } ?>
                        <?php if($p_h['old_price']) { ?>
                            <span class="old-price font-400 text-sm text-[#999999] line-through"><span><?=$p_h['old_price']?></span> €</span>
                        <?php   } ?>
                    </div>
                    <?php   } ?>
                </div>
                <a href="<?php the_permalink(get_the_id());?>" class="button w-[160px] bg-transparent border border-accent text-accent hover:bg-accent hover:text-white">Забронювати</a>
            </div>
            <?php   } ?>

        </div>
    </div>
</section>