<section class="leo-conditions mt-16 pt-4 py-4 bg-[url('../images/types.png')] bg-no-repeat bg-center bg-[100vw_auto] 1024:mt-0 1024:pt-44 1024:pb-16 768:bg-[url('../images/types-desktop.png')] 768:bg-[auto_100%]">
    <div class="container">
        <?php if(get_field('title')) { ?>
            <h2><?=get_field('title')?></h2>
        <?php   } ?>
        <div class="flex flex-col gap-y-10 1024:items-end 1024:flex-row 1024:justify-center 1024:gap-x-16">
            <?php if(get_field('spisok')) foreach(get_field('spisok') as $item)  { ?>
                <div class="w-[233px] mx-auto 1024:mx-0">
                    <span class="relative block">
                        <?php echo wp_get_attachment_image($item['image'], 'full', false, ['class' => "relative z-[2] block w-full"]); ?>
                    </span>
                    <span class="block mt-1 text-xl text-white text-center"><?=$item['text']?></span>
                </div>
            <?php } ?>
        </div>
    </div>
</section>