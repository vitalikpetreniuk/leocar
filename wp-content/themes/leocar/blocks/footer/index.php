<footer class="mt-28 pt-8 1100:pt-10">
    <div class="container">
        <div class="flex flex-col 1024:flex-row 1024:justify-between 1024:items-center">
            <a class="leo-logo block w-52 1024:w-64" href="/"><?php renderAssetsSVG('svg/logo'); ?></a>
            <div class="font-400 text-2xl/normal mt-6 1024:mt-0 1024:text-3xl/normal"><span class="text-accent">Leocar</span> - комфортна оренда авто</div>
        </div>
        <div class="flex flex-wrap 1024:mt-8 1024:flex-nowrap">
            <div class="leo-social w-full mt-9 flex 1024:w-2/12 1024:mt-0 1024:flex-wrap">
                <div class="w-1/2 820:w-full">
                    <span class="font-400 uppercase opacity-40">Стежити за нами</span>
                    <div class="mm-social mt-2.5">
                        <ul class="flex flex-wrap justify-start items-center gap-2">
                            <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/instagram.png'); ?>" alt="instagram"></a></li>
                            <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/facebook.png'); ?>" alt="facebook"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="w-1/2 820:w-full 820:mt-6">
                    <span class="font-400 uppercase opacity-40">Написати нам</span>
                    <div class="mm-social mt-2.5">
                        <ul class="flex flex-wrap justify-start items-center gap-2">
                            <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/telegram.png'); ?>" alt="telegram"></a></li>
                            <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/viber.png'); ?>" alt="viber"></a></li>
                            <li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="#"><img src="<?php renderImages('icons/whatsapp.png'); ?>" alt="whatsapp"></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="quick-links w-full mt-9 1024:w-4/12 1024:mt-0 1024:pl-7 1024:box-border">
                <span class="font-400 uppercase opacity-40">Послуги</span>
                <ul class="mt-4 flex flex-col gap-y-1 1024:gap-y-2 1024:leading-[1.6]">
                    <li><a href="#leo-reasons">Подобова оренда</a></li>
                    <li><a href="#leo-subscription">Авто під викуп</a></li>
                    <li><a href="#leo-catalog">Підписка на авто від 1 до 36 місяців</a></li>
                </ul>
            </div>
            <div class="w-full mt-9 1024:w-1/3 1024:mt-0">
                <span class="font-400 uppercase opacity-40">Контакти</span>
                <ul class="mm-contact mt-4 flex flex-col gap-y-1 1024:gap-y-2 1024:leading-[1.6]">
                    <li><a class="flex justify-start items-center gap-x-2 !text-white" href="mailto:ua.leocar@gmail.com"><?php renderAssetsSVG('svg/mail-green'); ?>ua.leocar@gmail.com</a></li>
                    <li><a class="flex justify-start items-center gap-x-2 !text-white" href="tel:+380930393333"><?php renderAssetsSVG('svg/phone-green'); ?>+38 (093) 039 33 33</a></li>
                </ul>
            </div>
            <div class="w-full mt-6 1024:w-1/3 1024:mt-0  1024:leading-[1.6]">
                <span class="font-400 uppercase opacity-40">Адреса</span>
                <div class="mt-4 pl-5 bg-[url('../images/svg/pin-green.svg')] bg-no-repeat  bg-[left_4px] font-400"><p>Вулиця Княгині Ольги, 5а, Львів,<br> Львівська область, 79026</p></div>
                <div class="payment-svg mt-2 opacity-70 1024:ml-6"><?php renderAssetsSVG('svg/payment'); ?></div>
            </div>
        </div>
    </div>
    <div class="bg-black mt-9 pt-6 pb-5 1024:py-1 1100:mt-14">
        <div class="container flex flex-col gap-y-5 1024:flex-row 1024:items-center">
            <ul class="opacity-70 flex flex-col gap-y-2 1024:order-2 1024:w-4/12 1024:mt-0 1024:flex-row 1024:justify-end 1024:gap-x-4 1100:gap-x-8">
                <li class="1024:text-sm/[1.4] 1100:text-base/[1.4]"><a href="#">Правила та умови</a></li>
                <li class="1024:text-sm/[1.4] 1100:text-base/[1.4]"><a href="#">Політика конфіденційності</a></li>
            </ul>
            <div class="opacity-70 1024:order-0 1024:w-4/12 1024:text-sm/[1.4] 1100:text-base/[1.4]">© 2024 Leocar. Всі права захищені</div>
            <div class="nine 1024:text-center 1024:order-1 1024:w-4/12 1024:mt-0"><a class="inline-block 1024:p-4 1024:pb-3" href="#" target="_blank"><?php renderAssetsSVG('svg/nine'); ?></a></div>
        </div>
    </div>
</footer>

<div id="leo-modals" class="invisible opacity-0 transition duration-100 fixed top-0 left-0 w-full h-full z-[20] bg-[rgba(0,0,0,.31)] blur-25">
    <div class="modal call invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>

        <h2>Замовити консультацію</h2>
        <?php echo do_shortcode( '[contact-form-7 id="82c8cc3" title="Замовити консультацію"]' ); ?>
    </div>
    <div class="modal drive invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>

        <h2>Замовити тест-драйв</h2>
        <?php echo do_shortcode( '[contact-form-7 id="acc4068" title="Замовити тест-драйв"]' ); ?>
    </div>

    <div class="modal thanks invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
        <h2 class="text-center">Дякуємо за Ваш запит!</h2>
        <span class="block mt-1 text-center">Наш менеджер зв’яжеться з вами найближчим часом</span>
    </div>
</div>
