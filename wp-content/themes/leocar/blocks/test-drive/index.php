<?php
//    $td_image = '';

/*if ( is_page() ) { // Check if it's a page
    $body_class = join(' ', get_body_class()); // Get all body classes as a string
    if ( strpos( $body_class, 'page-id-8' ) !== false ) {
        $td_image = 'cars/kia.png';
    } elseif ( strpos( $body_class, 'page-id-29' ) !== false ) {
        $td_image = 'cars/toyota.png';
    }
}*/
?>

<section id="leo-testdrive" class="leo-testdrive pt-28 500:mt-[10vw] 1100:mt-0 1100:pt-20">
    <div class="container">
        <div class="px-8 pt-1.5 pb-8 rounded-2xl 1024:p-0 1024:pt-14 1024:pb-5 1024:flex 1024:flex-row-reverse 1024:items-center 1100:pt-0">
            <?php echo wp_get_attachment_image(get_field('image'), 'full', false, ['class' => "block relative -mt-24 left-[-30px] w-[calc(100%+60px)] max-w-none 500:-mt-[30vw] 1024:left-0 1024:w-7/12 1024:-mt-44 1100:-mt-36"]); ?>
            <div class="1024:w-5/12">
                <?php if(get_field('title')) { ?>
                <h2 class="box-border 1024:!text-4xl/[1.4] 1024:px-8 1100:!text-5xl/[1.4]"><?=get_field('title')?></h2>
                <?php   } ?>
                <button class="test-drive button button-inverted mt-5 1024:max-w-[275px] 1024:mx-8"><?=get_field('button_text')?></button>
            </div>
        </div>
    </div>
</section>