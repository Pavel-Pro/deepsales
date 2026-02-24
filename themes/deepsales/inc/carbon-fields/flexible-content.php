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
                ->add_fields( 'kursfor', 'Секция "Для кого это:"', [
                    Field::make( 'text', 'kursfor_title', __( 'Заголовок' )),
                    Field::make( 'complex', 'kursfor_block', __( 'Перечень должностей кому это будет интересно' ) )
                        ->set_layout('tabbed-horizontal')
                        ->set_width(50)
                        ->set_max( 5 )
                        ->add_fields( 'kursfor_list', '', [
                            Field::make( 'text', 'kursfor_position', __( 'Должность интересанта' )),
                        ]),
                    Field::make( 'text', 'kursfor__text', __( 'Текст внизу секции' ))
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
                ->add_fields( 'lessons', 'Секция "5 Уроков"', [
                    Field::make( 'text', 'lessons__title', __( 'Заголовок' )),
                    Field::make( 'text', 'lessons_number1', __( 'Текст и номер урока' ))
                        ->set_width(30),
                    Field::make( 'text', 'lessons1_title', __( 'Заголовок блока' ))
                        ->set_width(70),
                    Field::make( 'complex', 'lessons1_block', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-vertical')
                        ->set_max( 6 )
                        ->add_fields( 'lessons1_list', '', [
                            Field::make( 'text', 'lessons1_item', __( 'Тема урока' )),
                        ]),
                    Field::make( 'text', 'lessons_number2', __( 'Текст и номер урока' ))
                        ->set_width(30),
                    Field::make( 'text', 'lessons2_title', __( 'Заголовок блока' ))
                        ->set_width(70),
                    Field::make( 'complex', 'lessons2_block', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-vertical')
                        ->set_max( 6 )
                        ->add_fields( 'lessons2_list', '', [
                            Field::make( 'text', 'lessons2_item', __( 'Тема урока' )),
                        ]),
                    Field::make( 'text', 'lessons_number3', __( 'Текст и номер урока' ))
                        ->set_width(30),
                    Field::make( 'text', 'lessons3_title', __( 'Заголовок блока' ))
                        ->set_width(70),
                    Field::make( 'complex', 'lessons3_block', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-vertical')
                        ->set_max( 6 )
                        ->add_fields( 'lessons3_list', '', [
                            Field::make( 'text', 'lessons3_item', __( 'Тема урока' )),
                        ]),
                     Field::make( 'text', 'lessons_number4', __( 'Текст и номер урока' ))
                        ->set_width(30),
                    Field::make( 'text', 'lessons4_title', __( 'Заголовок блока' ))
                        ->set_width(70),
                    Field::make( 'complex', 'lessons4_block', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-vertical')
                        ->set_max( 6 )
                        ->add_fields( 'lessons4_list', '', [
                            Field::make( 'text', 'lessons4_item', __( 'Тема урока' )),
                        ]),
                    Field::make( 'text', 'lessons_number5', __( 'Текст и номер урока' ))
                        ->set_width(30),
                    Field::make( 'text', 'lessons5_title', __( 'Заголовок блока' ))
                        ->set_width(70),
                    Field::make( 'complex', 'lessons5_block', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-vertical')
                        ->set_max( 6 )
                        ->add_fields( 'lessons5_list', '', [
                            Field::make( 'text', 'lessons5_item', __( 'Тема урока' )),
                        ]),
                    Field::make( 'text', 'lessons_number6', __( 'Текст' ))
                        ->set_width(50),
                    Field::make( 'complex', 'lessons6_block', __( 'Этапы диагностики' ) )
                        ->set_layout('tabbed-vertical')
                        ->set_max( 6 )
                        ->add_fields( 'lessons6_list', '', [
                            Field::make( 'text', 'lessons6_item', __( 'Тема урока' )),
                        ]),
                    Field::make( 'text', 'lessons_button', __( 'Текст кнопки' ))
                        ->set_width(50),
                    Field::make( 'text', 'lessons_text', __( 'Текст под кнопкой' ))
                        ->set_width(50),
                ] )
                ->add_fields( 'package', 'Секция c пакетами обучения"', [
                    Field::make( 'text', 'package__title', __( 'Заголовок' )),
                    Field::make( 'text', 'start__toptitle', __( 'Текст над названием пакета обучения "Старт"' ))
                        ->set_width(30),
                    Field::make( 'text', 'start__title', __( 'Названием пакета обучения "Старт"' ))
                        ->set_width(30),
                    Field::make( 'text', 'start__undertitle', __( 'Текст под названием пакета обучения "Старт"' ))
                        ->set_width(30),
                    Field::make( 'complex', 'start_package', __( 'Список услуг пакета "Старт"' ) )
                        ->set_layout('tabbed-vertical')
                        ->add_fields( 'start_list', '', [
                            Field::make( 'text', 'start_item', __( 'Пункты услуг "Старт"' )),
                            Field::make( 'checkbox', 'package_notavailable', 'Не доступно' )
                                ->set_option_value( 'yes' )
                                ->set_help_text('Поставить галочку если это опция в пакете не доступна')
                        ]),
                    Field::make( 'text', 'start__price', __( 'Цена пакета обучения "Старт"' ))
                        ->set_width(50),
                    Field::make( 'text', 'start__button', __( 'Текст кнопки пакета обучения "Старт"' ))
                        ->set_width(50),
                    Field::make( 'text', 'system__toptitle', __( 'Текст над названием пакета обучения "Система"' ))
                        ->set_width(30),
                    Field::make( 'text', 'system__title', __( 'Названием пакета обучения "Система"' ))
                        ->set_width(30),
                    Field::make( 'text', 'system__undertitle', __( 'Текст под названием пакета обучения "Система"' ))
                        ->set_width(30),
                    Field::make( 'complex', 'system_package', __( 'Список услуг пакета "Система"' ) )
                        ->set_layout('tabbed-vertical')
                        ->add_fields( 'system_list', '', [
                            Field::make( 'text', 'system_item', __( 'Пункты услуг "Система"' )),
                            Field::make( 'checkbox', 'package_notavailable', 'Не доступно' )
                                ->set_option_value( 'yes' )
                                ->set_help_text('Поставить галочку если это опция в пакете не доступна')
                        ]),
                    Field::make( 'text', 'system__price', __( 'Цена пакета обучения "Система"' ))
                        ->set_width(50),
                    Field::make( 'text', 'system__button', __( 'Текст кнопки пакета обучения "Система"' ))
                        ->set_width(50),
                    Field::make( 'text', 'master__toptitle', __( 'Текст над названием пакета обучения "Мастер"' ))
                        ->set_width(30),
                    Field::make( 'text', 'master__title', __( 'Названием пакета обучения "Мастер"' ))
                        ->set_width(30),
                    Field::make( 'text', 'master__undertitle', __( 'Текст под названием пакета обучения "Мастер"' ))
                        ->set_width(30),
                    Field::make( 'complex', 'master_package', __( 'Список услуг пакета "Мастер"' ) )
                        ->set_layout('tabbed-vertical')
                        ->add_fields( 'master_list', '', [
                            Field::make( 'text', 'master_item', __( 'Пункты услуг "Мастер"' )),
                            Field::make( 'checkbox', 'package_notavailable', 'Не доступно' )
                                ->set_option_value( 'yes' )
                                ->set_help_text('Поставить галочку если это опция в пакете не доступна')
                        ]),
                    Field::make( 'text', 'master__price', __( 'Цена пакета обучения "Мастер"' ))
                        ->set_width(50),
                    Field::make( 'text', 'master__button', __( 'Текст кнопки пакета обучения "Мастер"' ))
                        ->set_width(50),
                    Field::make( 'text', 'guarantees__day', __( 'Срок гарантии' ))
                        ->set_help_text('Для выделение жёлтым цветом обернуть в тег <span></span>')
                        ->set_width(30),
                    Field::make( 'text', 'package__text', __( 'Текст гарантии курсу' ))
                        ->set_width(70),
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
                    Field::make( 'text', 'guarantees__day', __( 'Срок гарантии' ))
                        ->set_width(30),
                    Field::make( 'text', 'guarantees__text', __( 'Текст гарантии курсу' ))
                        ->set_width(70),
                ] )
                ->add_fields( 'faq', 'Секция Вопросы ответ', [
                    Field::make( 'text', 'faq__title', __( 'Заголовок' )),
                    Field::make( 'complex', 'faq_list', __( 'Вопросы, ответы' ) )
                        ->set_width(50)
                        ->set_layout('tabbed-horizontal')
                        ->add_fields( 'question_answer', '', [
                            Field::make( 'text', 'question', __( 'Вопрос' )),
                            Field::make( 'rich_text', 'answer', __( 'Ответ' )),
                        ]),
                ] )
                ->add_fields( 'form', 'Секция "Форма запроса консультации"', [
                    Field::make( 'text', 'form__title', __( 'Заголовок' )),
                    Field::make( 'text', 'form__undertitle', __( 'Подзаголовок' ))
                ] )
                ->add_fields( 'important', 'Секция "Важно!"', [
                    Field::make( 'rich_text', 'important__text1', __( 'Текст Важно на английском' )),
                    Field::make( 'rich_text', 'important__text2', __( 'Текст Важно на украинском' )),
                ] )
        ] );

});