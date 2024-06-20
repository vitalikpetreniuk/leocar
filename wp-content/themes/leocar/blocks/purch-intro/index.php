<section class="leo-intro 1024:flex 1024:flex-row-reverse 1024:justify-start">
    <picture class="1024:absolute 1024:w-[65vw] 1100:w-[70vw]">
        <source srcset="<?php renderImages('intro-car-desktop.png'); ?>" media="(min-width:1024px)" />
        <img class="relative -mt-20 w-full 768:mt-[-30vw] 1024:mt-0" src="<?php renderImages('intro-car.png'); ?>" alt="toyota" class="block h-full w-full object-cover" />
    </picture>
    <div class="container 500:mt-8">
        <div class="1024:w-5/12 1024:min-h-[50vw] 1024:flex 1024:flex-col 1024:justify-end 1100:h-svh 1100:justify-center">
            <h1>Leocar - subscribe and chill</h1>
            <div class="text-body mt-2 max-h-20 overflow-hidden 414:mt-3.5 1024:mt-5">Переклад з англійської — це текст, який має деякі характеристики справжнього письмового тексту, але є випадковим</div>

            <div class="mt-5 flex flex-col gap-2.5 1024:mt-6">
                <button class="require-call button button-inverted">Залишити заявку<?php renderAssetsSVG('svg/mail'); ?></button>
                <button class="choose-car button button-transparent">Обрати авто<?php renderAssetsSVG('svg/car'); ?></button>
            </div>
        </div>
    </div>

    <div class="require-call cursor-pointer fixed left-5 bottom-5 z-[5] flex justify-center items-center w-11 h-11 rounded-full box-border border border-black bg-accent 1100:hidden"><?php renderAssetsSVG('svg/call'); ?></div>
    <div class="leo-message cursor-pointer fixed right-5 bottom-5 z-[5] 1100:right-auto 1100:left-10 1100:bottom-10 1100:w-14 1100:h-14 1280:z-[55]">
        <ul class="opacity-0 invisible absolute right-0 bottom-14 flex flex-col gap-y-1.5 1100:right-auto 1100:left-0 1100:bottom-16">
            <li><a href="#"><?php renderAssetsSVG('svg/telegram'); ?></a></li>
            <li><a href="#"><?php renderAssetsSVG('svg/viber'); ?></a></li>
            <li><a href="#"><?php renderAssetsSVG('svg/whatsapp'); ?></a></li>
        </ul>
        <span class="relative flex justify-center items-center w-11 h-11 rounded-full box-border border border-accent bg-black 1100:w-14 1100:h-14"><?php renderAssetsSVG('svg/mail'); ?><?php renderAssetsSVG('svg/close-thin'); ?></span>
    </div>
    <div class="require-call pulsating hidden fixed right-10 bottom-10 w-14 h-14 z-[5] cursor-pointer 1100:block before:content-[''] before:relative before:block before:w-[300%] before:h-[300%] before:box-border before:mt-[-100%] before:ml-[-100%] before:rounded-[50%] before:bg-accent/[.5] after:content-[''] after:absolute after:top-0 after:left-0 after:block after:w-full after:h-full after:bg-accent after:bg-[url('../images/svg/call.svg')] after:bg-no-repeat after:bg-center after:rounded-[50%]"></div>
</section>