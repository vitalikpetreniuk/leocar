<section class="leo-our-clients pt-20 pb-11">
	<div class="max-w-[1370px] px-5 mx-auto">
        <?php if(get_field('title')) { ?>
            <h2 class="mb-10"><?=get_field('title')?></h2>
        <?php   } ?>
		<div class="relative 1280:px-12">
			<div class="leo-our-clients__slider swiper">
				<div class="swiper-wrapper">
                    <?php if(get_field('list_items')) foreach(get_field('list_items') as $item) { ?>
					<div class="leo-our-clients__slide swiper-slide">
                        <?php if($item['link']) echo '<a href="'.$item['link'].'" '.(($item['target_blank'])?' target="_blank"':'').'>';?>
						    <img class="w-full h-full object-contain" src="<?=$item['image']?>" alt="">
                        <?php if($item['link']) echo '</a>';?>
					</div>
                    <?php   } ?>
				</div>
			</div>
			<div class="leo-our-clients__button leo-our-clients__button_prev swiper-button-prev hidden 1280:block"></div>
			<div class="leo-our-clients__button leo-our-clients__button_next swiper-button-next hidden 1280:block"></div>
		</div>
		<div class="leo-our-clients__pagination swiper-pagination"></div>
	</div>
</section>