<?php
require_once __DIR__ . '/includes/site.php';

$news_posts = array();
$wp_load = __DIR__ . '/../wp-load.php';
$js_ver = zifra_asset_ver( 'js/main.js' );

if ( is_readable( $wp_load ) ) {
  require_once $wp_load;
  $news_posts = zifra_get_news_posts( 12 );
}
?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'ЦИФРА — колледж нового поколения',
    'seo_description' => 'Колледж ЦИФРА — колледж нового поколения в Кемерово. ул. Николая Островского, 12.',
    'seo_path'        => '',
    'preload_banner'  => true,
    'print_json_ld'   => true,
  )
);
?>
</head>
<body>
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'is_home' => true ) ); ?>

  <main id="main">
    <section class="hero">
      <div class="hero__copy layer layer--front">
        <h1 class="hero__title">
          <span>Колледж</span>
          <span>нового</span>
          <span class="hero__title-accent">поколения</span>
        </h1>
      </div>

      <div class="hero__visual">
        <svg class="hero-hex-defs" width="0" height="0" aria-hidden="true" focusable="false">
          <defs>
            <clipPath id="hero-hex-round" clipPathUnits="objectBoundingBox">
              <path d="M0.205 0.129 Q0.25 0.04 0.35 0.04 L0.65 0.04 Q0.75 0.04 0.795 0.129 L0.935 0.411 Q0.98 0.5 0.935 0.589 L0.795 0.871 Q0.75 0.96 0.65 0.96 L0.35 0.96 Q0.25 0.96 0.205 0.871 L0.065 0.589 Q0.02 0.5 0.065 0.411 Z"/>
            </clipPath>
          </defs>
        </svg>
        <span class="hero-hex hero-hex--glow" aria-hidden="true"></span>
        <span class="hero-hex hero-hex--shift" aria-hidden="true"></span>
        <span class="hero-hex hero-hex--tiny" aria-hidden="true"></span>
        <span class="hero-orb hero-orb--magenta" aria-hidden="true"></span>
        <span class="hero-orb hero-orb--cyan" aria-hidden="true"></span>
        <svg class="hero-hexline" viewBox="0 0 200 200" aria-hidden="true">
          <defs>
            <linearGradient id="hero-hex-stroke" x1="16" y1="8" x2="184" y2="188" gradientUnits="userSpaceOnUse">
              <stop stop-color="#ff4d8d"/>
              <stop offset="0.42" stop-color="#8a5cff"/>
              <stop offset="1" stop-color="#ff9a3c"/>
            </linearGradient>
          </defs>
          <path d="M41.06 25.89 Q50 8 70 8 L130 8 Q150 8 158.94 25.89 L187.06 82.11 Q196 100 187.06 117.89 L158.94 174.11 Q150 192 130 192 L70 192 Q50 192 41.06 174.11 L12.94 117.89 Q4 100 12.94 82.11 Z" fill="none" stroke="url(#hero-hex-stroke)" stroke-width="1.35" stroke-linejoin="round" stroke-linecap="round" opacity="0.82"/>
        </svg>
        <picture>
          <source
            type="image/webp"
            srcset="assets/banner-640.webp 640w, assets/banner.webp 849w"
            sizes="(max-width: 860px) min(100vw, 560px), min(46vw, 720px)"
          >
          <img
            src="assets/banner.png"
            alt="Студенты колледжа ЦИФРА"
            width="849"
            height="768"
            fetchpriority="high"
            decoding="async"
          >
        </picture>
      </div>
    </section>

<?php zifra_partial( 'home-banners' ); ?>

    <section class="facts" aria-label="Цифры колледжа">
      <div class="facts__inner">
        <ul class="facts__list">
          <li class="fact">
            <p class="fact__aside">Более</p>
            <p class="fact__num" data-count="1300">1300</p>
            <p class="fact__label">студентов</p>
          </li>
          <li class="fact">
            <p class="fact__num">2020</p>
            <p class="fact__label">Год основания</p>
          </li>
          <li class="fact">
            <p class="fact__num" data-count="7">7</p>
            <p class="fact__label">образовательных программ</p>
          </li>
        </ul>
      </div>
    </section>

    <section class="specs" id="specialnosti" aria-labelledby="specs-title">
      <div class="specs__inner">
        <header class="specs__head">
          <p class="specs__kicker">Образовательные программы</p>
          <h2 class="specs__title" id="specs-title">Наши специальности</h2>
        </header>

        <div class="specs__viewport" role="region" aria-label="Карточки специальностей. Прокрутите вбок" tabindex="0">
        <div class="specs__grid">
          <article class="spec" style="--accent: #3ec7ff">
            <div class="spec__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M8.2 7.2 4.5 12l3.7 4.8"/>
                <path d="m15.8 7.2 3.7 4.8-3.7 4.8"/>
                <path d="m13.2 6.5-2.4 11"/>
              </svg>
            </div>
            <h3 class="spec__name">Разработка и управление программным обеспечением</h3>
            <p class="spec__qual"><span>Квалификация</span> Программист</p>
            <ul class="spec__terms">
              <li>
                <span>На базе 9 классов</span>
                <strong>3 года 10 мес.</strong>
              </li>
              <li>
                <span>На базе 11 классов</span>
                <strong>2 года 10 мес.</strong>
              </li>
            </ul>
          </article>

          <article class="spec" style="--accent: #ff3d9a">
            <div class="spec__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <rect x="3.5" y="5.5" width="17" height="13" rx="2.2"/>
                <path d="M3.5 9.2h17"/>
                <circle cx="6.4" cy="7.35" r="0.7"/>
                <circle cx="8.6" cy="7.35" r="0.7"/>
                <path d="m9.2 13.2 2 2 3.6-4.2"/>
              </svg>
            </div>
            <h3 class="spec__name">Веб-разработка</h3>
            <p class="spec__qual"><span>Квалификация</span> Разработчик веб-приложений</p>
            <ul class="spec__terms">
              <li>
                <span>На базе 9 классов</span>
                <strong>2 года 10 мес.</strong>
              </li>
              <li>
                <span>На базе 11 классов</span>
                <strong>1 год 10 мес.</strong>
              </li>
            </ul>
          </article>

          <article class="spec" style="--accent: #7a4dff">
            <div class="spec__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="6.2" r="2"/>
                <circle cx="6.4" cy="16.6" r="2"/>
                <circle cx="17.6" cy="16.6" r="2"/>
                <path d="m10.4 7.6-2.6 7.1M13.6 7.6l2.6 7.1M8.4 16.6h7.2"/>
              </svg>
            </div>
            <h3 class="spec__name">Интеграция решений с применением технологий искусственного интеллекта</h3>
            <p class="spec__qual"><span>Квалификация</span> Специалист по работе с искусственным интеллектом</p>
            <ul class="spec__terms">
              <li>
                <span>На базе 9 классов</span>
                <strong>3 года 10 мес.</strong>
              </li>
            </ul>
          </article>

          <article class="spec" style="--accent: #ff6b32">
            <div class="spec__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 3.8 18.4 6v5.4c0 4.2-2.9 6.9-6.4 8.4-3.5-1.5-6.4-4.2-6.4-8.4V6Z"/>
                <path d="M12 9.2v5.2M9.6 11.8h4.8"/>
              </svg>
            </div>
            <h3 class="spec__name">Правоохранительная деятельность</h3>
            <p class="spec__qual"><span>Квалификация</span> Юрист</p>
            <ul class="spec__terms">
              <li>
                <span>На базе 9 классов</span>
                <strong>3 года 6 мес.</strong>
              </li>
              <li>
                <span>На базе 11 классов</span>
                <strong>2 года 6 мес.</strong>
              </li>
            </ul>
          </article>

          <article class="spec" style="--accent: #4fd4ff">
            <div class="spec__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 4.2v15.2M8 19.4h8"/>
                <path d="M5.2 8.2h13.6"/>
                <path d="M8.2 8.2 6 13.4h4.4Z"/>
                <path d="m15.8 8.2 2.2 5.2H13.6Z"/>
              </svg>
            </div>
            <h3 class="spec__name">Юриспруденция</h3>
            <p class="spec__qual"><span>Квалификация</span> Юрист</p>
            <ul class="spec__terms">
              <li>
                <span>На базе 9 классов</span>
                <strong>2 года 10 мес.</strong>
              </li>
              <li>
                <span>На базе 11 классов</span>
                <strong>1 год 10 мес.</strong>
              </li>
            </ul>
          </article>

          <article class="spec" style="--accent: #ffb020">
            <div class="spec__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M7.2 9.2h9.6l-.8 10.2H8Z"/>
                <path d="M9.2 9.2V8a2.8 2.8 0 0 1 5.6 0v1.2"/>
              </svg>
            </div>
            <h3 class="spec__name">Торговое дело</h3>
            <p class="spec__qual"><span>Квалификация</span> Специалист торгового дела</p>
            <ul class="spec__terms">
              <li>
                <span>На базе 9 классов</span>
                <strong>2 года 10 мес.</strong>
              </li>
              <li>
                <span>На базе 11 классов</span>
                <strong>1 год 10 мес.</strong>
              </li>
            </ul>
          </article>

          <article class="spec" style="--accent: #ff4d8d">
            <div class="spec__icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M4.8 9.6h4.2L17.6 6v12l-8.6-3.6H4.8Z"/>
                <path d="M9 14.4V18"/>
                <path d="M18.4 9.2c1.4 1.2 1.4 4.4 0 5.6"/>
              </svg>
            </div>
            <h3 class="spec__name">Реклама</h3>
            <p class="spec__qual"><span>Квалификация</span> Специалист по рекламе</p>
            <ul class="spec__terms">
              <li>
                <span>На базе 9 классов</span>
                <strong>2 года 10 мес.</strong>
              </li>
              <li>
                <span>На базе 11 классов</span>
                <strong>1 год 10 мес.</strong>
              </li>
            </ul>
          </article>
        </div>
        </div>
      </div>
    </section>

    <section class="team" id="komanda" aria-labelledby="team-title">
      <div class="team__inner">
        <header class="team__head">
          <p class="team__kicker">Люди цифры</p>
          <h2 class="team__title" id="team-title">Наша команда</h2>
        </header>

        <div class="team__board">
          <div class="team__flanks" aria-hidden="true">
            <div class="team__flank team__flank--left">
              <span class="team-mark team-mark--blob team-mark--magenta"></span>
              <span class="team-mark team-mark--hex team-mark--lg"></span>
            </div>
            <div class="team__flank team__flank--right">
              <span class="team-mark team-mark--blob team-mark--cyan"></span>
              <span class="team-mark team-mark--hex team-mark--lg"></span>
            </div>
          </div>

          <div class="team__stage">
          <button class="team__btn team__btn--prev" type="button" aria-label="Предыдущий сотрудник">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 6.5 9 12l5.5 5.5"/></svg>
          </button>

          <div class="team__viewport" tabindex="0" aria-roledescription="карусель">
            <div class="team__track">
              <article class="team-slide">
                <div class="team-slide__photo team-slide__photo--keep-right">
                  <img loading="lazy" decoding="async" src="assets/Staff/Nevedrova.webp" alt="Неведрова Ольга Михайловна">
                </div>
                <div class="team-slide__info">
                  <h3>Неведрова Ольга Михайловна</h3>
                  <p class="team-slide__role">Директор колледжа</p>
                  <p class="team-slide__bio">Эксперт по стратегическому управлению в образовании и развитию человеческого капитала, тимлидерству и архитектуре колледжа как экосистемы. Визионер и драйвер изменений в среднем профессиональном образовании</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Andreychuc.webp" alt="Андрейчук Дарья Михайловна">
                </div>
                <div class="team-slide__info">
                  <h3>Андрейчук Дарья Михайловна</h3>
                  <p class="team-slide__role">Педагог-психолог · Социальный педагог</p>
                  <p class="team-slide__bio">Специалист по сопровождению льготных категорий обучающихся. Коуч по личностному развитию и построению эффективных коммуникаций в образовательной среде</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Ardasheva.webp" alt="Ардашева Наталья Валерьевна">
                </div>
                <div class="team-slide__info">
                  <h3>Ардашева Наталья Валерьевна</h3>
                  <p class="team-slide__role">Начальник методического отдела</p>
                  <p class="team-slide__bio">Проектировщик и фасилитатор профессионального роста преподавателей. Проводник инновационных образовательных технологий и методик в учебно-воспитательной среде колледжа</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Shalumanova.webp" alt="Жалуманова Виктория Владиславовна">
                </div>
                <div class="team-slide__info">
                  <h3>Жалуманова Виктория Владиславовна</h3>
                  <p class="team-slide__role">Заведующая очным отделением</p>
                  <p class="team-slide__bio">Менеджер учебного процесса, организации и контроля качества подготовки специалистов, разработчик индивидуальных образовательных траекторий. Курирует специальности IT-сферы, «Юриспруденция», «Реклама», «Преподавание в начальных классах»</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Ivanova.webp" alt="Иванова Елена Ивановна">
                </div>
                <div class="team-slide__info">
                  <h3>Иванова Елена Ивановна</h3>
                  <p class="team-slide__role">Заместитель директора по воспитательной работе</p>
                  <p class="team-slide__bio">Акселератор студенческих активностей, творческих состояний и событий, наставнического движения, специалист по связям с общественными молодёжными организациями</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Krepak.webp" alt="Крепак Юлия Сергеевна">
                </div>
                <div class="team-slide__info">
                  <h3>Крепак Юлия Сергеевна</h3>
                  <p class="team-slide__role">Заместитель директора по учебно-методической работе</p>
                  <p class="team-slide__bio">Разработчик и интегратор новых образовательных форматов и технологий. Координатор профессиональных полигонов, проектной деятельности студентов и преподавателей, а также чемпионатного движения «Профессионалы»</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Malashkina.webp" alt="Малашкина Лариса Евгеньевна">
                </div>
                <div class="team-slide__info">
                  <h3>Малашкина Лариса Евгеньевна</h3>
                  <p class="team-slide__role">Заместитель директора по информационным технологиям</p>
                  <p class="team-slide__bio">Архитектор цифровой образовательной среды. Разработчик IT-курсов и интенсивов, организатор профориентационной работы и дополнительного образования</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Matvienko.webp" alt="Матвиенко Наталья Владимировна">
                </div>
                <div class="team-slide__info">
                  <h3>Матвиенко Наталья Владимировна</h3>
                  <p class="team-slide__role">Заведующая очным и заочным отделением</p>
                  <p class="team-slide__bio">Организатор учебного процесса, навигатор и наставник образовательных маршрутов. Курирует специальности «Правоохранительная деятельность», «Торговое дело» и заочное отделение колледжа</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Morgunova.webp" alt="Моргунова Варвара Александровна">
                </div>
                <div class="team-slide__info">
                  <h3>Моргунова Варвара Александровна</h3>
                  <p class="team-slide__role">Заведующая учебно-производственной практикой</p>
                  <p class="team-slide__bio">Руководитель Центра содействия трудоустройству выпускников. Навигатор по профессиональной адаптации выпускников на рынке труда. Преподаватель IT-дисциплин и курсов</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Nashelskaya.webp" alt="Нежельская Татьяна Николаевна">
                </div>
                <div class="team-slide__info">
                  <h3>Нежельская Татьяна Николаевна</h3>
                  <p class="team-slide__role">Юрисконсульт</p>
                  <p class="team-slide__bio">Эксперт по образовательному праву и договорным отношениям участников образовательного процесса. Ведущий преподаватель юридических дисциплин</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Nikitchenko.webp" alt="Никитченко Эдуард Сергеевич">
                </div>
                <div class="team-slide__info">
                  <h3>Никитченко Эдуард Сергеевич</h3>
                  <p class="team-slide__role">Специалист по информационным ресурсам и медиасопровождению</p>
                  <p class="team-slide__bio">Администратор сайта и социальных сетей колледжа, дизайнер и бренд-менеджер</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Noskova.webp" alt="Носкова Татьяна Юрьевна">
                </div>
                <div class="team-slide__info">
                  <h3>Носкова Татьяна Юрьевна</h3>
                  <p class="team-slide__role">Заместитель директора по безопасности образовательного процесса</p>
                  <p class="team-slide__bio">Ведущий преподаватель и ментор специальности «Правоохранительная деятельность». Амбассадор чемпионатного движения «Профессионалы» и профориентационных проектов для школьников</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Shabarchina.webp" alt="Шабарчина Владислава Юрьевна">
                </div>
                <div class="team-slide__info">
                  <h3>Шабарчина Владислава Юрьевна</h3>
                  <p class="team-slide__role">Заместитель директора по учебно-производственной работе</p>
                  <p class="team-slide__bio">Менеджер образовательного процесса, гарант качества подготовки специалистов и выполнения государственных стандартов</p>
                </div>
              </article>

              <article class="team-slide">
                <div class="team-slide__photo">
                  <img loading="lazy" decoding="async" src="assets/Staff/Shiprinskaya.webp" alt="Шипринская Татьяна Владимировна">
                </div>
                <div class="team-slide__info">
                  <h3>Шипринская Татьяна Владимировна</h3>
                  <p class="team-slide__role">Заместитель директора по маркетингу и связям с общественностью</p>
                  <p class="team-slide__bio">Специалист по продвижению бренда колледжа, PR и коммуникациям. Провайдер продуктового подхода в среднем профессиональном образовании. Ведущий преподаватель специальности «Реклама»</p>
                </div>
              </article>
            </div>
            <div class="team__orbit" aria-hidden="true">
              <span class="team-orb team-orb--a"></span>
              <span class="team-orb team-orb--b"></span>
              <span class="team-orb team-orb--c"></span>
              <span class="team-orb team-orb--d"></span>
              <span class="team-crystal team-crystal--a"></span>
              <span class="team-crystal team-crystal--b"></span>
            </div>
          </div>

          <button class="team__btn team__btn--next" type="button" aria-label="Следующий сотрудник">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.5 6.5 15 12l-5.5 5.5"/></svg>
          </button>
        </div>

        <div class="team__nav">
          <div class="team__bar" role="slider" aria-label="Прогресс слайдера команды" aria-valuemin="1" aria-valuemax="14" aria-valuenow="1" tabindex="0">
            <span class="team__bar-track"></span>
            <span class="team__bar-fill"></span>
            <span class="team__bar-thumb"></span>
          </div>
          <div class="team__names" role="tablist" aria-label="Сотрудники колледжа"></div>
        </div>
        </div>
      </div>
    </section>

    <section class="news" id="novosti" aria-labelledby="news-title">
      <div class="news__inner">
        <header class="news__head">
          <p class="news__kicker">События колледжа</p>
          <h2 class="news__title" id="news-title">Новости</h2>
        </header>

        <?php if ( $news_posts ) : ?>
        <div class="news__stage">
          <button class="news__btn news__btn--prev" type="button" aria-label="Предыдущая новость">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14.5 6.5 9 12l5.5 5.5"/></svg>
          </button>

          <div class="news__viewport" tabindex="0" aria-roledescription="карусель">
            <div class="news__track">
              <?php foreach ( $news_posts as $post ) : setup_postdata( $post ); ?>
              <article class="news-slide">
                <a class="news-slide__card" href="<?php echo esc_url( get_permalink( $post ) ); ?>">
                  <div class="news-slide__photo<?php echo has_post_thumbnail( $post ) ? '' : ' news-slide__photo--empty'; ?>">
                    <?php
                    if ( has_post_thumbnail( $post ) ) {
                      echo get_the_post_thumbnail( $post, 'large', array(
                        'alt' => esc_attr( get_the_title( $post ) ),
                      ) );
                    }
                    ?>
                  </div>
                  <div class="news-slide__info">
                    <time class="news-slide__date" datetime="<?php echo esc_attr( get_the_date( 'Y-m-d', $post ) ); ?>"><?php echo esc_html( get_the_date( 'd.m.Y', $post ) ); ?></time>
                    <h3><?php echo esc_html( get_the_title( $post ) ); ?></h3>
                    <p class="news-slide__excerpt">
                      <?php
                      $excerpt = ! empty( $post->post_excerpt ) ? $post->post_excerpt : wp_trim_words( wp_strip_all_tags( $post->post_content ), 28, '…' );
                      echo wp_kses_post( $excerpt );
                      ?>
                    </p>
                    <span class="news-slide__more">Читать новость</span>
                  </div>
                </a>
              </article>
              <?php endforeach; wp_reset_postdata(); ?>
            </div>
          </div>

          <button class="news__btn news__btn--next" type="button" aria-label="Следующая новость">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9.5 6.5 15 12l-5.5 5.5"/></svg>
          </button>
        </div>

        <div class="news__nav">
          <div class="news__bar" role="slider" aria-label="Прогресс слайдера новостей" aria-valuemin="1" aria-valuemax="<?php echo (int) count( $news_posts ); ?>" aria-valuenow="1" tabindex="0">
            <span class="news__bar-track"></span>
            <span class="news__bar-fill"></span>
            <span class="news__bar-thumb"></span>
          </div>
        </div>
        <?php else : ?>
        <p class="news__empty">Новостей пока нет.</p>
        <?php endif; ?>
      </div>
    </section>

    <section class="partners" id="partnery" aria-labelledby="partners-title">
      <div class="partners__inner">
        <header class="partners__head">
          <p class="partners__kicker">Партнёрская сеть</p>
          <h2 class="partners__title" id="partners-title">Наши партнёры</h2>
        </header>
      </div>

      <?php
      $zifra_partners = array(
        array( 'src' => 'assets/part/1с-истлайн.png', 'webp' => 'assets/part/partner-1c-istline.webp', 'alt' => '1С ИстЛайн' ),
        array( 'src' => 'assets/part/Bez-imeni_1-removebg-preview-1.png', 'webp' => 'assets/part/partner-kemerovo.webp', 'alt' => 'Администрация города Кемерово' ),
        array( 'src' => 'assets/part/kisspng-1c-rarus-1c-company-computer-software-1-5b0f79c5665616.9365307915277408694192-removebg-preview.png', 'webp' => 'assets/part/partner-1c-rarus.webp', 'alt' => '1С-Рарус' ),
        array( 'src' => 'assets/part/Logo-KuzPC.png', 'webp' => 'assets/part/partner-kuzpc.webp', 'alt' => 'КузПК' ),
        array( 'src' => 'assets/part/ГУФСИН-РОССИИ.png', 'webp' => 'assets/part/partner-gufsin.webp', 'alt' => 'ГУФСИН России' ),
        array( 'src' => 'assets/part/ктпп.svg', 'webp' => '', 'alt' => 'КТПП' ),
        array( 'src' => 'assets/part/МарияРа.png', 'webp' => 'assets/part/partner-mariara.webp', 'alt' => 'Мария-Ра' ),
        array( 'src' => 'assets/part/МВД-России-по-Кем-области.png', 'webp' => 'assets/part/partner-mvd.webp', 'alt' => 'МВД России по Кемеровской области' ),
        array( 'src' => 'assets/part/медиа-Кузбасс.png', 'webp' => 'assets/part/partner-media-kuzbass.webp', 'alt' => 'Медиахолдинг Кузбасс' ),
        array( 'src' => 'assets/part/Первые.jpg', 'webp' => 'assets/part/partner-pervye.webp', 'alt' => 'Движение Первых' ),
        array( 'src' => 'assets/part/СибУПК-768x493-removebg-preview.png', 'webp' => 'assets/part/partner-sibupk.webp', 'alt' => 'СибУПК' ),
      );
      $zifra_render_partners = static function ( array $partners, $with_alt ) {
        echo '<ul class="partners__list"' . ( $with_alt ? '' : ' aria-hidden="true"' ) . ">\n";
        foreach ( $partners as $partner ) {
          $alt = $with_alt ? zifra_h( $partner['alt'] ) : '';
          echo "            <li>\n              <figure class=\"partners__card\">\n";
          if ( ! empty( $partner['webp'] ) ) {
            echo '                <picture>' . "\n";
            echo '                  <source type="image/webp" srcset="' . zifra_h( $partner['webp'] ) . '">' . "\n";
            echo '                  <img loading="lazy" decoding="async" src="' . zifra_h( $partner['src'] ) . '" alt="' . $alt . '">' . "\n";
            echo '                </picture>' . "\n";
          } else {
            echo '                <img loading="lazy" decoding="async" src="' . zifra_h( $partner['src'] ) . '" alt="' . $alt . '">' . "\n";
          }
          echo "              </figure>\n            </li>\n";
        }
        echo "          </ul>\n";
      };
      ?>
      <div class="partners__viewport">
        <div class="partners__track">
          <?php $zifra_render_partners( $zifra_partners, true ); ?>
          <?php $zifra_render_partners( $zifra_partners, false ); ?>
        </div>
      </div>
    </section>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
</body>
</html>
