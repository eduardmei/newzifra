<?php
/**
 * Общие константы и хелперы сайта.
 * Переопределения: includes/config.local.php
 */
if ( defined( 'ZIFRA_SITE_LOADED' ) ) {
  return;
}

define( 'ZIFRA_SITE_LOADED', true );
define( 'ZIFRA_ROOT', dirname( __DIR__ ) );

$zifra_local = __DIR__ . DIRECTORY_SEPARATOR . 'config.local.php';
if ( is_readable( $zifra_local ) ) {
  require_once $zifra_local;
}

if ( ! defined( 'ZIFRA_BASE_HREF' ) ) {
  $doc = isset( $_SERVER['DOCUMENT_ROOT'] ) ? realpath( $_SERVER['DOCUMENT_ROOT'] ) : false;
  $app = realpath( ZIFRA_ROOT );

  if ( $doc && $app && strpos( $app, $doc ) === 0 ) {
    $rel = str_replace( '\\', '/', substr( $app, strlen( $doc ) ) );
    $rel = '/' . trim( $rel, '/' );
    if ( $rel === '/' ) {
      define( 'ZIFRA_BASE_HREF', '/' );
    } else {
      define( 'ZIFRA_BASE_HREF', rtrim( $rel, '/' ) . '/' );
    }
  } else {
    define( 'ZIFRA_BASE_HREF', '/newzifra/' );
  }
}

if ( ! defined( 'ZIFRA_SITE_ORIGIN' ) ) {
  $https = ! empty( $_SERVER['HTTPS'] ) && $_SERVER['HTTPS'] !== 'off';
  if ( ! empty( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) ) {
    $https = strtolower( (string) $_SERVER['HTTP_X_FORWARDED_PROTO'] ) === 'https';
  }
  $host = isset( $_SERVER['HTTP_HOST'] ) ? (string) $_SERVER['HTTP_HOST'] : 'localhost';
  define( 'ZIFRA_SITE_ORIGIN', ( $https ? 'https' : 'http' ) . '://' . $host );
}

if ( ! function_exists( 'zifra_h' ) ) {
  function zifra_h( $value ) {
    return htmlspecialchars( (string) $value, ENT_QUOTES, 'UTF-8' );
  }
}

if ( ! function_exists( 'zifra_asset_ver' ) ) {
  function zifra_asset_ver( $relative_path ) {
    $full = ZIFRA_ROOT . DIRECTORY_SEPARATOR . str_replace( array( '/', '\\' ), DIRECTORY_SEPARATOR, ltrim( $relative_path, '/\\' ) );
    return (string) ( @filemtime( $full ) ?: 1 );
  }
}

if ( ! function_exists( 'zifra_abs_url' ) ) {
  /**
   * Абсолютный URL относительно корня сайта (ZIFRA_BASE_HREF).
   * Пример: zifra_abs_url('pages/info/') или zifra_abs_url('index.php')
   */
  function zifra_abs_url( $path = '' ) {
    $base = rtrim( ZIFRA_SITE_ORIGIN, '/' ) . '/' . trim( ZIFRA_BASE_HREF, '/' );
    $base = rtrim( $base, '/' );
    $path = ltrim( (string) $path, '/' );
    if ( $path === '' ) {
      return $base . '/';
    }
    return $base . '/' . $path;
  }
}

if ( ! function_exists( 'zifra_canonical_path' ) ) {
  /** Путь для canonical относительно корня сайта, без ведущего слэша. */
  function zifra_canonical_path( $path = '' ) {
    return ltrim( (string) $path, '/' );
  }
}

if ( ! function_exists( 'zifra_partial' ) ) {
  function zifra_partial( $name, array $vars = array() ) {
    $file = __DIR__ . DIRECTORY_SEPARATOR . 'partials' . DIRECTORY_SEPARATOR . $name . '.php';
    if ( ! is_readable( $file ) ) {
      return;
    }
    if ( $vars ) {
      extract( $vars, EXTR_SKIP );
    }
    include $file;
  }
}

if ( ! function_exists( 'zifra_print_seo' ) ) {
  /**
   * @param array{
   *   title:string,
   *   description:string,
   *   path?:string,
   *   og_image?:string,
   *   og_type?:string
   * } $meta
   */
  function zifra_print_seo( array $meta ) {
    $title = (string) ( $meta['title'] ?? 'ЦИФРА' );
    $description = (string) ( $meta['description'] ?? '' );
    $path = zifra_canonical_path( $meta['path'] ?? '' );
    $canonical = zifra_abs_url( $path === '' || $path === 'index.php' ? '' : $path );
    if ( $path === '' || $path === 'index.php' ) {
      $canonical = zifra_abs_url( '' );
    }
    $og_image = (string) ( $meta['og_image'] ?? 'assets/banner.webp' );
    if ( strpos( $og_image, 'http' ) !== 0 ) {
      $og_image = zifra_abs_url( $og_image );
    }
    $og_type = (string) ( $meta['og_type'] ?? 'website' );
    ?>
  <title><?php echo zifra_h( $title ); ?></title>
  <meta name="description" content="<?php echo zifra_h( $description ); ?>">
  <link rel="canonical" href="<?php echo zifra_h( $canonical ); ?>">
  <meta property="og:locale" content="ru_RU">
  <meta property="og:type" content="<?php echo zifra_h( $og_type ); ?>">
  <meta property="og:title" content="<?php echo zifra_h( $title ); ?>">
  <meta property="og:description" content="<?php echo zifra_h( $description ); ?>">
  <meta property="og:url" content="<?php echo zifra_h( $canonical ); ?>">
  <meta property="og:site_name" content="Колледж ЦИФРА">
  <meta property="og:image" content="<?php echo zifra_h( $og_image ); ?>">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo zifra_h( $title ); ?>">
  <meta name="twitter:description" content="<?php echo zifra_h( $description ); ?>">
  <meta name="twitter:image" content="<?php echo zifra_h( $og_image ); ?>">
    <?php
  }
}

if ( ! function_exists( 'zifra_print_json_ld' ) ) {
  function zifra_print_json_ld() {
    $data = array(
      '@context' => 'https://schema.org',
      '@type' => 'EducationalOrganization',
      'name' => 'Колледж ЦИФРА',
      'alternateName' => 'Колледж предпринимательских и цифровых технологий',
      'url' => zifra_abs_url( '' ),
      'logo' => zifra_abs_url( 'assets/logo.png' ),
      'email' => 'zifra42@mail.ru',
      'telephone' => '+7-923-034-99-91',
      'address' => array(
        '@type' => 'PostalAddress',
        'streetAddress' => 'ул. Николая Островского, 12',
        'addressLocality' => 'Кемерово',
        'addressRegion' => 'Кемеровская область',
        'postalCode' => '650000',
        'addressCountry' => 'RU',
      ),
      'sameAs' => array(
        'https://vk.com/zifra42',
        'https://t.me/zifra42',
      ),
    );
    echo '<script type="application/ld+json">' . wp_json_encode_safe( $data ) . '</script>' . "\n";
  }
}

if ( ! function_exists( 'wp_json_encode_safe' ) ) {
  function wp_json_encode_safe( $data ) {
    if ( function_exists( 'wp_json_encode' ) ) {
      return wp_json_encode( $data );
    }
    return json_encode( $data, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES );
  }
}

if ( ! function_exists( 'zifra_get_news_posts' ) ) {
  /**
   * Новости для главной: WP transient (10 мин) + file fallback.
   * Возвращает массив WP_Post или пустой массив.
   */
  function zifra_get_news_posts( $limit = 10 ) {
    $limit = max( 1, (int) $limit );
    $transient_key = 'zifra_home_news_ids_v2_' . $limit;
    $cache_dir = ZIFRA_ROOT . DIRECTORY_SEPARATOR . 'cache';
    $cache_file = $cache_dir . DIRECTORY_SEPARATOR . 'home-news-' . $limit . '.json';

    $ids = null;

    if ( function_exists( 'get_transient' ) ) {
      $cached = get_transient( $transient_key );
      if ( is_array( $cached ) ) {
        $ids = $cached;
      }
    }

    if ( $ids === null && is_readable( $cache_file ) ) {
      $raw = file_get_contents( $cache_file );
      $decoded = json_decode( (string) $raw, true );
      if ( is_array( $decoded ) && isset( $decoded['ids'], $decoded['expires'] ) && (int) $decoded['expires'] > time() ) {
        $ids = $decoded['ids'];
      }
    }

    if ( $ids === null ) {
      if ( ! function_exists( 'get_posts' ) ) {
        return array();
      }
      $posts = get_posts(
        array(
          'posts_per_page' => $limit,
          'post_status'    => 'publish',
          'post_type'      => 'post',
          'orderby'        => 'date',
          'order'          => 'DESC',
          'no_found_rows'  => true,
        )
      );
      $ids = array();
      foreach ( $posts as $post ) {
        $ids[] = (int) $post->ID;
      }
      if ( function_exists( 'set_transient' ) ) {
        set_transient( $transient_key, $ids, 10 * MINUTE_IN_SECONDS );
      }
      if ( ! is_dir( $cache_dir ) ) {
        @mkdir( $cache_dir, 0755, true );
      }
      @file_put_contents(
        $cache_file,
        wp_json_encode_safe(
          array(
            'expires' => time() + 600,
            'ids'     => $ids,
          )
        )
      );
      return $posts;
    }

    if ( ! $ids || ! function_exists( 'get_post' ) ) {
      return array();
    }

    $posts = array();
    foreach ( $ids as $id ) {
      $post = get_post( (int) $id );
      if ( $post && $post->post_status === 'publish' ) {
        $posts[] = $post;
      }
    }
    return $posts;
  }
}
