<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';
$docs = array(
  array(
    'title' => 'Расписание ликвидации академической задолженности',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/09/%D0%A0%D0%B0%D1%81%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5-%D0%BB%D0%B8%D0%BA%D0%B2%D0%B8%D0%B4%D0%B0%D1%86%D0%B8%D0%B8-%D0%B0%D0%BA%D0%B0%D0%B4%D0%B5%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B9-%D0%B7%D0%B0%D0%B4%D0%BE%D0%BB%D0%B6%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8.pdf',
  ),
  array(
    'title' => 'Расписание сессии ПД 4 курс с 15.09.2026',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/09/%D0%A0%D0%B0%D1%81%D0%B0%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5-%D1%81%D0%B5%D1%81%D1%81%D0%B8%D0%B8-%D0%9F%D0%94-4-%D0%BA%D1%83%D1%80%D1%81-%D1%81-15.09.2026.pdf',
  ),
  array(
    'title' => 'Методические указания по оформлению письменных работ',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/12/%D0%9C%D0%A3-%D0%BF%D0%BE-%D0%9E%D0%A4%D0%9E%D0%A0%D0%9C%D0%9B%D0%95%D0%9D%D0%98%D0%AE-%D0%BF%D0%B8%D1%81%D1%8C%D0%BC%D0%B5%D0%BD%D0%BD%D1%8B%D1%85-%D1%80%D0%B0%D0%B1%D0%BE%D1%82-2025.pdf',
  ),
  array(
    'title' => 'Информационное письмо о возмещении затрат на оплату за обучение',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%D0%B5-%D0%BF%D0%B8%D1%81%D1%8C%D0%BC%D0%BE-%D0%BE-%D0%B2%D0%BE%D0%B7%D0%BC%D0%B5%D1%89%D0%B5%D0%BD%D0%B8%D0%B8-%D0%B7%D0%B0%D1%82%D1%80%D0%B0%D1%82-21.01.2025.pdf',
  ),
  array(
    'title' => 'Постановление об оплате обучения студентов — членов семей СВО',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/804-%D0%BF%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5.pdf',
  ),
  array(
    'title' => 'Компенсация части стоимости обучения многодетным семьям',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/05/%D0%9F%D0%BE%D1%81%D1%82%D0%B0%D0%BD%D0%BE%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE%D1%82-2.03.2026.pdf',
  ),
  array(
    'title' => 'Меры социальной поддержки детей граждан, принимающих участие в СВО',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%9A-%D0%B7%D0%B0%D1%8F%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8E-%D0%BE-%D0%BF%D1%80%D0%B5%D0%B4%D0%BE%D1%81%D1%82%D0%B0%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B8-%D0%BC%D0%B5%D1%80-%D1%81%D0%BE%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9-%D0%BF%D0%BE%D0%B4%D0%B4%D0%B5%D1%80%D0%B6%D0%BA%D0%B8-%D0%B4%D0%B5%D1%82%D0%B5%D0%B9-%D0%B3%D1%80%D0%B0%D0%B6%D0%B4%D0%B0%D0%BD-%D0%BF%D1%80%D0%B8%D0%BD%D0%B8%D0%BC%D0%B0%D1%8E%D1%89%D0%B8%D1%85-%D1%83%D1%87%D0%B0%D1%81%D1%82%D0%B8%D0%B5-%D0%B2-%D0%A1%D0%92%D0%9E-%D0%BF%D1%80.pdf',
  ),
  array(
    'title' => 'Расписание занятий на I семестр 2026-2027',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/09/%D0%A0%D0%B0%D1%81%D0%BF%D0%B8%D1%81%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B7%D0%B0%D0%BD%D1%8F%D1%82%D0%B8%D0%B9-1-%D1%81%D0%B5%D0%BC%D0%B5%D1%81%D1%82%D1%80-2026-2027.pdf',
  ),
);
$css_info_ver = zifra_asset_ver( 'css/info.css' );
$css_ochnoe_ver = zifra_asset_ver( 'css/ochnoe.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );

?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'Очное отделение — Колледж ЦИФРА',
    'seo_description' => 'Очное отделение колледжа ЦИФРА: заведующие, контакты и документы для студентов.',
    'seo_path'        => 'pages/ochnoe/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/ochnoe.css?v=<?php echo zifra_h( $css_ochnoe_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Очное отделение' ) ); ?>

<main id="main" class="dept-page">
    <div class="dept-page__inner">
      <section class="dept-heads" aria-labelledby="dept-heads-title">
        <header>
          <p class="about-kicker">Контакты</p>
          <h2 class="about-title" id="dept-heads-title">Заведующие очным отделением</h2>
        </header>

        <div class="dept-heads__grid">
          <article class="team-slide dept-card">
            <div class="team-slide__photo">
              <img loading="lazy" decoding="async" src="assets/Staff/Matvienko.webp" alt="Матвиенко Наталья Владимировна">
            </div>
            <div class="team-slide__info">
              <h3><span class="team-slide__surname">Матвиенко</span><span class="team-slide__given">Наталья Владимировна</span></h3>
              <p class="team-slide__role">Заведующая очным отделением по специальности «Правоохранительная деятельность» и заочным отделением</p>
              <div class="dept-card__contacts">
                <a href="tel:+79230349991">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.2 3.6h2.4l1.2 4.2-1.8 1.2a12.6 12.6 0 0 0 5.4 5.4l1.2-1.8 4.2 1.2v2.4c0 .7-.3 1.3-.8 1.7-.5.5-2.6 2.1-7.2.2C7.2 16.1 4.6 11.6 3.8 8.2c-.6-2.6.8-4.1 1.4-4.6.5-.5 1.2-.8 2-.8Z"/></svg>
                  +7 923 034-99-91
                </a>
                <a href="mailto:zifra42_do@mail.ru">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6.5h16v11H4v-11Zm0 0 8 6.2L20 6.5"/></svg>
                  zifra42_do@mail.ru
                </a>
              </div>
            </div>
          </article>

          <article class="team-slide dept-card">
            <div class="team-slide__photo">
              <img loading="lazy" decoding="async" src="assets/Staff/Shalumanova.webp" alt="Жалуманова Виктория Владиславовна">
            </div>
            <div class="team-slide__info">
              <h3><span class="team-slide__surname">Жалуманова</span><span class="team-slide__given">Виктория Владиславовна</span></h3>
              <p class="team-slide__role">Заведующая очным отделением</p>
              <div class="dept-card__contacts">
                <a href="tel:+79059950951">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.2 3.6h2.4l1.2 4.2-1.8 1.2a12.6 12.6 0 0 0 5.4 5.4l1.2-1.8 4.2 1.2v2.4c0 .7-.3 1.3-.8 1.7-.5.5-2.6 2.1-7.2.2C7.2 16.1 4.6 11.6 3.8 8.2c-.6-2.6.8-4.1 1.4-4.6.5-.5 1.2-.8 2-.8Z"/></svg>
                  +7 905 995-09-51
                </a>
                <a href="mailto:zifra42_do@mail.ru">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6.5h16v11H4v-11Zm0 0 8 6.2L20 6.5"/></svg>
                  zifra42_do@mail.ru
                </a>
              </div>
            </div>
          </article>
        </div>
      </section>

      <section class="dept-docs" aria-labelledby="dept-docs-title">
        <header>
          <p class="about-kicker">Материалы</p>
          <h2 class="about-title" id="dept-docs-title">Документы</h2>
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
                <span class="dept-doc__meta">PDF</span>
              </a>
            </li>
          <?php endforeach; ?>
        </ul>
      </section>
    </div>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
</body>
</html>
