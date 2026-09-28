<?php
/**
 * Подключение WordPress (для Formidable и других WP-плагинов)
 * из соседней/родительской установки, если страница открыта как обычный PHP.
 */
function zifra_bootstrap_wordpress() {
  if ( defined( 'ABSPATH' ) ) {
    return true;
  }

  $local_config = dirname( __DIR__ ) . DIRECTORY_SEPARATOR . 'includes' . DIRECTORY_SEPARATOR . 'config.local.php';
  if ( is_readable( $local_config ) ) {
    require_once $local_config;
  }

  if ( defined( 'ZIFRA_WP_LOAD' ) && is_readable( ZIFRA_WP_LOAD ) ) {
    if ( ! defined( 'WP_USE_THEMES' ) ) {
      define( 'WP_USE_THEMES', false );
    }
    require_once ZIFRA_WP_LOAD;
    return defined( 'ABSPATH' );
  }

  $dir = dirname( __DIR__ );
  for ( $i = 0; $i < 8; $i++ ) {
    $candidate = $dir . DIRECTORY_SEPARATOR . 'wp-load.php';
    if ( is_readable( $candidate ) ) {
      if ( ! defined( 'WP_USE_THEMES' ) ) {
        define( 'WP_USE_THEMES', false );
      }
      require_once $candidate;
      return defined( 'ABSPATH' );
    }
    $parent = dirname( $dir );
    if ( $parent === $dir ) {
      break;
    }
    $dir = $parent;
  }

  return false;
}

function zifra_formidable_form_html( $form_id = 4 ) {
  zifra_bootstrap_wordpress();

  $form_id = (int) $form_id;

  if ( class_exists( 'FrmFormsController' ) ) {
    return (string) FrmFormsController::get_form_shortcode(
      array(
        'id' => $form_id,
        'title' => false,
        'description' => false,
      )
    );
  }

  if ( function_exists( 'do_shortcode' ) ) {
    $html = (string) do_shortcode( '[formidable id="' . $form_id . '"]' );
    if ( $html !== '' && strpos( $html, '[formidable' ) === false ) {
      return $html;
    }
  }

  return '';
}

/**
 * Оставляем только ассеты Formidable (+ jQuery),
 * чтобы стили темы WP не ломали шапку/бургер.
 */
function zifra_is_formidable_asset_handle( $handle ) {
  $handle = strtolower( (string) $handle );
  $allow = array(
    'jquery',
    'jquery-core',
    'jquery-migrate',
    'wp-dom-ready',
    'wp-hooks',
  );
  if ( in_array( $handle, $allow, true ) ) {
    return true;
  }
  return (bool) preg_match( '/(^|-)(frm|formidable)/', $handle );
}

function zifra_prune_wp_assets() {
  if ( ! defined( 'ABSPATH' ) ) {
    return;
  }

  if ( function_exists( 'show_admin_bar' ) ) {
    show_admin_bar( false );
  }

  add_action(
    'wp_enqueue_scripts',
    static function () {
      global $wp_styles, $wp_scripts;

      if ( $wp_styles instanceof WP_Styles ) {
        foreach ( (array) $wp_styles->queue as $handle ) {
          if ( ! zifra_is_formidable_asset_handle( $handle ) ) {
            wp_dequeue_style( $handle );
            wp_deregister_style( $handle );
          }
        }
      }

      if ( $wp_scripts instanceof WP_Scripts ) {
        foreach ( (array) $wp_scripts->queue as $handle ) {
          if ( ! zifra_is_formidable_asset_handle( $handle ) ) {
            wp_dequeue_script( $handle );
            wp_deregister_script( $handle );
          }
        }
      }
    },
    99999
  );

  add_action(
    'wp_print_styles',
    static function () {
      global $wp_styles;
      if ( ! ( $wp_styles instanceof WP_Styles ) ) {
        return;
      }
      foreach ( (array) $wp_styles->queue as $handle ) {
        if ( ! zifra_is_formidable_asset_handle( $handle ) ) {
          wp_dequeue_style( $handle );
        }
      }
    },
    0
  );

  add_action(
    'wp_print_scripts',
    static function () {
      global $wp_scripts;
      if ( ! ( $wp_scripts instanceof WP_Scripts ) ) {
        return;
      }
      foreach ( (array) $wp_scripts->queue as $handle ) {
        if ( ! zifra_is_formidable_asset_handle( $handle ) ) {
          wp_dequeue_script( $handle );
        }
      }
    },
    0
  );
}
