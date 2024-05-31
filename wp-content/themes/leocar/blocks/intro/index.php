<?php
    $intro_title = '';
    $intro_description = '';
    $intro_image_class = '';
    $intro_image = '';
    $intro_image_laptop = '';
    $intro_image_desktop = '';

    if ( is_page() ) { // Check if it's a page
        $body_class = join(' ', get_body_class()); // Get all body classes as a string
        if ( strpos( $body_class, 'page-id-8' ) !== false ) {
            $intro_image_class = 'toyota';
            $intro_image = 'intro-car.png';
            $intro_image_laptop = 'intro-car-laptop.png';
            $intro_image_desktop = 'intro-car-laptop.png';
            $intro_title = 'Leocar - subscribe and chill';
            $intro_description = 'Переклад з англійської — це текст, який має деякі характеристики справжнього письмового тексту, але є випадковим';
        } elseif ( strpos( $body_class, 'page-id-29' ) !== false ) {
            $intro_image_class = 'hyundai';
            $intro_image = 'intro-car-hyundai.png';
            $intro_image_laptop = 'intro-car-hyundai-laptop.png';
            $intro_image_desktop = 'intro-car-hyundai-laptop.png';
            $intro_title = 'Leocar - ми піклуємось про ваш комфорт';
            $intro_description = 'У нас – одні з найдоступніших цін на оренду авто у Львові у поєднанні з якісним, по-справжньому європейським сервісом.';
        }
    }
?>

<section class="leo-intro 1024:flex 1024:flex-row-reverse 1024:justify-start 2000:max-h-[1000px]">
    <picture class="<?php echo $intro_image_class ?> 1024:absolute 1024:h-[75svh] 1024:max-h-[580px] 1100:h-[80svh] 1100:max-h-[750px] 1280:max-w-[115svh] 1280:h-[100svh] 2000:max-h-[1000px]">
        <source media="(max-width:1023px)" srcset="<?php renderImages($intro_image); ?>">
        <source media="(min-width:1024px) and (max-width:1699px)" srcset="<?php renderImages($intro_image_laptop); ?>">
        <source media="(min-width:1700px)" srcset="<?php renderImages($intro_image_desktop); ?>">
        <img class="relative block 768:h-full 768:w-full 768:object-cover" src="<?php renderImages($intro_image); ?>" alt=""/>
    </picture>
    <div class="container relative z-[2] 500:mt-8">
        <div class="1024:w-5/12 1024:min-h-[50vw] 1024:pl-5 1024:pr-2 1024:box-border 1024:flex 1024:flex-col 1024:justify-end 1100:h-[100svh] 1100:min-h-0 2000:max-h-[1000px] 1100:justify-center">
            <h1><?php echo $intro_title ?></h1>
            <div class="text-body mt-2 max-h-20 overflow-hidden 414:mt-3.5 1024:mt-5"><?php echo $intro_description ?></div>

            <div class="mt-5 flex flex-col gap-2.5 1024:mt-6">
                <button class="require-call button">Залишити заявку<?php renderAssetsSVG('svg/mail'); ?></button>
                <button class="choose-car button button-transparent">Обрати авто<?php renderAssetsSVG('svg/car'); ?></button>
            </div>
        </div>
    </div>

    <div class="require-call cursor-pointer fixed left-5 bottom-5 z-[5] flex justify-center items-center w-11 h-11 rounded-full box-border border border-black bg-accent 1100:hidden"><?php renderAssetsSVG('svg/call'); ?></div>
    <div class="leo-message cursor-pointer fixed right-5 bottom-5 z-[5] 1100:right-auto 1100:left-10 1100:bottom-10 1100:w-14 1100:h-14">
        <ul class="opacity-0  invisible absolute right-0 bottom-14 flex flex-col gap-y-1.5 1100:right-auto 1100:left-0 1100:bottom-16">
            <li><a href="#"><?php renderAssetsSVG('svg/telegram'); ?></a></li>
            <li><a href="#"><?php renderAssetsSVG('svg/viber'); ?></a></li>
            <li><a href="#"><?php renderAssetsSVG('svg/whatsapp'); ?></a></li>
        </ul>
        <span class="relative flex justify-center items-center w-11 h-11 rounded-full box-border border border-accent bg-black 1100:w-14 1100:h-14"><?php renderAssetsSVG('svg/mail'); ?><?php renderAssetsSVG('svg/close-thin'); ?></span>
    </div>
    <div class="require-call pulsating hidden fixed right-10 bottom-10 w-14 h-14 z-[5] cursor-pointer 1100:block before:content-[''] before:relative before:block before:w-[300%] before:h-[300%] before:box-border before:mt-[-100%] before:ml-[-100%] before:rounded-[50%] before:bg-accent/[.5] after:content-[''] after:absolute after:top-0 after:left-0 after:block after:w-full after:h-full after:bg-accent after:bg-[url('../images/svg/call.svg')] after:bg-no-repeat after:bg-center after:rounded-[50%] after:hover:bg-white after:transition after:duration-150"></div>
</section>