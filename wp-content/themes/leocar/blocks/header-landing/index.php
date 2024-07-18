<header class="header-landing fixed top-0 left-0 w-full">
    <?php if(get_field('announce_text','options')||get_field('zsu_text','options')) { ?>
        <div class="relative z-10 leo-announcement bg-white py-1.5">
            <div class="container relative max-w-[85rem]">
                <?php if(get_field('zsu_text','options')) { ?>
                <div class="hidden absolute top-[50%] left-3 translate-y-[-50%] 768:block">
                    <p class="relative text-black text-[14px] pl-6 before:absolute before:top-[50%] before:left-0 before:translate-y-[-50%] before:w-5 before:h-3 before:bg-[url(../images/icons/ua-flag.svg)] before:bg-cover before:bg-no-repeat before:bg-center"><?=get_field('zsu_text','options')?></p>
                </div>
                <?php } ?>
                <span class="block font-400 text-xs leading-5 text-black text-center 1100:text-sm 1100:leading-6"><?=get_field('announce_text','options')?></span>
                <div class="close absolute top-0 right-0 h-full aspect-square cursor-pointer flex justify-center items-center"><?php renderAssetsSVG('svg/close'); ?></div>
            </div>
        </div>
    <?php } ?>
    <div class="relative bg-[rgba(64,64,64,.2)] blur-25 z-30">
        <div class="container max-w-[85rem]">
            <div class="flex items-center gap-1 px-1.5 py-3.5 1024:py-4">
                <div class="grow shrink basis-[auto]">
                    <a href="<?=home_url()?>" class="leo-logo inline-block h-11 1024:h-14">
                        <img src="<?= get_field('logo','options'); ?>" alt="">
                    </a>
                </div>
                <div class="flex items-center gap-1 1024:gap-8">
                    <?php if(get_field('address_2','options')) { ?>
                        <a class="flex items-center gap-2" href="#">
                            <div class="w-7 h-7 1024:w-5 1024:h-5">
                                <img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-location.png" alt="">
                            </div>
                            <p class="hidden text-body text-[15px] 1024:block"><?=get_field('address_2','options')?></p>
                        </a>
                    <?php   } ?>
                    <?php if(get_field('email','options')) { ?>
                        <a class="flex items-center gap-2" href="mailto:<?=get_field('email','options')?>">
                            <div class="w-7 h-7 1024:w-5 1024:h-5">
                                <img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-mail.png" alt="">
                            </div>
                            <p class="hidden text-body text-[15px] 1024:block"><?=get_field('email','options')?></p>
                        </a>
                    <?php   } ?>
                    <?php if(get_field('phone','options')) { ?>
                        <a class="flex items-center gap-2" href="tel:<?=str_replace([' ','-','(',')'],'',get_field('phone','options'))?>">
                            <div class="w-7 h-7 1024:w-5 1024:h-5">
                                <img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-tel.png" alt="">
                            </div>
                            <p class="hidden text-body text-[15px] 1024:block"><?=get_field('phone','options')?></p>
                        </a>
                    <?php   } ?>
                </div>
                <div class="flex justify-end items-center relative">
                    <div class="leo-burger w-5 p-[10px] pr-0 ml-1 box-content cursor-pointer 1024:w-6 1100:ml-20"><?php renderAssetsSVG('svg/burger'); ?></div>
                </div>
            </div>
        </div>
    </div>
    <?php $menu = get_field('menu')->slug;?>
    <div class="mobile-menu opacity-0 invisible bg-[#1e1e1ecc] blur-15 absolute top-0 right-0 w-full max-w-[250px] h-[100svh] 1280:max-w-[313px]">
        <div class="container pt-40 pl-10 flex flex-col gap-y-4 1280:pt-44">
            <nav>
                <?php
                $menu_args = array(); // Initialize empty array

                if ( is_page() ) { // Check if it's a page
                    $body_class = join(' ', get_body_class()); // Get all body classes as a string
                    $menu_args = array(
                        'theme_location' => $menu.'-header',
                        'items_wrap'     => '<ul class="leo-nav flex flex-col gap-y-4">%3$s</ul>'
                    );
                }

                if ( !empty( $menu_args ) ) {
                    wp_nav_menu( $menu_args );
                }
                ?>
            </nav>
        </div>
        <div class="absolute bottom-0 left-0 w-full 1280:bottom-24">
            <div class="container pl-10 mb-16 1280:mb-0">
                <span class="flex items-center gap-x-2.5"><?php renderAssetsSVG('svg/clock'); ?><?=get_field('hours','options')?></span>
                <span class="block mt-6 font-700 uppercase"><?php esc_html_e('Написати нам','leocar'); ?></span>
                <ul class="mm-social mt-4 flex justify-start items-center gap-x-3.5">
                    <?php if(get_field('telegram','options')) { ?>
                    <li class="w-8 h-8"><a href="<?=get_field('telegram','options')?>"><img class="w-full h-full object-contain" src="<?php renderImages('icons/telegram.png') ?>" alt=""></a></li>
                    <?php   } ?>
                    <?php if(get_field('viber','options')) { ?>
                    <li class="w-8 h-8"><a href="<?=get_field('viber','options')?>"><img class="w-full h-full object-contain" src="<?php renderImages('icons/viber.png') ?>" alt=""></a></li>
                    <?php   } ?>
                    <?php if(get_field('whats_app','options')) { ?>
                    <li class="w-8 h-8"><a href="<?=get_field('whats_app','options')?>"><img class="w-full h-full object-contain" src="<?php renderImages('icons/whatsapp.png') ?>" alt=""></a></li>
                    <?php   } ?>
                </ul>
            </div>
            <?php if(get_field('zsu_text','options')) { ?>
            <div class="bg-[#0F0F0F] px-5 py-2 768:hidden">
                <p class="relative text-[14px] pl-6 before:absolute before:top-[50%] before:left-0 before:translate-y-[-50%] before:w-5 before:h-3 before:bg-[url(../images/icons/ua-flag.svg)] before:bg-cover before:bg-no-repeat before:bg-center"><?=get_field('zsu_text','options')?></p>
            </div>
            <?php   } ?>
        </div>
    </div>
</header>