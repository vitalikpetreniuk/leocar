<?php

add_theme_support( 'menus' ); // Ensure theme supports menus

function my_theme_menu_locations() {
    register_nav_menus( array(
        'rent-header' => 'Rent Header',
        'purchase-header' => 'Purchase Header',
        'main-header' => 'Main menu',
    ));
}
add_action( 'after_setup_theme', 'my_theme_menu_locations' );
add_action( 'wp_enqueue_scripts', 'truemisha_jquery' );

function truemisha_jquery() {
    wp_enqueue_script( 'jquery' );
}
// Функція дебага
function pr($arr, $field = '', $pre = true)	{
    if($pre) echo "<pre>";
    if(isset($field)&&empty($field))	print_r($arr);
    else
        foreach($arr as $item) {
            if(gettype($field) == 'string')	$arrfields = array($field); else $arrfields = $field;
            $row = array();
            if(gettype($item)=='object') foreach($arrfields as $f) $row[] = "<b>".$f."</b> => ".$item->$f;
            else foreach($arrfields as $f) $row[] = "<b>".$f."</b> => ".$item[$f];
            echo implode(" | ",$row)."<br>";
        }
    if($pre) echo "</pre>";
}

if( function_exists('acf_add_options_page') ) {
    acf_add_options_page();
}
// Забороняємо візуальний редактор для автомобілів
add_filter( 'user_can_richedit', 'patrick_user_can_richedit');
function patrick_user_can_richedit($c) {
    global $post_type;

    if ('car' == $post_type)
        return false;
    return $c;
}

function get_period_prices($prices = []) {
    $periods = explode(PHP_EOL, get_field('periods','options'));
    if(empty($prices)) $prices = array_fill(0, count($periods, ''));
    $arr = [];
    foreach($periods as $key=>$period) $arr[] = ['price'=>$prices[$key], 'period' => $period];
    return $arr;
}

function get_period_purchase_prices($prices = []) {
    $periods = explode(PHP_EOL, get_field('periods_purchase','options'));
    if(empty($prices)) $prices = array_fill(0, count($periods), '');
    $arr = [];
    foreach($periods as $key=>$period) $arr[] = ['price'=>$prices[$key], 'period' => $period];
    return $arr;
}

function get_period_home_prices($prices = [], $min = [], $old_prices = []) {
    $periods = explode(PHP_EOL, get_field('periods_home','options'));
    if(empty($prices)) $prices = array_fill(0, count($periods), '');
    if(empty($old_prices)) $old_prices = array_fill(0, count($periods), '');
    if(empty($min))    $min    = array_fill(0, count($periods), '');
    $arr = [];
    foreach($periods as $key=>$period) $arr[] = ['min'=>$min[$key], 'price'=>$prices[$key], 'old_price'=>$old_prices[$key], 'period' => explode(' : ', $period)[1], 'slug' => explode(' : ', $period)[0]];
    return $arr;
}

function get_periods_home() {
    $periods = explode(PHP_EOL, get_field('periods_home','options'));
    return $periods;
}

function get_auto_models()  {
    $arr = get_field('auto_models','options');
    $models = [];
    if($arr) {
        foreach($arr as $item) {
            $models[$item['slug']] = ['image' => $item['image'], 'name' => $item['name']];
        }
        return $models;
    }
    else return [];
}
function get_auto_types()  {
    $arr = get_field('auto_types','options');
    $types = [];
    if($arr) {
        foreach($arr as $item) {
            $types[$item['slug']] = ['image' => $item['image'], 'price' => $item['price'], 'name' => $item['name']];
        }
        return $types;
    }
    else return [];
}

add_filter('acf/settings/json', '__return_false');

// Add the custom columns to the book post type:
add_filter( 'manage_car_posts_columns', 'set_custom_edit_car_columns' );
function set_custom_edit_car_columns($columns) {
    $new_columns = [
        'cb' => $columns['cb'],
        'title' => $columns['title'],
        'available' => __( 'В наявності', 'leocar' ),
        'visibility' => __( 'Видимість', 'leocar' ),
        'date' => $columns['date']
    ];
    return $new_columns;
}

// Add the data to the custom columns for the book post type:
add_action( 'manage_car_posts_custom_column' , 'custom_car_column', 10, 2 );
function custom_car_column( $column, $post_id ) {
    if($column == 'available' && get_post_meta( $post_id , 'available' , true ) == 1)
        echo '<img style="width:25px;" src="'.get_template_directory_uri().'/assets/images/check.png">';
    if($column == 'visibility') {
        $arr = get_field('visibility', $post_id);
        asort($arr);
        echo implode(', ', $arr);
    }

}

function timeago($date) {
    $timestamp = strtotime($date);
    $strTime_1 = array("секунду", "хвилину", "годину", "день", "місяць", "рік");
    $strTime_2 = array("секунди", "хвилини", "години", "дні", "місяці", "роки");
    $strTime_3 = array("секунд", "хвилин", "годин", "днів", "місяців", "років");
    $strTime = [$strTime_1, $strTime_2, $strTime_3];
    $length = array("60","60","24","30","12","10");

    $currentTime = time();
    if($currentTime >= $timestamp) {
        $diff     = time() - $timestamp;
        for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
            $diff = $diff / $length[$i];
        }

        $diff = round($diff);
        $period = 2;
        if($diff % 10 == 1) $period = 0;
        elseif($diff % 10 == 2||$diff % 10 == 3||$diff % 10 == 4) $period = 1;
        return $diff . " " . $strTime[$period][$i] . " тому ";
    }
}

add_filter('wpcf7_autop_or_not', '__return_false');

add_filter('acf/settings/json', '__return_false');

add_filter('show_admin_bar', '__return_true');

function get_additionals()  {
    $additionals = get_field('additional','options');
    $str = '';
    foreach($additionals as $additional) $str .= '
    <div>
        <input type="checkbox" id="'.$additional['slug'].'" name="'.$additional['slug'].'" value="'.$additional['title'].'" data-price="'.$additional['price'].'">
        <label for="'.$additional['slug'].'">'.$additional['title'].'<span>'.$additional['price'].' € '. esc_html__('в день.','leocar').'</span></label>
    </div>';
    return $str;
}



function get_custom_menu_items($menu)  {
    $url = parse_url($_SERVER['SCRIPT_URI'])['path'];
    $menus = [];
    foreach(wp_get_nav_menu_items($menu) as $item) {
        $menus[$item->ID] = ['title' => $item->title, 'url' => $item->url, 'menu_item_parent' => $item->menu_item_parent];
    }
    $newmenus = [];
    foreach($menus as $key=>$item) {
        $menu_url = parse_url($item['url'])['path'];
        if ($item['menu_item_parent'] == 0) {
            $newmenus[$key] = ['title' => $item['title'], 'url' => $item['url'], 'class' => ($url == $menu_url) ? 'current-menu-item' : ''];
        } else {
            $newmenus[$item['menu_item_parent']]['childrens'][$key] = ['title' => $item['title'], 'url' => $item['url'], 'class' => ''];
            if ($url == $menu_url) $newmenus[$item['menu_item_parent']]['class'] = 'current-menu-item"';
        }
    }
    return $newmenus;
}
function currency_course($currency = "EUR")   {
    $courses = [
        'USD' => 1.07,
        'UAH' => 45,
        'EUR' => 1
    ];
    return $courses[$currency];
}

function currency_symbol($currency = "EUR")   {
    $courses = [
        'USD' => '$',
        'UAH' => '₴',
        'EUR' => '€'
    ];
    return $courses[$currency];
}

function get_currency_price($price, $currency = 'EUR')   {
    return $price*currency_course($currency);
}