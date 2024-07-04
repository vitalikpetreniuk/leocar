<section class="leo-intro-main relative h-[100svh] pt-[105px] box-border 1024:h-auto 1024:pt-[120px]">
    <picture class="absolute top-0 left-0 block w-full 1024:top-[115px] 1024:left-0 1024:right-0 1024:h-full">
        <source srcset="<?php renderImages('intro.png'); ?>" media="(min-width:1024px)" />
        <img src="<?php renderImages('intro-mobile.png') ?>" alt="intro" class="block 1024:w-auto 1024:h-[90%] 1024:float-right" />
    </picture>
    <div class="container">
        <div class="swiper">
          <div class="swiper-wrapper 1024:items-end 1024:gap-x-10 1280:gap-x-16">
            <div class="swiper-slide px-5 h-[calc(100svh-105px)] flex items-center 1024:h-auto 1024:px-0 1024:w-[calc(50%-20px)] 1024:order-2 1100:w-[calc(50%-35px)]">
                <div class="1024:pb-10">
                  <span class="flex gap-x-2.5 items-center"><?php renderAssetsSVG('svg/clock'); ?>Пн-Нд 09:00 - 20:00</span>
                  <h2 class="mt-1 !text-left 768:!text-[35px]">Оренда авто від Leocar</h2>
                  <div class="mt-6 flex flex-col gap-y-5 768:mt-3">
                      <p>Компанія LEOCAR надає послуги подобової оренди авто, оренди авто з водієм, підписки від 1 місяця та оренди під викуп. Авто для будь-яких поїздок без прихованих платежів, підтримка 24/7.</p>
                      <p>Напишіть нам, і ми допоможемо обрати авто зі зручними для Вас умовами</p>
                  </div>
                  <button class="mt-6 require-call button mt-4 max-w-none 768:mt-6 768:max-w-[272px]">Замовити консультацію</button>
                </div>
            </div>
            <div class="swiper-slide px-5 h-[calc(100svh-105px)] flex items-center 1024:pt-[110px] 1024:h-auto 1024:px-0 1024:w-[calc(50%-20px)] 1024:order-1 1100:w-[calc(50%-35px)]">
                <div class="form-slide 768:w-full 768:max-w-[70%] 768:mx-auto 1024:max-w-none 1024:!pb-11">
                    <h3 class="768:!text-2xl">Форма розрахунку вартості</h3>
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
                        <input class="!mt-10" type="submit" value="Забронювати авто">
                    </form>
                </div>
            </div>
          </div>
          <!-- If we need pagination -->
          <div class="swiper-pagination 1024:!hidden"></div>

          <!-- If we need navigation buttons -->
          <div class="swiper-button-prev 1024:!hidden"><?php renderAssetsSVG('svg/prev'); ?></div>
          <div class="swiper-button-next 1024:!hidden"><?php renderAssetsSVG('svg/next'); ?></div>
        </div>
    </div>
</section>