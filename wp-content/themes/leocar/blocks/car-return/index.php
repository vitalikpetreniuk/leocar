<section class="leo-car-return pt- 1024:pt-24 1024:pb-12">
	<div class="container">
		<div class="1024:flex 1024:items-start">
			<div class="mb-5 max-w-[500px] 1024:mb-0 1024:pr-9">
                <?php if(get_field('title')) { ?>
                <p class="font-700 text-xl 768:text-3xl 1024:mb-24"><?=get_field('title')?></p>
                <?php   } ?>
				<div class="hidden flex-col gap-2 1024:flex">
                    <?php if(get_field('address','options')) { ?>
					<a class="flex items-center gap-2" href="#">
						<div class="w-7 h-7 1024:w-5 1024:h-5">
							<img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-location.png" alt="">
						</div>
						<p class="text-body font-700 text-[15px]"><?=get_field('address','options')?></p>
					</a>
                    <?php   } ?>
                    <?php if(get_field('phone','options')) { ?>
					<a class="flex items-center gap-2" href="tel:<?=str_replace([' ','-','(',')'],'',get_field('phone','options'))?>">
						<div class="w-7 h-7 1024:w-5 1024:h-5">
							<img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-tel.png" alt="">
						</div>
						<p class="text-body font-700 text-[15px]"><?=get_field('phone','options')?></p>
					</a>
                    <?php   } ?>
                    <?php if(get_field('email','options')) { ?>
					<a class="flex items-center gap-2" href="mailto:<?=get_field('email','options')?>">
						<div class="w-7 h-7 1024:w-5 1024:h-5">
							<img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-mail.png" alt="">
						</div>
						<p class="text-body font-700 text-[15px]"><?=get_field('email','options')?></p>
					</a>
                    <?php   } ?>
				</div>
			</div>
			<div class="relative flex flex-col gap-1 mb-6 1024:w-full 1024:before:absolute 1024:before:top-[-80px] 1024:before:right-[-20px] 1024:before:w-[200px] 1024:before:h-[200px] 1024:before:bg-[url(../images/car-return-decor.png)] 1024:before:bg-contain 1024:before:bg-no-repeat 1024:before:bg-center 1024:before:pointer-events-none z-[2]">
                <?php if(get_field('list_items')) foreach(get_field('list_items') as $item)  { ?>
                    <div class="leo-car-return__spoiler bg-[#1c1c1c] px-4 rounded-[20px] 1024:px-8">
                        <?php if($item['zagolovok']) { ?>
                        <h5 class="dissolve cursor-pointer relative py-4 pr-6 flex justify-between items-top text-lg">
                            <?=$item['zagolovok']?>
                        </h5>
                        <?php   } ?>
                        <ul class="hidden flex-col gap-6 pb-7">
                            <?php if($item['list_items']) foreach($item['list_items'] as $key=>$item_1)  { ?>
                                <li class="">
                                    <div class="flex items-center gap-2 mb-2">
                                        <p class="inline-flex items-center justify-center font-700 text-sm leading-none w-7 h-7 rounded-full bg-[#27ac5a33] text-accent"><?=$key+1?></p>
                                        <p class="font-700 text-xl leading-none"><?=$item_1['title']?></p>
                                    </div>
                                    <p class="pl-9">
                                        <?=$item_1['text']?>
                                    </p>
                                </li>
                            <?php } ?>
                        </ul>
                    </div>
                <?php } ?>
			</div>
			<div class="flex flex-col gap-2 1024:hidden">
                <?php if(get_field('address','options')) { ?>
                    <a class="flex items-center gap-2" href="#">
                        <div class="w-7 h-7 1024:w-5 1024:h-5">
                            <img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-location.png" alt="">
                        </div>
                        <p class="text-body font-700 text-[15px]"><?=get_field('address','options')?></p>
                    </a>
                <?php   } ?>
                <?php if(get_field('phone','options')) { ?>
                    <a class="flex items-center gap-2" href="tel:<?=str_replace([' ','-','(',')'],'',get_field('phone','options'))?>">
                        <div class="w-7 h-7 1024:w-5 1024:h-5">
                            <img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-tel.png" alt="">
                        </div>
                        <p class="text-body font-700 text-[15px]"><?=get_field('phone','options')?></p>
                    </a>
                <?php   } ?>
                <?php if(get_field('email','options')) { ?>
                    <a class="flex items-center gap-2" href="mailto:<?=get_field('email','options')?>">
                        <div class="w-7 h-7 1024:w-5 1024:h-5">
                            <img class="w-full h-full object-contain" src="/wp-content/themes/leocar/assets/images/icons/header-mail.png" alt="">
                        </div>
                        <p class="text-body font-700 text-[15px]"><?=get_field('email','options')?></p>
                    </a>
                <?php   } ?>
            </div>
		</div>
	</div>
</section>