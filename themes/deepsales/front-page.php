<?php get_header(); ?>
    <div class="hero">
        <div class="wrapper">
            <div class="hero__items">
                <div class="hero-left">
                    <h1 class="title-hero">
                        Перестаньте втрачати угоди через хаосу відділі продажів
                    </h1>
                    <p class="text-hero">
                        Власникам і керівникам: процеси, метрики, дисципліна в CRM, навички команди й регулярний менеджмент — з прогнозованим результатом
                    </p>
                    <button class="button-hero">Замовити консультацію</button>
                </div>
                <div class="hero-right">
                    <picture>
                        <source srcset="<?php echo get_template_directory_uri(); ?>/assets/img/hero-photo-main-tab.webp" media="(max-width: 1024px)">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero-photo-main.webp" alt="Євгеній Попсуй" class="hero-img" fetchpriority="high">
                    </picture>
                    <div class="hero-elips hero-elips__big"></div>
                    <div class="hero-elips hero-elips__small"></div>
                </div>
            </div>
        </div>
    </div>
    <section class="problem">
        <div class="wrapper">
            <h1 class="title title__problem">Проблеми відділу продажу</h1>
            <span class="subtitle subtitle__problem">Ці проблеми коштують вам мільйони гривень щороку</span>
            <div class="problem-lists">
                <div class="problem-item">
                    <h3 class="title-list">Власники страждають від:</h3>
                    <ul class="problem__list">
                        <li class="problem-list__item">
                            План "скаче" — немає прогнозованих доходів
                        </li>
                        <li class="problem-list__item">
                            Ліди губляться або довго чекають відповіді
                        </li>
                        <li class="problem-list__item">
                            Залежність від ключових менеджерів
                        </li>
                        <li class="problem-list__item">
                            Команда перевтомлена "пожежами"
                        </li>
                        <li class="problem-list__item">
                            Рішення приймаються " на відчуттях"
                        </li>
                    </ul>
                </div>
                <div class="problem-item">
                    <h3 class="title-list">Керівники відділів мучаються з:</h3>
                    <ul class="problem__list">
                        <li class="problem-list__item">
                            Менеджери чекають відповіді замість дій
                        </li>
                        <li class="problem-list__item">
                            CRM заповнений хаотично — аналітика неможлива
                        </li>
                        <li class="problem-list__item">
                            Розбори затягуються без конкретних рішень
                        </li>
                        <li class="problem-list__item">
                            Новачки місяцями не можуть стати продуктивними
                        </li>
                        <li class="problem-list__item">
                            Угоди "перескакують" етапи без логіки
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>