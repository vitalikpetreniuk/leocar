<?php $colors = get_field('colors',get_the_id()); ?>
<div data-product="<?=get_the_title().' '.get_field('volume',get_the_id()).', '.get_field('fuel',get_the_id())?>" class="<?=get_field('transmission',get_the_id())?get_field('transmission',get_the_id())['value']:''?> catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-type="<?=get_field('type', get_the_id())['value']?>" data-model="<?=get_field('model', get_the_id())?>">
    <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
        <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?=get_field('drive',get_the_id())?> <?php esc_html_e('привід','leocar'); ?></span>
        <div class="gear absolute z-[5] -top-5 right-4">
            <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?><?php esc_html_e('Автомат','leocar'); ?></span>
            <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?><?php esc_html_e('Механіка','leocar'); ?></span>
        </div>
        <div class="flip-card-inner rounded-2xl cursor-pointer">
            <div class="flip-card-front overflow-hidden rounded-2xl px-4">
                <div>
                    <?php if(has_post_thumbnail(get_the_id())) { ?>
                        <img class="relative z-[2] block" src="<?=get_the_post_thumbnail_url(get_the_id(), 'full')?>" alt="<?=get_the_title()?>">
                    <?php   } ?>
                    <?php if(get_field('hover_image',get_the_id())) { ?>
                        <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?=get_field('hover_image',get_the_id()); ?>" alt="<?=get_the_title()?>-hover">
                    <?php   } ?>
                </div>

                <?php if($colors) { ?>
                    <div class="absolute z-[2] right-5 bottom-5 colors flex justify-end items-center gap-x-2.5">
                        <?php foreach($colors as $color) { ?>
                            <div class="w-4 h-4 border border-white rounded-full indent-[-9999px]" style="background:<?=$color['color']?>"><?=$color['color']?></div>
                        <?php   } ?>
                    </div>
                <?php   } ?>
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
    <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
        <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
            <?php $arr = get_period_home_prices(explode(PHP_EOL, get_field('home_price', get_the_id())), explode(PHP_EOL, get_field('home_min', get_the_id()))); ?>
            <?php foreach($arr as $key=>$p_price) {  ?>
                <li class="<?=($key==0?'active':'')?> px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[<?=($key == count($arr)-1?'24':19)?>%] 1024:justify-center 1024:px-0" data-price="<?=(int)$p_price['price']?number_format($p_price['price'],0,'',' '):''?>"  data-deposit="<?=$p_price['min']?>"><?=$p_price['period']?></li>
            <?php   } ?>
        </ul>
    </div>
    <div class="flex justify-between items-baseline">
        <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><?=(int)$arr[0]['price']?'<span class="amount">'.$arr[0]['price'].'</span> €</span>/'.esc_html__('день','leocar'):''?></div>
        <span class="deposit text-sm"><?=(int)$arr[0]['min']?esc_html__('мін. внесок','leocar').' - <span>'.$arr[0]['min'].'</span> €':''?></span>
    </div>
</div>