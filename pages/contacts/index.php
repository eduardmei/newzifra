<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';
$staff = array(
  array(
    'name' => 'Неведрова Ольга Михайловна',
    'role' => 'Директор',
    'photo' => 'assets/Staff/Nevedrova.webp',
    'phone' => '+7 908 953-13-45',
    'tel' => '+79089531345',
    'emails' => array(
      array( 'label' => 'zifra42@mail.ru', 'href' => 'mailto:zifra42@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Федорова Светлана Валерьевна',
    'role' => 'Главный бухгалтер',
    'photo' => '',
    'phone' => '+7 923 460-05-00',
    'tel' => '+79234600500',
    'emails' => array(
      array( 'label' => 'buchzifra@yandex.ru', 'href' => 'mailto:buchzifra@yandex.ru' ),
    ),
  ),
  array(
    'name' => 'Малашкина Лариса Евгеньевна',
    'role' => 'Заместитель директора по информационным технологиям',
    'photo' => 'assets/Staff/Malashkina.webp',
    'phone' => '+7 923 467-58-55',
    'tel' => '+79234675855',
    'emails' => array(
      array( 'label' => 'itzifra42@mail.ru', 'href' => 'mailto:itzifra42@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Носкова Татьяна Юрьевна',
    'role' => 'Заместитель директора по безопасности образовательного процесса',
    'photo' => 'assets/Staff/Noskova.webp',
    'phone' => '+7 913 294-11-76',
    'tel' => '+79132941176',
    'emails' => array(
      array( 'label' => 'bez_zifra42@mail.ru', 'href' => 'mailto:bez_zifra42@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Иванова Елена Ивановна',
    'role' => 'Заместитель директора по воспитательной работе',
    'photo' => 'assets/Staff/Ivanova.webp',
    'phone' => '+7 905 902-71-13',
    'tel' => '+79059027113',
    'emails' => array(
      array( 'label' => 'zifra42_vr@mail.ru', 'href' => 'mailto:zifra42_vr@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Шипринская Татьяна Владимировна',
    'role' => 'Заместитель директора по маркетингу и связям с общественностью',
    'photo' => 'assets/Staff/Shiprinskaya.webp',
    'phone' => '+7 904 376-00-35',
    'tel' => '+79043760035',
    'emails' => array(
      array( 'label' => 'zifra.razv@yandex.ru', 'href' => 'mailto:zifra.razv@yandex.ru' ),
    ),
  ),
  array(
    'name' => 'Крепак Юлия Сергеевна',
    'role' => 'Заместитель директора по учебно-методической работе',
    'photo' => 'assets/Staff/Krepak.webp',
    'phone' => '+7 951 601-15-48',
    'tel' => '+79516011548',
    'emails' => array(
      array( 'label' => 'zifra42_mr@mail.ru', 'href' => 'mailto:zifra42_mr@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Ардашева Наталья Валерьевна',
    'role' => 'Начальник методического отдела',
    'photo' => 'assets/Staff/Ardasheva.webp',
    'phone' => '+7 923 614-19-76',
    'tel' => '+79236141976',
    'emails' => array(
      array( 'label' => 'zifra42metod@mail.ru', 'href' => 'mailto:zifra42metod@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Матвиенко Наталья Владимировна',
    'role' => 'Заведующая очным отделением по специальности «Правоохранительная деятельность» и заочным отделением',
    'photo' => 'assets/Staff/Matvienko.webp',
    'phone' => '+7 923 034-99-91',
    'tel' => '+79230349991',
    'emails' => array(
      array( 'label' => 'zifra42_do@mail.ru (очное)', 'href' => 'mailto:zifra42_do@mail.ru' ),
      array( 'label' => 'zifra42_zaochnoe@mail.ru (заочное)', 'href' => 'mailto:zifra42_zaochnoe@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Шабарчина Владислава Юрьевна',
    'role' => 'Заместитель директора по учебно-производственной работе',
    'photo' => 'assets/Staff/Shabarchina.webp',
    'phone' => '+7 923 460-44-93',
    'tel' => '+79234604493',
    'emails' => array(
      array( 'label' => 'zifra42_uch@mail.ru', 'href' => 'mailto:zifra42_uch@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Жалуманова Виктория Владиславовна',
    'role' => 'Заведующая очным отделением',
    'photo' => 'assets/Staff/Shalumanova.webp',
    'phone' => '+7 905 995-09-51',
    'tel' => '+79059950951',
    'emails' => array(
      array( 'label' => 'zifra42_do@mail.ru', 'href' => 'mailto:zifra42_do@mail.ru' ),
    ),
  ),
  array(
    'name' => 'Моргунова Варвара Александровна',
    'role' => 'Заведующая учебной и производственной практикой',
    'photo' => 'assets/Staff/Morgunova.webp',
    'phone' => '+7 923 469-06-86',
    'tel' => '+79234690686',
    'emails' => array(
      array( 'label' => 'zifra42_prakt@mail.ru', 'href' => 'mailto:zifra42_prakt@mail.ru' ),
    ),
  ),
);
$phone_icon = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1C10.61 21 3 13.39 3 4c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.24.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2Z"/></svg>';
$email_icon = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2Zm0 4-8 5-8-5V6l8 5 8-5v2Z"/></svg>';
$person_icon = '<svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8Zm0 2c-3.87 0-7 2.69-7 6v1h14v-1c0-3.31-3.13-6-7-6Z"/></svg>';
$css_info_ver = zifra_asset_ver( 'css/info.css' );
$css_contacts_ver = zifra_asset_ver( 'css/contacts.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );

?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'Контакты — Колледж ЦИФРА',
    'seo_description' => 'Контакты руководства и сотрудников колледжа ЦИФРА. Адрес: г. Кемерово, ул. Николая Островского, д. 12.',
    'seo_path'        => 'pages/contacts/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/contacts.css?v=<?php echo zifra_h( $css_contacts_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Контакты' ) ); ?>

<main id="main" class="contacts-page">
    <div class="contacts-page__inner">
      <section class="contacts-staff" aria-labelledby="contacts-staff-title">
        <header>
          <p class="about-kicker">Команда</p>
          <h2 class="about-title" id="contacts-staff-title">Руководство и сотрудники</h2>
        </header>

        <div class="contacts-staff__grid">
          <?php foreach ( $staff as $person ) : ?>
            <article class="staff-card">
              <div class="staff-card__avatar" aria-hidden="true">
                <?php if ( $person['photo'] !== '' ) : ?>
                  <img loading="lazy" decoding="async" src="<?php echo zifra_h( $person['photo'] ); ?>" alt="">
                <?php else : ?>
                  <?php echo $person_icon; ?>
                <?php endif; ?>
              </div>
              <div class="staff-card__body">
                <h2 class="staff-card__name"><?php echo zifra_h( $person['name'] ); ?></h2>
                <p class="staff-card__position"><?php echo zifra_h( $person['role'] ); ?></p>
                <div class="staff-card__contact">
                  <?php if ( $person['phone'] !== '' ) : ?>
                    <a href="tel:<?php echo zifra_h( $person['tel'] ); ?>" class="contact-phone">
                      <?php echo $phone_icon; ?>
                      <?php echo zifra_h( $person['phone'] ); ?>
                    </a>
                  <?php endif; ?>
                  <?php foreach ( $person['emails'] as $i => $email ) : ?>
                    <?php if ( $person['phone'] !== '' || $i > 0 ) : ?>
                      <span class="separator" aria-hidden="true"></span>
                    <?php endif; ?>
                    <a href="<?php echo zifra_h( $email['href'] ); ?>" class="contact-email">
                      <?php echo $email_icon; ?>
                      <?php echo zifra_h( $email['label'] ); ?>
                    </a>
                  <?php endforeach; ?>
                </div>
              </div>
            </article>
          <?php endforeach; ?>
        </div>
      </section>

      <section class="contacts-map" aria-labelledby="contacts-map-title">
        <header>
          <p class="about-kicker">Адрес</p>
          <h2 class="about-title" id="contacts-map-title">Как нас найти</h2>
        </header>

        <div class="contacts-map__meta">
          <span>
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 3.5c3.6 0 6.5 2.9 6.5 6.5 0 4.6-6.5 10.5-6.5 10.5S5.5 14.6 5.5 10A6.5 6.5 0 0 1 12 3.5Zm0 4.4a2.1 2.1 0 1 0 0 4.2 2.1 2.1 0 0 0 0-4.2Z"/></svg>
            г. Кемерово, ул. Николая Островского, д. 12
          </span>
          <a href="tel:+79230349991">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.2 3.6h2.4l1.2 4.2-1.8 1.2a12.6 12.6 0 0 0 5.4 5.4l1.2-1.8 4.2 1.2v2.4c0 .7-.3 1.3-.8 1.7-.5.5-2.6 2.1-7.2.2C7.2 16.1 4.6 11.6 3.8 8.2c-.6-2.6.8-4.1 1.4-4.6.5-.5 1.2-.8 2-.8Z"/></svg>
            +7 923 034-99-91
          </a>
          <a href="mailto:zifra42@mail.ru">
            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6.5h16v11H4v-11Zm0 0 8 6.2L20 6.5"/></svg>
            zifra42@mail.ru
          </a>
        </div>

        <div class="contacts-map__frame">
          <iframe
            title="Яндекс Карта — колледж ЦИФРА, ул. Николая Островского, 12"
            src="https://yandex.ru/map-widget/v1/?ll=86.0749%2C55.3623&amp;z=17&amp;l=map&amp;pt=86.0749%2C55.3623%2Cpm2rdm&amp;lang=ru_RU"
            loading="lazy"
            allowfullscreen
          ></iframe>
        </div>
      </section>
    </div>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
</body>
</html>
