<?php
/**
 * Общий <head> до page-specific CSS.
 *
 * Ожидает:
 * - $seo_title, $seo_description, $seo_path
 * - optional: $preload_banner (bool), $extra_head (callable|string)
 */
$seo_title = isset( $seo_title ) ? (string) $seo_title : 'ЦИФРА';
$seo_description = isset( $seo_description ) ? (string) $seo_description : '';
$seo_path = isset( $seo_path ) ? (string) $seo_path : '';
$preload_banner = ! empty( $preload_banner );
$fonts_ver = zifra_asset_ver( 'css/fonts.css' );
$css_ver = zifra_asset_ver( 'css/style.css' );
?>
  <base href="<?php echo zifra_h( ZIFRA_BASE_HREF ); ?>">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <meta name="theme-color" content="#050508">
<?php
zifra_print_seo(
  array(
    'title'       => $seo_title,
    'description' => $seo_description,
    'path'        => $seo_path,
  )
);
?>
  <script>
    (function () {
      try {
        var theme = localStorage.getItem("zifra-theme");
        if (theme === "light" || theme === "dark") {
          document.documentElement.setAttribute("data-theme", theme);
        }
      } catch (e) {}
    })();
  </script>
  <link rel="icon" href="assets/logo.png" type="image/png">
  <link rel="preload" href="assets/fonts/xn7gYHE41ni1AdIRggOxSuXd.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/fonts/Yq6W-LOTXCb04q32xlpwv8ZfrxE.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="css/fonts.css?v=<?php echo zifra_h( $fonts_ver ); ?>">
<?php if ( $preload_banner ) : ?>
  <link rel="preload" as="image" type="image/webp" href="assets/banner.webp" imagesrcset="assets/banner-640.webp 640w, assets/banner.webp 849w" imagesizes="(max-width: 860px) min(100vw, 560px), min(46vw, 720px)">
<?php endif; ?>
  <link rel="stylesheet" href="css/style.css?v=<?php echo zifra_h( $css_ver ); ?>">
<?php
if ( ! empty( $print_json_ld ) ) {
  zifra_print_json_ld();
}
?>
