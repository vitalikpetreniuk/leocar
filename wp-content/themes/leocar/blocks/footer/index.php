<footer class="mt-28 pt-8 1100:pt-10">
    <div class="container">
        <div class="flex flex-col 1024:flex-row 1024:justify-between 1024:items-center">
            <a class="leo-logo block w-52 1024:w-64" href="/"><?php renderAssetsSVG('svg/logo'); ?></a>
            <div class="font-400 text-2xl/normal mt-6 1024:mt-0 1024:text-3xl/normal"><span class="text-accent">Leocar</span> - subscribe and chill</div>
        </div>
        <div class="flex flex-wrap 1024:mt-8 1024:flex-nowrap">
            <div class="leo-social w-full mt-9 1024:w-1/3 1024:mt-0">
                <span class="font-700 uppercase">Соціальні мережі</span>
                <div class="mm-social mt-4">
                    <ul class="flex justify-start items-center gap-x-3.5">
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/telegram.png'); ?>" alt="telegram"></a></li>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/instagram.png'); ?>" alt="instagram"></a></li>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/viber.png'); ?>" alt="viber"></a></li>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/facebook.png'); ?>" alt="facebook"></a></li>
                        <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/whatsapp.png'); ?>" alt="whatsapp"></a></li>
                    </ul>
                </div>
            </div>
            <div class="w-5/12 mt-9 1024:w-1/3 1024:mt-0 1024:pl-7 1024:box-border">
                <span class="font-700 uppercase">Quick links</span>
                <ul class="mt-4 opacity-70 flex flex-col gap-y-1 1024:gap-y-2 1024:leading-[1.6]">
                    <li><a class="hover:opacity-70" href="#">Тарифи</a></li>
                    <li><a class="hover:opacity-70" href="#">Прокат авто</a></li>
                    <li><a class="hover:opacity-70" href="#">Інформація</a></li>
                    <li><a class="hover:opacity-70" href="#">Контакти</a></li>
                </ul>
            </div>
            <div class="w-7/12 mt-9 1024:w-1/3 1024:mt-0">
                <span class="font-700 uppercase">Контакти</span>
                <ul class="mm-contact mt-4 opacity-70 flex flex-col gap-y-1 1024:gap-y-2 1024:leading-[1.6]">
                    <li><a class="flex justify-start items-center gap-x-2 hover:text-white/[.7]" href="mailto:ua.leocar@gmail.com"><?php renderAssetsSVG('svg/mail'); ?>ua.leocar@gmail.com</a></li>
                    <li><a class="flex justify-start items-center gap-x-2 hover:text-white/[.7]" href="tel:+380930393333"><?php renderAssetsSVG('svg/call'); ?>+38 (093) 039 33 33</a></li>
                </ul>
                <div class="mt-2"><?php renderAssetsSVG('svg/payment'); ?></div>
            </div>
            <div class="w-full mt-6 1024:w-1/3 1024:mt-0  1024:leading-[1.6]">
                <span class="font-700 uppercase">Адреса</span>
                <div class="mt-4 pl-6 bg-[url('../images/svg/pin.svg')] bg-no-repeat bg-[left_4px]"><p class="opacity-70">Вулиця Княгині Ольги, 5а, Львів,<br> Львівська область, 79026</p></div>
            </div>
        </div>
    </div>
    <div class="bg-black mt-9 pt-6 pb-5 1024:py-1 1100:mt-14">
        <div class="container 1024:flex 1024:items-center">
            <div class="opacity-70 1024:order-0 1024:w-4/12 1024:text-sm/[1.4] 1100:text-base/[1.4]">© 2024 Leocar. Всі права захищені</div>
            <ul class="mt-5 opacity-70 flex flex-col gap-y-2 1024:order-2 1024:w-4/12 1024:mt-0 1024:flex-row 1024:justify-end 1024:gap-x-4 1100:gap-x-8">
                <li class="1024:text-sm/[1.4] 1100:text-base/[1.4]"><a href="#">Правила та умови</a></li>
                <li class="1024:text-sm/[1.4] 1100:text-base/[1.4]"><a href="#">Політика конфіденційності</a></li>
            </ul>
            <div class="nine mt-7 text-center 1024:order-1 1024:w-4/12 1024:mt-0"><a class="inline-block p-4 1024:pb-3" href="#" target="_blank"><?php renderAssetsSVG('svg/nine'); ?></a></div>
        </div>
    </div>
</footer>

<div id="leo-modals" class="invisible opacity-0 transition duration-100 fixed top-0 left-0 w-full h-full z-[20] bg-[rgba(0,0,0,.31)] blur-25">
    <div class="modal call invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>

        <h2>Замовити консультацію</h2>
        <?php echo do_shortcode( '[contact-form-7 id="21cfd70" title="Замовити консультацію"]' ); ?>
    </div>
    <div class="modal drive invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>

        <h2>Замовити тест-драйв</h2>
        <?php echo do_shortcode( '[contact-form-7 id="a857c9c" title="Замовити тест-драйв"]' ); ?>
    </div>

    <div class="modal thanks invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <h2 class="text-center">Дякуємо за Ваш запит!</h2>
        <span class="block mt-1 text-center">Наш менеджер зв’яжеться з вами найближчим часом</span>
    </div>
    <div class="modal conditions invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[862px] translate-y-[-50%] form-bg mt-[60px] px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>

        <h2>Оренда авто з правом викупу: переваги, умови та деталі</h2>
        <div class="mt-4 h-[100svh] max-h-[calc(100svh-360px)] scrollbar-hide">
            <p>Традиційна оренда авто дозволяє взяти транспортний засіб напрокат на обмежений час, часто не менше ніж на добу. У LEOCAR можна не лише скористатися звичайним прокатом, але й орендувати автомобіль з можливістю його викупу. Така опція є надзвичайно зручною і має значні переваги порівняно зі стандартним автокредитуванням.</p>
            <p>LEOCAR пропонує вигідні умови для оренди автомобілів з опцією викупу у Львові та інших регіональних центрах України.</p>
            <p>Процес оренди авто з правом викупу полягає у тому, що клієнт бере машину напрокат з метою постійного використання. Укладається договір оренди, і клієнт платить за оренду, паралельно вносячи суми за право викупу відповідно до умов договору.</p>
            <p>Необхідний мінімальний пакет документів включає паспорт, ІПН, водійське посвідчення та перший внесок від 10% від вартості машини.</p>
            <p>Оренда з правом викупу доступна в таких містах як Львів, Київ та Івано-Франківськ, Тернопіль, Луцьк, Рівне, Житомир, Ужгород та інші за умови, що клієнту вже виповнилося 21 рік, він має водійський стаж від 3 років і готовий внести аванс у розмірі 10% від вартості авто.</p>
            <p>Угода передбачає регулярні щомісячні платежі, прив'язані до курсу долара США, і після здійснення останньої виплати машина переходить у власність клієнта.</p>
            <p>LEOCAR забезпечує прозорість умов, без будь-яких прихованих платежів чи доплат.</p>
            <p>Оренда з правом викупу в LEOCAR актуальна для як фізичних, так і юридичних осіб, особливо коли необхідно терміново отримати автомобіль без можливості оплатити його повну вартість.</p>
            <p>Переваги оренди з правом викупу перед автокредитом включають швидкість і простоту оформлення, без вимог  довідки про доходи чи кредитної історії.</p>
            <p>Клієнти можуть користуватися автомобілем відразу після підписання договору і мають можливість змінити модель машини протягом терміну оренди.</p>
        </div>
    </div>
</div>