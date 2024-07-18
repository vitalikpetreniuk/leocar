<section class="leo-intro-main relative h-[100svh] pt-[105px] box-border 1024:h-auto 1024:pt-[120px]">
    <picture class="absolute top-0 left-0 block w-full 1024:top-[115px] 1024:left-0 1024:right-0 1024:h-full">
        <source srcset="<?php renderImages('intro.png'); ?>" media="(min-width:1024px)" />
        <img src="<?php renderImages('intro-mobile.png') ?>" alt="intro" class="block 1024:w-auto 1024:h-[90%] 1024:float-right" />
    </picture>
    <div class="container">
        <div class="swiper">
            <div class="swiper-wrapper 1024:items-end 1024:gap-x-10 1280:gap-x-16">
                <div class="swiper-slide px-5 h-[calc(100svh-105px)] flex items-center 1024:h-auto 1024:px-0 1024:w-[calc(50%-20px)] 1024:order-2 1100:w-[calc(50%-35px)]">
                    <div class="1024:pb-10">
                        <span class="flex gap-x-2.5 items-center"><?php renderAssetsSVG('svg/clock'); ?>Пн-Нд 09:00 - 20:00</span>
                        <?php if(get_field('title')) { ?>
                            <h2 class="mt-1 !text-left 768:!text-[35px]"><?=get_field('title')?></h2>
                        <?php   } ?>
                        <?php if(get_field('text')) { ?>
                        <div class="mt-6 flex flex-col gap-y-5 768:mt-3">
                            <?=get_field('text')?><?php   } ?>
                        </div>
                        <?php if(get_field('button_title')) { ?>
                            <button class="mt-6 require-call button mt-4 max-w-none 768:mt-6 768:max-w-[272px]"><?=get_field('button_title')?></button>
                        <?php   } ?>
                    </div>
                </div>
                <div class="swiper-slide px-5 h-[calc(100svh-105px)] flex items-center 1024:pt-[110px] 1024:h-auto 1024:px-0 1024:w-[calc(50%-20px)] 1024:order-1 1100:w-[calc(50%-35px)]">
                    <div class="form-slide 768:w-full 768:max-w-[70%] 768:mx-auto 1024:max-w-none 1024:!pb-11">
                        <?php if(get_field('form_title')) { ?>
                            <h3 class="768:!text-2xl"><?=get_field('form_title')?></h3>
                        <?php   } ?>
                        <?php

                        $classes = [
                            'name_class' => '768:!w-[calc(50%-10px)]',
                            '{class_2}' => 'w-full 768:w-[calc(50%-10px)]',
                            '{class_3}' => 'hidden absolute z-[2] top-[100%] left-0 right-0 bg-black flex flex-col text-sm',
                            '{class_4}' => 'relative select-none cursor-pointer block pl-5 py-2 text-white/[.7] text-[12px] 768:text-sm 1024:pl-6',
                            '{class_5}' => 'hidden absolute z-[2] top-[100%] left-0 right-0 bg-black flex flex-col text-sm',
                            '{class_6}' => 'block leading-[1]',
                            '{class_7}' => 'flex justify-center items-center h-9 w-16 bg-[#000000]/[.3] rounded-[40px] cursor-pointer',
                            '{class_8}' => 'hidden absolute z-[2] top-[calc(100%+4px)] rounded-[2px] left-0 right-0 bg-black flex-col justify-center',
                            '{class_9}' => 'hidden absolute top-[100%] right-0 bottom-0 text-[12px] text-accent 768:left-0 768:right-auto 768:top-[calc(100%-4px)]',
                            '{class_10}' => 'block leading-[1]',
                            '{class_11}' => 'flex justify-center items-center h-9 w-16 bg-[#000000]/[.3] rounded-[40px] cursor-pointer',
                            '{class_12}' => 'hidden absolute z-[2] top-[calc(100%+4px)] rounded-[2px] left-0 right-0 bg-black flex-col justify-center',
                            '{class_13}' => 'hidden absolute top-[100%] right-0 bottom-0 text-[12px] text-accent 768:left-0 768:right-auto 768:top-[calc(100%-4px)]',
                        ];
                        $receive_places = '<option value=""> - '.__('Оберіть місце посадки','leocar').' - </option>';
                        $receive_places_price = '';
                        if(get_field('landing_locations','options'))
                            foreach(get_field('landing_locations','options') as $item) {
                                $receive_places .= '<option value="' . $item['slug'] . '">' . $item['name'] . '</option>';
                                $receive_places_price .= '<li class="p-2" data-value="'.$item['slug'].'">'.$item['name'].($item['price']?'<span class="inline-block pl-1.5 text-accent">+'.$item['price'].'<span class="currency-symbol">€</span></span>':'').'</li>';
                            }
                        $return_places = '<option value=""> - '.__('Оберіть місце посадки','leocar').' - </option>';
                        $return_places_price = '';
                        if(get_field('return_locations','options'))
                            foreach(get_field('return_locations','options') as $item) {
                                $return_places .= '<option value="' . $item['slug'] . '">' . $item['name'] . '</option>';
                                $return_places_price .= '<li class="p-2" data-value="'.$item['slug'].'">'.$item['name'].($item['price']?'<span class="inline-block pl-1.5 text-accent">+'.$item['price'].'<span class="currency-symbol">€</span></span>':'').'</li>';
                            }
                        $open_hours = '';
                        $open_hours_li = '';
                        if(get_field('open_hours','options'))
                            foreach(explode(PHP_EOL,get_field('open_hours','options')) as $hour) {
                                $open_hours_li .= '<li data-value="' . $hour . '">' . $hour . '</li>';
                                $open_hours .= '<option value="' . $hour . '">' . $hour . '</option>';
                            }
                        $data = [
                            '{receive_places}' => $receive_places,
                            '{receive_places_price}' => $receive_places_price,
                            '{return_places}' => $return_places,
                            '{return_places_price}' => $return_places_price,
                            '{open_hours}' => $open_hours,
                            '{open_hours_li}' => $open_hours_li
                        ];
                        ?>
                        <form class="priceForm mt-2" action="<?=home_url()?>/catalog/" method="post">
                            <div class="768:flex 768:gap-x-5 768:items-end">
                                <input class="768:!w-[calc(50%-10px)]" type="text" placeholder="<?php esc_html_e('Ім\'я','leocar'); ?>" name="your-name" required>
                                <input class="w-full 768:w-[calc(50%-10px)]" id="billing-phone" name="phone" type="tel" value="" />
                                <input id="billing-phone-dub" class="!hidden" name="phone-dub" type="tel" value="" />
                            </div>

                            <div class="choose-receive empty">
                                <select name="receive-place" id="receive-place">
                                    <?=$receive_places?>
                                </select>

                                <span class="cursor-pointer"> - <?php esc_html_e('Оберіть місце посадки','leocar'); ?> - </span>
                                <ul class="hidden absolute z-[2] top-[100%] left-0 right-0 bg-black flex flex-col text-sm">
                                    <?=$receive_places_price?>
                                </ul>
                            </div>
                            <div>
                                <input class="!hidden" type="checkbox" id="change-return" name="change-return">
                                <label for="change-return" class="relative select-none cursor-pointer block pl-5 py-2 text-white/[.7] text-[12px] 768:text-sm 1024:pl-6">Інше місце повернення</label>
                            </div>


                            <div class="hidden choose-return empty">
                                <select name="return-place" id="return-place">
                                    <?=$return_places?>
                                </select>
                                <span class="cursor-pointer"> - <?php esc_html_e('Оберіть місце повернення','leocar'); ?> - </span>
                                <ul class="hidden absolute z-[2] top-[100%] left-0 right-0 bg-black flex flex-col text-sm">
                                    <?=$return_places_price?>
                                </ul>
                            </div>

                            <div class="date-time mt-3 flex flex-col gap-y-5">
                                <div class="relative flex justify-between 768:items-center">
                                    <span class="block leading-[1]"><?php esc_html_e('Дата та час видачі','leocar'); ?></span>
                                    <div class="flex justify-end items-start gap-x-1">
                                        <div><input type="text" placeholder="__/__/____" name="receive-date" id="receive-date" required></div>
                                        <select name="receive-time" id="receive-time">
                                            <?=$open_hours?>
                                        </select>
                                        <div class="relative">
                                            <span class="flex justify-center items-center h-9 w-16 bg-[#000000]/[.3] rounded-[40px] cursor-pointer">__:__</span>
                                            <ul class="hidden absolute z-[2] top-[calc(100%+4px)] rounded-[2px] left-0 right-0 bg-black flex-col justify-center">
                                                <div>
                                                    <?=$open_hours_li?>
                                                </div>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="absolute top-[100%] right-0 bottom-0 text-[12px] text-accent 768:left-0 768:right-auto 768:top-[calc(100%-4px)]">+30€ <?php esc_html_e('За видачу в неробочий час','leocar'); ?></span>
                                </div>
                                <div class="relative flex justify-between 768:items-center">
                                    <span class="block leading-[1]"><?php esc_html_e('Дата та час повернення','leocar'); ?></span>
                                    <div class="flex justify-end items-start gap-x-1">
                                        <div><input type="text" placeholder="__/__/____" name="return-date" id="return-date" required></div>
                                        <select name="return-time" id="return-time">
                                            <?=$open_hours?>
                                        </select>
                                        <div class="relative">
                                            <span class="flex justify-center items-center h-9 w-16 bg-[#000000]/[.3] rounded-[40px] cursor-pointer">__:__</span>
                                            <ul class="hidden absolute z-[2] top-[calc(100%+4px)] rounded-[2px] left-0 right-0 bg-black flex-col justify-center">
                                                <div>
                                                    <?=$open_hours_li?>
                                                <div>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="absolute top-[100%] right-0 bottom-0 text-[12px] text-accent 768:left-0 768:right-auto 768:top-[calc(100%-4px)]">+30€ <?php esc_html_e('За повернення в неробочий час','leocar'); ?></span>
                                </div>
                            </div>
                            <input type="hidden" name="send_main_form" value="1" />
                            <input class="!mt-10" type="submit" value="<?php esc_html_e('Забронювати авто','leocar'); ?>">
                        </form>
                        <!--<?=str_replace(array_keys($classes),array_values($classes),do_shortcode('[contact-form-7 id="b2d31da" title="Форма розрахунку вартості" html_class="priceForm mt-2"]'))?>-->
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination 1024:!hidden"></div>

            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev 1024:!hidden"><?php renderAssetsSVG('svg/prev'); ?></div>
            <div class="swiper-button-next 1024:!hidden"><?php renderAssetsSVG('svg/next'); ?></div>
        </div>
    </div>
</section>