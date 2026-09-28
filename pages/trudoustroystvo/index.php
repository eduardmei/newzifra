<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';

$practice_docs = array(
  array(
    'title' => 'График прохождения практической подготовки студентов на 1 полугодие 2026-2027 учебного года',
    'href'  => 'https://disk.yandex.ru/i/u965ESEaiAk0vw',
    'meta'  => 'Я.Диск',
  ),
  array(
    'title' => 'Положение о практической подготовке обучающихся',
    'href'  => 'https://zifra42.ru/wp-content/uploads/2025/09/%D0%BE-%D0%BF%D1%80%D0%B0%D0%BA%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9-%D0%BF%D0%BE%D0%B4%D0%B3%D0%BE%D1%82%D0%BE%D0%B2%D0%BA%D0%B5-%D0%BE%D0%B1%D1%83%D1%87%D0%B0%D1%8E%D1%89%D0%B8%D1%85%D1%81%D1%8F_2025.pdf',
    'meta'  => 'PDF',
  ),
  array(
    'title' => 'Методические указания по оформлению дневника-отчета по практике',
    'href'  => '#',
    'meta'  => 'PDF',
  ),
  array(
    'title' => 'Пример гарантийного письма от организации',
    'href'  => '#',
    'meta'  => 'PDF',
  ),
  array(
    'title' => 'Согласие на обработку персональных данных несовершеннолетнего на регистрацию на портале «Работа в России»',
    'href'  => 'https://zifra42.ru/wp-content/uploads/2026/08/%D0%A1%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D0%B8%D0%B5-%D0%BD%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D1%83-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%BD%D0%B5%D1%81%D0%BE%D0%B2%D0%B5%D1%80%D1%88%D0%B5%D0%BD%D0%BD%D0%BE%D0%BB%D0%B5%D1%82%D0%BD%D0%B5%D0%B3%D0%BE-%D0%BD%D0%B0-%D1%80%D0%B5%D0%B3%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%86%D0%B8%D1%8E-%D0%BD%D0%B0-%D0%BF%D0%BE%D1%80%D1%82%D0%B0%D0%BB%D0%B5-%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0-%D0%B2-%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8.pdf',
    'meta'  => 'PDF',
  ),
  array(
    'title' => 'Согласие на обработку персональных данных в «Работу в России» от совершеннолетнего',
    'href'  => 'https://zifra42.ru/wp-content/uploads/2026/08/%D0%A1%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D0%B8%D0%B5-%D0%BD%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D1%83-%D0%BF%D0%B5%D1%80%D1%81.-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%B2-%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D1%83-%D0%B2-%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8-%D0%BE%D1%82-%D0%A1%D0%BE%D0%B2%D0%B5%D1%80%D1%88%D0%B5%D0%BD%D0%BD%D0%BE%D0%BB%D0%B5%D1%82%D0%BD%D0%B5%D0%B3%D0%BE.pdf',
    'meta'  => 'PDF',
  ),
  array(
    'title' => 'Согласие на обработку персональных данных в «Работу в России» от родителя',
    'href'  => 'https://zifra42.ru/wp-content/uploads/2026/08/%D0%A1%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D0%B8%D0%B5-%D0%BD%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D1%83-%D0%BF%D0%B5%D1%80%D1%81.-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%B2-%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D1%83-%D0%B2-%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8-%D0%BE%D1%82-%D0%A0%D0%9E%D0%94%D0%98%D0%A2%D0%95%D0%9B%D0%AF.pdf',
    'meta'  => 'PDF',
  ),
  array(
    'title' => 'Алгоритм регистрации на портале «Работа в России»',
    'href'  => 'https://zifra42.ru/wp-content/uploads/2026/09/%D0%B0%D0%BB%D0%B3%D0%BE%D1%80%D0%B8%D1%82%D0%BC-%D1%80%D0%B5%D0%B3%D0%B8%D1%81%D1%82%D1%80%D0%B0%D1%86%D0%B8%D0%B8-%D0%B2-%D0%BF%D0%BE%D1%80%D1%82%D0%B0%D0%BB%D0%B5-%D0%A0%D0%B0%D0%B1%D0%BE%D1%82%D0%B0-%D0%B2-%D0%A0%D0%BE%D1%81%D1%81%D0%B8%D0%B8.pptx',
    'meta'  => 'PPTX',
  ),
);

$center_docs = array(
  array(
    'title' => 'Анкета «Выпускник на рынке труда»',
    'href'  => 'https://docs.google.com/forms/d/1avfw5vezqdp7EJjjgyyGrErSOW5oQOBErPcae9ZB2qM/viewform',
    'meta'  => 'Форма',
  ),
  array(
    'title' => 'Положение о центре содействия трудоустройству выпускников',
    'href'  => 'https://zifra42.ru/wp-content/uploads/2025/09/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D1%86%D0%B5%D0%BD%D1%82%D1%80%D0%B5-%D1%81%D0%BE%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F-%D1%82%D1%80%D1%83%D0%B4%D0%BE%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D1%83-%D0%B2%D1%8B%D0%BF%D1%83%D1%81%D0%BA%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2-2025%D1%83%D1%87%D0%B3.pdf',
    'meta'  => 'PDF',
  ),
  array(
    'title' => 'Соглашение о сотрудничестве с центром занятости',
    'href'  => 'https://zifra42.ru/wp-content/uploads/2024/12/%D0%A1%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D1%88%D0%B5%D0%BD%D0%B8%D0%B5-%D1%81-%D0%A6%D0%97%D0%9D-2025.pdf',
    'meta'  => 'PDF',
  ),
  array(
    'title' => 'Сведения о трудоустройстве выпускников 2025 г. на 1.04.2026',
    'href'  => 'https://zifra42.ru/wp-content/uploads/2026/05/%D0%A2%D1%80%D1%83%D0%B4%D0%BE%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%BE-%D0%B2%D1%8B%D0%BF%D1%83%D1%81%D0%BA%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2-2025-%D0%B3.-%D0%BD%D0%B0-1.04.2026.pdf',
    'meta'  => 'PDF',
  ),
);

$resources = array(
  array(
    'title' => 'Работа в России',
    'href'  => 'https://trudvsem.ru/',
    'img'   => 'assets/trudoustroystvo/rabota-v-rossii.png',
  ),
  array(
    'title' => 'Центр занятости населения',
    'href'  => 'http://kemozn.ru/',
    'img'   => 'assets/trudoustroystvo/czn.png',
  ),
  array(
    'title' => 'Зарплата.ру',
    'href'  => 'https://kemerovo.zarplata.ru/?customDomain=1&overRideDomainAreaId=47',
    'img'   => 'assets/trudoustroystvo/zarplata.jpg',
  ),
  array(
    'title' => 'Дом кадров',
    'href'  => 'https://www.domkadrov.ru/',
    'img'   => 'assets/trudoustroystvo/dom-kadrov.png',
  ),
  array(
    'title' => 'HeadHunter',
    'href'  => 'https://kemerovo.hh.ru/',
    'img'   => 'assets/trudoustroystvo/hh.jpg',
  ),
  array(
    'title' => 'TEZ TOUR',
    'href'  => 'https://www.tez-tour.com/articles.html?categoryName=vacancies',
    'img'   => 'assets/trudoustroystvo/teztour.png',
  ),
  array(
    'title' => 'Вакансии и кадры',
    'href'  => 'https://jobkadrov.ru/vacancies/region/kemerovskaia-oblast_24',
    'img'   => 'assets/trudoustroystvo/vakansii-kadry.png',
  ),
  array(
    'title' => 'Подорожник',
    'href'  => 'https://www.podorognik.ru/hr',
    'img'   => 'assets/trudoustroystvo/podorozhnik.png',
  ),
  array(
    'title' => 'Работа России',
    'href'  => 'https://kemozn.ru/',
    'img'   => 'assets/trudoustroystvo/rabota-rossii.jpg',
  ),
  array(
    'title' => 'Goodline Job',
    'href'  => 'https://goodline-job.ru/?utm_source=organikagl&utm_medium=site',
    'img'   => 'assets/trudoustroystvo/goodline.png',
  ),
  array(
    'title' => 'Мой бизнес',
    'href'  => 'https://мойбизнес.рф/',
    'img'   => 'assets/trudoustroystvo/moy-biznes.png',
  ),
  array(
    'title' => 'ЦОПП',
    'href'  => 'https://copp42.ru/vacancy/',
    'img'   => 'assets/trudoustroystvo/copp.png',
  ),
  array(
    'title' => 'Интерактивный портал Минтруда',
    'href'  => 'https://www.ufz-kemerovo.ru/vacancy',
    'img'   => 'assets/trudoustroystvo/mintrud.jpg',
  ),
  array(
    'title' => 'Профориентир',
    'href'  => 'https://proforientir42.ru/trudoustrojstvo/',
    'img'   => 'assets/trudoustroystvo/proforientir.jpg',
  ),
  array(
    'title' => 'Мария-Ра',
    'href'  => 'https://www.maria-ra.ru/karera-v-seti/vakansii/',
    'img'   => 'assets/trudoustroystvo/maria-ra.png',
  ),
  array(
    'title' => 'Госслужба',
    'href'  => 'https://gossluzhba.gov.ru/',
    'img'   => 'assets/trudoustroystvo/gossluzhba.png',
  ),
);

$self_employed = array(
  array(
    'title' => 'Инфографика: самозанятость (лицо)',
    'src'   => 'assets/trudoustroystvo/ip-litso.png',
  ),
  array(
    'title' => 'Инфографика: самозанятость (оборот)',
    'src'   => 'assets/trudoustroystvo/ip-oborot.png',
  ),
  array(
    'title' => 'Инфографика: социальная помощь (оборот)',
    'src'   => 'assets/trudoustroystvo/pr-oborot.png',
  ),
);

function zifra_trud_doc_list( $items ) {
  foreach ( $items as $doc ) :
    $meta = ! empty( $doc['meta'] ) ? $doc['meta'] : 'PDF';
    $href = $doc['href'];
    $is_placeholder = ( $href === '#' || $href === '' );
    $target_attrs = $is_placeholder ? '' : ' target="_blank" rel="noopener noreferrer"';
    ?>
    <li>
      <a class="dept-doc<?php echo $is_placeholder ? ' is-placeholder' : ''; ?>" href="<?php echo zifra_h( $href ); ?>"<?php echo $target_attrs; ?>>
        <span class="dept-doc__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24">
            <path d="M7 3.5h7.2L19 8.3V20.5H7V3.5Z"/>
            <polyline points="14.2 3.5 14.2 8.3 19 8.3"/>
            <line x1="9.2" y1="12.2" x2="14.8" y2="12.2"/>
            <line x1="9.2" y1="15.4" x2="14.8" y2="15.4"/>
          </svg>
        </span>
        <span class="dept-doc__title"><?php echo zifra_h( $doc['title'] ); ?></span>
        <span class="dept-doc__meta"><?php echo zifra_h( $meta ); ?></span>
      </a>
    </li>
    <?php
  endforeach;
}

$css_info_ver = zifra_asset_ver( 'css/info.css' );
$css_ochnoe_ver = zifra_asset_ver( 'css/ochnoe.css' );
$css_trud_ver = zifra_asset_ver( 'css/trudoustroystvo.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );
$js_trud_ver = zifra_asset_ver( 'js/trudoustroystvo.js' );
$trud_base = zifra_abs_url( 'pages/trudoustroystvo/' );
?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'Практика и трудоустройство — Колледж ЦИФРА',
    'seo_description' => 'Практическая подготовка и центр трудоустройства выпускников колледжа ЦИФРА: документы, вакансии, резюме и электронные ресурсы.',
    'seo_path'        => 'pages/trudoustroystvo/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/ochnoe.css?v=<?php echo zifra_h( $css_ochnoe_ver ); ?>">
  <link rel="stylesheet" href="css/trudoustroystvo.css?v=<?php echo zifra_h( $css_trud_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Практика и трудоустройство' ) ); ?>

<main id="main" class="dept-page trud-page">
  <div class="dept-page__inner">

    <section class="dept-heads" aria-labelledby="trud-practice-title">
      <header>
        <p class="about-kicker">Студентам</p>
        <h2 class="about-title" id="trud-practice-title">Практическое обучение</h2>
      </header>

      <div class="trud-intro">
        <article class="team-slide dept-card">
          <div class="team-slide__photo">
            <img loading="lazy" decoding="async" src="assets/Staff/Morgunova.webp" alt="Моргунова Варвара Александровна">
          </div>
          <div class="team-slide__info">
            <h3>
              <span class="team-slide__surname">Моргунова</span>
              <span class="team-slide__given">Варвара Александровна</span>
            </h3>
            <p class="team-slide__role">Заведующая учебной и производственной практикой</p>
            <div class="dept-card__contacts">
              <a href="tel:+79234690686">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.2 3.6h2.4l1.2 4.2-1.8 1.2a12.6 12.6 0 0 0 5.4 5.4l1.2-1.8 4.2 1.2v2.4c0 .7-.3 1.3-.8 1.7-.5.5-2.6 2.1-7.2.2C7.2 16.1 4.6 11.6 3.8 8.2c-.6-2.6.8-4.1 1.4-4.6.5-.5 1.2-.8 2-.8Z"/></svg>
                +7 923 469-06-86
              </a>
              <a href="mailto:zifra42_prakt@mail.ru">
                <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6.5h16v11H4v-11Zm0 0 8 6.2L20 6.5"/></svg>
                zifra42_prakt@mail.ru
              </a>
            </div>
          </div>
        </article>

        <nav class="trud-jump" aria-label="Разделы страницы">
          <p class="trud-jump__label">Быстрый переход</p>
          <ul class="trud-jump__list">
            <li>
              <a class="trud-jump__btn" href="<?php echo zifra_h( $trud_base . '#trud-docs' ); ?>" data-trud-jump="trud-docs">
                <span class="trud-jump__num" aria-hidden="true">01</span>
                <span class="trud-jump__title">Документы практики</span>
                <span class="trud-jump__hint">Графики и бланки</span>
                <span class="trud-jump__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M5 12h12M13 6l6 6-6 6"/></svg>
                </span>
              </a>
            </li>
            <li>
              <a class="trud-jump__btn" href="<?php echo zifra_h( $trud_base . '#trud-center' ); ?>" data-trud-jump="trud-center">
                <span class="trud-jump__num" aria-hidden="true">02</span>
                <span class="trud-jump__title">Центр трудоустройства</span>
                <span class="trud-jump__hint">Выпускникам</span>
                <span class="trud-jump__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M5 12h12M13 6l6 6-6 6"/></svg>
                </span>
              </a>
            </li>
            <li>
              <a class="trud-jump__btn" href="<?php echo zifra_h( $trud_base . '#trud-resources' ); ?>" data-trud-jump="trud-resources">
                <span class="trud-jump__num" aria-hidden="true">03</span>
                <span class="trud-jump__title">Электронные ресурсы</span>
                <span class="trud-jump__hint">Вакансии и порталы</span>
                <span class="trud-jump__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M5 12h12M13 6l6 6-6 6"/></svg>
                </span>
              </a>
            </li>
            <li>
              <a class="trud-jump__btn" href="<?php echo zifra_h( $trud_base . '#trud-selfemp' ); ?>" data-trud-jump="trud-selfemp">
                <span class="trud-jump__num" aria-hidden="true">04</span>
                <span class="trud-jump__title">Самозанятость</span>
                <span class="trud-jump__hint">Социальная помощь</span>
                <span class="trud-jump__go" aria-hidden="true">
                  <svg viewBox="0 0 24 24"><path d="M5 12h12M13 6l6 6-6 6"/></svg>
                </span>
              </a>
            </li>
          </ul>
        </nav>
      </div>
    </section>

    <section id="trud-docs" class="dept-docs" aria-labelledby="trud-practice-docs-title">
      <header>
        <p class="about-kicker">Материалы</p>
        <h2 class="about-title" id="trud-practice-docs-title">Документы по практической подготовке</h2>
      </header>
      <ul class="dept-docs__list">
        <?php zifra_trud_doc_list( $practice_docs ); ?>
      </ul>
    </section>

    <section id="trud-center" class="dept-docs trud-center" aria-labelledby="trud-center-title">
      <header>
        <p class="about-kicker">Выпускникам</p>
        <h2 class="about-title" id="trud-center-title">Центр трудоустройства выпускников</h2>
      </header>

      <ul class="dept-docs__list">
        <?php zifra_trud_doc_list( $center_docs ); ?>
      </ul>

      <a
        class="trud-promo"
        href="https://max.ru/join/k_TG3bKOqRZQ4gkNtraWWVtdR_vR54c179ZwgBhVnaM"
        target="_blank"
        rel="noopener noreferrer"
      >
        <img class="trud-promo__logo" src="assets/trudoustroystvo/max-logo.png" alt="" width="160" height="118" loading="lazy" decoding="async">
        <div class="trud-promo__body">
          <p class="trud-promo__kicker">Канал в «Макс»</p>
          <p class="trud-promo__text">
            Актуальные вакансии и стажировки от партнёров колледжа, советы по резюме и собеседованиям,
            истории выпускников. Подпишись, чтобы не упустить возможности.
          </p>
          <span class="trud-promo__cta">Открыть канал</span>
        </div>
      </a>

      <article class="trud-opk">
        <a class="trud-opk__logo" href="https://fkc-opk.ru/" target="_blank" rel="noopener noreferrer">
          <img src="assets/trudoustroystvo/fkc-opk.jpg" alt="Федеральный кадровый центр ОПК" width="585" height="118" loading="lazy" decoding="async">
        </a>
        <p class="trud-opk__text">
          В целях организации работы по привлечению дополнительных кадров в организации оборонно-промышленного комплекса (ОПК)
          на портале Федерального кадрового центра ОПК
          <a href="https://fkc-opk.ru/" target="_blank" rel="noopener noreferrer">fkc-opk.ru</a>,
          сертифицированном для работы с персональными данными, создан информационный сервис.
          Студенты, желающие трудоустроиться в организации ОПК, могут размещать резюме с указанием желательного места работы
          (субъект РФ, отрасль или конкретная организация) — сведения адресно доводятся до кадровых служб организаций ОПК.
        </p>
      </article>
    </section>

    <section id="trud-resources" class="trud-resources" aria-labelledby="trud-resources-title">
      <header>
        <p class="about-kicker">Поиск работы</p>
        <h2 class="about-title" id="trud-resources-title">Основные электронные ресурсы</h2>
      </header>
      <ul class="trud-resources__grid">
        <?php foreach ( $resources as $item ) : ?>
          <li>
            <a class="trud-resource" href="<?php echo zifra_h( $item['href'] ); ?>" target="_blank" rel="noopener noreferrer">
              <span class="trud-resource__logo">
                <img src="<?php echo zifra_h( $item['img'] ); ?>" alt="" loading="lazy" decoding="async">
              </span>
              <span class="trud-resource__title"><?php echo zifra_h( $item['title'] ); ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>

    <section id="trud-selfemp" class="trud-selfemp" aria-labelledby="trud-selfemp-title">
      <header>
        <p class="about-kicker">Самозанятость</p>
        <h2 class="about-title" id="trud-selfemp-title">Государственная социальная помощь самозанятым</h2>
      </header>
      <ul class="trud-selfemp__grid">
        <?php foreach ( $self_employed as $img ) : ?>
          <li>
            <a class="trud-selfemp__item" href="<?php echo zifra_h( $img['src'] ); ?>" target="_blank" rel="noopener noreferrer">
              <img src="<?php echo zifra_h( $img['src'] ); ?>" alt="<?php echo zifra_h( $img['title'] ); ?>" loading="lazy" decoding="async">
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>

  </div>
</main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
  <script src="js/trudoustroystvo.js?v=<?php echo zifra_h( $js_trud_ver ); ?>" defer></script>
</body>
</html>
