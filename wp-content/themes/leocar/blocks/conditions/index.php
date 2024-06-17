<section id="leo-conditions" class="pt-20 pt-4 pb-9 1024:pb-8 1100:pt-24 1100:mt-20">
	 <div class="container">
		<?php if(get_field('text')) { ?>
			<h2 class="text-xl/[1.4]"><?=get_field('text')?></h2>
		<?php   } ?>
		<div class="mt-10 flex flex-col gap-2 1024:flex-row 1024:gap-[18px]">
			<?php if(get_field('spisok')) foreach(get_field('spisok') as $item) { ?>
			<div class="bg-[#40404033] px-5 py-6 rounded-md 1024:w-[calc(33.33%-12px)] 1024:px-9 1024:pt-11 1024:pb-[70px]">
				<div class="mb-1">
					<p class="relative font-700 text-xl pl-8 before:absolute before:top-[2px] before:left-0 before:w-5 before:h-5 before:bg-[url(../images/svg/green-check.svg)] before:bg-contain before:bg-no-repeat before:bg-center 1024:text-[26px] 1024:pl-9 1024:before:w-7 1024:before:h-7 1024:before:top-[3px]"><?=$item['title']?></p>
				</div>
				<div class="text-sm/[1.6] 1024:text-[15px] 1024:mt-3">
					<?=$item['text_1']?> <strong class="font-700 font-normal"><?=$item['text_2']?></strong>
				</div>
			</div>
			<?php   } ?>
		</div>
		<div class="text-center mt-9">
			<button class="show-conditions button 1024:max-w-[335px] mx-auto">
				<?=get_field('button_text')?>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
					<path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.9541C0 1.71419 0.286431 1.66116 0.456437 1.83044L7.25333 8.59804C7.77888 9.12133 8.57066 9.11302 9.10276 8.57861L15.7738 1.87873C15.8586 1.79353 16 1.83386 16 1.9541V10.9541C16 11.5064 15.5523 11.9541 15 11.9541H1C0.447715 11.9541 0 11.5064 0 10.9541V1.9541ZM1.86338 1.80842C1.54735 1.49375 1.77019 0.954102 2.21617 0.954102H15C15.1175 0.954102 15.1576 1.09218 15.0747 1.17546L8.49122 7.7874C8.31385 7.96554 8.04993 7.96831 7.87474 7.79388L1.86338 1.80842Z" fill="#FAFAFA"></path>
				</svg>
			</button>
		</div>
	 </div>
</section>