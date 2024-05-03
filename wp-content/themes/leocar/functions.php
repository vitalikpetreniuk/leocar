<?php

    add_theme_support( 'menus' ); // Ensure theme supports menus

    function my_theme_menu_locations() {
        register_nav_menus( array(
            'rent-header' => 'Rent Header',
            'purchase-header' => 'Purchase Header'
        ));
    }
    add_action( 'after_setup_theme', 'my_theme_menu_locations' );

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
    if(empty($prices)) $prices = array_fill(0, count($periods, ''));
    $arr = [];
    foreach($periods as $key=>$period) $arr[] = ['price'=>$prices[$key], 'period' => $period];
    return $arr;
}

add_filter('acf/settings/json', '__return_false');
