<?php
    $body_class = join(' ', get_body_class()); // Get all body classes as a string
    $intro_title = get_field('title');
    $intro_description = get_field('description');
?>

<section class="leo-intro 1024:flex 1024:flex-row-reverse 1024:justify-start 2000:max-h-[1000px]">
    <picture class="<?php echo get_field('image_class'); ?> 1024:absolute 1024:h-[75svh] 1024:max-h-[580px] 1100:h-[80svh] 1100:max-h-[750px] 1280:max-w-[115svh] 1280:h-[100svh] 2000:max-h-[1000px]">
        <source media="(max-width:1023px)" srcset="<?php echo wp_get_attachment_image_url(get_field('image'), 'full'); ?>">
        <source media="(min-width:1024px) and (max-width:1699px)" srcset="<?php echo wp_get_attachment_image_url(get_field('image_laptop'), 'full'); ?>">
        <source media="(min-width:1700px)" srcset="<?php echo wp_get_attachment_image_url(get_field('image_desktop'), 'full'); ?>">
        <?php echo wp_get_attachment_image(get_field('image'), 'full', false, ['class' => "relative block 768:h-full 768:w-full 768:object-cover"]); ?>
    </picture>
    <div class="container relative z-[2] 500:mt-8">
        <div class="1024:w-5/12 1024:min-h-[50vw] 1024:pl-5 1024:pr-2 1024:box-border 1024:flex 1024:flex-col 1024:justify-end 1100:h-[100svh] 1100:min-h-0 2000:max-h-[1000px] 1100:justify-center">
            <h1><?php echo $intro_title ?></h1>
            <div class="text-body mt-2 max-h-20 overflow-hidden 414:mt-3.5 1024:mt-5"><?php echo $intro_description ?></div>

            <div class="mt-5 flex flex-col gap-2.5 1024:mt-6">
                <button class="require-call button"><?php esc_html_e('Залишити заявку','leocar'); ?><?php renderAssetsSVG('svg/mail'); ?></button>
                <button class="choose-car button button-transparent"><?php esc_html_e('Обрати авто','leocar'); ?><?php renderAssetsSVG('svg/car'); ?></button>
            </div>
        </div>
    </div>

	<div class="fixed left-5 bottom-5 z-[5] 1100:hidden">
	 	<button class="scroll-top inline-block w-11 h-11 mb-1 bg-[url(../images/icons/scroll-top.png)] bg-contain bg-no-repeat bg-center"></button>
		<div class="require-call cursor-pointer flex justify-center items-center w-11 h-11 rounded-full box-border border border-black bg-accent"><?php renderAssetsSVG('svg/call'); ?></div>
	</div>
    <div class="leo-message cursor-pointer fixed right-5 bottom-5 z-[5] 1100:right-auto 1100:left-10 1100:bottom-10 1100:w-14 1100:h-14 1280:z-[55]">
        <ul class="opacity-0  invisible absolute right-0 bottom-14 flex flex-col gap-y-1.5 1100:right-auto 1100:left-0 1100:bottom-16">
            <li><a href="#"><?php renderAssetsSVG('svg/telegram'); ?></a></li>
            <li><a href="#"><?php renderAssetsSVG('svg/viber'); ?></a></li>
            <li><a href="#"><?php renderAssetsSVG('svg/whatsapp'); ?></a></li>
        </ul>
        <span class="relative flex justify-center items-center w-11 h-11 rounded-full box-border border border-accent bg-black 1100:w-14 1100:h-14"><?php renderAssetsSVG('svg/mail'); ?><?php renderAssetsSVG('svg/close-thin'); ?></span>
    </div>
	<div class="hidden fixed right-10 bottom-10 z-[5] 1100:block 1280:z-[55]">
		<button class="scroll-top inline-block w-14 h-14 mb-1 bg-[url(../images/icons/scroll-top.png)] bg-contain bg-no-repeat bg-center"></button>
		<div class="require-call pulsating relative w-14 h-14 cursor-pointer before:content-[''] before:absolute before:block before:w-[300%] before:h-[300%] before:box-border before:mt-[-100%] before:ml-[-100%] before:rounded-[50%] before:bg-accent/[.5] before:pointer-events-none after:content-[''] after:absolute after:top-0 after:left-0 after:block after:w-full after:h-full after:bg-accent after:bg-[url('../images/svg/call.svg')] after:bg-no-repeat after:bg-center after:rounded-[50%] after:hover:bg-white after:transition after:duration-150"></div>
	</div>
</section>