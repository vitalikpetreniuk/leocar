<header class="fixed top-0 left-0 w-full">
    <div class="relative z-10 leo-announcement bg-white py-1.5">
        <div class="container">
            <span class="block font-400 text-xs leading-5 text-black text-center 1100:text-sm 1100:leading-6">Безкоштовний тест-драйв будь якого авто!</span>
            <div class="close absolute top-0 right-0 h-full aspect-square cursor-pointer flex justify-center items-center"><?php renderAssetsSVG('svg/close'); ?></div>
        </div>
    </div>
    <div class="relative z-30 mt-2.5 1024:mt-4">
        <div class="container max-w-[85rem]">
            <div class="flex justify-between items-center bg-[rgba(64,64,64,.2)] rounded-2xl p-4 blur-25 1024:py-3.5 1024:px-6 1100:pr-14">
                <div><a href="/" class="leo-logo block h-11 1024:h-16"><?php renderAssetsSVG('svg/logo'); ?></a></div>
                <div class="flex justify-end items-center relative mr-[-10px] 1024:mr-0">
                    <div class="hidden flex-end items-center gap-x-6 1024:flex 1100:gap-x-9">
                        <span class="flex justify-center items-center gap-x-2.5 whitespace-nowrap"><?php renderAssetsSVG('svg/clock'); ?>Пн-Нд 09:00 - 20:00</span>
                        <nav class="desktop">
                            <ul class="flex flex-row flex-end gap-x-6 1100:gap-x-9">
                                <li><a class="nav-link relative block text-base/[1.6] whitespace-nowrap transition duration-100 hover:opacity-70" href="#leo-reasons">Переваги</a></li>
                                <li><a class="nav-link relative block text-base/[1.6] whitespace-nowrap transition duration-100 hover:opacity-70" href="#leo-subscription">Що таке підписка</a></li>
                                <li><a class="nav-link relative block text-base/[1.6] whitespace-nowrap transition duration-100 hover:opacity-70" href="#leo-catalog">Каталог</a></li>
                                <li><a class="nav-link relative block text-base/[1.6] whitespace-nowrap transition duration-100 hover:opacity-70" href="#leo-testdrive">Тест-драйв</a></li>
                                <li><a class="nav-link relative block text-base/[1.6] whitespace-nowrap transition duration-100 hover:opacity-70" href="#leo-reviews">Відгуки</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="leo-burger p-[10px] ml-[3px] 1024:hidden"><?php renderAssetsSVG('svg/burger'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu opacity-0 invisible bg-black absolute top-0 right-[100vw] w-full h-[100svh]">
        <div class="container text-center pt-40 flex flex-col gap-y-4">
            <span class="flex justify-center items-center gap-x-2.5"><?php renderAssetsSVG('svg/clock'); ?>Пн-Нд 09:00 - 20:00</span>
            <nav>
                <ul class="flex flex-col gap-y-4">
                    <li><a class="nav-link" href="#leo-reasons">Переваги</a></li>
                    <li><a class="nav-link" href="#leo-subscription">Що таке підписка</a></li>
                    <li><a class="nav-link" href="#leo-catalog">Каталог</a></li>
                    <li><a class="nav-link" href="#leo-testdrive">Тест-драйв</a></li>
                    <li><a class="nav-link" href="#leo-reviews">Відгуки</a></li>
                </ul>
            </nav>
        </div>
        <div class="container absolute bottom-9 left-0 w-full">
            <span class="block font-700 uppercase">Контакти</span>
            <ul class="mm-contact mt-4 flex flex-col gap-y-1">
                <li><a class="flex justify-start items-center gap-x-2" href="tel:+380930393333"><?php renderAssetsSVG('svg/call'); ?>+38 (093) 039 33 33</a></li>
                <li><a class="flex justify-start items-center gap-x-2" href="mailto:ua.leocar@gmail.com"><?php renderAssetsSVG('svg/mail'); ?>ua.leocar@gmail.com</a></li>
            </ul>
            <span class="block mt-8 font-700 uppercase">Соціальні мережі</span>
            <ul class="mm-social mt-4 flex justify-start items-center gap-x-3.5">
                <li><a href="#"><?php renderAssetsSVG('svg/instagram'); ?></a></li>
                <li><a href="#"><?php renderAssetsSVG('svg/facebook'); ?></a></li>
            </ul>
        </div>
    </div>
</header>