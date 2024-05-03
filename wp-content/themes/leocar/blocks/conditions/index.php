<section id="leo-conditions" class="pt-20 py-4 1100:pt-24 1100:mt-20">
    <div class="container flex flex-col 1024:flex-row 1024:gap-x-5">
        <?php if(get_field('text')) { ?>
            <div class="text-xl/[1.4] opacity-70 1024:hidden"><?=get_field('text')?></div>
        <?php   } ?>
        <div class="mt-10 flex flex-col gap-y-5 1024:w-7/12 1024:flex-row 1024:justify-start 1024:gap-x-12 1024:mt-9">
            <?php if(get_field('spisok')) foreach(get_field('spisok') as $item) { ?>
            <div class="flex items-center 1024:flex-col 1024:max-w-[190px]">
                <div class="basis-[120px] shrink-0 1024:basis-auto 1024:w-full">
                    <span class="inline-block h-11 px-4 rounded-[40px] bg-condition font-700 text-[1.875rem]/[2.75rem] text-accent text-center 1024:w-full 1024:max-w-[190px] 1024:text-[3.125rem]">
                        <span class="inline-block 1024:relative 1024:-top-6"><?=$item['title']?></span>
                    </span>
                </div>
                    <div class="text-sm/[1.6] 1024:mt-3"><?=$item['text_1']?> <strong class="font-700 font-normal"><?=$item['text_2']?></strong>
                </div>
            </div>
            <?php   } ?>
        </div>
        <div class=" 1024:w-5/12">
            <div class="hidden text-5xl/[1.4] opacity-70 1024:block"><?=get_field('text')?></div>
            <button class="show-conditions button button-transparent mt-9 1024:max-w-[335px] 1024:mt-5"><?=get_field('button_text')?></button>
        </div>
    </div>
</section>