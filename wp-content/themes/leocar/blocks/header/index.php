<header class="fixed top-0 left-0 w-full">
    <div class="relative z-10 leo-announcement bg-white py-1.5">
        <div class="container">
            <div class="hidden absolute top-[50%] left-3 translate-y-[-50%] 1280:block">
                <p class="relative text-black text-sm pl-6 before:absolute before:top-[50%] before:left-0 before:translate-y-[-50%] before:w-5 before:h-3 before:bg-[url(../images/icons/ua-flag.svg)] before:bg-cover before:bg-no-repeat before:bg-center">10% на ЗСУ</p>
            </div>
            <span class="block font-400 text-xs leading-5 text-black text-center 1100:text-sm 1100:leading-6">Безкоштовний тест-драйв будь якого авто!</span>
            <div class="close absolute top-0 right-0 h-full aspect-square cursor-pointer flex justify-center items-center"><?php renderAssetsSVG('svg/close'); ?></div>
        </div>
    </div>
    <div class="relative bg-[rgba(64,64,64,.2)] blur-25 z-30">
        <div class="container max-w-[85rem]">
            <div class="flex items-center gap-1 px-1.5 py-3.5 1024:py-4">
                <div class="grow shrink basis-[auto]">
                    <a href="<?=home_url()?>" class="leo-logo block h-11 1024:h-14">
                        <?php renderAssetsSVG('svg/logo'); ?>
                    </a>
                </div>
                <div class="header-contact flex items-center 1024:gap-8">
                    <a class="flex items-center gap-2 p-1.5 1024:p-0" href="#">
                        <div class="flex justify-center items-center w-7 h-7 bg-accent/[.2] rounded-[50%] 1024:w-5 1024:h-5">
                            <?php renderAssetsSVG('svg/location'); ?>
                        </div>
                        <p class="hidden text-body text-[15px] 1024:block">Львів, вул. Княгині Ольги 5а</p>
                    </a>
                    <a class="flex items-center gap-2 p-1.5 1024:p-0" href="#">
                        <div class="flex justify-center items-center w-7 h-7 bg-accent/[.2] rounded-[50%] 1024:w-5 1024:h-5">
                            <?php renderAssetsSVG('svg/email'); ?>
                        </div>
                        <p class="hidden text-body text-[15px] 1024:block">ua.leocar@gmail.com</p>
                    </a>
                    <a class="flex items-center gap-2 p-1.5 1024:p-0" href="#">
                        <div class="flex justify-center items-center w-7 h-7 bg-accent/[.2] rounded-[50%] 1024:w-5 1024:h-5">
                            <?php renderAssetsSVG('svg/phone'); ?>
                        </div>
                        <p class="hidden text-body text-[15px] 1024:block">+38 (093) 039-33-33</p>
                    </a>
                </div>
                <div class="hidden items-center gap-x-6 ml-[105px] 1100:flex">
                    <div class="currency relative font-400">
                        <span class="cursor-pointer relative flex justify-start items-center gap-x-2 after:content-[''] after:block after:w-2 after:h-2 after:bg-[url('../images/svg/polygon-white.svg')] after:bg-no-repeat after:bg-center after:bg-contain">UAH</span>
                        <ul class="hidden flex flex-col absolute top-[100%] left-0">
                            <li class="cursor-pointer active">UAH</li>
                            <li class="cursor-pointer">USD</li>
                            <li class="cursor-pointer">EUR</li>
                        </ul>
                    </div>
                    <div class="language relative">
                        <span class="cursor-pointer relative flex justify-start items-center gap-x-1 after:content-[''] after:ml-1 after:block after:w-2 after:h-2 after:bg-[url('../images/svg/polygon-white.svg')] after:bg-no-repeat after:bg-center after:bg-contain"><?php renderAssetsSVG('svg/uk'); ?>UK</span>
                        <ul class="hidden flex flex-col absolute top-[100%] left-0">
                            <li class="cursor-pointer flex justify-start items-center gap-x-1 active"><?php renderAssetsSVG('svg/uk'); ?>UK</li>
                            <li class="cursor-pointer flex justify-start items-center gap-x-1"><?php renderAssetsSVG('svg/en'); ?>EN</li>
                        </ul>
                    </div>
                </div>
                <div class="flex justify-end items-center relative">
                    <div class="leo-burger w-5 p-[10px] pr-0 ml-1 box-content cursor-pointer 1024:w-6 1100:ml-20"><?php renderAssetsSVG('svg/burger'); ?></div>
                </div>
            </div>
        </div>
    </div>

    <div class="mobile-menu opacity-0 invisible bg-black blur-15 absolute top-0 right-0 w-full h-[100svh] 1280:max-w-[313px] 1100:bg-[#1D1D1D]/[.7]">
          <div class="container pt-[185px] px-16 flex flex-col gap-y-2 1280:pt-44">
                <h6 class="m-0 font-700">Каталог</h6>
                <nav>
                     <ul class="mobile-main flex flex-col gap-y-2">
                         <li class="menu-item"><a href="#">Ціни</a></li>
                         <li class="menu-item menu-item-has-children">
                             <span class="cursor-pointer">Типи оренди</span>
                             <ul class="sub-menu hidden relative mt-1.5 flex-col gap-y-2 mb-4 pt-5 pb-1 pl-8 max-w-[255px] box-border">
                                 <li><a href="#">Оренда під викуп</a></li>
                                 <li><a href="#">Підписка на авто</a></li>
                                 <li><a href="#">Оренда під викуп</a></li>
                             </ul>
                         </li>
                         <li class="menu-item"><a href="#">Умови оренди</a></li>
                         <li class="menu-item"><a href="#">Про Leocar</a></li>
                         <li class="menu-item"><a href="#">Контакти</a></li>
                     </ul>
                </nav>
          </div>
          <div class="absolute bottom-0 left-0 w-full 1280:bottom-24">
            <div class="container pl-10 mb-16 1280:mb-0"></div>
            <div class="menu-bar-footer flex justify-start items-center bg-[rgba(64,64,64,.2)] px-6 pt-6 pb-20 1280:hidden">
                <div class="relative w-1/2 font-400">
                    <span class="relative flex justify-start items-center gap-x-2 after:content-[''] after:block after:w-2 after:h-2 after:bg-[url('../images/svg/polygon-white.svg')] after:bg-no-repeat after:bg-center after:bg-contain">UAH</span>
                    <ul class="hidden flex flex-col absolute top-[100%] left-0">
                        <li class="active">UAH</li>
                        <li>USD</li>
                        <li>EUR</li>
                    </ul>
                </div>

                <div class="relative w-1/2">
                    <span class="relative flex justify-start items-center gap-x-1 after:content-[''] after:ml-1 after:block after:w-2 after:h-2 after:bg-[url('../images/svg/polygon-white.svg')] after:bg-no-repeat after:bg-center after:bg-contain"><img class="block w-[13px] h-[13px]" src="<?php renderImages('uk.png') ?>" alt="uk">UK</span>
                    <ul class="hidden flex flex-col absolute top-[100%] left-0">
                        <li class="flex justify-start items-center gap-x-1 active"><img class="block w-[13px] h-[13px]" src="<?php renderImages('uk.png') ?>" alt="uk">UK</li>
                        <li class="flex justify-start items-center gap-x-1"><img class="block w-[13px] h-[13px]" src="<?php renderImages('en.png') ?>" alt="uk">EN</li>
                    </ul>
                </div>
            </div>
          </div>
     </div>
</header>