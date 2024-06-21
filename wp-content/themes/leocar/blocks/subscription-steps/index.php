<section class="leo-subscription-steps pt-16 pb-16">
	<div class="container">
		<div class="1024:flex 1024:items-start 1024:gap-10">
			<div class="mb-6 1024:mb-0 grow-0 shrink-0 basis-[274px]">
                <?php if(get_field('title')) { ?>
                <p class="font-700 text-2xl 1024:text-3xl 1024:mb-6"><?=get_field('title')?></p>
                <?php   } ?>
                <button class="require-call button hidden max-w-none mb-2 1024:flex"><?php esc_html_e('Замовити консультацію','leocar'); ?></button>
                <?php if(get_field('button_2')['title']&&get_field('button_2')['url']) { ?>
                    <a class="button button-transparent hidden max-w-none 1024:flex" target="<?=get_field('button_2')['title']?>" href="<?=get_field('button_2')['url']?>"><?=get_field('button_2')['title']?></a>
                <?php   } ?>
			</div>
			<ul class="flex flex-col gap-6 mb-6 768:flex-row 768:flex-wrap 768:gap-[20px] 1024:gap-[18px]">
                <?php if(get_field('list_items')) foreach(get_field('list_items') as $key=>$item)  { ?>
                    <li class="768:w-[calc(50%-10px)] 1024:w-[calc(33.33%-12px)]">
                        <div class="flex items-center gap-2 mb-2">
                            <p class="inline-flex items-center justify-center font-700 text-sm leading-none w-7 h-7 rounded-full bg-[#27ac5a33] text-accent"><?=$key+1?></p>
                            <p class="font-700 text-xl leading-none"><?=$item['title']?></p>
                        </div>
                        <p class="">
                            <?=$item['text']?>
                        </p>
                    </li>
                <?php } ?>
			</ul>
            <button class="require-call button max-w-none mb-2 1024:hidden"><?php esc_html_e('Замовити консультацію','leocar'); ?></button>
            <?php if(get_field('button_2')['title']&&get_field('button_2')['url']) { ?>
                <a class="button button-transparent max-w-none 1024:hidden" target="<?=get_field('button_2')['title']?>" href="<?=get_field('button_2')['url']?>"><?=get_field('button_2')['title']?></a>
            <?php   } ?>
		</div>
	</div>
</section>