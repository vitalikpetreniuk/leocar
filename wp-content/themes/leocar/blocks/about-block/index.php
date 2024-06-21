<section class="leo-about-block pt-16 1024:pt-24">
	<div class="container">
		<div class="flex flex-col gap-4 1024:flex-row 1024:items-center 1024:gap-12">
			<div class="relative grow shrink-0 basis-[auto] max-w-[610px] mx-auto rounded-[20px] overflow-hidden 1024:max-w-none 1024:w-[50%]">
                <?php echo wp_get_attachment_image(get_field('image'), 'full', false, ['class' => "w-full h-full object-cover"]); ?>
                <?php if(get_field('subtitle')) { ?>
                    <p class="absolute bottom-0 left-0 w-full font-700 text-sm text-center px-3 py-4 bg-[#40404033] blur-15 z-[2] 1024:text-base"><?=get_field('subtitle')?></p>
                <?php   } ?>
			</div>
			<div class="">
                <?php if(get_field('title')) { ?>
                <p class="font-700 text-xl mb-2 1024:mb-5"><?=get_field('title')?></p>
                <?php   } ?>
				<div class="flex flex-col gap-5 text-sm 1024:text-[15px]">
                    <?php if(get_field('text')) echo get_field('text'); ?>
				</div>
			</div>
		</div>
	</div>
</section>