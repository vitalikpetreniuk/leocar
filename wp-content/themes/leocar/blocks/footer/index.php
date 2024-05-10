<footer class="mt-28 pt-8 1100:pt-10">
    <div class="container">
        <div class="flex flex-col 1024:flex-row 1024:justify-between 1024:items-center">
            <a href="<?=home_url()?>" class="leo-logo block w-52 1024:w-64">
                <?php echo file_get_contents(get_field('logo','options')); ?>
            </a>

            <div class="font-400 text-2xl/normal mt-6 1024:mt-0 1024:text-3xl/normal"><?=get_field('slogan','options')?></div>
        </div>
        <div class="flex flex-wrap 1024:mt-8 1024:flex-nowrap">
            <div class="leo-social w-full mt-9 1024:w-1/3 1024:mt-0">
                <span class="font-700 uppercase"><?php esc_html_e('Соціальні мережі','leocar'); ?></span>
                <div class="mm-social mt-4">
                    <ul class="flex justify-start items-center gap-x-3.5">
                        <?php if(get_field('telegram','options')) { ?>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('telegram','options')?>"><img src="<?php renderImages('icons/telegram.png'); ?>" alt="telegram"></a></li>
                        <?php   } ?>
                        <?php if(get_field('instagram','options')) { ?>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('instagram','options')?>"><img src="<?php renderImages('icons/instagram.png'); ?>" alt="instagram"></a></li>
                        <?php   } ?>
                        <?php if(get_field('viber','options')) { ?>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('viber','options')?>"><img src="<?php renderImages('icons/viber.png'); ?>" alt="viber"></a></li>
                        <?php   } ?>
                        <?php if(get_field('facebook','options')) { ?>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('facebook','options')?>"><img src="<?php renderImages('icons/facebook.png'); ?>" alt="facebook"></a></li>
                        <?php   } ?>
                        <?php if(get_field('whats_app','options')) { ?>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('whats_app','options')?>"><img src="<?php renderImages('icons/whatsapp.png'); ?>" alt="whatsapp"></a></li>
                        <?php   } ?>
                    </ul>
                </div>
            </div>
            <div class="w-5/12 mt-9 1024:w-1/3 1024:mt-0 1024:pl-7 1024:box-border">
                <span class="font-700 uppercase"><?php esc_html_e('Quick links','leocar'); ?></span>
                <ul class="mt-4 opacity-70 flex flex-col gap-y-1 1024:gap-y-2 1024:leading-[1.6]">
                    <?php if(get_field('list_items','options')) foreach(get_field('list_items','options') as $item)  { ?>
                        <li>
                            <?php if($item['button']['title']&&$item['button']['url']) { ?>
                                <a class="hover:opacity-70" target="<?=$item['button']['title']?>" href="<?=$item['button']['url']?>"><?=$item['button']['title']?></a>
                            <?php   } ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <div class="w-7/12 mt-9 1024:w-1/3 1024:mt-0">
                <span class="font-700 uppercase"><?php esc_html_e('Контакты','leocar'); ?></span>
                <ul class="mm-contact mt-4 opacity-70 flex flex-col gap-y-1 1024:gap-y-2 1024:leading-[1.6]">
                    <li><a class="flex justify-start items-center gap-x-2 hover:text-white/[.7]" href="mailto:<?=get_field('email','options')?>"><?php renderAssetsSVG('svg/mail'); ?><?=get_field('email','options')?></a></li>
                    <li><a class="flex justify-start items-center gap-x-2 hover:text-white/[.7]" href="tel:<?=str_replace(['(',')','-',' '],'',get_field('phone','options'))?>"><?php renderAssetsSVG('svg/call'); ?><?=get_field('phone','options')?></a></li>
                </ul>
                <div class="mt-2"><?php renderAssetsSVG('svg/payment'); ?></div>
            </div>
            <div class="w-full mt-6 1024:w-1/3 1024:mt-0  1024:leading-[1.6]">
                <span class="font-700 uppercase"><?php esc_html_e('Адреса','leocar'); ?></span>
                <div class="mt-4 pl-6 bg-[url('../images/svg/pin.svg')] bg-no-repeat bg-[left_4px]"><p class="opacity-70"><?=get_field('address','options')?></p></div>
            </div>
        </div>
    </div>
    <div class="bg-black mt-9 pt-6 pb-5 1024:py-1 1100:mt-14">
        <div class="container 1024:flex 1024:items-center">
            <div class="opacity-70 1024:order-0 1024:w-4/12 1024:text-sm/[1.4] 1100:text-base/[1.4]"><?=str_replace('{year}',date('Y'),get_field('copyright','options'))?></div>
            <ul class="mt-5 opacity-70 flex flex-col gap-y-2 1024:order-2 1024:w-4/12 1024:mt-0 1024:flex-row 1024:justify-end 1024:gap-x-4 1100:gap-x-8">
                <li class="1024:text-sm/[1.4] 1100:text-base/[1.4]">
                    <?php if(get_field('button_1','options')['title']&&get_field('button_1','options')['url']) { ?>
                        <a class="" target="<?=get_field('button_1','options')['title']?>" href="<?=get_field('button_1','options')['url']?>"><?=get_field('button_1','options')['title']?></a>
                    <?php   } ?>
                </li>
                <li class="1024:text-sm/[1.4] 1100:text-base/[1.4]">
                    <?php if(get_field('button_2','options')['title']&&get_field('button_2','options')['url']) { ?>
                        <a class="" target="<?=get_field('button_2','options')['title']?>" href="<?=get_field('button_2','options')['url']?>"><?=get_field('button_2','options')['title']?></a>
                    <?php   } ?>
                </li>
            </ul>
            <div class="nine mt-7 text-center 1024:order-1 1024:w-4/12 1024:mt-0"><a class="inline-block p-4 1024:pb-3" href="<?=get_field('developer','options')?>" target="_blank"><?php renderAssetsSVG('svg/nine'); ?></a></div>
        </div>
    </div>
</footer>

<div id="leo-modals" class="invisible opacity-0 transition duration-100 fixed top-0 left-0 w-full h-full z-[20] bg-[rgba(0,0,0,.31)] blur-25">
    <div class="modal call invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>
        <?php if(get_field('consultation','options')['title']) { ?>
            <h2><?=get_field('consultation','options')['title']?></h2>
        <?php } ?>
        <?php echo do_shortcode( get_field('consultation','options')['form']); ?>
    </div>
    <div class="modal drive invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>

        <?php if(get_field('testdrive','options')['title']) { ?>
            <h2><?=get_field('testdrive','options')['title']?></h2>
        <?php } ?>
        <?php echo do_shortcode( get_field('testdrive','options')['form']); ?>
    </div>

    <div class="modal thanks invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close-thanks cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="0.707031" width="20" height="1" rx="0.5" transform="rotate(45 0.707031 0)" fill="#FAFAFA"></rect>
                <rect y="14.1421" width="20" height="1" rx="0.5" transform="rotate(-45 0 14.1421)" fill="#FAFAFA"></rect>
            </svg>
        </div>
        <?php if(get_field('thank','options')['title']) { ?>
            <h2 class="text-center"><?=get_field('thank','options')['title']?></h2>
        <?php } ?>
        <span class="block mt-1 text-center"><?=get_field('thank','options')['text']?></span>
    </div>
    <div class="modal conditions invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[862px] translate-y-[-50%] form-bg mt-[60px] px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>
        <?php if(get_field('conditions','options')['title']) { ?>
            <h2><?=get_field('conditions','options')['title']?></h2>
        <?php } ?>
        <div class="mt-4 h-[100svh] max-h-[calc(100svh-360px)] scrollbar-hide">
            <?=get_field('conditions','options')['text']?>
        </div>
    </div>
</div>