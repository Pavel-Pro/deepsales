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
                        ->set_layout('tabbed-horizontal')
                        ->set_width(50)
                        ->add_fields( 'problem_owner_list', '', [
                            Field::make( 'text', 'problem_owner_item', __( 'Пробдема Владельца' )),
                        ]),
                    Field::make( 'complex', 'problem_manager', __( 'Блок "Проблемы Руководителей отделов"' ) )
                        ->set_layout('tabbed-horizontal')
                        ->set_width(50)
                        ->add_fields( 'problem_manager_list', '', [
                            Field::make( 'text', 'problem_manager_item', __( 'Пробдема Руководителей отделов' )),
                        ]),
                    Field::make( 'text', 'problem__btn', __( 'Название кнопки' ))
                ] )
                ->add_fields( 'solution', 'Секция "Решения проблем отдела продаж"', [
                    Field::make( 'text', 'solution__title', __( 'Заголовок' )),
                    Field::make( 'text', 'solution__etap1', __( 'Текст и номер этапа' ))
                        ->set_width(30),
                    Field::make( 'text', 'solution__block_title', __( 'Заголовок блока' ))
                        ->set_width(70),
                    Field::make( 'complex', 'solution_etap1', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'solution_etap1_list', '', [
                            Field::make( 'text', 'solution_etap1_item', __( 'Этап диагностики' )),
                        ]),
                    Field::make( 'text', 'solution_result_title', __( 'Заголовок Блока "На выходи"' )),
                    Field::make( 'complex', 'solution_result', __( 'Результаты на выходе' ) )
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'solution_result_list', '', [
                            Field::make( 'text', 'solution_result_item', __( 'Результат на выходе' )),
                        ]),
                    Field::make( 'text', 'solution__etap2', __( 'Текст и номер этапа' ))
                        ->set_width(30),
                    Field::make( 'text', 'solution__block_title2', __( 'Заголовок блока' ))
                        ->set_width(70),
                    Field::make( 'text', 'solution__block_undertitle2', __( 'Подзаголовок блока' )),
                    Field::make( 'complex', 'solution_etap2', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'solution_etap2_list', '', [
                            Field::make( 'text', 'solution_etap2_item', __( 'Этап диагностики' )),
                        ]),
                    Field::make( 'text', 'solution__etap3', __( 'Текст и номер этапа' ))
                        ->set_width(30),
                    Field::make( 'text', 'solution__block_title3', __( 'Заголовок блока' ))
                        ->set_width(70),
                    Field::make( 'text', 'solution__block_undertitle3', __( 'Подзаголовок блока' )),
                    Field::make( 'complex', 'solution_etap3', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'solution_etap3_list', '', [
                            Field::make( 'text', 'solution_etap3_item', __( 'Этап диагностики' )),
                        ]),
                    Field::make( 'text', 'solution__btn', __( 'Название кнопки' ))
                ] )
                ->add_fields( 'effect', 'Секция "Эффект от внедрения"', [
                    Field::make( 'text', 'effect__title', __( 'Заголовок' )),
                    Field::make( 'text', 'effect__title_business', __( 'Заголовок блока для бизнеса' ))
                        ->set_width(50),
                    Field::make( 'text', 'effect__title_team', __( 'Заголовок блока для команды' ))
                        ->set_width(50),
                    Field::make( 'complex', 'effect__business', __( 'Список полученного эффекта для бизнеса' ) )
                        ->set_width(50)
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'effect__business_list', '', [
                            Field::make( 'text', 'for_business_title', __( 'Заголовок полученного эффекта для бизнеса' )),
                            Field::make( 'text', 'for_business_text', __( 'Текст полученного эффекта для бизнеса' )),
                        ]),
                    Field::make( 'complex', 'effect__team', __( 'Список полученного эффекта для команды' ) )
                        ->set_width(50)
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'effect__team_list', '', [
                            Field::make( 'text', 'for_team_title', __( 'Заголовок полученного эффекта для команды' )),
                            Field::make( 'text', 'for_team_text', __( 'Текст полученного эффекта для команды' )),
                        ]),
                    Field::make( 'text', 'effect__btn', __( 'Название кнопки' ))
                ] )
                ->add_fields( 'about', 'Секция "Про меня"', [
                    Field::make( 'text', 'about__title', __( 'Заголовок' ))
                        ->set_width(30),
                    Field::make( 'text', 'about__text', __( 'Текст с описанием опыта работы' ))
                        ->set_width(70),
                    Field::make( 'text', 'about_block_title1', __( 'Заголовок блока "Мой подход"' ))
                        ->set_width(50),
                    Field::make( 'text', 'about_block_title2', __( 'Заголовок блока "Экспертиза"' ))
                        ->set_width(50),
                    Field::make( 'complex', 'approach', __( 'Список подхода' ) )
                        ->set_width(50)
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'approach_list', '', [
                            Field::make( 'text', 'approach_item', __( 'Пункт с описанием подхода' )),
                        ]),
                    Field::make( 'complex', 'expertise', __( 'Список экспертизы' ) )
                        ->set_width(50)
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'expertise_list', '', [
                            Field::make( 'text', 'expertise_item', __( 'Пункт с описанием экспертизы' )),
                        ]),
                     Field::make( 'image', 'about_image', __( 'Фотграфия для секции "Про меня"' ) )
                        ->set_help_text( 'Изображение для десктопной версии разрешение 450х628.' )
                        ->set_width(30),
                    Field::make( 'image', 'about_imag-tab', __( 'Фотграфия для секции "Про меня"' ) )
                        ->set_help_text( 'Изображение для планшетной версии разрешение 301х414.' )
                        ->set_width(30),
                    Field::make( 'image', 'about_imag-mob', __( 'Фотграфия для секции "Про меня"' ) )
                        ->set_width(30),
                ] )
                ->add_fields( 'testimonials', 'Секция "Отзывы"', [
                    Field::make( 'text', 'testimonials__title', __( 'Заголовок' )),
                    Field::make( 'complex', 'testimonials', __( 'Список экспертизы' ) )
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'testimonials_list', '', [
                            Field::make( 'image', 'photo', __( 'Фотография' ))
                                ->set_width(20),
                            Field::make( 'text', 'name', __( 'Имя Фамилия' ))
                                ->set_width(40),
                            Field::make( 'text', 'position', __( 'Должность' ))
                                ->set_width(40),
                            Field::make( 'rich_text', 'text', __( 'Текст отзыва' )),
                        ]),
                ] )
                ->add_fields( 'form', 'Секция "Форма запроса консультации"', [
                    Field::make( 'text', 'form__title', __( 'Заголовок' )),
                    Field::make( 'text', 'form__undertitle', __( 'Подзаголовок' ))
                ] )
        ] );

});