<section id="leo-catalog" class="leo-catalog relative z-[2] mt-16 pt-4 pb-4 1100:mt-20">
    <div class="container">
        <h2>Каталог автомобілів</h2>

        <div class="catalog-list mt-11 flex flex-col gap-y-14 768:flex-row 768:flex-wrap 768:gap-x-5">
            <!-- якщо додати клас mechanics для ітема, то виведеться плашка механіки -->
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
                    </div>

                    <div class="flip-card-inner rounded-2xl cursor-pointer">
                        <div class="flip-card-front overflow-hidden rounded-2xl px-4">
                            <div>
                                <img class="relative z-[2] block" src="<?php renderImages('cars/car1.png'); ?>" alt="">
                                <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?php renderImages('cars/car2.png'); ?>" alt="">
                            </div>

                            <div class="absolute z-[2] right-5 bottom-5 colors flex justify-end items-center gap-x-2.5">
                                <div class="w-4 h-4 border border-white rounded-full indent-[-9999px]" style="background:#DA0D0D;">Red</div>
                                <div class="w-4 h-4 border border-white rounded-full indent-[-9999px]" style="background:#4B4B4B;">Gray</div>
                                <div class="w-4 h-4 border border-white rounded-full indent-[-9999px]" style="background:#4A9A69;">Green</div>
                            </div>
                        </div>
                        <div class="flip-card-back rounded-2xl">
                            <div>
                                <p>Шкіряний салон, Електро пакет, клімат контроль, штатна мультимедія,андроїд авто, карплей, задні та передні парктроніки ,підігрів передніх сидінь, рейлінги, камера заднього виду,штатна  навігація, електро відкривання багажника, безключовий доступ, безключове заведення</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</span>
                    <span class="text-small text-white/[.7]">2020 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Accent</h4>
                <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                    <li class="active w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 800">12 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 400">24 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 100">30 міс</li>
                </ul>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> $</span>/місяць</div>
                    <div>мін. внесок -  1 500 $</div>
                </div>
                <button class="test-drive button mt-2 max-w-none">Замовити тест-драйв</button>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
                    </div>

                    <div class="flip-card-inner rounded-2xl cursor-pointer">
                        <div class="flip-card-front rounded-2xl px-4">
                            <img class="relative z-[2] block" src="<?php renderImages('cars/car2.png'); ?>" alt="">
                            <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?php renderImages('cars/car3.png'); ?>" alt="">
                        </div>
                        <div class="flip-card-back rounded-2xl">
                            <div>
                                <p>Шкіряний салон, Електро пакет, клімат контроль, штатна мультимедія,андроїд авто, карплей, задні та передні парктроніки ,підігрів передніх сидінь, рейлінги, камера заднього виду,штатна  навігація, електро відкривання багажника, безключовий доступ, безключове заведення</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</span>
                    <span class="text-small text-white/[.7]">2020 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Accent</h4>
                <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                    <li class="active w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 800">12 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 400">24 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 100">30 міс</li>
                </ul>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> $</span>/місяць</div>
                    <div>мін. внесок -  1 500 $</div>
                </div>
                <button class="test-drive button mt-2 max-w-none">Замовити тест-драйв</button>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
                    </div>

                    <div class="flip-card-inner rounded-2xl cursor-pointer">
                        <div class="flip-card-front rounded-2xl px-4">
                            <img class="relative z-[2] block" src="<?php renderImages('cars/car3.png'); ?>" alt="">
                            <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?php renderImages('cars/car4.png'); ?>" alt="">
                        </div>
                        <div class="flip-card-back rounded-2xl">
                            <div>
                                <p>Шкіряний салон, Електро пакет, клімат контроль, штатна мультимедія,андроїд авто, карплей, задні та передні парктроніки ,підігрів передніх сидінь, рейлінги, камера заднього виду,штатна  навігація, електро відкривання багажника, безключовий доступ, безключове заведення</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</span>
                    <span class="text-small text-white/[.7]">2020 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Accent</h4>
                <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                    <li class="active w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 800">12 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 400">24 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 100">30 міс</li>
                </ul>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> $</span>/місяць</div>
                    <div>мін. внесок -  1 500 $</div>
                </div>
                <button class="test-drive button mt-2 max-w-none">Замовити тест-драйв</button>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
                    </div>

                    <div class="flip-card-inner rounded-2xl cursor-pointer">
                        <div class="flip-card-front rounded-2xl px-4">
                            <img class="relative z-[2] block" src="<?php renderImages('cars/car4.png'); ?>" alt="">
                            <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?php renderImages('cars/car5.png'); ?>" alt="">
                        </div>
                        <div class="flip-card-back rounded-2xl">
                            <div>
                                <p>Шкіряний салон, Електро пакет, клімат контроль, штатна мультимедія,андроїд авто, карплей, задні та передні парктроніки ,підігрів передніх сидінь, рейлінги, камера заднього виду,штатна  навігація, електро відкривання багажника, безключовий доступ, безключове заведення</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</span>
                    <span class="text-small text-white/[.7]">2020 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Accent</h4>
                <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                    <li class="active w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 800">12 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 400">24 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 100">30 міс</li>
                </ul>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> $</span>/місяць</div>
                    <div>мін. внесок -  1 500 $</div>
                </div>
                <button class="test-drive button mt-2 max-w-none">Замовити тест-драйв</button>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
                    </div>

                    <div class="flip-card-inner rounded-2xl cursor-pointer">
                        <div class="flip-card-front rounded-2xl px-4">
                            <img class="relative z-[2] block" src="<?php renderImages('cars/car5.png'); ?>" alt="">
                            <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?php renderImages('cars/car6.png'); ?>" alt="">
                        </div>
                        <div class="flip-card-back rounded-2xl">
                            <div>
                                <p>Шкіряний салон, Електро пакет, клімат контроль, штатна мультимедія,андроїд авто, карплей, задні та передні парктроніки ,підігрів передніх сидінь, рейлінги, камера заднього виду,штатна  навігація, електро відкривання багажника, безключовий доступ, безключове заведення</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</span>
                    <span class="text-small text-white/[.7]">2020 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Accent</h4>
                <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                    <li class="active w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 800">12 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 400">24 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 100">30 міс</li>
                </ul>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> $</span>/місяць</div>
                    <div>мін. внесок -  1 500 $</div>
                </div>
                <button class="test-drive button mt-2 max-w-none">Замовити тест-драйв</button>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
                    </div>

                    <div class="flip-card-inner rounded-2xl cursor-pointer">
                        <div class="flip-card-front rounded-2xl px-4">
                            <img class="relative z-[2] block" src="<?php renderImages('cars/car6.png'); ?>" alt="">
                            <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?php renderImages('cars/car7.png'); ?>" alt="">
                        </div>
                        <div class="flip-card-back rounded-2xl">
                            <div>
                                <p>Шкіряний салон, Електро пакет, клімат контроль, штатна мультимедія,андроїд авто, карплей, задні та передні парктроніки ,підігрів передніх сидінь, рейлінги, камера заднього виду,штатна  навігація, електро відкривання багажника, безключовий доступ, безключове заведення</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</span>
                    <span class="text-small text-white/[.7]">2020 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Accent</h4>
                <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                    <li class="active w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 800">12 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 400">24 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 100">30 міс</li>
                </ul>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> $</span>/місяць</div>
                    <div>мін. внесок -  1 500 $</div>
                </div>
                <button class="test-drive button mt-2 max-w-none">Замовити тест-драйв</button>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
                    </div>

                    <div class="flip-card-inner rounded-2xl cursor-pointer">
                        <div class="flip-card-front rounded-2xl px-4">
                            <img class="relative z-[2] block" src="<?php renderImages('cars/car7.png'); ?>" alt="">
                            <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?php renderImages('cars/car8.png'); ?>" alt="">
                        </div>
                        <div class="flip-card-back rounded-2xl">
                            <div>
                                <p>Шкіряний салон, Електро пакет, клімат контроль, штатна мультимедія,андроїд авто, карплей, задні та передні парктроніки ,підігрів передніх сидінь, рейлінги, камера заднього виду,штатна  навігація, електро відкривання багажника, безключовий доступ, безключове заведення</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</span>
                    <span class="text-small text-white/[.7]">2020 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Accent</h4>
                <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                    <li class="active w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 800">12 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 400">24 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 100">30 міс</li>
                </ul>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> $</span>/місяць</div>
                    <div>мін. внесок -  1 500 $</div>
                </div>
                <button class="test-drive button mt-2 max-w-none">Замовити тест-драйв</button>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-[#212121] rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
                    </div>

                    <div class="flip-card-inner rounded-2xl cursor-pointer">
                        <div class="flip-card-front rounded-2xl px-4">
                            <img class="relative z-[2] block" src="<?php renderImages('cars/car8.png'); ?>" alt="">
                            <img class="absolute top-0 left-4 right-4 block w-[calc(100%-2rem)] h-full object-contain z-[2] opacity-0" src="<?php renderImages('cars/car1.png'); ?>" alt="">
                        </div>
                        <div class="flip-card-back rounded-2xl">
                            <div>
                                <p>Шкіряний салон, Електро пакет, клімат контроль, штатна мультимедія,андроїд авто, карплей, задні та передні парктроніки ,підігрів передніх сидінь, рейлінги, камера заднього виду,штатна  навігація, електро відкривання багажника, безключовий доступ, безключове заведення</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dissolve relative flex justify-between items-center py-3 after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0">
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</span>
                    <span class="text-small text-white/[.7]">2020 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Accent</h4>
                <ul class="lease flex justify-start items-center bg-car rounded-2xl">
                    <li class="active w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 800">12 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 400">24 міс</li>
                    <li class="w-4/12 h-11 flex justify-center items-center rounded-2xl text-small text-white/[.7] cursor-pointer" data-price="1 100">30 міс</li>
                </ul>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl"><span class="amount"></span> $</span>/місяць</div>
                    <div>мін. внесок -  1 500 $</div>
                </div>
                <button class="test-drive button mt-2 max-w-none">Замовити тест-драйв</button>
            </div>
            <div class="catalog-item catalog-item-require 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]">
                <div class="relative flex flex-wrap items-center justify-center px-4 bg-car rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <img class="relative z-[2] block" src="<?php renderImages('cars/car-none.png'); ?>" alt="">
                </div>
                <h4 class="font-700 mt-7 1100:mt-3.5 1100:pt-1">Не знайшли “ту саму”?</h4>
                <div class="info mt-5 opacity-70">
                    <p>Деяких моделей ще немає на сайті, але можливо серед них є Ваша!</p>
                    <p>Зв’яжіться з нами і ми допоможемо :)</p>
                </div>
                <button class="require-call button mt-7 max-w-none">Підібрати автомобіль</button>
            </div>
        </div>

        <button class="show-catalog button button-transparent mt-2.5 font-400 1024:max-w-[300px] 1024:mx-auto 1100:max-w-[335px]">Показати все</button>
    </div>
</section>