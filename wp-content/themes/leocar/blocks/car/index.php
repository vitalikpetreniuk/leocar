<section class="leo-car pt-5 1100:pt-8">
	<div class="container 1100:flex 1100:flex-wrap 1100:justify-between 1100:items-start">
        <div class="820:flex 820:flex-row-reverse 820:justify-between 820:gap-x-3 1100:w-[calc(50%+20px)]">
            <div class="swiper mySwiperCarousel 820:w-[calc(100%-220px)] 1024:w-[calc(100%-270px)] 1100:w-[calc(100%-170px)]">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="block w-full h-full object-contain" src="<?php renderImages('cars/car1.png'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-contain" src="<?php renderImages('cars/ha1.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-contain" src="<?php renderImages('cars/ha2.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-contain" src="<?php renderImages('cars/ha3.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-contain" src="<?php renderImages('cars/ha1.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-contain" src="<?php renderImages('cars/ha2.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-contain" src="<?php renderImages('cars/ha3.jpg'); ?>" alt="hyundai accent"></div>
                </div>
                <div class="swiper-pagination !bottom-4"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div class="swiper mySwiperThumbs mt-2 820:mt-0 820:w-[200px] 1024:w-[250px] 1100:w-[150px]" thumbsSlider="">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><img class="block w-full h-full object-cover" src="<?php renderImages('cars/car1.png'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-cover" src="<?php renderImages('cars/ha1.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-cover" src="<?php renderImages('cars/ha2.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-cover" src="<?php renderImages('cars/ha3.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-cover" src="<?php renderImages('cars/ha1.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-cover" src="<?php renderImages('cars/ha2.jpg'); ?>" alt="hyundai accent"></div>
                    <div class="swiper-slide"><img class="block w-full h-full object-cover" src="<?php renderImages('cars/ha3.jpg'); ?>" alt="hyundai accent"></div>
                </div>
            </div>
        </div>
        <div class="mt-4 1100:w-[calc(50%-40px)] 1100:pl-4 1100:box-border 1100:mt-0 1100:flex 1100:flex-col">
            <h1 class="!text-base py-2.5 820:!text-xl 1100:pt-0 1100:order-1">Hyundai Accent</h1>

            <form class="block mt-0 1100:flex 1100:flex-col 1100:order-2">
                <div class="pt-2.5 flex justify-between items-baseline 1100:order-4">
                    <div class="flex justify-start items-baseline gap-x-1.5"><span class="text-accent text-[26px]/[1.6]">33 €</span>/день</div>
                    <div><span>600</span> €  - передплата</div>
                </div>
                <input type="submit" class="button !bg-none !pr-0 mt-2.5 1100:order-5 1100:max-w-[260px]" value="Оформити">

                <ul class="car-info mt-4 py-4 flex flex-wrap gap-[5px] justify-start 1100:order-1 1100:mt-0">
                    <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm">Комфорт<img class="block !w-auto h-8 1100:w-24" src="<?php renderImages('sort/comfort.png'); ?>" alt="comfort"></li>
                    <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm">Передній привід</li>
                    <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?php renderAssetsSVG('svg/automatic'); ?>Автомат</li>
                    <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?php renderAssetsSVG('svg/mechanics'); ?>Механіка</li>
                    <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm"><?php renderAssetsSVG('svg/gas'); ?>1.4, бензин</li>
                    <li class="flex justify-start items-center gap-x-2.5 block px-4 h-10 rounded-[15px] bg-dark text-sm">2021 р.</li>
                </ul>

                <fieldset class="py-4 flex flex-wrap gap-[5px] 1100:items-center 1100:order-2">
                    <div>
                        <input class="hidden" type="radio" id="basic" name="safety" value="basic" data-price="0" checked />
                        <label for="basic" class="flex justify-center items-center block px-3 h-10 rounded-[15px] text-sm cursor-pointer">Базове страхування</label>
                    </div>
                    <div>
                        <input class="hidden" type="radio" id="additional" name="safety" value="additional" data-price="10" />
                        <label for="additional" class="flex justify-center items-center block px-3 h-10 rounded-[15px] text-sm cursor-pointer">Додаткова безпека</label>
                    </div>
                    <div>
                        <input class="hidden" type="radio" id="plus" name="safety" value="plus" data-price="20" />
                        <label for="plus" class="flex justify-center items-center block px-3 h-10 rounded-[15px] text-sm cursor-pointer">Додаткова безпека +</label>
                    </div>
                    <span class="show-prices hidden w-9 h-9 rounded-[15px] bg-dark justify-center items-center cursor-pointer 1100:flex">?</span>
                </fieldset>

                <div class="mt-4 px-5 box-border w-[calc(100%+40px)] -ml-5 overflow-x-scroll scrollbar-hide pb-0 820:w-auto 820:flex 820:justify-start 1100:order-3">
                    <fieldset class="min-w-[546px] flex w-auto bg-car rounded-[15px] 820:w-auto">
                        <div>
                            <input class="hidden" type="radio" id="days" name="term" value="days" checked />
                            <label for="days" class="flex justify-center items-center block px-6 h-10 rounded-[15px] text-[12px] whitespace-nowrap cursor-pointer 1100:h-11">1 - 2 дні</label>
                        </div>
                        <div>
                            <input class="hidden" type="radio" id="week" name="term" value="week" />
                            <label for="week" class="flex justify-center items-center block px-6 h-10 rounded-[15px] text-[12px] whitespace-nowrap cursor-pointer 1100:h-11">3 - 7 днів</label>
                        </div>
                        <div>
                            <input class="hidden" type="radio" id="month" name="term" value="month" />
                            <label for="month" class="flex justify-center items-center block px-6 h-10 rounded-[15px] text-[12px] whitespace-nowrap cursor-pointer 1100:h-11">8 - 30 днів</label>
                        </div>
                        <div>
                            <input class="hidden" type="radio" id="quartal" name="term" value="quartal" />
                            <label for="quartal" class="flex justify-center items-center block px-6 h-10 rounded-[15px] text-[12px] whitespace-nowrap cursor-pointer 1100:h-11">31 - 99 днів</label>
                        </div>
                        <div>
                            <input class="hidden" type="radio" id="year" name="term" value="year" />
                            <label for="year" class="flex justify-center items-center block px-6 h-10 rounded-[15px] text-[12px] whitespace-nowrap cursor-pointer 1100:h-11">100 - 360 днів</label>
                        </div>
                    </fieldset>
                </div>
            </form>
        </div>
        <div class="car-description mt-8 text-center 1100:mt-20">
            <h2>Текст опису автомобіля</h2>
            <div class="mt-2.5 text-white/[.7] text-base/[1.4]">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
	</div>
</section>