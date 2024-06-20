<section class="leo-redemption-algorithm bg-[#40404033] py-16 mt-9 1024:py-24 1024:mt-8">
	<div class="container">
        <?php if(get_field('title')) { ?>
            <h2 class="mb-8"><?=get_field('title')?></h2>
        <?php   } ?>
			<ul class="flex flex-col gap-6 mb-6 768:flex-row 768:flex-wrap 768:gap-[20px] 1024:gap-[18px] 1440:gap-[15px]">
                <?php if(get_field('list_items')) foreach(get_field('list_items') as $key=>$item)  { ?>
                    <li class="768:w-[calc(50%-10px)] 1024:w-[calc(33.33%-12px)] 1440:w-[calc(20%-12px)]">
                        <div class="flex items-center gap-2 mb-2 1024:mb-5">
                            <p class="inline-flex items-center justify-center font-700 text-sm leading-none w-7 h-7 rounded-full bg-[#27ac5a33] text-accent"><?=$key+1?></p>
                            <p class="font-700 text-xl leading-none"><?=$item['title']?></p>
                        </div>
                        <p class="pl-9 768:pl-0">
                            <?=$item['text']?>
                        </p>
                    </li>
                <?php } ?>
			</ul>
        <?php if(get_field('button')['title']&&get_field('button')['url']) { ?>
            <a class="button button-no-hover mt-4 768:max-w-[275px] 768:mx-auto 1100:mt-9" target="<?=get_field('button')['title']?>" href="<?=get_field('button')['url']?>"><?=get_field('button')['title']?></a>
        <?php   } ?>
	</div>
</section>