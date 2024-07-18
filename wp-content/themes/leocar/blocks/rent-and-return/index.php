<section id="leo-rent-return" class="mt-20">
    <div class="container">
        <div class="tabs-content 1280:px-5">
            <div class="rent-return relative">
                <?php if(get_field('title')) { ?>
                    <h2 class="text-center 1100:!text-3xl"><?=get_field('title')?></h2>
                <?php   } ?>

                <div class="relative">
                    <div class="rent-return-bg pt-8 pb-10 820:pt-10">
                        <?php renderAssetsSVG('svg/rent-return'); ?>
                        <?php renderAssetsSVG('svg/rent-return-desktop'); ?>
                    </div>

                    <div class="absolute top-[50%] left-0 right-0 translate-y-[-50%] flex flex-wrap flex-row 820:top-0 820:translate-y-0 820:pt-4 820:h-full 820:justify-between 1100:pt-3">
                        <div class="w-1/2 flex justify-center items-center 820:w-full 820:items-start">
                            <div class="1100:w-full">
                                <?php if(get_field('title_1')) { ?>
                                    <h4 class="font-700 text-base text-white uppercase opacity-40 820:pl-[8vw] 1100:text-2xl 1100:pl-36"><?=get_field('title_1')?></h4>
                                <?php   } ?>
                                <ul class="mt-4 flex flex-col gap-y-3 max-w-[130px] 820:pl-[8vw] 820:flex-row 820:max-w-none 1024:gap-x-5 1100:pl-36">
                                    <?php if(get_field('list_items_1')) foreach(get_field('list_items_1') as $key=>$item)  { ?>
                                        <li class="820:w-[18vw] 1100:max-w-[225px]">
                                            <div class="flex justify-start items-center gap-x-2.5 820:flex-col 820:justify-start 820:items-start">
                                                <span class="flex justify-center items-center w-[26px] min-w-[26px] h-[26px] rounded-[50%] text-accent text-sm/[1] bg-accent/[.2]"><?=$key+1?></span>
                                                <span class="text-sm 820:mt-1 1100:hidden"><?=$item['title']?></span>
                                                <span class="hidden 1100:block 1100:mt-2.5"><?=$item['text']?></span>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="w-1/2 flex justify-center items-center 820:w-full 820:items-end 820:pb-10 820:mb-5 1024:pb-16 1100:mb-2.5">
                            <div class="1100:w-full">
                                <?php if(get_field('title_2')) { ?>
                                    <h4 class="font-700 text-base text-white uppercase opacity-40 820:text-right 820:pr-[6vw] 1024:pr-[4vw] 1100:text-2xl 1100:pr-36"><?=get_field('title_2')?></h4>
                                <?php   } ?>
                                <ul class="mt-4 flex flex-col gap-y-3 max-w-[130px] 820:pl-[8vw] 820:flex-row-reverse 820:max-w-none 1024:gap-x-5 1024:pl-[4vw] 1100:pl-0 1100:pr-24">
                                    <?php if(get_field('list_items_2')) foreach(get_field('list_items_2') as $key=>$item)  { ?>
                                        <li class="820:w-[18vw] 1100:max-w-[225px]">
                                            <div class="flex justify-start items-center gap-x-2.5 820:flex-col 820:justify-start 820:items-start">
                                                <span class="flex justify-center items-center w-[26px] min-w-[26px] h-[26px] rounded-[50%] text-accent text-sm/[1] bg-accent/[.2]"><?=($key!=count(get_field('list_items_2'))-1)?$key+1:file_get_contents(get_template_directory_uri().'/assets/images/svg/starred.svg')?></span>
                                                <span class="text-sm 820:mt-1 1100:hidden"><?=$item['title']?></span>
                                                <span class="hidden 1100:block 1100:mt-2.5"><?=$item['text']?></span>
                                            </div>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="rent pb-7 1024:pb-20">
                <?php if(get_field('title_1')) { ?>
                    <h2 class="text-center 1100:!text-3xl"><?=get_field('title_1')?></h2>
                <?php   } ?>
                <ul class="mt-5 flex flex-col gap-y-5 1024:mt-20 1024:flex-row 1024:flex-wrap 1024:gap-x-9 1024:gap-y-12">
                    <?php if(get_field('list_items_1')) foreach(get_field('list_items_1') as $key=>$item)  { ?>
                        <li class="1024:w-[calc(50%-18px)]">
                            <h3 class="flex justify-start items-start gap-x-2.5"><span class="flex justify-center items-center w-[26px] h-[26px] rounded-[50%] text-accent text-sm/[1] bg-accent/[.2]"><?=$key+1?></span><?=$item['title_2']?></h3>
                            <span class="block mt-2.5">
                                <p><?=$item['text_2']?></p>
                            </span>
                            </li>
                    <?php } ?>
                </ul>
            </div>

            <div class="return pb-7 1024:pb-20">
                <?php if(get_field('title_2')) { ?>
                    <h2 class="text-center 1100:!text-3xl"><?=get_field('title_2')?></h2>
                <?php   } ?>
                <ul class="mt-5 flex flex-col gap-y-5 1024:mt-20 1024:flex-row 1024:flex-wrap 1024:gap-x-9 1024:gap-y-12">
                    <?php if(get_field('list_items_2')) foreach(get_field('list_items_2') as $key=>$item)  { ?>
                        <li class="1024:w-[calc(50%-18px)]">
                            <h3 class="flex justify-start items-start gap-x-2.5"><span class="flex justify-center items-center w-[26px] h-[26px] rounded-[50%] text-accent text-sm/[1] bg-accent/[.2]"><?=($key!=count(get_field('list_items_2'))-1)?$key+1:file_get_contents(get_template_directory_uri().'/assets/images/svg/starred.svg')?></span><?=$item['title_2']?></h3>
                            <span class="block mt-2.5">
                                <p><?=$item['text_2']?></p>
                            </span>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <ul class="tabs-list flex justify-center items-center gap-x-1 820:max-w-[340px] 820:mx-auto">
            <?php if(get_field('title_3')) { ?>
                <li class="cursor-pointer w-full h-7 flex-grow text-center text-sm/[28px] text-[#999999] bg-dark rounded-[20px]"><?=get_field('title_3')?></li>
            <?php   } ?>
            <?php if(get_field('title_1')) { ?>
                <li class="cursor-pointer w-full h-7 flex-grow text-center text-sm/[28px] text-[#999999] bg-dark rounded-[20px]"><?=get_field('title_1')?></li>
            <?php   } ?>
            <?php if(get_field('title_2')) { ?>
                <li class="cursor-pointer w-full h-7 flex-grow text-center text-sm/[28px] text-[#999999] bg-dark rounded-[20px]"><?=get_field('title_2')?></li>
            <?php   } ?>
        </ul>
        <?php if(get_field('button_text')) { ?>
            <button class="require-call button mt-2.5 820:max-w-[340px] 820:mx-auto 1100:mt-5"><?=get_field('button_text')?></button>
        <?php   } ?>
    </div>
</section>