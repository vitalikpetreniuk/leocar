<section id="leo-reviews" class="leo-reviews pt-8 1100:mt-24">
	<div class="max-w-[1370px] px-5 mx-auto">
        <?php if(get_field('title')) { ?>
            <h2 class="mb-7 1024:mb-9"><?=get_field('title')?></h2>
        <?php   } ?>
		<!-- <?php echo do_shortcode('[trustmary_widget id="iN-6LVM_i"]'); ?> -->
		<div class="relative 1280:px-12">
			<div class="leo-reviews__slider swiper">
				<div class="swiper-wrapper">
                    <?php if(get_field('list_items')) foreach(get_field('list_items') as $item)  { ?>
                        <div class="leo-reviews__slide swiper-slide relative bg-car rounded-2xl px-6 pt-7 pb-9 768:mb-5">
                            <div>
                                <div class="flex justify-start items-center gap-x-5">
                                    <div class="w-[3.25rem] h-[3.25rem] rounded-full overflow-hidden">
                                        <?php echo wp_get_attachment_image($item['image'], 'full', false, ['class' => "block w-full h-full object-cover"]); ?>
                                    </div>
                                    <?php if($item['name']) { ?>
                                    <h4 class="font-700 text-base"><?=$item['name']?></h4>
                                    <?php   } ?>
                                </div>
                                <?php if($item['network']) echo '<div class="block absolute top-[1.875rem] right-[1.875rem]">'.file_get_contents($item['network']).'</div>'; ?>
                            </div>
                            <div class="mt-4 flex justify-start items-center gap-x-1">
                                <?php for($i=1;$i<=$item['rating'];$i++) { ?>
                                <span><?php renderAssetsSVG('svg/star'); ?></span>
                                <?php   } ?>
                            </div>
                            <div class="mt-5 text-white/[.7]">
                                <p><?=$item['text']?></p>
                                <span class="block mt-4"><?php echo timeago($item['date']); ?></span>
                            </div>
                        </div>
                    <?php } ?>
				</div>
			</div>
			<div class="leo-reviews__button leo-reviews__button_prev swiper-button-prev hidden 1280:block"></div>
			<div class="leo-reviews__button leo-reviews__button_next swiper-button-next hidden 1280:block"></div>
		</div>
		<div class="leo-reviews__pagination swiper-pagination"></div>
        <?php if(get_field('button')['title']&&get_field('button')['url']) { ?>
            <a class="show-reviews button button-no-hover mt-4 768:max-w-[275px] 768:mx-auto 1100:mt-9" target="<?=get_field('button')['title']?>" href="<?=get_field('button')['url']?>"><?=get_field('button')['title']?></a>
        <?php   } ?>
	</div>
</section>