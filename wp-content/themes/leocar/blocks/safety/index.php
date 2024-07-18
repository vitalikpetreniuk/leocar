<section class="leo-safety pt-16 1100:pt-20">
    <div class="container">
        <?php if(get_field('title')) { ?>
            <h3 class="text-center 1100:!text-2xl"><?=get_field('title')?></h3>
        <?php   } ?>
        <?php if(get_field('text')) { ?>
            <div class="text-center text-sm 1100:text-base 1100:max-w-[45%] 1100:mx-auto">
                <?=get_field('text')?>
            </div>
        <?php   } ?>
        <div class="mt-5 1100:mt-9">
            <div class="flex flex-col gap-y-2.5 768:flex-row 768:flex-wrap 768:justify-center 768:gap-5 1100:flex-nowrap">
                <?php if(get_field('additional_security_1','options')) foreach(get_field('additional_security_1','options') as $tarif)  { ?>
                    <div class="safety-<?=$tarif['slug']?> rounded-[15px] 768:w-[calc(50%-10px)] 1100:w-[calc(33.333%-7px)]">
                        <div class="safety-header pt-5 pb-4 px-6 rounded-t-[15px]">
                            <span class="text-sm font-700"><?=$tarif['title']?></span>
                            <div class="flex justify-start items-center gap-x-3.5">
                                <div class="text-sm"><span class="inline-block text-2xl font-700 mr-1.5"><?=$tarif['price_day']?>€</span><?php esc_html_e('доба','leocar'); ?></div>
                                <?php if($tarif['price_month']) { ?>
                                    <div class="mt-[3px] pt-px px-1.5 h-6 box-border rounded-[5px] text-[12px]"><span class="inline-block text-sm font-700 mr-1.5"><?=$tarif['price_month']?>€</span><?php esc_html_e('місяць','leocar'); ?></div>
                                <?php   } ?>
                            </div>
                            <div>

                            </div>

                        </div>
                        <div class="safety-list pt-2 px-5 pb-4 bg-dark rounded-b-[15px]">
                            <?php if($tarif['list_items']) foreach($tarif['list_items'] as $item)  { ?>
                                <div class="py-2 flex justify-between items-center relative">
                                    <span><?=$item['title']?></span>
                                    <span><?=$item['value']?><?=$item['type']=='price'?'€':''?></span>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>