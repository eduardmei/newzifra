<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';
$consent_href = 'https://zifra42.ru/wp-content/uploads/2025/03/%D0%A1%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D0%B8%D0%B5-%D0%BD%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D1%83-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%B4%D0%BB%D1%8F-%D0%B7%D0%B0%D1%8F%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D1%8F.pdf';
$form_src = 'https://docs.google.com/forms/d/e/1FAIpQLSc3ywPao8IkKvwiCRNYfcwOh7ZduUwTSMX6NwmUsM5zkLqQXQ/viewform?embedded=true';
$css_info_ver = zifra_asset_ver( 'css/info.css' );
$css_ochnoe_ver = zifra_asset_ver( 'css/ochnoe.css' );
$css_spravka_nalog_ver = zifra_asset_ver( 'css/spravka-nalog.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );

?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'Справка об оплате для налогового органа — Колледж ЦИФРА',
    'seo_description' => 'Заявление на получение справки об оплате образовательных услуг для предоставления в налоговый орган.',
    'seo_path'        => 'pages/spravka-nalog/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/ochnoe.css?v=<?php echo zifra_h( $css_ochnoe_ver ); ?>">
  <link rel="stylesheet" href="css/spravka-nalog.css?v=<?php echo zifra_h( $css_spravka_nalog_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Справка для налоговой' ) ); ?>

<main id="main" class="dept-page">
    <div class="dept-page__inner">
      <section class="nalog-page" aria-labelledby="nalog-title">
        <header class="nalog-page__head">
          <p class="about-kicker">Виртуальная приёмная</p>
          <h2 class="about-title" id="nalog-title">Справка об оплате для налогового органа</h2>
          <p class="nalog-page__lead">Заявление на получение справки об оплате образовательных услуг для предоставления в налоговый орган.</p>
        </header>

        <aside class="nalog-notice" aria-labelledby="nalog-notice-title">
          <div class="nalog-notice__top">
            <span class="nalog-notice__badge" aria-hidden="true">!</span>
            <h2 class="nalog-notice__title" id="nalog-notice-title">Обратите внимание</h2>
          </div>
          <ol class="nalog-notice__list">
            <li>
              <span class="nalog-notice__text">Бухгалтерия представляет оформленные надлежащим образом справки об оплате образовательных услуг для предоставления в налоговый орган согласно приказу Министерства финансов Российской Федерации и Федеральной налоговой службы от 18.10.2023 ЕД-7-11/755@, содержащие персональные данные.</span>
            </li>
            <li>
              <span class="nalog-notice__text">Справка об оплате образовательных услуг для представления в налоговый орган (форма по КНД 1151158 на бумажном носителе) оформляется в течение 5-х рабочих дней.</span>
            </li>
            <li>
              <span class="nalog-notice__text">В соответствии со статьей 7 Федерального закона от 27.07.2006 №&nbsp;152-ФЗ «О персональных данных» предоставление третьим лицам документов, содержащих персональные данные, запрещено.</span>
            </li>
            <li>
              <span class="nalog-notice__text">
                <a class="nalog-notice__doc" href="<?php echo zifra_h( $consent_href ); ?>" target="_blank" rel="noopener noreferrer">
                  <span class="nalog-notice__doc-icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24">
                      <path d="M7 3.5h7.2L19 8.3V20.5H7V3.5Z"/>
                      <polyline points="14.2 3.5 14.2 8.3 19 8.3"/>
                      <line x1="9.2" y1="12.2" x2="14.8" y2="12.2"/>
                      <line x1="9.2" y1="15.4" x2="14.8" y2="15.4"/>
                    </svg>
                  </span>
                  <span class="nalog-notice__doc-title">Согласие на обработку персональных данных</span>
                  <span class="nalog-notice__meta">PDF</span>
                </a>
              </span>
            </li>
            <li>
              <span class="nalog-notice__text">Адрес получения оформленной справки на бумажном носителе плательщиком: г.&nbsp;Кемерово, ул.&nbsp;Николая Островского,&nbsp;12, кабинет&nbsp;1211 (вторник, с&nbsp;9:30 до&nbsp;16:30).</span>
            </li>
            <li>
              <span class="nalog-notice__text"><span class="nalog-notice__star">*</span> — обязательное поле для заполнения.</span>
            </li>
          </ol>
        </aside>

        <div class="nalog-form" aria-label="Форма заявления">
          <iframe
            class="nalog-form__frame"
            title="Заявление на получение справки об оплате образовательных услуг"
            src="<?php echo zifra_h( $form_src ); ?>"
            loading="lazy"
            allowfullscreen>
            Загрузка…
          </iframe>
        </div>
      </section>
    </div>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
</body>
</html>
