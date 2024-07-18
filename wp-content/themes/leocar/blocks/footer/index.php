<footer class="mt-28 pt-8 1100:pt-10">
    <div class="container">
        <div class="flex flex-col 1024:flex-row 1024:justify-between 1024:items-center">
            <a href="<?=home_url()?>" class="leo-logo block w-52 1024:w-64">
                <?php renderAssetsSVG('svg/logo'); ?>
            </a>
            <div class="font-400 text-2xl/normal mt-6 1024:mt-0 1024:text-3xl/normal"><?=get_field('slogan','options')?></div>
        </div>
        <div class="flex flex-wrap 1024:mt-8 1024:flex-nowrap">
            <div class="leo-social w-full mt-9 flex 1024:w-2/12 1024:mt-0 1024:flex-wrap">
                <div class="w-1/2 820:w-full">
                    <span class="font-400 uppercase opacity-40"><?php esc_html_e('стежити за нами','leocar'); ?></span>
                    <div class="mm-social mt-2.5">
                        <ul class="flex flex-wrap justify-start items-center gap-2">
                            <?php if(get_field('instagram','options')) { ?>
                                <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('instagram','options')?>"><img src="<?php renderImages('icons/instagram.png'); ?>" alt="instagram"></a></li>
                            <?php   } ?>
                            <?php if(get_field('facebook','options')) { ?>
                                <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('facebook','options')?>"><img src="<?php renderImages('icons/facebook.png'); ?>" alt="facebook"></a></li>
                            <?php   } ?>
                        </ul>
                    </div>
                </div>
                <div class="w-1/2 820:w-full 820:mt-6">
                    <span class="font-400 uppercase opacity-40"><?php esc_html_e('написати нам','leocar'); ?></span>
                    <div class="mm-social mt-2.5">
                        <ul class="flex flex-wrap justify-start items-center gap-2">
                            <?php if(get_field('telegram','options')) { ?>
                                <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('telegram','options')?>"><img src="<?php renderImages('icons/telegram.png'); ?>" alt="telegram"></a></li>
                            <?php   } ?>
                            <?php if(get_field('viber','options')) { ?>
                                <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('viber','options')?>"><img src="<?php renderImages('icons/viber.png'); ?>" alt="viber"></a></li>
                            <?php   } ?>
                            <?php if(get_field('whats_app','options')) { ?>
                                <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('whats_app','options')?>"><img src="<?php renderImages('icons/whatsapp.png'); ?>" alt="whatsapp"></a></li>
                            <?php   } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="quick-links w-full mt-9 1024:w-4/12 1024:mt-0 1024:pl-7 1024:box-border">
                <span class="font-400 uppercase opacity-40"><?php esc_html_e('Послуги','leocar'); ?></span>
                <ul class="mt-4 flex flex-col gap-y-1 1024:gap-y-2 1024:leading-[1.6]">
                    <?php if(get_field('list_items','options'))
                        foreach(get_field('list_items','options') as $item) { ?>
                            <li><a href="<?=$item['button']['url']?>"><?=$item['button']['title']?></a></li>
                        <?php   } ?>
                </ul>
            </div>
            <div class="w-full mt-9 1024:w-1/3 1024:mt-0">
                <span class="font-400 uppercase opacity-40"><?php esc_html_e('Контакти','leocar'); ?></span>
                <ul class="mm-contact mt-4 flex flex-col gap-y-1 1024:gap-y-2 1024:leading-[1.6]">
                    <?php if(get_field('email','options')) { ?>
                    <li><a class="flex justify-start items-center gap-x-2 !text-white" href="mailto:<?=get_field('email','options')?>"><?php renderAssetsSVG('svg/mail-green'); ?><?=get_field('email','options')?></a></li>
                    <?php } ?>
                    <?php if(get_field('email','options')) { ?>
                    <li><a class="flex justify-start items-center gap-x-2 !text-white" href="tel:<?=str_replace([' ','-','(',')'],'',get_field('phone','options'))?>"><?php renderAssetsSVG('svg/phone-green'); ?><?=get_field('phone','options')?></a></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="w-full mt-6 1024:w-1/3 1024:mt-0  1024:leading-[1.6]">
                <span class="font-400 uppercase opacity-40"><?php esc_html_e('Адреса','leocar'); ?></span>
                <div class="mt-4 pl-5 bg-[url('../images/svg/pin-green.svg')] bg-no-repeat  bg-[left_4px] font-400"><p><?=get_field('address_3','options')?></p></div>
                <div class="payment-svg mt-2 opacity-70 1024:ml-6"><?php renderAssetsSVG('svg/payment'); ?></div>
            </div>
        </div>
    </div>
    <div class="bg-black mt-9 pt-6 pb-5 1024:py-1 1100:mt-14">
        <div class="container flex flex-col gap-y-5 1024:flex-row 1024:items-center">
            <ul class="opacity-70 flex flex-col gap-y-2 1024:order-2 1024:w-4/12 1024:mt-0 1024:flex-row 1024:justify-end 1024:gap-x-4 1100:gap-x-8">
                <?php if(get_field('button_1','options')['title']&&get_field('button_1','options')['url']) { ?>
                    <li class="1024:text-sm/[1.4] 1100:text-base/[1.4]"><a class="" target="<?=get_field('button_1','options')['title']?>" href="<?=get_field('button_1','options')['url']?>"><?=get_field('button_1','options')['title']?></a></li>
                <?php   } ?>
                <?php if(get_field('button_2','options')['title']&&get_field('button_2','options')['url']) { ?>
                    <li class="1024:text-sm/[1.4] 1100:text-base/[1.4]"><a class="" target="<?=get_field('button_2','options')['title']?>" href="<?=get_field('button_1','options')['url']?>"><?=get_field('button_2','options')['title']?></a></li>
                <?php   } ?>
            </ul>
            <div class="opacity-70 1024:order-0 1024:w-4/12 1024:text-sm/[1.4] 1100:text-base/[1.4]"><?=str_replace('{year}',date('Y'),get_field('copyright','options'))?>
            </div>
            <div class="nine 1024:text-center 1024:order-1 1024:w-4/12 1024:mt-0"><a class="inline-block 1024:p-4 1024:pb-3" href="#" target="_blank"><?php renderAssetsSVG('svg/nine'); ?></a></div>
        </div>
    </div>
</footer>

<div id="leo-modals" class="invisible opacity-0 transition duration-100 fixed top-0 left-0 w-full h-full z-[20] bg-[rgba(0,0,0,.31)] blur-25">
    <div class="modal call invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>

        <h2>Замовити консультацію</h2>
        <?php echo do_shortcode( '[contact-form-7 id="82c8cc3" title="Замовити консультацію"]' ); ?>
    </div>
    <div class="modal drive invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>

        <h2>Замовити тест-драйв</h2>
        <?php echo do_shortcode( '[contact-form-7 id="acc4068" title="Замовити тест-драйв"]' ); ?>
    </div>

    <div class="modal thanks invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <h2 class="text-center">Дякуємо за Ваш запит!</h2>
        <span class="block mt-1 text-center">Наш менеджер зв’яжеться з вами найближчим часом</span>
    </div>
</div>
