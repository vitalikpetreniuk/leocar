<section class="leo-type mt-16 pt-4 py-4 1100:mt-28">
    <div class="container">
        <?php if(get_field('title')) { ?>
            <h2><?=get_field('title')?></h2>
        <?php   } ?>

        <div class="mt-11 flex flex-wrap gap-x-3.5 gap-y-7 1024:mt-12 1024:flex-nowrap 1024:gap-x-5">
            <?php if(get_field('spisok')) foreach(get_field('spisok') as $item)  { ?>
                <div class="w-[calc(50%-.4375rem)] 1024:w-1/4">
                    <span class="relative block before:content-[''] before:block before:absolute before:bottom-0 before:left-0 before:w-full before:h-9 before:rounded-[2.5rem] before:bg-[#1F1F1F]">
                        <?php echo wp_get_attachment_image($item['image'], 'full', false, ['class' => "relative z-[2] block w-full"]); ?>
                    </span>
                    <span class="block mt-2.5 text-small opacity-70 768:text-center"><?=$item['text']?></span>
                </div>
            <?php } ?>
        </div>
    </div>
</section>