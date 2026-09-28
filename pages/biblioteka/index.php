<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';
$sections = array(
  array(
    'title' => 'Электронные библиотеки колледжа (по подписке)',
    'items' => array(
      array(
        'title' => 'Электронно-библиотечная система Znanium',
        'desc' => 'Информационно-образовательная среда для колледжей, вузов и библиотек',
        'href' => 'https://znanium.com/',
      ),
    ),
  ),
  array(
    'title' => 'Электронные библиотеки открытого доступа',
    'items' => array(
      array(
        'title' => 'Президентская библиотека им. Б.Н. Ельцина',
        'desc' => 'Отечественная история и становление российской государственности',
        'href' => 'https://www.prlib.ru/',
      ),
      array(
        'title' => 'Библиотека Максима Мошкова',
        'desc' => 'Литература по истории, политике, философии, психологии, художественная литература',
        'href' => 'http://lib.ru/',
      ),
      array(
        'title' => 'Электронная библиотека классической литературы',
        'desc' => 'Классическая литература',
        'href' => 'https://klassika.ru/',
      ),
    ),
  ),
  array(
    'title' => 'Для педагогов',
    'items' => array(
      array(
        'title' => 'Edu.rin.ru',
        'desc' => 'Новости образования в России и за рубежом',
        'href' => 'https://edu.rin.ru/',
      ),
      array(
        'title' => 'Педсовет',
        'desc' => 'Пространство образования',
        'href' => 'https://pedsovet.org/',
      ),
      array(
        'title' => 'Учительская газета',
        'desc' => 'Периодическое издание для педагогов',
        'href' => 'https://ug.ru/',
      ),
      array(
        'title' => 'Библиотекарь.ру',
        'desc' => 'История, искусство, культура, прикладные науки. Книги, периодика, графика, справочная и техническая литература для учащихся средних и высших учебных заведений',
        'href' => 'http://www.bibliotekar.ru/',
      ),
    ),
  ),
  array(
    'title' => 'Правоохранительная деятельность, право и организация социального обеспечения и ПСА',
    'items' => array(
      array(
        'title' => 'Официальный интернет-портал правовой информации',
        'desc' => 'Официальные правовые акты',
        'href' => 'http://pravo.gov.ru/',
      ),
      array(
        'title' => 'Право.ru',
        'desc' => 'Тематическое интернет-издание',
        'href' => 'https://pravo.ru/',
      ),
      array(
        'title' => 'Юридическая Россия',
        'desc' => 'Федеральный правовой портал',
        'href' => 'http://law.edu.ru',
      ),
      array(
        'title' => 'ИНИОН РАН',
        'desc' => 'Институт научной информации по общественным наукам РАН',
        'href' => 'http://inion.ru/',
      ),
      array(
        'title' => 'Закон.ру',
        'desc' => 'Первая социальная сеть для юристов',
        'href' => 'https://zakon.ru/',
      ),
      array(
        'title' => 'ГУ МВД России по Кемеровской области — Кузбассу',
        'desc' => 'Официальный сайт ведомства',
        'href' => 'https://42.мвд.рф',
      ),
      array(
        'title' => 'Юридический журнал «Юридическая книга»',
        'desc' => 'О журнале',
        'href' => 'https://legalbook.ru/o-zhurnale',
      ),
    ),
  ),
  array(
    'title' => 'ИС и ИБ',
    'items' => array(
      array(
        'title' => '3DNews',
        'desc' => 'Новости и аналитика в компьютерных технологиях',
        'href' => 'https://3dnews.ru/',
      ),
      array(
        'title' => 'Tproger',
        'desc' => 'Интернет-издание о разработке',
        'href' => 'https://tproger.ru/',
      ),
      array(
        'title' => 'iXBT.com',
        'desc' => 'Новости IT-технологий',
        'href' => 'https://www.ixbt.com/',
      ),
      array(
        'title' => 'SecurityLab',
        'desc' => 'Портал, посвящённый информационной безопасности',
        'href' => 'https://www.securitylab.ru/',
      ),
      array(
        'title' => 'Unetway',
        'desc' => 'Сайт о технологиях и программировании',
        'href' => 'https://unetway.com/',
      ),
      array(
        'title' => 'Ru-Board',
        'desc' => 'Форум о технологиях и программировании',
        'href' => 'http://forum.ru-board.com/',
      ),
      array(
        'title' => 'Losst',
        'desc' => 'Журнал о гаджетах',
        'href' => 'https://losst.pro/',
      ),
      array(
        'title' => 'CyberForum',
        'desc' => 'Форум о технологиях и безопасности',
        'href' => 'https://www.cyberforum.ru/',
      ),
      array(
        'title' => 'Безопасный интернет',
        'desc' => 'Сайт о безопасном интернете',
        'href' => 'http://security.mosmetod.ru/',
      ),
      array(
        'title' => 'Лига безопасного Интернета',
        'desc' => 'Организация по вопросам безопасного интернета',
        'href' => 'http://www.ligainternet.ru/',
      ),
    ),
  ),
  array(
    'title' => 'Преподавание в начальных классах',
    'items' => array(
      array(
        'title' => 'Журнал «Начальная школа»',
        'desc' => 'Периодическое издание',
        'href' => 'https://n-shkola.ru/',
      ),
      array(
        'title' => 'Образовательная система «Школа 2100»',
        'desc' => 'Методические материалы',
        'href' => 'http://school2100.com/',
      ),
      array(
        'title' => 'Фестиваль педагогических идей «Открытый урок»',
        'desc' => 'Педагогические материалы и идеи',
        'href' => 'https://urok.1sept.ru/',
      ),
      array(
        'title' => 'Единая коллекция цифровых образовательных ресурсов',
        'desc' => 'Цифровые образовательные ресурсы',
        'href' => 'http://school-collection.edu.ru/',
      ),
    ),
  ),
);
$docs = array(
  array(
    'title' => 'Договор с ЭБС «Знаниум»',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/03/%D0%94%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80-%D0%B7%D0%BD%D0%B0%D0%BD%D0%B8%D1%83%D0%BC-%D0%BE%D1%82-16.12.2024.pdf',
    'meta' => 'PDF',
  ),
  array(
    'title' => 'Ссылка на ЭБС «Знаниум»',
    'href' => 'https://znanium.com/',
    'meta' => 'Ссылка',
  ),
);
function zifra_resource_list( $items ) {
  foreach ( $items as $item ) :
    ?>
    <li>
      <a class="dept-doc lib-resource" href="<?php echo zifra_h( $item['href'] ); ?>" target="_blank" rel="noopener noreferrer">
        <span class="dept-doc__icon" aria-hidden="true">
          <svg viewBox="0 0 24 24">
            <path d="M7 3.5h7.2L19 8.3V20.5H7V3.5Z"/>
            <polyline points="14.2 3.5 14.2 8.3 19 8.3"/>
            <line x1="9.2" y1="12.2" x2="14.8" y2="12.2"/>
            <line x1="9.2" y1="15.4" x2="14.8" y2="15.4"/>
          </svg>
        </span>
        <span class="dept-doc__title">
          <?php echo zifra_h( $item['title'] ); ?>
          <?php if ( ! empty( $item['desc'] ) ) : ?>
            <span class="lib-resource__desc"><?php echo zifra_h( $item['desc'] ); ?></span>
          <?php endif; ?>
        </span>
        <span class="dept-doc__meta">Ссылка</span>
      </a>
    </li>
  <?php
  endforeach;
}
function zifra_doc_list( $items ) {
  foreach ( $items as $doc ) :
    ?>
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
  <?php
  endforeach;
}
$css_info_ver = zifra_asset_ver( 'css/info.css' );
$css_ochnoe_ver = zifra_asset_ver( 'css/ochnoe.css' );
$css_biblioteka_ver = zifra_asset_ver( 'css/biblioteka.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );

?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'Библиотека — Колледж ЦИФРА',
    'seo_description' => 'Библиотека колледжа ЦИФРА: электронные ресурсы, открытые библиотеки и материалы по специальностям.',
    'seo_path'        => 'pages/biblioteka/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/ochnoe.css?v=<?php echo zifra_h( $css_ochnoe_ver ); ?>">
  <link rel="stylesheet" href="css/biblioteka.css?v=<?php echo zifra_h( $css_biblioteka_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Библиотека' ) ); ?>

<main id="main" class="dept-page">
    <div class="dept-page__inner">
      <section class="dept-docs dept-docs--library" aria-labelledby="lib-resources-title">
        <header>
          <p class="about-kicker">Ресурсы</p>
          <h2 class="about-title" id="lib-resources-title">Перечень информационных ресурсов</h2>
        </header>

        <?php foreach ( $sections as $i => $section ) :
          $section_id = 'lib-section-' . (int) $i;
          $is_open = ( 0 === (int) $i );
          ?>
          <?php if ( $is_open ) : ?>
            <div class="lib-section">
              <h2 class="dept-docs__subhead" id="<?php echo zifra_h( $section_id ); ?>"><?php echo zifra_h( $section['title'] ); ?></h2>
              <ul class="dept-docs__list" aria-labelledby="<?php echo zifra_h( $section_id ); ?>">
                <?php zifra_resource_list( $section['items'] ); ?>
              </ul>
            </div>
          <?php else : ?>
            <details class="lib-section lib-spoiler">
              <summary class="lib-spoiler__summary">
                <h2 class="dept-docs__subhead" id="<?php echo zifra_h( $section_id ); ?>"><?php echo zifra_h( $section['title'] ); ?></h2>
                <span class="lib-spoiler__icon" aria-hidden="true"></span>
              </summary>
              <ul class="dept-docs__list" aria-labelledby="<?php echo zifra_h( $section_id ); ?>">
                <?php zifra_resource_list( $section['items'] ); ?>
              </ul>
            </details>
          <?php endif; ?>
        <?php endforeach; ?>
      </section>

      <section class="dept-docs" aria-labelledby="lib-docs-title">
        <header>
          <p class="about-kicker">Материалы</p>
          <h2 class="about-title" id="lib-docs-title">Документы</h2>
        </header>
        <ul class="dept-docs__list">
          <?php zifra_doc_list( $docs ); ?>
        </ul>
      </section>
    </div>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
</body>
</html>
