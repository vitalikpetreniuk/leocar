<section id="leo-purchase" class="leo-purchase pt-14 pb-14 bg-[url('../images/purchase-mobile.jpg')] bg-no-repeat bg-cover 1024:bg-[url('../images/purchase.jpg')] 1024:pt-[134px] 1024:pb-28">
	 <div class="container 1024:flex 1024:justify-between 1024:gap-x-5">
		<div class="">
			<p class="font-700 text-lg"><?=get_field('title')?></p>
			<ul class="mt-4 flex flex-col gap-y-2 1100:gap-y-4">
				<?php if(get_field('list_items')) foreach(get_field('list_items') as $item)  { ?>
					<li class="relative flex justify-start items-center gap-x-3 text-[#fafafacc] pl-6 before:absolute before:top-[2px] before:left-0 before:w-4 before:h-4 before:bg-[url(../images/svg/green-check-02.svg)] before:bg-contain before:bg-no-repeat before:bg-center 1100:text-xl"><?=$item['zagolovok']?></li>
				<?php } ?>
			</ul>
		</div>
		<div class="mt-48 1024:mt-0 1024:w-1/2">
			<div class="max-w-[610px]">
				<p class="font-700 text-lg 1024:text-[25px]"><?=get_field('text')?></p>
			</div>
			<?php if(get_field('button_text')) { ?>
				<button class="test-drive button mt-5 1024:max-w-[335px] 1024:mt-6"><?php echo get_field('button_text')?></button>
			<?php } ?>
		</div>
	</div>
</section>