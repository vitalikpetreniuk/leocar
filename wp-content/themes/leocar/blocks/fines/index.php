<section class="leo-fines pt-12 1100:pt-20">
    <div class="container">
        <div>
            <?php if(get_field('fines_title','options')) { ?>
                <h3 class="text-center"><?=get_field('fines_title','options')?></h3>
            <?php   } ?>
            <div class="mt-2 flex flex-col gap-y-6 flex-wrap 768:flex-row 768:gap-x-5 1100:mt-8 1100:gap-x-9">
                <?php if(get_field('fines','options')) foreach(get_field('fines','options') as $item)  { ?>
                    <div class="768:w-[calc(50%-10px)] 1100:w-[calc(33.333%-24px)]">
                        <div class="mb-px font-700 text-base"><?=$item['title']?></div>
                        <span class="font-400 opacity-70"><?=str_replace(['{%1}','{%2}'],[$item['arg1'].'€',$item['arg2'].'€'],$item['value'])?></span>
                    </div>
                <?php } ?>
            </div>
            <?php if(get_field('fines_text','options')||get_field('fines_button_text','options')) { ?>
                <div class="mt-11 text-center max-w-[610px] mx-auto 1100:max-w-[50%]">
                    <?php if(get_field('fines_text','options')) { ?>
                        <?=str_replace('<p>','<p class="inline-block px-2.5 text-sm text-white opacity-80">',get_field('fines_text','options'))?>
                    <?php   } ?>
                    <?php if(get_field('fines_button_text','options')) { ?>
                        <button class="require-call button mt-5 max-w-none 768:mt-5 768:max-w-[338px] 768:mx-auto"><?=get_field('fines_button_text','options')?></button>
                    <?php   } ?>
                </div>
            <?php   } ?>
        </div>
    </div>

</section>