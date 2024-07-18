<section id="leo-conditions-banner" class="bg-[url('../images/conditions-mobile.png')] bg-no-repeat bg-center bg-cover mt-24 h-[150vw] pb-20 box-border 820:h-auto 820:bg-[url('../images/conditions.png')] 820:bg-no-repeat 820:bg-right 820:pt-12 820:pb-12 1100:pt-24 1100:pb-24 1100:mt-32">
    <div class="container h-full flex flex-col justify-end items-start">
        <?php if(get_field('title')) { ?>
            <h2 class="1100:!text-3xl"><?=get_field('title')?></h2>
        <?php   } ?>
        <div class="mt-2.5 820:w-6/12 1100:w-4/12">
            <?php if(get_field('text')) { ?><p><?=get_field('text')?></p><?php   } ?>
        </div>
        <div class="w-full mt-5 1100:mt-6 1100:flex 1100:gap-x-2 1100:justify-start 1100:items-center 1100:w-full">
            <?php if(get_field('button_1')) { ?>
                <button class="button 820:max-w-[272px]"><?=get_field('button_1')?></button>
            <?php   } ?>
            <?php if(get_field('button_2')) { ?>
                <button class="button button-transparent mt-2.5 820:max-w-[272px] 1100:mt-0"><?=get_field('button_2')?></button>
            <?php   } ?>
        </div>
    </div>
</section>