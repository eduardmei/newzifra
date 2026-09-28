<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';
$css_info_ver = zifra_asset_ver( 'css/info.css' );
$css_rasp_ver = zifra_asset_ver( 'css/rasp.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );
$js_rasp_ver = zifra_asset_ver( 'js/rasp.js' );

?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'Расписание занятий — Колледж ЦИФРА',
    'seo_description' => 'Расписание занятий колледжа ЦИФРА: выберите день, чтобы открыть актуальное расписание из 1С.',
    'seo_path'        => 'pages/rasp/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/rasp.css?v=<?php echo zifra_h( $css_rasp_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Расписание занятий' ) ); ?>

<main id="main" class="rasp-page">
    <div class="rasp-page__inner">
      <header>
        <p class="about-kicker">Электронное обучение</p>
        <h2 class="about-title">Расписание занятий</h2>
      </header>

      <div class="buttons-container rasp-days">
        <form action="https://j.zifra42.ru/rasp/today/" method="get" target="_blank">
          <input type="hidden" name="scheduleDate" id="hiddenDateToday">
          <button type="submit" id="buttonToday">Загрузка…</button>
        </form>

        <form action="https://j.zifra42.ru/rasp/tomorrow/" method="get" target="_blank">
          <input type="hidden" name="scheduleDate" id="hiddenDateTomorrow">
          <button type="submit" id="buttonTomorrow">Загрузка…</button>
        </form>

        <form action="https://j.zifra42.ru/rasp/AfterTomorrow/" method="get" target="_blank">
          <input type="hidden" name="scheduleDate" id="hiddenDateDayAfterTomorrow">
          <button type="submit" id="buttonDayAfterTomorrow">Загрузка…</button>
        </form>

        <form action="https://j.zifra42.ru/rasp/AfterTomorrow/" method="get" target="_blank">
          <input type="hidden" name="scheduleDate" id="hiddenDateDay4">
          <button type="submit" id="buttonDay4">Загрузка…</button>
        </form>

        <form action="https://j.zifra42.ru/rasp/AfterTomorrow/" method="get" target="_blank">
          <input type="hidden" name="scheduleDate" id="hiddenDateDay5">
          <button type="submit" id="buttonDay5">Загрузка…</button>
        </form>

        <form action="https://j.zifra42.ru/rasp/AfterTomorrow/" method="get" target="_blank">
          <input type="hidden" name="scheduleDate" id="hiddenDateDay6">
          <button type="submit" id="buttonDay6">Загрузка…</button>
        </form>
      </div>

      <p class="rasp-note">Воскресенья пропускаются автоматически.</p>
    </div>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
  <script src="js/rasp.js?v=<?php echo zifra_h( $js_rasp_ver ); ?>" defer></script>
</body>
</html>
