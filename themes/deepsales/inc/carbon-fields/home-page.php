<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', function() {
    Container::make( 'post_meta', __( 'Главная страница' ) )
    ->where( 'post_id', '=', get_option('page_on_front') )
    ->add_tab(  __( 'Секция "Як ми вирішуємо проблеми відділу продажу"' ), array(
        Field::make( 'text', 'problem_title', __( 'Заголовок секции' ) ),
        Field::make( 'text', 'stage1', __( 'Текст и номер этапа' ) )
            ->set_width(20),
        Field::make( 'text', 'title_block1', __( 'Заголовко первого блока "Діагностика"' ) )
            ->set_width(80),
        Field::make( 'complex', 'diagnostics', __( 'Список этапов диагностики' ) )
            ->set_layout('tabbed-vertical')
            ->add_fields( 'diagnostics_list', 'Первый экран', [
                    Field::make( 'text', 'diagnostic_item', __( 'Этап диагностики' )),
                ] ),
    ) );

});