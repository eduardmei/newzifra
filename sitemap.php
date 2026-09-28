<?php
/**
 * Динамический sitemap.xml
 */
require_once __DIR__ . '/includes/site.php';

$pages = array(
  array( 'path' => '', 'priority' => '1.0', 'changefreq' => 'weekly' ),
  array( 'path' => 'pages/info/', 'priority' => '0.8', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/contacts/', 'priority' => '0.8', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/rasp/', 'priority' => '0.9', 'changefreq' => 'daily' ),
  array( 'path' => 'pages/ochnoe/', 'priority' => '0.7', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/zaochnoe/', 'priority' => '0.7', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/trudoustroystvo/', 'priority' => '0.7', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/dpo/', 'priority' => '0.7', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/biblioteka/', 'priority' => '0.7', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/bezopasnost/', 'priority' => '0.6', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/vsoko/', 'priority' => '0.7', 'changefreq' => 'monthly' ),
  array( 'path' => 'pages/spravka-nalog/', 'priority' => '0.6', 'changefreq' => 'monthly' ),
);

header( 'Content-Type: application/xml; charset=UTF-8' );
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
echo '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";
foreach ( $pages as $page ) {
  $loc = zifra_abs_url( $page['path'] );
  echo "  <url>\n";
  echo '    <loc>' . htmlspecialchars( $loc, ENT_XML1 | ENT_QUOTES, 'UTF-8' ) . "</loc>\n";
  echo '    <changefreq>' . $page['changefreq'] . "</changefreq>\n";
  echo '    <priority>' . $page['priority'] . "</priority>\n";
  echo "  </url>\n";
}
echo '</urlset>';
