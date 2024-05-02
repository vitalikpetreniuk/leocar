<section class="leo-faq mt-20 1100:mt-28">
    <div class="container">
        <?php if(get_field('title')) { ?>
            <h2><?=get_field('title')?></h2>
        <?php   } ?>
        <div class="faq-list mt-6">
            <?php if(get_field('list_items')) foreach(get_field('list_items') as $item)  { ?>
                <div>
                    <h5 class="dissolve cursor-pointer relative py-3.5 pr-6 flex justify-between items-top 1024:text-3xl/[1.6] after:content-[''] after:block after:h-px after:w-full after:absolute after:bottom-0 after:left-0"><?=$item['question']?><?php renderAssetsSVG('svg/arrow'); ?></h5>
                    <div class="bg-car hidden rounded-2xl pt-4 pb-5 px-6 text-white/[.7] 1024:pt-5 1024:pb-6">
                        <?=$item['answer']?>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>