<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', function() {
    Container::make( 'post_meta', __( 'Контент' ) )
    ->where( 'post_id', '=', '134' )
    ->add_tab(  __( 'Ссылки на социальные сети' ), array(
        Field::make( 'complex', 'contact', __( 'Контактые данные' ) )
            ->set_max( 3 )
            ->set_layout('tabbed-vertical')
            ->add_fields( [
                Field::make( 'image', 'social_icon', __( 'Иконка соц. сети' ) ),
                Field::make( 'text', 'social_text', __( 'Текст поля' ) ),
                Field::make( 'text', 'social_link', __( 'Ссылка на соцю сеть' ) ),
            ] ),
    ) );

});