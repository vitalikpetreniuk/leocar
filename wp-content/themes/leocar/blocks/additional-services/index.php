<section class="leo-additional-services pt-10 pb-4">
    <div class="container">
        <div>
            <?php if(get_field('additional_services_title','options')) { ?>
                <h3 class="text-center"><?=get_field('additional_services_title','options')?></h3>
            <?php   } ?>
            <div class="mt-2 flex flex-col gap-y-6 flex-wrap 768:flex-row 768:gap-x-5 1100:mt-8 1100:gap-x-9">
                <?php if(get_field('additional_services','options')) foreach(get_field('additional_services','options') as $item)  { ?>
                    <div class="768:w-[calc(50%-10px)] 1100:w-[calc(33.333%-24px)]">
                        <div class="mb-px font-700 text-base"><?=$item['title']?></div>
                        <span class="font-400 opacity-70"><?=str_replace(['{%1}','{%2}'],[$item['arg1'].'€',$item['arg2'].'€'],$item['value'])?></span>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>