<section id="leo-personal-driver" class="pt-12 820:mt-32">
    <div class="container">
        <div class="flex flex-col gap-y-2.5 820:flex-wrap 820:flex-row 820:gap-5 1100:flex-nowrap">
            <div class="h-[111vw] box-border py-8 px-7 bg-[url('../images/car-with-driver.png')] bg-no-repeat bg-cover rounded-[5px] 820:h-auto 820:aspect-[1/1.1] 820:max-w-[calc(50%-10px)] 1100:max-w-[355px]">
                <?php if(get_field('title')) { ?>
                    <h2 class="!text-left text-3xl 1100:!text-3xl"><?=get_field('title')?></h2>
                <?php   } ?>
                <div class="mt-4 text-sm">
                    <?php if(get_field('text')) { ?><?=get_field('text')?><?php   } ?>
                </div>
            </div>
            <?php
            $svgs = ['car','ukraine','tier'];
            if(get_field('list_items')) foreach(get_field('list_items') as $key=>$item)  { ?>
                <div class="pd-item flex-grow w-full relative rounded-[5px] pt-5 pb-6 px-6 820:px-5 820:flex 820:flex-col 820:max-w-[calc(50%-10px)] 820:aspect-[1/1.1] 1100:aspect-none 1100:max-w-none">
                    <span class="plus absolute top-5 right-2.5 flex justify-center items-center w-10 h-10 820:hidden"><?php renderAssetsSVG('svg/plus'); ?></span>
                    <h3 class="font-400 text-xl flex justify-start items-center gap-x-2 820:order-0"><span class="inline-block w-9 h-9 rounded-[50%] bg-accent/[.2] flex justify-center items-center"><?php renderAssetsSVG('svg/'.$svgs[$key]); ?></span><?=$item['title']?></h3>
                    <div class="price mt-4 font-700 text-base 820:min-h-[42px] 820:order-2 820:mt-0 820:absolute 820:left-4 820:right-4 820:bottom-11">
                        <?=$item['price_1']?>
                        <span class="block font-400 text-[12px] text-[rgba(250, 250, 250, 0.70)]"><?=$item['price_2']?></span>
                    </div>
                    <div class="info mt-8 hidden 820:block 820:order-1 820:mt-4"><?=$item['tekst']?></div>
                </div>
            <?php } ?>
        </div>
        <?php if(get_field('button_text')) { ?>
            <button class="require-call button mt-4 max-w-none 820:mt-5 820:max-w-[272px] 820:mx-auto"><?=get_field('button_text')?></button>
        <?php   } ?>
    </div>
</section>