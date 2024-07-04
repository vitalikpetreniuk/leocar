<section id="leo-subscription" class="leo-subscription pt-8 pb-11 bg-[url('../images/subscription-mobile.jpg')] bg-no-repeat bg-cover 1024:bg-[url('../images/subscription.jpg')] 1024:pt-[27vw] 1024:pb-16 1100:pt-96">
    <div class="container 1024:flex 1024:gap-x-5">
        <div class="text-xl/[1.6] 1024:w-1/2 1024:text-2xl/[1.6] 1100:text-3xl/[1.6]"><p><?php esc_html_e('Послуга','leocar'); ?> <strong class="font-700 font-normal"><?php esc_html_e('Авто за підпискою','leocar'); ?></strong>
            <?=get_field('text_1')?></p></div>
        <div class="mt-24 1024:mt-0 1024:w-1/2">
            <div>
                <div class="font-700 text-xl"><?=get_field('text_2')?></div>
                <ul class="mt-4 flex flex-col gap-y-2 1024:flex-row 1024:flex-wrap 1100:gap-y-4">
                    <?php if(get_field('list_items')) foreach(explode(PHP_EOL,get_field('list_items')) as $key=>$item)  { ?>
                        <li class="flex justify-start items-center gap-x-3 1024:w-1/2 1100:text-xl"><span class="flex justify-center items-center w-10 h-9 rounded-2xl bg-accent/[.2] font-700 text-2xl text-accent"><?=$key+1?></span><?=$item?></li>
                    <?php } ?>
                </ul>
            </div>
            <?php if(get_field('button_text')) { ?>
                <button class="test-drive button mt-5 1024:max-w-[335px]"><?=get_field('button_text')?></button>
            <?php   } ?>
        </div>
    </div>
</section>