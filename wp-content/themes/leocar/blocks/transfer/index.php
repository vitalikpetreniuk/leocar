<section id="leo-transfer" class="leo-transfer pt-28 500:mt-[10vw] 1100:mt-0 1100:pt-32">
    <div class="container">
        <div class="px-8 pt-1.5 pb-8 rounded-2xl 1024:p-0 1024:pt-14 1024:pb-10 1024:flex 1024:flex-row-reverse 1024:items-center 1100:pt-0">
            <?php echo wp_get_attachment_image(get_field('image'), 'full', false, ['class' => "block relative -mt-24 left-[-30px] w-[calc(100%+60px)] max-w-none 500:-mt-[30vw] 1024:left-0 1024:w-7/12 1024:-mt-44 1100:-mt-20 1100:-mt-20"]); ?>
            <div class="1024:w-5/12">
                <?php if(get_field('title')) { ?>
                    <h2 class="!text-left box-border 1024:!text-4xl/[1.4] 1024:px-8 1100:!text-5xl/[1.4]"><?=get_field('title')?></h2>
                <?php   } ?>
                <?php if(get_field('button')['title']&&get_field('button')['url']) { ?>
                    <a class="button mt-5 1024:ml-8 1024:max-w-[275px]" target="<?=get_field('button')['title']?>" href="<?=get_field('button')['url']?>"><?=get_field('button')['title']?></a>
                <?php   } ?>
            </div>
        </div>
    </div>
</section>