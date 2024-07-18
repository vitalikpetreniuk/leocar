<section class="leo-seo mt-28">
    <div class="container">
        <?php if(get_field('title')) { ?>
            <h2 class="!text-left"><?=get_field('title')?></h2>
        <?php   } ?>
        <div class="outer-text mt-4 1100:mt-7">
            <div class="inner-text text-base/[1.6] text-white/[.7]">
                <?php if(get_field('text')) { ?><p class=""><?=get_field('text')?></p><?php   } ?>
            </div>
        </div>
        <button class="button button-no-hover mt-6 1024:max-w-[220px]"><?php esc_html_e('Дивитись все','leocar'); ?></button>
    </div>
</section>
