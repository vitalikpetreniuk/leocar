<section id="leo-catalog" class="leo-catalog relative z-[2] mt-16 pt-4 pb-4 1100:mt-20">
    <div class="container">
        <?php if(get_field('title')) { ?>
            <h2><?=get_field('title')?></h2>
        <?php   } ?>
        <div class="catalog-list mt-11 flex flex-col gap-y-14 768:flex-row 768:flex-wrap 768:gap-x-5">
            <!-- якщо додати клас mechanics для ітема, то виведеться плашка механіки -->
            <?php $args = [
                'post_type' => 'car',
                'post_status' => 'publish',
                'posts_per_page' => -1,
                'meta_query' => [
                    ['key' => 'available',
                        'value' => true],
                    [
                        'key' => 'visibility',
                        'value' => 'Purchase',
                        'compare' => 'LIKE'
                    ],
                ]
            ];
            $query = new WP_Query($args);
            if ($query->have_posts())
            while ($query->have_posts()) {
                $query->the_post();
                renderComponent('catalog-item-purchase');
            }
            $args['meta_query'][0]['value'] = 0;
            $query = new WP_Query($args);
            if ($query->have_posts())
            while ($query->have_posts()) {
                $query->the_post();
                renderComponent('catalog-item-purchase');
            } ?>
        </div>

        <button class="show-catalog button button-transparent mt-2.5 font-400 1024:max-w-[300px] 1024:mx-auto 1100:max-w-[335px]"><?php esc_html_e('Показати все','leocar'); ?></button>
    </div>
</section>
<script>
    jQuery('.test-drive').not('.simple').on('click', function()    {
        var product = jQuery(this).parent().data('product');
        jQuery('.modal.drive form input.product').val('');
        jQuery('.modal.drive form input.product').val(product);
    });
</script>
<style>
    .not-available {
        color:#ffffff;
        background: grey;
        padding:20px;
        left:30%;
    }
    .colors {
        flex-direction: row-reverse;
    }
    .colors-wrap {
        display:grid;
    }
    .subtext {
        color:white;
    }
</style>
