<header class="fixed top-0 left-0 w-full">
    <?php if(get_field('announce_text','options')) { ?>
    <div class="relative z-10 leo-announcement bg-white py-1.5">
        <div class="container">
            <span class="block font-400 text-xs leading-5 text-black text-center 1100:text-sm 1100:leading-6"><?=get_field('announce_text','options')?></span>
            <div class="close absolute top-0 right-0 h-full aspect-square cursor-pointer flex justify-center items-center"><?php renderAssetsSVG('svg/close'); ?></div>
        </div>
    </div>
    <?php   } ?>
    <div class="relative bg-[rgba(64,64,64,.2)] blur-25 z-30">
        <div class="container max-w-[85rem]">
            <div class="flex items-center gap-1 px-1.5 py-3.5 1024:py-4">
                <div class="grow shrink basis-[auto]">
                    <a href="<?=home_url()?>" class="leo-logo block h-11 1024:h-14">
                        <?php echo file_get_contents(get_field('logo','options')); ?>
                    </a>
                </div>
					 <div class="flex items-center gap-1">
						<a class="w-7 h-7" href="#">
							<img class="w-full h-full object-contain" src="<?php renderImages('icons/header-location.png') ?>" alt="">
						</a>
						<a class="w-7 h-7" href="#">
							<img class="w-full h-full object-contain" src="<?php renderImages('icons/header-mail.png') ?>" alt="">
						</a>
						<a class="w-7 h-7" href="#">
							<img class="w-full h-full object-contain" src="<?php renderImages('icons/header-tel.png') ?>" alt="">
						</a>
					 </div>
                <div class="flex justify-end items-center relative">
                    <div class="hidden flex-end items-center gap-x-6 1024:flex 1100:gap-x-9">
                        <span class="flex justify-center items-center gap-x-2.5 whitespace-nowrap"><?php renderAssetsSVG('svg/clock'); ?><?=get_field('hours','options')?></span>
                        <?php
                            $menu_args = array(); // Initialize empty array
                                $body_class = join(' ', get_body_class()); // Get all body classes as a string
                                $menu_args = array(
                                    'theme_location' => get_field('menu')?get_field('menu')->slug.'-header':'',
                                    'items_wrap'     => '<ul class="leo-navigation">%3$s</ul>'
                                );
                            if ( !empty( $menu_args['theme_location'] ) ) {
                                wp_nav_menu( $menu_args );
                            }
                        ?>
                    </div>
                    <div class="leo-burger p-[10px] pr-0 ml-1 1024:hidden"><?php renderAssetsSVG('svg/burger'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu opacity-0 invisible bg-[#1e1e1ecc] blur-25 absolute top-0 right-0 w-full max-w-[250px] h-[100svh]">
        <div class="container pt-40 pl-10 flex flex-col gap-y-4">
            <nav>
                <?php
                $menu_args = array(); // Initialize empty array

                if ( is_page() ) { // Check if it's a page
                    $body_class = join(' ', get_body_class()); // Get all body classes as a string
                    if ( strpos( $body_class, 'page-id-8' ) !== false ) {
                        $menu_args = array(
                            'theme_location' => 'rent-header',
                            'items_wrap'     => '<ul class="leo-nav flex flex-col gap-y-4">%3$s</ul>'
                        );
                    } elseif ( strpos( $body_class, 'page-id-29' ) !== false ) {
                        $menu_args = array(
                            'theme_location' => 'purchase-header',
                            'items_wrap'     => '<ul class="leo-nav flex flex-col gap-y-4">%3$s</ul>'
                        );

                    }
                }

                if ( !empty( $menu_args ) ) {
                    wp_nav_menu( $menu_args );
                }
                ?>
            </nav>
        </div>
        <div class="absolute bottom-0 left-0 w-full">
		 	 <div class="container pl-10 mb-16">
		 	 	<span class="flex items-center gap-x-2.5"><?php renderAssetsSVG('svg/clock'); ?><?=get_field('hours','options')?></span>
	            <span class="block mt-6 font-700 uppercase"><?php esc_html_e('Написати нам','leocar'); ?></span>
	            <ul class="mm-social mt-4 flex justify-start items-center gap-x-3.5">
	                <li class="w-8 h-8"><a href="<?=get_field('telegram','options')?>"><img class="w-full h-full object-contain" src="<?php renderImages('icons/telegram.png') ?>" alt=""></a></li>
	                <li class="w-8 h-8"><a href="<?=get_field('viber','options')?>"><img class="w-full h-full object-contain" src="<?php renderImages('icons/viber.png') ?>" alt=""></a></li>
	                <li class="w-8 h-8"><a href="<?=get_field('whats_app','options')?>"><img class="w-full h-full object-contain" src="<?php renderImages('icons/whatsapp.png') ?>" alt=""></a></li>
	            </ul>
		 	 </div>
				<div class="bg-[#0F0F0F] px-5 py-2">
					<p class="relative pl-6 before:absolute before:top-[50%] before:left-0 before:translate-y-[-50%] before:w-5 before:h-3 before:bg-[url(../images/icons/ua-flag.svg)] before:bg-cover before:bg-no-repeat before:bg-center">10% на ЗСУ</p>
				</div>
        </div>
    </div>
</header>