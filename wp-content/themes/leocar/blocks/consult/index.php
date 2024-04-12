<section class="leo-consult relative pt-28 pb-12 768:pb-56 1100:pt-44 1100:pb-52">
    <picture class="absolute top-0 left-0 w-full h-full 1024:left-auto 1024:right-0 1024:w-7/12">
        <source srcset="<?php renderImages('form-bg-desktop.png'); ?>" media="(min-width:768px)" />
        <img src="<?php renderImages('form-bg.png'); ?>" alt="toyota" class="block h-full w-full object-cover 1024:object-contain" />
    </picture>
    <div class="container h-full 1024:flex 1024:justify-between 1024:items-center">
        <div class="text-xl/[1.4] 1024:w-5/12 1024:text-5xl/[1.4]">Залиште свої контакти і наш менеджер зв'яжеться з вами найближчим часом, щоб відповісти на всі запитання!</div>
        <div class="1024:w-6/12">
            <div class="form-bg w-full mt-7 px-7 pt-7 pb-8 rounded-[1.25rem] 500:max-w-[485px] 500:mx-auto 1100:px-9 1100:py-12">
                <h2>Замовити консультацію</h2>
                <?php echo do_shortcode( '[contact-form-7 id="21cfd70" title="Замовити консультацію"]' ); ?>
            </div>
        </div>
    </div>
</section>