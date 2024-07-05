<footer class="footer-landing mt-28 pt-8 pb-32 1100:pt-12 1280:pb-40 1440:pb-12">
	<div class="container">
		<div class="flex flex-col gap-9 768:flex-row 768:flex-wrap 768:gap-x-[50px] 768:gap-y-8 1280:gap-[36px]">
			<div class="768:w-[calc(50%-25px)] 1280:w-[calc(30%-27px)]">
				<a href="<?=home_url()?>" class="leo-logo block w-60 1280:w-[300px]">
					<img src="<?= get_field('logo','options'); ?>" alt="">
				</a>
			</div>
			<div class="leo-social 768:w-[calc(50%-25px)] 1280:w-[calc(20%-27px)]">
				<span class="font-700 uppercase"><?php esc_html_e('стежити за нами','leocar'); ?></span>
				<div class="mm-social mt-4">
					<ul class="flex justify-start items-center gap-x-3.5">
						<?php if(get_field('instagram','options')) { ?>
							<li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('instagram','options')?>"><img src="<?php renderImages('icons/instagram.png'); ?>" alt="instagram"></a></li>
						<?php   } ?>
						<?php if(get_field('facebook','options')) { ?>
							<li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('facebook','options')?>"><img src="<?php renderImages('icons/facebook.png'); ?>" alt="facebook"></a></li>
						<?php   } ?>
					</ul>
				</div>
			</div>
			<div class="leo-social 768:w-[calc(50%-25px)] 1280:w-[calc(20%-27px)]">
				<span class="font-700 uppercase"><?php esc_html_e('написати нам','leocar'); ?></span>
				<div class="mm-social mt-4">
					<ul class="flex justify-start items-center gap-x-3.5">
						<?php if(get_field('telegram','options')) { ?>
							<li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('telegram','options')?>"><img src="<?php renderImages('icons/telegram.png'); ?>" alt="telegram"></a></li>
						<?php   } ?>
						<?php if(get_field('viber','options')) { ?>
							<li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('viber','options')?>"><img src="<?php renderImages('icons/viber.png'); ?>" alt="viber"></a></li>
						<?php   } ?>
						<?php if(get_field('whats_app','options')) { ?>
							<li><a class="block w-9 h-9 rounded-full box-border hover:border hover:border-white" href="<?=get_field('whats_app','options')?>"><img src="<?php renderImages('icons/whatsapp.png'); ?>" alt="whatsapp"></a></li>
						<?php   } ?>
					</ul>
				</div>
			</div>
			<div class="768:w-[calc(50%-25px)] 1280:w-[calc(30%-27px)] 1280:text-right">
				<p class=""><?=str_replace('{year}',date('Y'),get_field('copyright','options'))?></p>
				<a class="inline-block p-4 pl-0 1024:pb-3" href="<?=get_field('developer','options')?>" target="_blank">
					<?php renderAssetsSVG('svg/nine'); ?>
				</a>
			</div>
		</div>
	</div>
</footer>

<div id="leo-modals" class="invisible opacity-0 transition duration-100 fixed top-0 left-0 w-full h-full z-[20] bg-[rgba(0,0,0,.31)] blur-25 pt-[111px] 1024:pt-[128px]">
	<div class="relative h-full">
		<div class="modal call invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] max-h-[calc(100%-30px)] overflow-auto scrollbar-hide translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
			<div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>
			<?php if(get_field('consultation','options')['title']) { ?>
				<h2><?=get_field('consultation','options')['title']?></h2>
			<?php } ?>
			<?php echo do_shortcode( get_field('consultation','options')['form']); ?>
		</div>
		<div class="modal drive invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] max-h-[calc(100%-30px)] overflow-auto scrollbar-hide translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
			<div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>
			<div>
				<?php if(get_field('testdrive','options')['title']) { ?>
					<h2><?=get_field('testdrive','options')['title']?></h2>
				<?php } ?>
				<?php echo do_shortcode( get_field('testdrive','options')['form']); ?>
			</div>
		</div>
		<div class="modal thanks invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[485px] max-h-[calc(100%-30px)] overflow-auto scrollbar-hide translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
			<div class="close-thanks cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><svg width="15" height="15" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
						<rect x="0.707031" width="20" height="1" rx="0.5" transform="rotate(45 0.707031 0)" fill="#FAFAFA"></rect>
						<rect y="14.1421" width="20" height="1" rx="0.5" transform="rotate(-45 0 14.1421)" fill="#FAFAFA"></rect>
				</svg>
			</div>
			<?php if(get_field('thank','options')['title']) { ?>
				<h2 class="text-center"><?=get_field('thank','options')['title']?></h2>
			<?php } ?>
			<span class="block mt-1 text-center"><?=get_field('thank','options')['text']?></span>
		</div>
		<div class="modal conditions invisible opacity-0 absolute top-[50%] left-5 right-5 max-w-[862px] max-h-[calc(100%-30px)] overflow-auto scrollbar-hide translate-y-[-50%] form-bg px-7 pt-10 pb-9 rounded-[1.25rem] 500:w-full 500:left-[50%] 500:translate-x-[-50%]">
			<div class="close cursor-pointer absolute h-11 w-11 top-2 right-2 flex justify-center items-center"><?php renderAssetsSVG('svg/close-thin'); ?></div>
			<?php if(get_field('conditions','options')['title']) { ?>
				<h2><?=get_field('conditions','options')['title']?></h2>
			<?php } ?>
			<div class="mt-4 h-[100svh] max-h-[calc(100svh-360px)]">
				<?=get_field('conditions','options')['text']?>
			</div>
		</div>
	</div>
</div>