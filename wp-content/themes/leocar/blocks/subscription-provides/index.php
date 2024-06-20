<section class="leo-subscription-provides pt-28 pb-16">
	<div class="container">
		<div class="1024:flex 1024:items-start 1024:gap-10">
			<div class="mb-6 1024:mb-0 grow-0 shrink-0 basis-[274px]">
				<?php if(get_field('title')) { ?>
                <p class="font-700 text-2xl 1024:text-3xl 1024:mb-6"><?=get_field('title')?></p>
                <?php   } ?>
                <?php if(get_field('button')['title']&&get_field('button')['url']) { ?>
                    <a class="button hidden max-w-none 1024:flex" target="<?=get_field('button')['title']?>" href="<?=get_field('button')['url']?>"><?=get_field('button')['title']?></a>
                <?php   } ?>
			</div>
			<ul class="flex flex-col gap-2 mb-6 768:flex-row 768:flex-wrap 768:gap-x-5 768:gap-y-7 1440:gap-x-[18px]">
                <?php if(get_field('text')) foreach(explode(PHP_EOL, get_field('text')) as $item)  { ?>
                    <li class="relative flex items-center min-h-[37px] pl-12 before:absolute before:top-[50%] before:translate-y-[-50%] before:left-0 before:w-10 before:h-9 before:bg-[url(../images/icons/point-plus.png)] before:bg-contain before:bg-no-repeat before:bg-center 768:w-[calc(50%-10px)] 1440:w-[calc(33.33%-12px)]"><?=$item?></li>
                <?php } ?>
			</ul>
            <?php if(get_field('button')['title']&&get_field('button')['url']) { ?>
                <a class="button max-w-none 1024:hidden" target="<?=get_field('button')['title']?>" href="<?=get_field('button')['url']?>"><?=get_field('button')['title']?></a>
            <?php   } ?>
		</div>
	</div>
</section>