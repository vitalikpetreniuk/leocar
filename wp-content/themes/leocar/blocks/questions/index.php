<section class="leo-questions relative pt-28 pb-16 768:pb-56 820:pb-20 1024:pb-0 1100:pt-44 1100:pb-32">
    <picture class="absolute top-0 left-0 w-full h-full 820:left-auto 820:top-0 820:right-0 820:w-7/12">
        <source srcset="<?php renderImages('form-bg-desktop.png'); ?>" media="(min-width:768px)" />
        <img src="<?php renderImages('form-bg.png'); ?>" alt="toyota" class="block w-full" />
    </picture>
    <div class="relative z-[2] container h-full 820:flex 820:justify-between 820:items-center">
        <div class="820:w-6/12 1100:pr-5 1100:box-border">
            <ul class="flex flex-wrap justify-start items-center gap-1 1100:gap-x-3.5">
                <li><a class="block w-6 h-6 rounded-full box-border hover:border hover:border-white 1100:w-9 1100:h-9" href="#"><img src="<?php renderImages('icons/telegram.png'); ?>" alt="telegram"></a></li>
                <li><a class="block w-6 h-6 rounded-full box-border hover:border hover:border-white 1100:w-9 1100:h-9" href="#"><img src="<?php renderImages('icons/instagram.png'); ?>" alt="instagram"></a></li>
                <li><a class="block w-6 h-6 rounded-full box-border hover:border hover:border-white 1100:w-9 1100:h-9" href="#"><img src="<?php renderImages('icons/viber.png'); ?>" alt="viber"></a></li>
                <li><a class="block w-6 h-6 rounded-full box-border hover:border hover:border-white 1100:w-9 1100:h-9" href="#"><img src="<?php renderImages('icons/facebook.png'); ?>" alt="facebook"></a></li>
                <li><a class="block w-6 h-6 rounded-full box-border hover:border hover:border-white 1100:w-9 1100:h-9" href="#"><img src="<?php renderImages('icons/whatsapp.png'); ?>" alt="whatsapp"></a></li>
            </ul>
            <h2 class="mt-4 !text-left !text-xl/[1.4] 820:text-3xl/[1.4] 1024:text-5xl/[1.4] 1100:mt-5 1100:!text-[30px]">Маєте запитання про послугу оренди з водієм – зв'яжіться з нами</h2>
            <ul class="flex flex-col gap-y-1 mt-7 font-700 text-sm 1100:mt-20 1100:gap-y-2.5">
                <li><a href="tel:+380930393333" class="flex justify-start items-center gap-x-1.5 1100:text-2xl 1100:gap-x-2.5"><span class="flex justify-center items-center w-5 h-5 min-w-5 rounded-[50%] bg-accent/[.2] 1100:w-7 1100:h-7"><?php renderAssetsSVG('svg/phone-green'); ?></span>+38 (093) 039 33 33</a></li>
                <li><a href="mailto:ua.leocar@gmail.com" class="flex justify-start items-center gap-x-1.5 1100:text-2xl 1100:gap-x-2.5"><span class="flex justify-center items-center w-5 h-5 min-w-5 rounded-[50%] bg-accent/[.2] 1100:w-7 1100:h-7"><?php renderAssetsSVG('svg/mail-green'); ?></span>ua.leocar@gmail.com</a></li>
            </ul>
        </div>
        <div class="820:w-6/12">
            <div class="form-bg w-full mt-7 px-7 pt-7 pb-8 rounded-[1.25rem] 500:max-w-[485px] 500:mx-auto 1100:px-9 1100:py-12">
                <h2 class="!text-left">Замовити консультацію</h2>
                <?php echo do_shortcode( '[contact-form-7 id="21cfd70" title="Замовити консультацію"]' ); ?>
            </div>
        </div>
    </div>
</section>