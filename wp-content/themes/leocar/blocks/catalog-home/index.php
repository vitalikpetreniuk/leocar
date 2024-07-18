<section id="leo-catalog-home" class="leo-catalog-home relative z-[2] pt-4 pb-4 1100:mt-36">
    <div class="container">
        <?php if(get_field('title')) { ?>
            <h2><?=get_field('title')?></h2>
        <?php   } ?>
        <div class="catalog-sort mt-6 flex flex-col gap-y-1.5 820:flex-row 820:gap-x-5">
            <div class="sort sort-type relative 820:w-[calc(50%-10px)]">
                <div class="relative cursor-pointer flex items-center gap-x-5 py-2.5 px-3.5 rounded-[10px] bg-car box-border border border-transparent after:content-[''] after:absolute after:top-[55%] after:right-4 after:translate-y-[-55%] after:w-2 after:h-2 after:bg-[url('../images/svg/polygon.svg')] after:bg-no-repeat after:bg-contain 1100:rounded-[14px]">
                    <?php if(get_auto_types()) { ?>
                        <?php if(get_auto_types()['type']['image']) { ?>
                            <img class="block w-14 h-auto 1100:w-24" src="<?=get_auto_types()['type']['image']?>" alt="all">
                        <?php   } ?>
                        <div class="text-sm"><?=get_auto_types()['type']['name']?></div>
                    <?php   } ?>
                </div>
                <?php if(get_auto_types()) { ?>
                    <ul class="hidden absolute top-[calc(100%+2px)] w-full z-[5] bg-car/[.97] rounded-[10px] 1100:rounded-[14px]">
                        <?php if(get_auto_types()['type']['image']) { ?>
                            <li class="flex items-center gap-x-5 p-3.5 cursor-pointer active" data-type="all">
                                <img class="block w-14 h-auto 1100:w-24" src="<?=get_auto_types()['type']['image']?>" alt="all">
                                <div class="text-sm"><?=get_auto_types()['type']['name']?></div>
                            </li>
                            <?php foreach(get_auto_types() as $key=>$item) { if($key == 'type') continue; ?>
                                <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-type="<?=$key?>">
                                    <?php if($item['image']) { ?>
                                        <img class="block w-14 h-auto 1100:w-24" src="<?=$item['image']?>" alt="<?=$item['slug']?>">
                                    <?php   } ?>
                                    <div class="flex justify-start items-center gap-x-1.5 text-sm"><?=$item['name']?>
                                        <?php if($item['price']) { ?>
                                            <span class="block mt-[2px] text-[12px] opacity-70"><?php esc_html_e('від','leocar'); ?> <?=$item['price']?> €/<?php esc_html_e('день','leocar'); ?></span>
                                        <?php   } ?>
                                    </div>
                                </li>
                            <?php   } ?>
                        <?php   } ?>
                    </ul>
                <?php   } ?>
            </div>
            <div class="sort sort-model relative 820:w-[calc(50%-10px)]">
                <div class="relative cursor-pointer flex items-center gap-x-5 py-2.5 px-3.5 rounded-[10px] bg-car box-border border border-transparent after:content-[''] after:absolute after:top-[55%] after:right-4 after:translate-y-[-55%] after:w-2 after:h-2 after:bg-[url('../images/svg/polygon.svg')] after:bg-no-repeat after:bg-contain 1100:rounded-[14px]">
                    <?php if(get_auto_models()) { ?>
                        <?php if(get_auto_models()['model']['image']) { ?>
                            <img class="block w-14 h-auto 1100:w-24" src="<?=get_auto_models()['model']['image']?>" alt="all">
                        <?php   } ?>
                        <div class="text-sm"><?=get_auto_models()['model']['name']?></div>
                    <?php   } ?>
                </div>
                <?php if(get_auto_models()) { ?>
                    <ul class="hidden absolute top-[calc(100%+2px)] w-full z-[5] bg-car/[.97] rounded-[10px] 1100:rounded-[14px]">                        <?php if(get_auto_types()['type']['image']) { ?>
                            <li class="flex items-center gap-x-5 p-3.5 cursor-pointer active" data-model="all">
                                <img class="block w-14 h-auto 1100:w-24" src="<?=get_auto_models()['model']['image']?>" alt="all">
                                <div class="text-sm"><?=get_auto_models()['model']['name']?></div>
                            </li>
                            <?php foreach(get_auto_models() as $key=>$item) { if($key == 'model') continue; ?>
                                <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-model="<?=$key?>">
                                    <?php if($item['image']) { ?>
                                        <img class="block w-14 h-auto 1100:w-24" src="<?=$item['image']?>" alt="<?=$item['slug']?>">
                                    <?php   } ?>
                                    <div class="flex justify-start items-center gap-x-1.5 text-sm"><?=$item['name']?></div>
                                </li>
                            <?php   } ?>
                        <?php   } ?>
                    </ul>
                <?php   } ?>
            </div>
        </div>


        <div class="catalog-list mt-11 flex flex-col gap-y-14 768:flex-row 768:flex-wrap 768:gap-x-5">
            <!-- якщо додати клас mechanics для ітема, то виведеться плашка механіки -->
            <?php $args = [
                'post_type' => 'car',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'meta_query' => [
                    ['key' => 'available',
                        'value' => true],
                ]
            ];
            $query = new WP_Query($args);
            if ($query->have_posts())
                while ($query->have_posts()) {
                    $query->the_post();
                    renderComponent('catalog-item-home');
                } ?>
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
                <!--<button class="require-call button mt-7 max-w-none"><?php esc_html_e('Підібрати автомобіль','leocar'); ?></button>-->
            </div>

        </div>
        <button class="show-catalog button button-transparent mt-5 font-400 1024:max-w-[300px] 1024:mx-auto 1100:max-w-[335px]"><?php esc_html_e('Показати все','leocar'); ?></button>
    </div>
</section>
