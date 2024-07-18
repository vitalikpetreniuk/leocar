<section class="leo-checkout">
    <div class="container">
        <?php
        $classes = [
            '{class_1}' => 'w-full 1024:!w-[calc(50%-10px)]',
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
        $additional_seсurity = '';
        $a_s = get_field('additional_security_1','options');
        foreach($a_s as $key=>$item)
            $additional_seсurity .= '<div>
                                <input type="radio" id="'.$item['slug'].'" name="safety" value="'.$item['slug'].'" data-price="'.($item['price_day']?$item['price_day']:'0').'" '.($key==0?'checked="checked"':'').'>
                                <label for="'.$item['slug'].'">'.$item['title'].'<span>'.(!empty($item['price_day'])?$item['price_day'].' €':esc_html__('Безкоштовно','leocar')).'</span></label>
                            </div>';
        $data = [
            '{receive_places}' => $receive_places,
            '{receive_places_price}' => $receive_places_price,
            '{return_places}' => $return_places,
            '{return_places_price}' => $return_places_price,
            '{open_hours}' => $open_hours,
            '{open_hours_li}' => $open_hours_li,
            '{additionals}' => get_additionals(),
            '{edit_svg}' => file_get_contents(get_template_directory() . '/assets/images/svg/edit.svg'),
            '{car_png}' => '<img src="/wp-content/themes/' . wp_get_theme() . '/assets/images/cars/car1.png" alt="car">',
            '{additional_seсurity}' => $additional_seсurity
        ];
        ?>
        <?=str_replace(array_keys($data),array_values($data),str_replace(array_keys($classes),array_values($classes),do_shortcode('[contact-form-7 id="c416e26" title="Оформлення авто"]')))?>

    </div>
</section>