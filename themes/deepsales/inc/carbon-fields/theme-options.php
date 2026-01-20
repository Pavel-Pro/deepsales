<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
Container::make( 'theme_options', __( 'Theme Options' ) )
    ->add_tab(  __( 'Номер телефона' ), array(
        Field::make( 'text', 'header_btn', __( 'Текст кнопки в шапке сайта' ) )
            ->set_width(50),
        Field::make( 'text', 'footer_btn', __( 'Текст кнопки в подвале сайта' ) )
            ->set_width(50),
        Field::make( 'image', 'social_icon', __( 'Иконка соц. сети' ) )
            ->set_help_text('Добавление иконки в формате svg')
            ->set_width(20),
        Field::make( 'text', 'phone_text', __( 'Номер телефона для шапки и подвала сайта' ) )
            ->set_help_text('Заполнить поле в формате - +3 (099) 333-33-33')
            ->set_width(40),
        Field::make( 'text', 'phone_link', __( 'Ссылка на прямой звонок с сайта' ) )
            ->set_help_text('Заполнить поле в формате - +30993333333')
            ->set_width(40),
        Field::make( 'complex', 'phone_numbers', __( 'Номер телефонов' ) )
            ->set_layout('tabbed-horizontal')
            ->set_width(50)
            ->add_fields( [
                Field::make( 'image', 'phone_icon', __( 'Иконка контактных данных' ) )
                    ->set_help_text('Добавление иконки в формате svg')
                    ->set_width(20),
                Field::make( 'text', 'phone_number', __( 'Номер телефона' ) )
                    ->set_help_text('Заполнить поле в формате - +3 (099) 333-33-33')
                    ->set_width(30),
                Field::make( 'text', 'phone_link', __( 'Ссылка в виде номер телефона' ) )
                    ->set_help_text('Заполнить поле в формате - +30993333333')
                    ->set_width(30),
            ] ),
        Field::make( 'complex', 'emails', __( 'Электронная почта' ) )
            ->set_layout('tabbed-horizontal')
            ->set_width(50)
            ->add_fields( [
                Field::make( 'image', 'email_icon', __( 'Иконка контактных данных' ) )
                    ->set_help_text('Добавление иконки в формате svg')
                    ->set_width(20),
                Field::make( 'text', 'email', __( 'Email' ) )
                    ->set_help_text('Заполнить поле в формате - info@deepsales.com.ua')
                    ->set_width(30),
                Field::make( 'text', 'email_link', __( 'Ссылка email' ) )
                    ->set_help_text('Заполнить поле в формате - info@deepsales.com.ua')
                    ->set_width(30),
            ])
    ) )
    ->add_tab(  __( 'Данные социальных сетей' ), array(
        Field::make( 'complex', 'social_data', __( 'Контактые данные' ) )
            ->set_layout('tabbed-horizontal')
        ->add_fields( [
            Field::make( 'image', 'social_icon', __( 'Иконка контактных данных' ) )
                ->set_help_text('Добавление иконки в формате svg')
                ->set_width(19),
            Field::make( 'text', 'social_link', __( 'Ссылка на профиль соц.сети' ) )
                ->set_help_text('Ссылка которая ведёт на профиль в соц. сети')
                ->set_width(27),
            Field::make( 'text', 'social_text', __( 'Название соц. сети' ) )
                ->set_width(27),
            Field::make( 'text', 'social_text_link', __( 'Ссылка которая идёт под название соц.сети' ) )
                ->set_help_text('Заполнить в формате - @yevheniipopsui, facebook.com/Євгеній-Попсуй')
                ->set_width(27),
        ] ),
    ) );
}