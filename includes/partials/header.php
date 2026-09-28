<?php
$page_title = isset( $page_title ) ? (string) $page_title : '';
$is_home = ! empty( $is_home );
?>
  <header class="header">
    <div class="header__inner">
      <?php if ( ! $is_home ) : ?>
      <a class="header-home" href="index.php" aria-label="На главную">
        <svg viewBox="0 0 24 24" aria-hidden="true">
          <path d="M4.5 11.2 12 4.8l7.5 6.4"/>
          <path d="M7.2 10.2V19h3.6v-4.4h2.4V19h3.6v-8.8"/>
        </svg>
      </a>
      <?php if ( $page_title !== '' ) : ?>
      <h1 class="header-page-title"><?php echo zifra_h( $page_title ); ?></h1>
      <?php endif; ?>
      <?php endif; ?>
      <a class="logo" href="index.php" aria-label="ЦИФРА — на главную">
        <img src="assets/logo.png" alt="ЦИФРА" width="112" height="112">
      </a>

      <nav class="nav" id="site-nav" aria-label="Основное меню">
        <div class="nav__rows">
          <ul class="nav__list">
            <li><a href="pages/info/">О цифре</a></li>
            <li class="has-sub">
              <a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/" aria-expanded="false">Сведения об образовательной организации</a>
              <ul class="sub">
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/">Основные сведения</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d1%81%d1%82%d1%80%d1%83%d0%ba%d1%82%d1%83%d1%80%d0%b0-%d0%b8-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d1%8b-%d1%83%d0%bf%d1%80%d0%b0%d0%b2%d0%bb%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be/">Структура и органы управления образовательной организацией</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d0%b4%d0%be%d0%ba%d1%83%d0%bc%d0%b5%d0%bd%d1%82%d1%8b/">Документы</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d0%bd%d0%b8%d0%b5/">Образование</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d1%8b%d0%b5-%d1%81%d1%82%d0%b0%d0%bd%d0%b4%d0%b0%d1%80%d1%82%d1%8b/">Образовательные стандарты</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d1%80%d1%83%d0%ba%d0%be%d0%b2%d0%be%d0%b4%d1%81%d1%82%d0%b2%d0%be-%d0%b8-%d0%bf%d0%b5%d0%b4%d0%b0%d0%b3%d0%be%d0%b3%d0%b8%d1%87%d0%b5%d1%81%d0%ba%d0%b8%d0%b9-%d1%81%d0%be%d1%81%d1%82%d0%b0%d0%b2/">Руководство</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d0%bf%d0%b5%d0%b4%d0%b0%d0%b3%d0%be%d0%b3%d0%b8%d1%87%d0%b5%d1%81%d0%ba%d0%b8%d0%b9-%d1%81%d0%be%d1%81%d1%82%d0%b0%d0%b2/">Педагогический состав</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d0%bc%d0%b0%d1%82%d0%b5%d1%80%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be-%d1%82%d0%b5%d1%85%d0%bd%d0%b8%d1%87%d0%b5%d1%81%d0%ba%d0%be%d0%b5-%d0%be%d0%b1%d0%b5%d1%81%d0%bf%d0%b5%d1%87%d0%b5%d0%bd%d0%b8%d0%b5/">Материально-техническое обеспечение и оснащенность образовательного процесса</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d0%bf%d0%bb%d0%b0%d1%82%d0%bd%d1%8b%d0%b5-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d1%8b%d0%b5-%d1%83%d1%81%d0%bb%d1%83%d0%b3%d0%b8/">Платные образовательные услуги</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d1%81%d1%82%d0%b8%d0%bf%d0%b5%d0%bd%d0%b4%d0%b8%d0%b8-%d0%b8-%d0%b8%d0%bd%d1%8b%d0%b5-%d0%b2%d0%b8%d0%b4%d1%8b-%d0%bc%d0%b0%d1%82%d0%b5%d1%80%d0%b8%d0%b0%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%bf%d0%be/">Стипендии и иные виды материальной поддержки</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d1%84%d0%b8%d0%bd%d0%b0%d0%bd%d1%81%d0%be%d0%b2%d0%be-%d1%85%d0%be%d0%b7%d1%8f%d1%82%d1%81%d1%82%d0%b2%d0%b5%d0%bd%d0%bd%d0%b0%d1%8f-%d0%b4%d0%b5%d1%8f%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d1%81%d1%82/">Финансово-хозяйственная деятельность</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d0%b2%d0%b0%d0%ba%d0%b0%d0%bd%d1%82%d0%bd%d1%8b%d0%b5-%d0%bc%d0%b5%d1%81%d1%82%d0%b0-%d0%b4%d0%bb%d1%8f-%d0%bf%d1%80%d0%b8%d1%91%d0%bc%d0%b0-%d0%bf%d0%b5%d1%80%d0%b5%d0%b2%d0%be%d0%b4%d0%b0/">Вакантные места для приема (перевода)</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d0%b2%d0%b5%d0%b4%d0%b5%d0%bd%d0%b8%d1%8f-%d0%be%d0%b1-%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b9-%d0%be%d1%80%d0%b3%d0%b0%d0%bd%d0%b8%d0%b7/%d0%bc%d0%b5%d0%b6%d0%b4%d1%83%d0%bd%d0%b0%d1%80%d0%be%d0%b4%d0%bd%d0%be%d0%b5-%d1%81%d0%be%d1%82%d1%80%d1%83%d0%b4%d0%bd%d0%b8%d1%87%d0%b5%d1%81%d1%82%d0%b2%d0%be/">Международное сотрудничество</a></li>
                <li><a href="pages/vsoko/">Внутренняя система оценки качества образования (ВСОКО)</a></li>
              </ul>
            </li>
            <li><a href="https://zifra42.ru/%d0%bf%d0%be%d1%81%d1%82%d1%83%d0%bf%d0%b8%d1%82%d1%8c/">Поступить</a></li>
            <li class="has-sub">
              <a href="https://zifra42.ru/%d1%81%d1%82%d1%83%d0%b4%d0%b5%d0%bd%d1%82%d0%b0%d0%bc/" aria-expanded="false">Студентам</a>
              <ul class="sub">
                <li><a href="pages/ochnoe/">Очное отделение</a></li>
                <li><a href="pages/zaochnoe/">Заочное отделение</a></li>
                <li><a href="https://zifra42.ru/%d1%81%d1%82%d1%83%d0%b4%d0%b5%d0%bd%d1%82%d0%b0%d0%bc/%d0%be%d0%b1%d1%80%d0%b0%d0%b7%d0%be%d0%b2%d0%b0%d1%82%d0%b5%d0%bb%d1%8c%d0%bd%d0%be%d0%b5-%d0%ba%d1%80%d0%b5%d0%b4%d0%b8%d1%82%d0%be%d0%b2%d0%b0%d0%bd%d0%b8%d0%b5/">Образовательное кредитование</a></li>
                <li><a href="pages/trudoustroystvo/">Практика и трудоустройство</a></li>
              </ul>
            </li>
            <li><a href="pages/bezopasnost/">Комплексная безопасность</a></li>
            <li><a href="pages/biblioteka/">Библиотека</a></li>
          </ul>
          <ul class="nav__list">
            <li class="has-sub">
              <a href="https://zifra42.ru/%d1%8d%d0%bb%d0%b5%d0%ba%d1%82%d1%80%d0%be%d0%bd%d0%bd%d0%be%d0%b5-%d0%be%d0%b1%d1%83%d1%87%d0%b5%d0%bd%d0%b8%d0%b5/" aria-expanded="false">Электронное обучение</a>
              <ul class="sub">
                <li><a href="pages/rasp/">Изменения в расписании занятий</a></li>
                <li><a href="https://j.zifra42.ru/dist/" target="_blank" rel="noopener noreferrer">ЭИОС</a></li>
                <li><a href="https://zifra42.ru/%d1%8d%d0%bb%d0%b5%d0%ba%d1%82%d1%80%d0%be%d0%bd%d0%bd%d0%be%d0%b5-%d0%be%d0%b1%d1%83%d1%87%d0%b5%d0%bd%d0%b8%d0%b5/%d1%84%d0%b3%d0%b8%d1%81-%d0%bc%d0%be%d1%8f-%d1%88%d0%ba%d0%be%d0%bb%d0%b0/">ФГИС «Моя школа»</a></li>
              </ul>
            </li>
            <li><a href="pages/dpo/">Дополнительное образование</a></li>
            <li><a href="https://zifra42.ru/%d0%bf%d1%80%d0%be%d1%84%d0%be%d1%80%d0%b8%d0%b5%d0%bd%d1%82%d0%b0%d1%86%d0%b8%d0%be%d0%bd%d0%bd%d1%8b%d0%b5-%d1%84%d0%be%d1%80%d0%bc%d0%b0%d1%82%d1%8b/">Профориентационная работа</a></li>
            <li class="has-sub">
              <a href="pages/spravka-nalog/" aria-expanded="false">Виртуальная приемная</a>
              <ul class="sub">
                <li><a href="pages/spravka-nalog/">Заявление на получение справки об оплате образовательных услуг для предоставления в налоговый орган</a></li>
              </ul>
            </li>
            <li><a href="pages/celevoe/">Целевое обучение</a></li>
            <li><a href="pages/contacts/">Контакты</a></li>
          </ul>
        </div>
      </nav>

      <button class="burger" type="button" aria-label="Открыть меню" aria-expanded="false" aria-controls="site-nav">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>
