<section id="leo-reasons" class="leo-reasons mt-16 pt-8 pb-9 1024:mt-32 1024:pb-16 1100:mt-0 1100:pt-48 1100:pb-44">
    <div class="container">
        <div class="flex flex-col gap-y-8 1024:flex-row 1024:flex-wrap 1024:gap-y-10">
            <?php if(get_field('list_items')) foreach(get_field('list_items') as $item)  {  ?>
                <div class="flex justify-start items-start gap-x-2.5 1024:w-1/2">
                    <span class="block basis-10 flex-grow-0 flex-shrink-0 1100:basis-[3.875rem]">
                    <?php echo wp_get_attachment_image($item['image'], 'full'); ?>
                    </span>
                    <div>
                        <div class="font-700 uppercase 1100:text-3xl/[1.4]"><?=$item['title']?></div>
                        <span class="opacity-70 max-w-[calc(100%-2.5rem)]"><?=$item['text']?></span>
                    </div>
                </div>
            <?php } ?>
        </div>
        <?php if(get_field('button_text')) { ?>
            <button class="test-drive button mt-6 1024:max-w-[335px] 1024:ml-[50%] 1100:ml-[calc(50%+4.5rem)]"><?=get_field('button_text')?></button>
        <?php   } ?>
    </div>
</section>