<?php
/**
 * Баннеры на главной: Госуслуги + оценка bus.gov.ru + ДПО.
 */
$rate_src  = 'https://zifra42.ru/wp-content/uploads/2026/09/vashe-mnenye.png';
$rate_href = 'https://bus.gov.ru/qrcode/rate/788355';
$dpo_src   = 'assets/home-dpo-banner.jpg';
$dpo_href  = 'pages/dpo/';
$js_banners_ver = zifra_asset_ver( 'js/home-banners.js' );

$gosuslugi_banner_file = dirname( __DIR__, 2 ) . '/components/gosuslugi-banner/banner.html';
$gosuslugi_banner_html = is_readable( $gosuslugi_banner_file )
  ? (string) file_get_contents( $gosuslugi_banner_file )
  : '';

/* Не блокируем парсинг страницы: script.min.js + Widget() поднимаем async после разметки. */
if ( $gosuslugi_banner_html !== '' ) {
  $gosuslugi_banner_html = preg_replace(
    '#<script\s+src=["\']https://pos\.gosuslugi\.ru/bin/script\.min\.js["\']\s*>\s*</script>#i',
    '',
    $gosuslugi_banner_html,
    1
  );
  $gosuslugi_banner_html = preg_replace(
    '#<script>\s*Widget\s*\(\s*["\']https://pos\.gosuslugi\.ru/form["\']\s*,\s*369277\s*\)\s*;?\s*</script>#i',
    '',
    $gosuslugi_banner_html,
    1
  );
}
?>
<section class="home-banners" aria-label="Баннеры">
  <div class="home-banners__inner">
    <div class="home-banners__grid">
      <?php if ( $gosuslugi_banner_html !== '' ) : ?>
      <div class="home-banners__pos">
        <?php echo $gosuslugi_banner_html; ?>
      </div>
      <?php endif; ?>

      <button
        class="home-banners__card"
        type="button"
        data-home-banner-src="<?php echo zifra_h( $rate_src ); ?>"
        data-home-banner-caption="Ваше мнение формирует официальный рейтинг организации"
        data-home-banner-link="<?php echo zifra_h( $rate_href ); ?>"
        data-home-banner-link-label="Оценить на bus.gov.ru"
        aria-label="Открыть баннер: оценка на bus.gov.ru"
      >
        <img
          src="<?php echo zifra_h( $rate_src ); ?>"
          alt="Ваше мнение формирует официальный рейтинг организации"
          width="1200"
          height="900"
          loading="lazy"
          decoding="async"
        >
      </button>

      <button
        class="home-banners__card"
        type="button"
        data-home-banner-src="<?php echo zifra_h( $dpo_src ); ?>"
        data-home-banner-caption="Программы профессиональной переподготовки"
        data-home-banner-link="<?php echo zifra_h( $dpo_href ); ?>"
        data-home-banner-link-label="Подробнее о ДПО"
        aria-label="Открыть баннер: программы профессиональной переподготовки"
      >
        <img
          src="<?php echo zifra_h( $dpo_src ); ?>"
          alt="Программы профессиональной переподготовки"
          width="1080"
          height="1080"
          loading="lazy"
          decoding="async"
        >
      </button>
    </div>
  </div>
</section>

<div class="home-banners-lightbox" id="homeBannersLightbox" aria-hidden="true">
  <button class="home-banners-lightbox__close" type="button" aria-label="Закрыть">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg>
  </button>
  <button class="home-banners-lightbox__arrow home-banners-lightbox__prev" type="button" aria-label="Предыдущий баннер">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M15 5L8 12l7 7"/></svg>
  </button>
  <div class="home-banners-lightbox__dialog" role="dialog" aria-modal="true">
    <div class="home-banners-lightbox__content"></div>
    <div class="home-banners-lightbox__caption"></div>
  </div>
  <button class="home-banners-lightbox__arrow home-banners-lightbox__next" type="button" aria-label="Следующий баннер">
    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M9 5l7 7-7 7"/></svg>
  </button>
</div>

<?php if ( $gosuslugi_banner_html !== '' ) : ?>
<script>
(function () {
  var booted = false;
  function runWidget() {
    if (booted || typeof Widget !== "function") return;
    if (!document.getElementById("js-show-iframe-wrapper")) return;
    booted = true;
    try { Widget("https://pos.gosuslugi.ru/form", 369277); } catch (e) {}
  }
  function load() {
    if (typeof Widget === "function") { runWidget(); return; }
    if (document.querySelector("script[data-pos-gosuslugi]")) return;
    var s = document.createElement("script");
    s.src = "https://pos.gosuslugi.ru/bin/script.min.js";
    s.async = true;
    s.dataset.posGosuslugi = "1";
    s.onload = runWidget;
    document.head.appendChild(s);
  }
  if ("requestIdleCallback" in window) {
    window.requestIdleCallback(load, { timeout: 2500 });
  } else {
    window.setTimeout(load, 1);
  }
})();
</script>
<?php endif; ?>
<script src="js/home-banners.js?v=<?php echo zifra_h( $js_banners_ver ); ?>" defer></script>
