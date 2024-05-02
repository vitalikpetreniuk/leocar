<section class="leo-consult relative pt-28 pb-12 768:pb-56 820:pb-20 1024:pb-0 1100:pt-44 1100:pb-52">
    <picture class="absolute -top-20 left-0 w-full h-full 820:left-auto 820:top-0 820:right-0 820:w-7/12">
        <source srcset="<?php renderImages('form-bg-desktop.png'); ?>" media="(min-width:768px)" />
        <img src="<?php renderImages('form-bg.png'); ?>" alt="toyota" class="block w-full" />
    </picture>
    <div class="container h-full 820:flex 820:justify-between 820:items-center">
        <div class="text-xl/[1.4] opacity-70 820:w-5/12 820:text-3xl/[1.4] 1024:text-5xl/[1.4]"><?=get_field('text')?></div>
        <div class="820:w-6/12">
            <div class="form-bg w-full mt-7 px-7 pt-7 pb-8 rounded-[1.25rem] 500:max-w-[485px] 500:mx-auto 1100:px-9 1100:py-12">
                <h2><?=get_field('title')?></h2>
                <?php echo do_shortcode( '[contact-form-7 id="21cfd70" title="Замовити консультацію"]' ); ?>
            </div>
        </div>
    </div>
</section>