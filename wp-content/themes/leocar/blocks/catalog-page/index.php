<?php
    $cat = isset($_REQUEST['cat'])?$_REQUEST['cat']:'';
    pr($_REQUEST['send_main_form']);
?>
<section id="leo-catalog-page" class="leo-catalog-page relative z-[2] pt-8 pb-4 1100:pt-11">
    <div class="container 1100:flex 1100:justify-between 1100:items-start">
        <div class="filter fixed z-[5] bg-black top-0 bottom-0 left-0 w-full px-5 pt-[136px] hidden 1100:flex 1100:flex-col 1100:w-[calc(33.333%-10px)] 1100:static 1100:pt-0 1100:px-0">
            <span class="close-filter absolute top-[136px] right-4 block p-2.5 1100:hidden"><?php renderAssetsSVG('svg/close-thin'); ?></span>
            <!-- Форма розрахунку вартості -->
            <div class="hidden 1100:block">
                <?php if(get_field('title_2')) { ?>
                    <h2 class="!text-left !font-400 1100:!font-700"><?=get_field('title_2')?></h2>
                <?php   } ?>
                <?php
                $classes = [
                    'name_class' => '768:!w-[calc(50%-10px)]',
                    '{class_2}' => 'w-full 768:w-[calc(50%-10px)]',
                    '{class_3}' => 'hidden absolute z-[2] top-[100%] left-0 right-0 bg-black flex flex-col text-sm',
                    '{class_4}' => 'relative select-none cursor-pointer block pl-5 py-2 text-white/[.7] text-[12px] 768:text-sm 1024:pl-6',
                    '{class_5}' => 'hidden absolute z-[2] top-[100%] left-0 right-0 bg-black flex flex-col text-sm',
                    '{class_6}' => 'block leading-[1]',
                    '{class_7}' => 'flex justify-center items-center h-9 w-16 bg-[#000000]/[.3] rounded-[40px] cursor-pointer',
                    '{class_8}' => 'hidden absolute z-[2] top-[calc(100%+4px)] rounded-[2px] left-0 right-0 bg-black flex-col justify-center',
                    '{class_9}' => 'hidden absolute top-[100%] right-0 bottom-0 text-[12px] text-accent 768:left-0 768:right-auto 768:top-[calc(100%-4px)]',
                    '{class_10}' => 'block leading-[1]',
                    '{class_11}' => 'flex justify-center items-center h-9 w-16 bg-[#000000]/[.3] rounded-[40px] cursor-pointer',
                    '{class_12}' => 'hidden absolute z-[2] top-[calc(100%+4px)] rounded-[2px] left-0 right-0 bg-black flex-col justify-center',
                    '{class_13}' => 'hidden absolute top-[100%] right-0 bottom-0 text-[12px] text-accent 768:left-0 768:right-auto 768:top-[calc(100%-4px)]',
                ];
                $receive_places = '<option value=""> - '.__('Оберіть місце посадки','leocar').' - </option>';
                $receive_places_price = '';
                if(get_field('landing_locations','options'))
                    foreach(get_field('landing_locations','options') as $item) {
                        $receive_places .= '<option value="' . $item['slug'] . '">' . $item['name'] . '</option>';
                        $receive_places_price .= '<li class="p-2" data-value="'.$item['slug'].'">'.$item['name'].($item['price']?'<span class="inline-block pl-1.5 text-accent">+'.$item['price'].'<span class="currency-symbol">€</span></span>':'').'</li>';
                    }
                $return_places = '<option value=""> - '.__('Оберіть місце посадки','leocar').' - </option>';
                $return_places_price = '';
                if(get_field('return_locations','options'))
                    foreach(get_field('return_locations','options') as $item) {
                        $return_places .= '<option value="' . $item['slug'] . '">' . $item['name'] . '</option>';
                        $return_places_price .= '<li class="p-2" data-value="'.$item['slug'].'">'.$item['name'].($item['price']?'<span class="inline-block pl-1.5 text-accent">+'.$item['price'].'<span class="currency-symbol">€</span></span>':'').'</li>';
                    }
                $open_hours = '';
                $open_hours_li = '';
                if(get_field('open_hours','options'))
                    foreach(explode(PHP_EOL,get_field('open_hours','options')) as $hour) {
                        $open_hours_li .= '<li data-value="' . $hour . '">' . $hour . '</li>';
                        $open_hours .= '<option value="' . $hour . '">' . $hour . '</option>';
                    }
                $data = [
                    '{receive_places}' => $receive_places,
                    '{receive_places_price}' => $receive_places_price,
                    '{return_places}' => $return_places,
                    '{return_places_price}' => $return_places_price,
                    '{open_hours}' => $open_hours,
                    '{open_hours_li}' => $open_hours_li
                ];
                ?>
                <?=get_field('form')?str_replace(array_keys($data),array_values($data),str_replace(array_keys($classes),array_values($classes),do_shortcode(get_field('form')))):''?>
            </div>
            <!-- Форма розрахунку вартості (кінець) -->
            <!-- Пошук по категоріях -->
            <div class="filter-catalog 1100:mt-16">
                <?php if(get_field('search_title')) { ?>
                    <h2 class="!text-left !font-400 1100:!font-700"><?=get_field('search_title')?></h2>
                <?php   } ?>
                <ul class="mt-5 flex flex-wrap gap-2.5">
                    <?php foreach(get_auto_types() as $key=>$item) { if($key == 'type') continue; ?>
                        <li id="<?=$key?>" class="<?=($key == $cat)?'active':''?> relative w-[calc(50%-5px)] px-2.5 pt-2 pb-6 cursor-pointer">
                        <span class="relative z-[2] text-sm"><?=str_replace('Кросовери','Кросовер', $item['name'])?>
                            <?php if($item['price']) { ?>
                                <span class="block text-[12px]/[.8] opacity-70"><?php esc_html_e('від','leocar'); ?> <?=$item['price']?>€/<?php esc_html_e('день','leocar'); ?></span>
                            <?php   } ?>
                        </span>
                            <img class="absolute right-2 bottom-2 block w-auto h-9 1100:w-24" src="<?=$item['image']?>" alt="<?=$key?>">
                        </li>
                    <?php   } ?>
                </ul>
                <form action="<?=home_url()?>/catalog/" method="post">
                    <input type="hidden" name="cat" id="categories" value = "<?=$cat?>">
                    <input type="submit" id="category-search" <?=empty($cat)?'disabled="disabled"':''?> class="<?=empty($cat)?'disabled':''?> block button mt-3 1100:max-w-none" value="<?php esc_html_e('Пошук','leocar'); ?>">
                </form>
                <!--<button data-cats="" id="category-search" class="disabled block button mt-3 1100:max-w-none"><?php esc_html_e('Пошук','leocar'); ?></button>-->
            </div>
            <!-- Пошук по категоріях (кінець) -->
        </div>
        <div class="relative 1100:w-[calc(66.667%-10px)]">
            <!-- Каталог -->
            <?php if(get_field('title_1')) { ?>
                <h2 class="!text-left max-w-[calc(100%-100px)]"><?=get_field('title_1')?></h2>
            <?php   } ?>
            <button class="filter-button flex justify-end items-center gap-x-1 py-1 px-1 absolute top-[2px] right-0 1100:hidden"><?php esc_html_e('Фільтр','leocar'); ?><?php renderAssetsSVG('svg/filter'); ?></button>
            <div id="cars-content">
                <div class="catalog-list mt-11 flex flex-col gap-y-20 768:flex-row 768:flex-wrap 768:gap-x-5">
                    <!-- якщо додати клас mechanics для ітема, то виведеться плашка механіки -->
                    <?php $args = [
                        'post_type' => 'car',
                        'post_status' => 'publish',
                        'posts_per_page' => 12,
                        'paged' => get_query_var('paged'),
                        'meta_query' => [
                            ['key' => 'available',
                                'value' => true],
                        ]
                    ];
                    if(!empty($cat)) {
                        $args['meta_query'][] = ['key' => 'type', 'value'=>$cat];
                        $args['meta_query']['relation'] = 'AND';
                    }
                    $query = new WP_Query($args);
                    if ($query->have_posts()) {
                        while ($query->have_posts()) {
                            $query->the_post();
                            renderComponent('catalog-item-page'); }
                    }
                    else echo "<div class='no-autos'>".esc_html__('На жаль, немає автомобілів, які б відповідали Вашому запиту', 'leocar')."</div>";
                    ?>
                </div>
                <nav class="woocommerce-pagination mt-9">
                    <?php bittersweet_pagination( $query, $cat ); ?>
                </nav>
            </div>
            <!-- Каталог (кінець) -->
        </div>
    </div>
</section>
<?php
function bittersweet_pagination($wp_query, $cat = '') {
    $current_page = max(get_query_var('paged'),1);
    if ( $wp_query->max_num_pages <= 1 ) return;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_next' => true,
        'mid_size' => 3,
        'end_size' => 2,
        'show_all' => false,
        'prev_text' => '<span><svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 10 17" fill="none"><path d="M8.77817 16.5565L1 8.77832L8.77817 1.00015" stroke="#ffffff"></path></svg></span>',
        'next_text' => '<span><svg xmlns="http://www.w3.org/2000/svg" width="6" height="12" viewBox="0 0 10 17" fill="none"><path d="M1.0563 1.00015L8.83447 8.77832L1.0563 16.5565" stroke="#ffffff"></path></svg></span>',
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<ul class="page-numbers flex justify-center items-center gap-x-2.5 text-sm">';
        foreach ( $pages as $page ) {
            echo '<li>';
            if(strip_tags($page) >= 1) {
                if(strip_tags($page) != $current_page) {
                    if(!empty($cats))
                        echo str_replace('">','?cat='.$cat.'">',str_replace('page-numbers', 'page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]', $page));
                    else
                        echo str_replace('page-numbers', 'page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]', $page);
                }
                else echo '<span aria-current="page" class="page-numbers current flex justify-center items-center w-6 h-6 rounded-[2px] text-white bg-accent/[.2]">'.$page.'</span>';
            }
            else {
                if('!!!'.strip_tags($page) == '!!!')
                    echo str_replace('page-numbers','page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] bg-dark',$page);
                else echo str_replace('dots','',str_replace('page-numbers','page-numbers flex justify-center items-center w-6 h-6 rounded-[2px] text-[#999999]',$page));
            }
            echo '</li>';
        }
        echo '</ul>';
    }
} ?>

<script>

    var button = jQuery('.filter-catalog #category-search');
    var input = jQuery('.filter-catalog #categories');
    console.log(input);
    var cats_not_active = jQuery('.filter-catalog ul li:not(.active)');
    var cats_active = jQuery('.filter-catalog ul li.active');
    console.log(cats_not_active);
    cats_not_active.on('click', function(e){
        console.log(jQuery(this));
        jQuery('.filter-catalog ul li').removeClass('active');
        var data_cat = jQuery(this).attr('id');
        button.removeClass('disabled').removeAttr('disabled');
        input.val(data_cat);
    });
    cats_active.on('click', function(e){
        jQuery('.filter-catalog ul li').removeClass('active');
        button.addClass('disabled').attr('disabled','disabled');
        input.val('');
    });
    function contains(arr, elem) {
        for (var i = 0; i < arr.length; i++) {
            if (arr[i] === elem) {
                return true;
            }
        }
        return false;
    }
</script>
<style>
    .disabled, .disabled:hover {
        background-color: grey!important;
        cursor: default!important;
    }
    #category-search {
        background-image: none;
        padding-right:0;
    }
</style>