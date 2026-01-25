<?php


use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', function() {
    Container::make( 'post_meta', __( 'Контент' ) )
        ->where( 'post_type', '=', 'page' )
        ->where( 'post_template', '=', 'constructor-page.php' )
        ->add_fields( [
            Field::make( 'complex', 'sections', __( 'Секции' ) )
                ->set_layout('tabbed-vertical')
                ->add_fields( 'hero', 'Первый экран', [
                    Field::make( 'text', 'hero_title', __( 'Заголовок' )),
                    Field::make( 'text', 'hero_text', __( 'Текст первого экрана' )),
                    Field::make( 'text', 'hero_text_btn', __( 'Название кнопки' )),
                    Field::make( 'image', 'hero_image', __( 'Изображение на главной' ) )
                        ->set_help_text( 'Изображение для десктопной версии разрешение 451х620.' )
                        ->set_width(30),
                    Field::make( 'image', 'hero_imag-tab', __( 'Изображение на главной' ) )
                        ->set_help_text( 'Изображение для планшетной версии разрешение 301х414.' )
                        ->set_width(30),
                    Field::make( 'image', 'hero_imag-mob', __( 'Изображение на главной' ) )
                        ->set_help_text( 'Изображение для мобильной версии разрешение 220х302.' )
                        ->set_width(30),
                ] )
                ->add_fields( 'problem', 'Секция "Проблемы отдела"', [
                    Field::make( 'text', 'problem_title', __( 'Заголовок' )),
                    Field::make( 'text', 'problem_text', __( 'Подзаголовок' )),
                    Field::make( 'text', 'problem_block_title1', __( 'Заголовок блока Владельцы' ))
                        ->set_width(50),
                    Field::make( 'text', 'problem__block_title2', __( 'Заголовок блока Руководители отдела' ))
                        ->set_width(50),
                    Field::make( 'complex', 'problem_owner', __( 'Блок "Проблемы Владельцев"' ) )
                        ->set_layout('tabbed-vertical')
                        ->set_width(50)
                        ->add_fields( 'hero', 'Первый экран', [
                            Field::make( 'text', 'problem_owner_list', __( 'Заголовок' )),
                        ]),
                    Field::make( 'complex', 'problem_manager', __( 'Блок "Проблемы Руководителей отделов"' ) )
                        ->set_layout('tabbed-vertical')
                        ->set_width(50)
                        ->add_fields( 'hero', 'Первый экран', [
                            Field::make( 'text', 'problem_manager_list', __( 'Заголовок' )),
                        ]),
                ] )
        ] );

});