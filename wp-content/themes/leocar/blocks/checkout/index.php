<section class="leo-checkout">
	<div class="container">
        <form class="checkoutForm">
            <div class="fields-left">
                <div class="fields safety-fields">
                    <div class="fields-header">
                        <h4>Додаткова безпека</h4>
                    </div>
                    <div class="fields-body">
                        <fieldset>
                            <div>
                                <input type="radio" id="basic" name="safety" value="basic" data-price="0" checked />
                                <label for="basic">Базове страхування<span>Безкоштовно</span></label>
                            </div>
                            <div>
                                <input type="radio" id="additional" name="safety" value="additional" data-price="10" />
                                <label for="additional">Додаткова безпека<span>10 €</span></label>
                            </div>
                            <div>
                                <input type="radio" id="plus" name="safety" value="plus" data-price="20" />
                                <label for="plus">Додаткова безпека +<span>20 €</span></label>
                            </div>
                        </fieldset>
                    </div>
                </div>
                <div class="fields additional-fields">
                    <div class="fields-header">
                        <h4>Додаткові послуги</h4>
                    </div>
                    <div class="fields-body">
                        <div>
                            <input type="checkbox" id="gps" name="gps" value="GPS" data-price="10">
                            <label for="gps">GPS<span>10 € в день</span></label>
                        </div>

                        <div>
                            <input type="checkbox" id="wifi" name="wifi" value="WI-FI" data-price="20">
                            <label for="wifi">WI-FI<span>20 € в день</span></label>
                        </div>

                        <div>
                            <input type="checkbox" id="driver" name="driver" value="Додатковий водій" data-price="10">
                            <label for="driver">Додатковий водій<span>10 € в день</span></label>
                        </div>

                        <div>
                            <input type="checkbox" id="booster" name="booster" value="Бустер для дитини" data-price="15">
                            <label for="booster">Бустер для дитини<span>15 € в день</span></label>
                        </div>

                        <div>
                            <input type="checkbox" id="toddler-seat" name="toddler-seat" value="Дитяче сидіння" data-price="15">
                            <label for="toddler-seat">Дитяче сидіння<span>15 € в день</span></label>
                        </div>

                        <div>
                            <input type="checkbox" id="baby-seat" name="baby-seat" value="Сидіння для немовлят" data-price="15">
                            <label for="baby-seat">Сидіння для немовлят<span>15 € в день</span></label>
                        </div>

                        <input type="text" placeholder="Мені також потрібно...">
                    </div>
                </div>
                <div class="fields driver-fields">
                    <div class="fields-header">
                        <h4>Відомості про водія</h4>
                    </div>
                    <div class="fields-body flex flex-col gap-y-4 1024:flex-row 1024:gap-x-5">
                        <input class="w-full 1024:!w-[calc(50%-10px)]" type="text" placeholder="Ім’я*">
                        <input class="w-full" id="billing-phone" name="phone" type="tel" value="" />
                        <input id="billing-phone-dub" class="!hidden" name="phone-dub" type="tel" value="" />
                    </div>
                </div>
                <input class="!hidden !w-full !max-w-none !mt-3 1024:!block 1024:order-2" type="submit" value="Забронювати">
            </div>
            <div class="fields-right">
                <div class="receive-fields">
                    <div class="header">Отримання</div>
                    <div class="body">
                        <div class="fields hidden">
                            <div class="flex justify-start items-start gap-x-1">
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
                            <input class="!hidden" type="text" name="receive-location">
                            <div class="hidden mt-4 choose-receive empty">
                                <select name="receive-place" id="receive-place">
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
                            <button class="button button-transparent">Застосувати</button>
                        </div>
                        <div class="receive-info">
                            <div class="edit"><?php renderAssetsSVG('svg/edit'); ?></div>
                            <div class="date">
                                <div>Середа, 24 липня, 13:00 <span class="additional-price">+30€</span></div>
                                <span class="price-info">Доплата за неробочий час*</span>
                            </div>
                            <span>Україно-польський піший кордон Шегині/Medyka</span>
                        </div>
                    </div>
                </div>
                <div class="return-fields">
                    <div class="header">Повернення</div>
                    <div class="body">
                        <div class="fields hidden">
                            <div class="flex justify-start items-start gap-x-1">
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
                                        </div>
                                    </ul>
                                </div>
                            </div>
                            <input class="!hidden" type="text" name="return-location">
                            <div class="hidden mt-4 choose-return empty">
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
                            <button class="button button-transparent">Застосувати</button>
                        </div>
                        <div class="return-info">
                            <div class="edit"><?php renderAssetsSVG('svg/edit'); ?></div>
                            <div class="date">
                                <div>Субота, 27 липня, 19:00 <span class="additional-price">+30€</span></div>
                                <span class="price-info">Доплата за неробочий час*</span>
                            </div>
                            <span>Україно-польський піший кордон Шегині/Medyka</span>
                        </div>
                    </div>
                </div>

                <div class="car-info">
                    <input class="!hidden" type="text" placeholder="Hyundai Accent" data-price="32" data-deposit="1500">
                    <div class="car-image"><img src="<?php renderImages('cars/car1.png'); ?>" alt=""></div>
                    <div class="car-content">
                        <div>
                            <h5>Детальний розрахунок</h5>
                            <ul class="hidden"></ul>
                            <span class="empty">Оберіть додаткові послуги щоб отримати детальніший розрахунок</span>
                        </div>
                        <div class="total">Загальна вартість<span><span class="total-price"></span> €</span></div>
                        <div class="deposit">Завдаток -  <span></span> €</div>
                    </div>
                </div>
                <input class="1024:!hidden" type="submit" value="Забронювати">
            </div>
        </form>
	</div>
</section>