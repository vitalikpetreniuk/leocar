<section id="leo-catalog-page" class="leo-catalog-page relative z-[2] pt-8 pb-4 1100:pt-11">
    <div class="container 1100:flex 1100:justify-between 1100:items-start">
        <div class="filter fixed z-[5] bg-black top-0 bottom-0 left-0 w-full px-5 pt-[136px] hidden 1100:flex 1100:flex-col 1100:w-[calc(33.333%-10px)] 1100:static 1100:pt-0 1100:px-0">
            <span class="close-filter absolute top-[136px] right-4 block p-2.5 1100:hidden"><?php renderAssetsSVG('svg/close-thin'); ?></span>

            <div class="hidden 1100:block">
                <h2 class="!text-left !font-400 1100:!font-700">Форма розрахунку вартості</h2>
                <form class="priceForm mt-2">
                    <div class="768:flex 768:gap-x-5 768:items-end">
                        <input class="768:!w-[calc(50%-10px)]" type="text" placeholder="Ім'я" name="name" required>
                        <input class="w-full 768:w-[calc(50%-10px)]" id="billing-phone" name="phone" type="tel" value="" />
                        <input id="billing-phone-dub" class="!hidden" name="phone-dub" type="tel" value="" />
                    </div>

                    <input class="!hidden" type="text" name="receive-location" required>
                    <div class="choose-receive empty">
                        <select name="receive-place" id="receive-place">
                            <option value=""> - Оберіть місце посадки - </option>
                            <option value="office">Офіс Leocar</option>
                            <option value="lviv">місто Львів</option>
                            <option value="skhidnytsia">Східниця</option>
                            <option value="truskavets">Трускавець</option>
                            <option value="border">Україно-польський піший кордон Шегині/Medyka</option>
                        </select>

                        <span class="cursor-pointer"> - Оберіть місце посадки - </span>
                        <ul class="hidden absolute z-[2] top-[100%] left-0 right-0 bg-black flex flex-col text-sm">
                           <li class="p-2" data-value="office">Офіс Leocar</li>
                           <li class="p-2" data-value="lviv">місто Львів<span class="inline-block pl-1.5 text-accent">+5€</span></li>
                           <li class="p-2" data-value="skhidnytsia">Східниця<span class="inline-block pl-1.5 text-accent">+50€</span></li>
                           <li class="p-2" data-value="truskavets">Трускавець<span class="inline-block pl-1.5 text-accent">+50€</span></li>
                           <li class="p-2" data-value="border">Україно-польський піший кордон Шегині/Medyka<span class="inline-block pl-1.5 text-accent">+50€</span></li>
                        </ul>
                    </div>
                    <div>
                        <input class="!hidden" type="checkbox" id="change-return" name="change-return">
                        <label for="change-return" class="relative select-none cursor-pointer block pl-5 py-2 text-white/[.7] text-[12px] 768:text-sm 1024:pl-6">Інше місце повернення</label>
                    </div>


                    <input class="!hidden" type="text" name="return-location">
                    <div class="hidden choose-return empty">
                        <select name="return-place" id="return-place">
                            <option value=""> - Оберіть місце повернення - </option>
                            <option value="office">Офіс Leocar</option>
                            <option value="lviv">місто Львів</option>
                            <option value="skhidnytsia">Східниця</option>
                            <option value="truskavets">Трускавець</option>
                            <option value="border">Україно-польський піший кордон Шегині/Medyka</option>
                        </select>
                        <span class="cursor-pointer"> - Оберіть місце повернення - </span>
                        <ul class="hidden absolute z-[2] top-[100%] left-0 right-0 bg-black flex flex-col text-sm">
                           <li class="p-2" data-value="office">Офіс Leocar</li>
                           <li class="p-2" data-value="lviv">місто Львів<span class="inline-block pl-1.5 text-accent">+5€</span></li>
                           <li class="p-2" data-value="skhidnytsia">Східниця<span class="inline-block pl-1.5 text-accent">+50€</span></li>
                           <li class="p-2" data-value="truskavets">Трускавець<span class="inline-block pl-1.5 text-accent">+50€</span></li>
                           <li class="p-2" data-value="border">Україно-польський піший кордон Шегині/Medyka<span class="inline-block pl-1.5 text-accent">+50€</span></li>
                        </ul>
                    </div>

                    <div class="date-time mt-3 flex flex-col gap-y-5">
                        <div class="relative flex justify-between 768:items-center">
                            <span class="block leading-[1]">Дата та час видачі</span>
                            <div class="flex justify-end items-start gap-x-1">
                                <div><input type="text" placeholder="__/__/____" name="receive-date" id="receive-date" required></div>
                                <select name="receive-time" id="receive-time">
                                  <option value="5">05:00</option>
                                  <option value="6">06:00</option>
                                  <option value="7">07:00</option>
                                  <option value="8">08:00</option>
                                  <option value="9">09:00</option>
                                  <option value="10">10:00</option>
                                  <option value="11">11:00</option>
                                  <option value="12">12:00</option>
                                  <option value="13">13:00</option>
                                  <option value="14">14:00</option>
                                  <option value="15">15:00</option>
                                  <option value="16">16:00</option>
                                  <option value="17">17:00</option>
                                  <option value="18">18:00</option>
                                  <option value="19">19:00</option>
                                  <option value="20">20:00</option>
                                  <option value="21">21:00</option>
                                  <option value="22">22:00</option>
                                  <option value="23">23:00</option>
                                </select>
                                <div class="relative">
                                    <span class="flex justify-center items-center h-9 w-16 bg-[#000000]/[.3] rounded-[40px] cursor-pointer">__:__</span>
                                    <ul class="hidden absolute z-[2] top-[calc(100%+4px)] rounded-[2px] left-0 right-0 bg-black flex-col justify-center">
                                       <div>
                                           <li data-value="5">05:00</li>
                                           <li data-value="6">06:00</li>
                                           <li data-value="7">07:00</li>
                                           <li data-value="8">08:00</li>
                                           <li data-value="9">09:00</li>
                                           <li data-value="10">10:00</li>
                                           <li data-value="11">11:00</li>
                                           <li data-value="12">12:00</li>
                                           <li data-value="13">13:00</li>
                                           <li data-value="14">14:00</li>
                                           <li data-value="15">15:00</li>
                                           <li data-value="16">16:00</li>
                                           <li data-value="17">17:00</li>
                                           <li data-value="18">18:00</li>
                                           <li data-value="19">19:00</li>
                                           <li data-value="20">20:00</li>
                                           <li data-value="21">21:00</li>
                                           <li data-value="22">22:00</li>
                                           <li data-value="23">23:00</li>
                                       </div>
                                    </ul>
                                </div>
                            </div>
                            <span class="hidden absolute top-[100%] right-0 bottom-0 text-[12px] text-accent 768:left-0 768:right-auto 768:top-[calc(100%-4px)]">+30€ За видачу в неробочий час</span>
                        </div>
                        <div class="relative flex justify-between 768:items-center">
                            <span class="block leading-[1]">Дата та час повернення</span>
                            <div class="flex justify-end items-start gap-x-1">
                                <div><input type="text" placeholder="__/__/____" name="return-date" id="return-date" required></div>
                                <select name="return-time" id="return-time">
                                  <option value="5">05:00</option>
                                  <option value="6">06:00</option>
                                  <option value="7">07:00</option>
                                  <option value="8">08:00</option>
                                  <option value="9">09:00</option>
                                  <option value="10">10:00</option>
                                  <option value="11">11:00</option>
                                  <option value="12">12:00</option>
                                  <option value="13">13:00</option>
                                  <option value="14">14:00</option>
                                  <option value="15">15:00</option>
                                  <option value="16">16:00</option>
                                  <option value="17">17:00</option>
                                  <option value="18">18:00</option>
                                  <option value="19">19:00</option>
                                  <option value="20">20:00</option>
                                  <option value="21">21:00</option>
                                  <option value="22">22:00</option>
                                  <option value="23">23:00</option>
                                </select>
                                <div class="relative">
                                    <span class="flex justify-center items-center h-9 w-16 bg-[#000000]/[.3] rounded-[40px] cursor-pointer">__:__</span>
                                    <ul class="hidden absolute z-[2] top-[calc(100%+4px)] rounded-[2px] left-0 right-0 bg-black flex-col justify-center">
                                       <div>
                                           <li data-value="5">05:00</li>
                                           <li data-value="6">06:00</li>
                                           <li data-value="7">07:00</li>
                                           <li data-value="8">08:00</li>
                                           <li data-value="9">09:00</li>
                                           <li data-value="10">10:00</li>
                                           <li data-value="11">11:00</li>
                                           <li data-value="12">12:00</li>
                                           <li data-value="13">13:00</li>
                                           <li data-value="14">14:00</li>
                                           <li data-value="15">15:00</li>
                                           <li data-value="16">16:00</li>
                                           <li data-value="17">17:00</li>
                                           <li data-value="18">18:00</li>
                                           <li data-value="19">19:00</li>
                                           <li data-value="20">20:00</li>
                                           <li data-value="21">21:00</li>
                                           <li data-value="22">22:00</li>
                                           <li data-value="23">23:00</li>
                                       <div>
                                    </ul>
                                </div>
                            </div>
                            <span class="hidden absolute top-[100%] right-0 bottom-0 text-[12px] text-accent 768:left-0 768:right-auto 768:top-[calc(100%-4px)]">+30€ За повернення в неробочий час</span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="filter-catalog 1100:mt-16">
                <h2 class="!text-left !font-400 1100:!font-700">Пошук по Категоріях</h2>
                <ul class="mt-5 flex flex-wrap gap-2.5">
                    <li class="relative w-[calc(50%-5px)] px-2.5 pt-2 pb-6 cursor-pointer">
                        <span class="relative z-[2] text-sm">Компакт<span class="block text-[12px]/[.8] opacity-70">від 12€/день</span></span>
                        <img class="absolute right-2 bottom-2 block w-auto h-9 1100:w-24" src="<?php renderImages('sort/compact.png'); ?>" alt="compact">
                    </li>
                    <li class="relative w-[calc(50%-5px)] px-2.5 pt-2 pb-6 cursor-pointer">
                        <span class="relative z-[2] text-sm">Комфорт<span class="block text-[12px]/[.8] opacity-70">від 17€/день</span></span>
                        <img class="absolute right-2 bottom-2 block w-auto h-9 1100:w-24" src="<?php renderImages('sort/comfort.png'); ?>" alt="comfort">
                    </li>
                    <li class="relative w-[calc(50%-5px)] px-2.5 pt-2 pb-6 cursor-pointer">
                        <span class="relative z-[2] text-sm">Бізнес<span class="block text-[12px]/[.8] opacity-70">від 21€/день</span></span>
                        <img class="absolute right-2 bottom-2 block w-auto h-9 1100:w-24" src="<?php renderImages('sort/business.png'); ?>" alt="business">
                    </li>
                    <li class="relative w-[calc(50%-5px)] px-2.5 pt-2 pb-6 cursor-pointer">
                        <span class="relative z-[2] text-sm">Мінівен<span class="block text-[12px]/[.8] opacity-70">від 15€/день</span></span>
                        <img class="absolute right-2 bottom-2 block w-auto h-9 1100:w-24" src="<?php renderImages('sort/minivan.png'); ?>" alt="minivan">
                    </li>
                    <li class="relative w-[calc(50%-5px)] px-2.5 pt-2 pb-6 cursor-pointer">
                        <span class="relative z-[2] text-sm">Кросовер<span class="block text-[12px]/[.8] opacity-70">від 21€/день</span></span>
                        <img class="absolute right-2 bottom-2 block w-auto h-9 1100:w-24" src="<?php renderImages('sort/crossover.png'); ?>" alt="crossover">
                    </li>
                    <li class="relative w-[calc(50%-5px)] px-2.5 pt-2 pb-6 cursor-pointer">
                        <span class="relative z-[2] text-sm">4x4<span class="block text-[12px]/[.8] opacity-70">від 27€/день</span></span>
                        <img class="absolute right-2 bottom-2 block w-auto h-9 1100:w-24" src="<?php renderImages('sort/4x4.png'); ?>" alt="compact">
                    </li>
                </ul>
                <button class="block button mt-3 1100:max-w-none">Пошук</button>
            </div>
        </div>
        <div class="relative 1100:w-[calc(66.667%-10px)]">
            <h2 class="!text-left max-w-[calc(100%-100px)]">Каталог автомобілів</h2>
            <button class="filter-button flex justify-end items-center gap-x-1 py-1 px-1 absolute top-[2px] right-0 1100:hidden">Фільтр<?php renderAssetsSVG('svg/filter'); ?></button>

            <div class="catalog-list mt-11 flex flex-col gap-y-20 768:flex-row 768:flex-wrap 768:gap-x-5">
                <!-- якщо додати клас mechanics для ітема, то виведеться плашка механіки -->
                <div class="catalog-item 768:w-[calc(50%-.625rem)]" data-model="hyundai" data-type="compact">
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
                        <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas-white'); ?>1.4, бензин</span>
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
                <div class="catalog-item 768:w-[calc(50%-.625rem)]" data-model="toyota" data-type="minivan">
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
                        <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas-white'); ?>3.5, бензин</span>
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
                <div class="catalog-item 768:w-[calc(50%-.625rem)]" data-model="ford" data-type="compact">
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
                        <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas-white'); ?>1.5, бензин</span>
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
                <div class="catalog-item 768:w-[calc(50%-.625rem)]" data-model="hyundai" data-type="comfort">
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
                        <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas-white'); ?>1.4, бензин</span>
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
                <div class="catalog-item 768:w-[calc(50%-.625rem)]" data-model="hyundai" data-type="4x4">
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
                        <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas-white'); ?>1.4, бензин</span>
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
                <div class="catalog-item 768:w-[calc(50%-.625rem)]" data-model="hyundai" data-type="compact">
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
                        <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas-white'); ?>1.4, бензин</span>
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
                <div class="catalog-item 768:w-[calc(50%-.625rem)]" data-model="škoda" data-type="crossover">
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
                        <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas-white'); ?>1.4, бензин</span>
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
                <div class="catalog-item 768:w-[calc(50%-.625rem)]" data-model="toyota" data-type="minivan">
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
                        <span class="flex gap-x-2.5 items-center text-small text-white/[.7]"><?php renderAssetsSVG('svg/gas-white'); ?>1.4, бензин</span>
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
            </div>
        

            <nav class="woocommerce-pagination mt-9">
            	<ul class="page-numbers flex justify-center items-center gap-x-2.5 text-sm">
                    <li><a class="prev page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] bg-dark" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 10 17" fill="none"><path d="M8.77817 16.5565L1 8.77832L8.77817 1.00015" stroke="#ffffff"></path></svg></span></a></li>
                    <li><span aria-current="page" class="page-numbers current flex justify-center items-center w-6 h-6 rounded-[2px] text-white bg-accent/[.2]">1</span></li>
                    <li><a class="page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]" href="#">2</a></li>
                    <li><a class="page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]" href="#">3</a></li>
                    <li><a class="page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]" href="#">4</a></li>
                    <li><span class="page-numbers dots flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]">…</span></li>
                    <li><a class="page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]" href="#">42</a></li>
                    <li><a class="page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]" href="#">43</a></li>
                    <li><a class="page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]" href="#">44</a></li>
                    <li><a class="next page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] bg-dark" href="#"><span><svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 10 17" fill="none"><path d="M1.0563 1.00015L8.83447 8.77832L1.0563 16.5565" stroke="#ffffff"></path></svg></span></a></li>
                </ul>
            </nav>
        </div>
    </div>
</section>