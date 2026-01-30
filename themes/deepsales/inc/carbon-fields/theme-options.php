<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
Container::make( 'theme_options', __( 'Theme Options' ) )
    ->add_tab(  __( 'Номер телефона' ), array(
        Field::make( 'text', 'header_btn', __( 'Текст кнопки в шапке сайта' ) ),
        Field::make( 'image', 'social_icon', __( 'Иконка соц. сети' ) )
            ->set_help_text('Добавление иконки в формате svg')
            ->set_width(20),
        Field::make( 'text', 'phone_text', __( 'Номер телефона для шапки и подвала сайта' ) )
            ->set_help_text('Заполнить поле в формате - +3 (099) 333-33-33')
            ->set_width(40),
        Field::make( 'text', 'phone_link', __( 'Ссылка на прямой звонок с сайта' ) )
            ->set_help_text('Заполнить поле в формате - +30993333333')
            ->set_width(40),
        Field::make( 'complex', 'phone_numbers', __( 'Номера телефонов' ) )
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
    ) )
    ->add_tab(  __( 'Подвал сайта' ), array(
        Field::make( 'text', 'copy', __( 'Текст копирайта сайта с датой' ) )
            ->set_help_text('Добавления текста копирайта'),
        Field::make( 'text', 'offer_text', __( 'Текст ссылки на страницу Публичной оферты' ) )
            ->set_help_text('Добавления текста копирайта')
            ->set_width(50),
        Field::make( 'text', 'offer_link', __( 'Ссылка на страницу Публичной оферты' ) )
            ->set_help_text('Добавления текста копирайта')
            ->set_width(50),
        Field::make( 'text', 'policy_text', __( 'Текст ссылки на страницу Политики Конфиденциальности' ) )
            ->set_help_text('Прописывать в формате - /public-offer')
            ->set_width(50),
        Field::make( 'text', 'policy_link', __( 'Ссылка на страницу Политики Конфиденциальности' ) )
            ->set_help_text('Прописывать в формате - /privacy-policy')
            ->set_width(50),
        Field::make( 'text', 'footer_btn', __( 'Текст кнопки в подвале сайта' ) )
            ->set_width(50),
    ) )
    ->add_tab(  __( '404 Страница' ), array(
        Field::make( 'text', 'title', __( 'Заголовок' ) )
            ->set_width(30),
        Field::make( 'text', 'number', __( 'Номер ошибки' ) )
            ->set_width(10),
        Field::make( 'text', 'mistake_text', __( 'Текст под номером ошибки'))
            ->set_width(30),
        Field::make( 'text', 'mistake_btn', __( 'Название кнопки' ) )
            ->set_width(30),
    ) )
    ->add_tab(  __( 'Блок Cookie' ), array(
        Field::make( 'text', 'cookie_title', __( 'Заголовок' ) )
            ->set_width(30),
        Field::make( 'rich_text', 'cookie_text', __( 'Текст блока' ) )
            ->set_width(70),
        Field::make( 'text', 'cookie_btn1', __( 'Название первой кнопки' ) )
            ->set_width(50),
        Field::make( 'text', 'cookie_btn2', __( 'Название второй кнопки' ) )
            ->set_width(50),
    ) );
}