<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', function() {
    Container::make( 'post_meta', __( 'Контент' ) )
    ->where( 'post_id', '=', 134 )
    ->add_tab(  __( 'Блок с фотографией' ), array(
        Field::make( 'image', 'photo', __( 'Личная фотография' ) )
            ->set_help_text('Фотография должна быть в формате .webp. Разрешение фотографии 155х172 фон прозрачный.')
            ->set_width(20),
        Field::make( 'text', 'name', __( 'Фамилия имя' ) )
            ->set_width(40),
        Field::make( 'text', 'position', __( 'Позиция' ) )
            ->set_width(40)
    ) );

});