<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';

$banner = 'https://zifra42.ru/wp-content/uploads/2026/07/%D0%A6%D0%B5%D0%BB%D0%B5%D0%B2%D0%BE%D0%B5-%D0%BE%D0%B1%D1%83%D1%87%D0%B5%D0%BD%D0%B8%D0%B5-scaled.jpg';

$guides = array(
  array(
    'id'    => 'student',
    'kicker'=> 'Памятка',
    'title' => 'Для обучающегося',
    'lead'  => 'По образовательным программам среднего профессионального образования',
    'pages' => array(
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_obuchayuschisya_oformlennaya_v1_1-0001-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_obuchayuschisya_oformlennaya_v1_1-0002-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_obuchayuschisya_oformlennaya_v1_1-0003-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_obuchayuschisya_oformlennaya_v1_1-0004-scaled-1.jpg',
    ),
  ),
  array(
    'id'    => 'applicant',
    'kicker'=> 'Памятка',
    'title' => 'Для абитуриента',
    'lead'  => 'Поступающего на обучение по образовательным программам СПО',
    'pages' => array(
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_abiturient_oformlennaya_v1_1-0001-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_abiturient_oformlennaya_v1_1-0002-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_abiturient_oformlennaya_v1_1-0003-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_abiturient_oformlennaya_v1_1-0004-scaled-1.jpg',
    ),
  ),
  array(
    'id'    => 'head',
    'kicker'=> 'Памятка',
    'title' => 'Для руководителя образовательной организации',
    'lead'  => 'Реализующей образовательные программы среднего профессионального образования',
    'pages' => array(
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_rukl_OO_oformlennaya_v1_1-0001-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_rukl_OO_oformlennaya_v1_1-0002-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_rukl_OO_oformlennaya_v1_1-0003-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_rukl_OO_oformlennaya_v1_1-0004-scaled-1.jpg',
      'https://zifra42.ru/wp-content/uploads/2024/06/Pamyatka_rukl_OO_oformlennaya_v1_1-0005-scaled-1.jpg',
    ),
  ),
);

$docs = array(
  array(
    'title' => 'Инструкция по работе в ЛК работодателя в части организации целевого обучения',
    'href'  => 'https://kempc.edu.ru/wp-content/uploads/2024/06/Instruktsia_dlya_rabotodatelya_po_zaklyucheniyu_dogovora_na_TsO.pdf',
    'meta'  => 'PDF',
  ),
);

$css_info_ver = zifra_asset_ver( 'css/info.css' );
$css_ochnoe_ver = zifra_asset_ver( 'css/ochnoe.css' );
$css_celevoe_ver = zifra_asset_ver( 'css/celevoe.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );
$js_celevoe_ver = zifra_asset_ver( 'js/celevoe.js' );
?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'Целевое обучение — Колледж ЦИФРА',
    'seo_description' => 'Целевое обучение в колледже ЦИФРА: памятки для обучающихся, абитуриентов и руководителей образовательных организаций, инструкция для работодателей.',
    'seo_path'        => 'pages/celevoe/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/ochnoe.css?v=<?php echo zifra_h( $css_ochnoe_ver ); ?>">
  <link rel="stylesheet" href="css/celevoe.css?v=<?php echo zifra_h( $css_celevoe_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Целевое обучение' ) ); ?>

<main id="main" class="dept-page celevoe-page">
  <div class="dept-page__inner">
    <section class="celevoe-hero" aria-labelledby="celevoe-hero-title">
      <header>
        <p class="about-kicker">Поступление и обучение</p>
        <h2 class="about-title" id="celevoe-hero-title">Целевое обучение</h2>
        <p class="celevoe-hero__lead">
          Памятки об организации целевого обучения по программам среднего профессионального образования
        </p>
      </header>
      <figure class="celevoe-hero__banner">
        <img
          src="<?php echo zifra_h( $banner ); ?>"
          alt="Целевое обучение"
          width="2560"
          height="1433"
          decoding="async"
          fetchpriority="high"
        >
      </figure>
    </section>

    <?php foreach ( $guides as $guide ) : ?>
    <section class="celevoe-guide" id="celevoe-<?php echo zifra_h( $guide['id'] ); ?>" aria-labelledby="celevoe-<?php echo zifra_h( $guide['id'] ); ?>-title">
      <header>
        <p class="about-kicker"><?php echo zifra_h( $guide['kicker'] ); ?></p>
        <h2 class="about-title" id="celevoe-<?php echo zifra_h( $guide['id'] ); ?>-title"><?php echo zifra_h( $guide['title'] ); ?></h2>
        <p class="celevoe-guide__lead"><?php echo zifra_h( $guide['lead'] ); ?></p>
      </header>

      <div class="celevoe-guide__grid" data-celevoe-gallery>
        <?php foreach ( $guide['pages'] as $i => $src ) :
          $page_n = $i + 1;
          $label = 'Страница ' . $page_n . ' — ' . $guide['title'];
          ?>
          <button
            class="celevoe-page-card"
            type="button"
            data-celevoe-src="<?php echo zifra_h( $src ); ?>"
            data-celevoe-caption="<?php echo zifra_h( $label ); ?>"
            aria-label="Открыть: <?php echo zifra_h( $label ); ?>"
          >
            <img
              loading="lazy"
              decoding="async"
              src="<?php echo zifra_h( $src ); ?>"
              alt="<?php echo zifra_h( $label ); ?>"
              width="1772"
              height="2560"
            >
            <span class="celevoe-page-card__badge"><?php echo (int) $page_n; ?></span>
          </button>
        <?php endforeach; ?>
      </div>
    </section>
    <?php endforeach; ?>

    <section class="dept-docs" aria-labelledby="celevoe-docs-title">
      <header>
        <p class="about-kicker">Работодателям</p>
        <h2 class="about-title" id="celevoe-docs-title">Документы</h2>
      </header>

      <ul class="dept-docs__list">
        <?php foreach ( $docs as $doc ) : ?>
          <li>
            <a class="dept-doc" href="<?php echo zifra_h( $doc['href'] ); ?>" target="_blank" rel="noopener noreferrer">
              <span class="dept-doc__icon" aria-hidden="true">
                <svg viewBox="0 0 24 24">
                  <path d="M7 3.5h7.2L19 8.3V20.5H7V3.5Z"/>
                  <polyline points="14.2 3.5 14.2 8.3 19 8.3"/>
                  <line x1="9.2" y1="12.2" x2="14.8" y2="12.2"/>
                  <line x1="9.2" y1="15.4" x2="14.8" y2="15.4"/>
                </svg>
              </span>
              <span class="dept-doc__title"><?php echo zifra_h( $doc['title'] ); ?></span>
              <span class="dept-doc__meta"><?php echo zifra_h( $doc['meta'] ); ?></span>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </section>
  </div>
</main>

  <div class="achievement-lightbox" id="celevoeLightbox" aria-hidden="true">
    <button class="achievement-lightbox-close" type="button" aria-label="Закрыть">
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path d="M6 6L18 18M18 6L6 18" />
      </svg>
    </button>

    <button class="achievement-lightbox-arrow achievement-lightbox-prev" type="button" aria-label="Предыдущая страница">
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path d="M15 5L8 12L15 19" />
      </svg>
    </button>

    <div class="achievement-lightbox-dialog" role="dialog" aria-modal="true">
      <div class="achievement-lightbox-content"></div>
      <div class="achievement-lightbox-caption"></div>
    </div>

    <button class="achievement-lightbox-arrow achievement-lightbox-next" type="button" aria-label="Следующая страница">
      <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
        <path d="M9 5L16 12L9 19" />
      </svg>
    </button>
  </div>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
  <script src="js/celevoe.js?v=<?php echo zifra_h( $js_celevoe_ver ); ?>" defer></script>
</body>
</html>
