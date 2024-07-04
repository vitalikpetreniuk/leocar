<section class="leo-checkout">
	<div class="container">
        <form>
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
                    <div class="fields-body flex flex-col gap-y-4">
                        <input class="!w-[calc(50%-10px)]" type="text" placeholder="Ім’я*">
                        <input class="w-full" id="billing-phone" name="phone" type="tel" value="" />
                        <input id="billing-phone-dub" class="!hidden" name="phone-dub" type="tel" value="" />
                    </div>
                </div>
            </div>
            <div class="fields-right">
                <div class="receive-fields">
                    <div class="header">Отримання</div>
                    <div class="body">
                        <div class="fields hidden">
                            <div>
                                <span>Оберіть дату отримання</span>
                                <input id="date-receive" type="text" placeholder="__/__/____" value="24/07/2025">

                                <select name="time-receive" id="time-receive">
                                    <option value="">__:__</option>
                                    <option value="06:00">06:00</option>
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">08:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                </select>
                            </div>
                            <select name="receive">
                                <option value=""> - Оберіть місце отримання - </option>
                                <option value="lviv">Львів, по місту</option>
                                <option value="truskavets">Трускавець</option>
                                <option value="skhidnytsya">Східниця</option>
                                <option value="border">Україно-польський піший кордон Шегині/Medyka</option>
                            </select>
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
                            <div>
                                <span>Оберіть дату повернення</span>
                                <input id="date-return" type="text" placeholder="__/__/____" value="27/07/2025">
                                <select name="time-return" id="time-return">
                                    <option value="">__:__</option>
                                    <option value="06:00">06:00</option>
                                    <option value="07:00">07:00</option>
                                    <option value="08:00">08:00</option>
                                    <option value="09:00">08:00</option>
                                    <option value="10:00">10:00</option>
                                    <option value="11:00">11:00</option>
                                    <option value="12:00">12:00</option>
                                    <option value="13:00">13:00</option>
                                    <option value="14:00">14:00</option>
                                    <option value="15:00">15:00</option>
                                    <option value="16:00">16:00</option>
                                    <option value="17:00">17:00</option>
                                    <option value="18:00">18:00</option>
                                    <option value="19:00">19:00</option>
                                    <option value="20:00">20:00</option>
                                    <option value="21:00">21:00</option>
                                    <option value="22:00">22:00</option>
                                    <option value="23:00">23:00</option>
                                </select>
                            </div>
                            <select name="return">
                                <option value=""> - Оберіть місце повернення - </option>
                                <option value="lviv">Львів, по місту</option>
                                <option value="truskavets">Трускавець</option>
                                <option value="skhidnytsya">Східниця</option>
                                <option value="border">Україно-польський піший кордон Шегині/Medyka</option>
                            </select>
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
            </div>
            <input type="submit" value="Забронювати">
        </form>
	</div>
</section>