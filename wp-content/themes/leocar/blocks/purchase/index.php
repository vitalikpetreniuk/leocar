<section id="leo-purchase" class="leo-purchase mt-16 pt-8 pb-11 bg-[url('../images/purchase-mobile.jpg')] bg-no-repeat bg-cover 1024:bg-[url('../images/purchase.jpg')] 1024:pt-[27vw] 1024:pb-16 1100:pt-96">
    <div class="container 1024:flex 1024:gap-x-5">
        <div class="text-xl/[1.6] 1024:w-1/2 1024:text-2xl/[1.6] 1100:text-3xl/[1.6] 1100:pr-4"><p><?php esc_html_e('Послуга','leocar'); ?> <strong class="font-700 font-normal"><?php esc_html_e('Авто під викуп','leocar'); ?></strong> <?=get_field('text')?></p></div>
        <div class="mt-48 1024:mt-0 1024:w-1/2">
            <div>
                <div class="font-700 text-xl w-10/12"><?=get_field('title')?></div>
                <ul class="mt-4 flex flex-col gap-y-2 1024:flex-row 1024:flex-wrap 1100:gap-y-4">
                    <?php if(get_field('list_items')) foreach(get_field('list_items') as $item)  { ?>
                        <li class="flex justify-start items-center gap-x-3 1024:w-1/2 1100:text-xl"><span class="block basis-10 flex-grow-0 flex-shrink-0"><?php if($item['image']) echo file_get_contents($item['image']); ?></span><?=$item['zagolovok']?></li>
                    <?php } ?>
                </ul>
            </div>
            <?php if(get_field('button_text')) { ?>
                <button class="test-drive button mt-5 1024:max-w-[335px]"><?php echo get_field('button_text')?></button>
            <?php } ?>
        </div>
    </div>
</section>