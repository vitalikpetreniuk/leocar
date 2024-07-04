<section id="leo-catalog-home" class="leo-catalog-home relative z-[2] pt-4 pb-4 1100:mt-36">
    <div class="container">
        <h2>Каталог автомобілів</h2>

        <div class="catalog-sort mt-6 flex flex-col gap-y-1.5 820:flex-row 820:gap-x-5">
            <div class="sort sort-type relative 820:w-[calc(50%-10px)]">
                <div class="relative cursor-pointer flex items-center gap-x-5 py-2.5 px-3.5 rounded-[10px] bg-car box-border border border-transparent after:content-[''] after:absolute after:top-[55%] after:right-4 after:translate-y-[-55%] after:w-2 after:h-2 after:bg-[url('../images/svg/polygon.svg')] after:bg-no-repeat after:bg-contain 1100:rounded-[14px]">
                    <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/type.png'); ?>" alt="all">
                    <div class="text-sm">Показати всі</div>
                </div>
                <ul class="hidden absolute top-[calc(100%+2px)] w-full z-[5] bg-car/[.97] rounded-[10px] 1100:rounded-[14px]">
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer active" data-type="all">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/type.png'); ?>" alt="all">
                        <div class="text-sm">Показати всі</div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-type="compact">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/compact.png'); ?>" alt="compact">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Компакт<span class="block mt-[2px] text-[12px] opacity-70">від 12€/день</span></div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-type="comfort">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/comfort.png'); ?>" alt="comfort">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Комфорт<span class="block mt-[2px] text-[12px] opacity-70">від 12€/день</span></div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-type="crossover">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/crossover.png'); ?>" alt="crossover">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Кроссовери<span class="block mt-[2px] text-[12px] opacity-70">від 12€/день</span></div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-type="4x4">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/4x4.png'); ?>" alt="4x4">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">4x4<span class="block mt-[2px] text-[12px] opacity-70">від 12€/день</span></div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-type="business">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/business.png'); ?>" alt="business">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Бізнес<span class="block mt-[2px] text-[12px] opacity-70">від 12€/день</span></div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-type="minivan">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/minivan.png'); ?>" alt="minivan">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Мінівен<span class="block mt-[2px] text-[12px] opacity-70">від 12€/день</span></div>
                    </li>
                </ul>
            </div>
            <div class="sort sort-model relative 820:w-[calc(50%-10px)]">
                <div class="relative cursor-pointer flex items-center gap-x-5 py-2.5 px-3.5 rounded-[10px] bg-car box-border border border-transparent after:content-[''] after:absolute after:top-[55%] after:right-4 after:translate-y-[-55%] after:w-2 after:h-2 after:bg-[url('../images/svg/polygon.svg')] after:bg-no-repeat after:bg-contain 1100:rounded-[14px]">
                    <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/model.png'); ?>" alt="all">
                    <div class="text-sm">Показати всі</div>
                </div>
                <ul class="hidden absolute top-[calc(100%+2px)] w-full z-[5] bg-car/[.97] rounded-[10px] 1100:rounded-[14px]">
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer active" data-model="all">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/model.png'); ?>" alt="all">
                        <div class="text-sm">Показати всі</div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-model="toyota">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/toyota.png'); ?>" alt="toyota">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Toyota</div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-model="skoda">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/scoda.png'); ?>" alt="skoda">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Škoda</div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-model="kia">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/kia.png'); ?>" alt="kia">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Kia</div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-model="mazda">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/mazda.png'); ?>" alt="mazda">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Mazda</div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-model="hyundai">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/hyundai.png'); ?>" alt="hyundai">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Hyundai</div>
                    </li>
                    <li class="flex items-center gap-x-5 p-3.5 cursor-pointer" data-model="ford">
                        <img class="block w-14 h-auto 1100:w-24" src="<?php renderImages('sort/ford.png'); ?>" alt="ford">
                        <div class="flex justify-start items-center gap-x-1.5 text-sm">Ford</div>
                    </li>
                </ul>
            </div>
        </div>


        <div class="catalog-list mt-11 flex flex-col gap-y-14 768:flex-row 768:flex-wrap 768:gap-x-5">
            <!-- якщо додати клас mechanics для ітема, то виведеться плашка механіки -->
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-model="hyundai" data-type="compact">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive absolute z-[5] -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear absolute z-[5] -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
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
                <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
                    <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="33" data-deposit="1600">1 - 2 дні</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="30" data-deposit="1800">3 - 7 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="27" data-deposit="2000">8 - 30 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="23" data-deposit="2200">31 - 99 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[24%] 1024:justify-center 1024:px-0" data-price="20" data-deposit="2500">100 - 360 днів</li>
                    </ul>
                </div>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><span class="amount">33</span> €</span>/день</div>
                    <span class="deposit text-sm">мін. внесок -  <span>1 600</span> €</span>
                </div>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-model="toyota" data-type="minivan">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive z-[5] absolute -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear z-[5] absolute -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
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
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>3.5, бензин</span>
                    <span class="text-small text-white/[.7]">2015 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Toyota Sienna</h4>
                <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
                    <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="33" data-deposit="1600">1 - 2 дні</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="30" data-deposit="1800">3 - 7 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="27" data-deposit="2000">8 - 30 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="23" data-deposit="2200">31 - 99 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[24%] 1024:justify-center 1024:px-0" data-price="20" data-deposit="2500">100 - 360 днів</li>
                    </ul>
                </div>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><span class="amount">33</span> €</span>/день</div>
                    <span class="deposit text-sm">мін. внесок -  <span>1 600</span> €</span>
                </div>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-model="ford" data-type="compact">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive z-[5] absolute -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear z-[5] absolute -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
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
                    <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas'); ?>1.5, бензин</span>
                    <span class="text-small text-white/[.7]">2021 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Ford Focus</h4>
                <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
                    <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="33" data-deposit="1600">1 - 2 дні</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="30" data-deposit="1800">3 - 7 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="27" data-deposit="2000">8 - 30 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="23" data-deposit="2200">31 - 99 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[24%] 1024:justify-center 1024:px-0" data-price="20" data-deposit="2500">100 - 360 днів</li>
                    </ul>
                </div>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><span class="amount">33</span> €</span>/день</div>
                    <span class="deposit text-sm">мін. внесок -  <span>1 600</span> €</span>
                </div>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-model="hyundai" data-type="comfort">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive z-[5] absolute -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear z-[5] absolute -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
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
                    <span class="text-small text-white/[.7]">2021 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai i10</h4>
                <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
                    <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="33" data-deposit="1600">1 - 2 дні</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="30" data-deposit="1800">3 - 7 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="27" data-deposit="2000">8 - 30 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="23" data-deposit="2200">31 - 99 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[24%] 1024:justify-center 1024:px-0" data-price="20" data-deposit="2500">100 - 360 днів</li>
                    </ul>
                </div>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><span class="amount">33</span> €</span>/день</div>
                    <span class="deposit text-sm">мін. внесок -  <span>1 600</span> €</span>
                </div>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-model="hyundai" data-type="4x4">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive z-[5] absolute -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear z-[5] absolute -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
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
                    <span class="text-small text-white/[.7]">2021 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai I30 wagon</h4>
                <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
                    <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="33" data-deposit="1600">1 - 2 дні</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="30" data-deposit="1800">3 - 7 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="27" data-deposit="2000">8 - 30 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="23" data-deposit="2200">31 - 99 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[24%] 1024:justify-center 1024:px-0" data-price="20" data-deposit="2500">100 - 360 днів</li>
                    </ul>
                </div>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><span class="amount">33</span> €</span>/день</div>
                    <span class="deposit text-sm">мін. внесок -  <span>1 600</span> €</span>
                </div>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-model="hyundai" data-type="compact">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive z-[5] absolute -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear z-[5] absolute -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
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
                    <span class="text-small text-white/[.7]">2021 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Hyundai Elantra</h4>
                <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
                    <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="33" data-deposit="1600">1 - 2 дні</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="30" data-deposit="1800">3 - 7 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="27" data-deposit="2000">8 - 30 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="23" data-deposit="2200">31 - 99 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[24%] 1024:justify-center 1024:px-0" data-price="20" data-deposit="2500">100 - 360 днів</li>
                    </ul>
                </div>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><span class="amount">33</span> €</span>/день</div>
                    <span class="deposit text-sm">мін. внесок -  <span>1 600</span> €</span>
                </div>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-model="škoda" data-type="crossover">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive z-[5] absolute -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear z-[5] absolute -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
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
                    <span class="text-small text-white/[.7]">2021 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Škoda Octavia</h4>
                <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
                    <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="33" data-deposit="1600">1 - 2 дні</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="30" data-deposit="1800">3 - 7 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="27" data-deposit="2000">8 - 30 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="23" data-deposit="2200">31 - 99 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[24%] 1024:justify-center 1024:px-0" data-price="20" data-deposit="2500">100 - 360 днів</li>
                    </ul>
                </div>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><span class="amount">33</span> €</span>/день</div>
                    <span class="deposit text-sm">мін. внесок -  <span>1 600</span> €</span>
                </div>
            </div>
            <div class="catalog-item 768:w-[calc(50%-.625rem)] 1024:w-[calc(33.333%-.833rem)]" data-model="toyota" data-type="minivan">
                <div class="flip-card relative flex flex-wrap items-center justify-center rounded-md aspect-[4/3] 1100:aspect-[1/.83]">
                    <!-- може бути передній привід або задній привід -->
                    <span class="drive z-[5] absolute -top-5 left-4 flex items-center bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]">Передній привід</span>
                    <div class="gear z-[5] absolute -top-5 right-4">
                        <span class="flex justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</span>
                        <span class="hidden justify-start items-center gap-x-1.5 bg-dark rounded-2xl h-9 px-4 text-small text-white/[.7]"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</span>
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
                    <span class="text-small text-white/[.7]">2021 р.</span>
                </div>
                <h4 class="font-700 my-4 1100:my-2.5">Toyota Sienna</h4>
                <div class="mt-3 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 768:w-full 768:ml-0 768:px-0">
                    <ul class="terms min-w-[100%] flex w-auto bg-car rounded-[15px] cursor-pointer">
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer active cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="33" data-deposit="1600">1 - 2 дні</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="30" data-deposit="1800">3 - 7 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="27" data-deposit="2000">8 - 30 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[19%] 1024:justify-center 1024:px-0" data-price="23" data-deposit="2200">31 - 99 днів</li>
                        <li class="px-6 h-11 flex items-center whitespace-nowrap text-[12px]/[1] text-white bg-car rounded-[15px] cursor-pointer 1024:w-[24%] 1024:justify-center 1024:px-0" data-price="20" data-deposit="2500">100 - 360 днів</li>
                    </ul>
                </div>
                <div class="flex justify-between items-baseline">
                    <div class="mt-2 flex justify-start items-baseline gap-x-1"><span class="font-400 text-4xl text-accent"><span class="amount">33</span> €</span>/день</div>
                    <span class="deposit text-sm">мін. внесок -  <span>1 600</span> €</span>
                </div>
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
            </div>
        </div>
        <button class="show-catalog button button-transparent mt-5 font-400 1024:max-w-[300px] 1024:mx-auto 1100:max-w-[335px]">Показати все</button>
    </div>
</section>