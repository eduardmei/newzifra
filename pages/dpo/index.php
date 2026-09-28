<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';
$docs = array(
  array(
    'title' => 'Выписка из реестра лицензий',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/11/%D0%92%D1%8B%D0%BF%D0%B8%D1%81%D0%BA%D0%B0-%D0%B8%D0%B7-%D1%80%D0%B5%D0%B5%D1%81%D1%82%D1%80%D0%B0-%D0%BB%D0%B8%D1%86%D0%B5%D0%BD%D0%B7%D0%B8%D0%B9-%E2%84%96-%D0%9B035-01258-42-00223661.pdf',
    'meta' => 'PDF',
  ),
  array(
    'title' => 'ДПО. Повышение квалификации',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/09/%D0%94%D0%9F%D0%9E.-%D0%9F%D0%BE%D0%B2%D1%8B%D1%88%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BA%D0%B2%D0%B0%D0%BB%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%86%D0%B8%D0%B8.pdf',
    'meta' => 'PDF',
  ),
  array(
    'title' => 'ДПО. Переподготовка',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/09/%D0%94%D0%9F%D0%9E.-%D0%9F%D0%B5%D1%80%D0%B5%D0%BF%D0%BE%D0%B4%D0%B3%D0%BE%D1%82%D0%BE%D0%B2%D0%BA%D0%B0.pdf',
    'meta' => 'PDF',
  ),
);
$norms = array(
  array(
    'title' => 'Приказ Минпросвещения России № 534 от 14.07.2023 г. «Об утверждении перечня профессий рабочих, должностей служащих, по которым осуществляется профессиональное обучение» (редакция от 10.09.2025 — действует с 21.10.2025)',
    'href' => 'https://www.garant.ru/products/ipo/prime/doc/407425777/',
    'meta' => 'Ссылка',
  ),
  array(
    'title' => 'Приказ Минобрнауки России от 24 марта 2025 г. № 266 «Об утверждении порядка организации и осуществления образовательной деятельности по дополнительным профессиональным программам»',
    'href' => 'https://base.garant.ru/411917644/',
    'meta' => 'Ссылка',
  ),
  array(
    'title' => 'Приказ Минобрнауки России № 499 от 01.07.2013 г. «Об утверждении порядка организации и осуществления образовательной деятельности по дополнительным профессиональным программам»',
    'href' => 'https://www.garant.ru/products/ipo/prime/doc/70340506/',
    'meta' => 'Ссылка',
  ),
  array(
    'title' => 'Приказ Минпросвещения России № 438 от 26.08.2020 г. «Об утверждении порядка организации и осуществления образовательной деятельности по основным программам профессионального обучения»',
    'href' => 'https://base.garant.ru/74626872/',
    'meta' => 'Ссылка',
  ),
);
$listener_docs = array(
  array(
    'title' => 'Заявление (совершеннолетнего)',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/05/%D0%97%D0%B0%D1%8F%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5-%D0%A1%D0%9E%D0%92%D0%95%D0%A0%D0%A8%D0%95%D0%9D%D0%9D%D0%9E%D0%9B%D0%95%D0%A2%D0%9D%D0%98%D0%99-%D0%94%D0%9F%D0%9E.docx',
    'meta' => 'DOCX',
  ),
  array(
    'title' => 'Заявление (несовершеннолетнего)',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/05/%D0%97%D0%B0%D1%8F%D0%B2%D0%BB%D0%B5%D0%BD%D0%B8%D0%B5-%D0%9D%D0%95%D0%A1%D0%9E%D0%92%D0%95%D0%A0%D0%A8%D0%95%D0%9D%D0%9D%D0%9E%D0%9B%D0%95%D0%A2%D0%9D%D0%98%D0%99-%D0%94%D0%9F%D0%9E.docx',
    'meta' => 'DOCX',
  ),
  array(
    'title' => 'Согласие на обработку персональных данных (совершеннолетнего)',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/05/%D0%A1%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D0%B8%D0%B5-%D0%BD%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D1%83-%D0%9F%D0%94-%D0%A1%D0%9E%D0%92%D0%95%D0%A0%D0%A8%D0%95%D0%9D%D0%9D%D0%9E%D0%9B%D0%95%D0%A2%D0%9D%D0%98%D0%99.doc',
    'meta' => 'DOC',
  ),
  array(
    'title' => 'Согласие на обработку персональных данных (несовершеннолетнего)',
    'href' => 'https://zifra42.ru/wp-content/uploads/2026/05/%D0%A1%D0%BE%D0%B3%D0%BB%D0%B0%D1%81%D0%B8%D0%B5-%D0%BD%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D1%83-%D0%9D%D0%95%D0%A1%D0%9E%D0%92%D0%95%D0%A0%D0%A8%D0%95%D0%9D%D0%9D%D0%9E%D0%9B%D0%95%D0%A2%D0%9D%D0%98%D0%99.docx',
    'meta' => 'DOCX',
  ),
  array(
    'title' => 'Карточка организации',
    'href' => 'https://zifra42.ru/%d1%80%d0%b5%d0%ba%d0%b2%d0%b8%d0%b7%d0%b8%d1%82%d1%8b/',
    'meta' => 'Ссылка',
  ),
);
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
$css_dpo_ver = zifra_asset_ver( 'css/dpo.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );
$js_dpo_ver = zifra_asset_ver( 'js/dpo.js' );

$courses = array(
  array(
    'id'            => 'info-security',
    'title'         => 'Информационная безопасность',
    'qualification' => 'специалист по защите информации',
    'cover'         => 'assets/dpo/info-security.svg',
    'hours'         => '260 ак. часов',
    'document'      => 'Диплом о переподготовке',
    'about'         => 'Программа профессиональной переподготовки «Информационная безопасность» даёт фундаментальные знания и практические навыки для защиты цифровых активов организации. Вы научитесь выявлять уязвимости, предотвращать утечки данных, работать с системами криптозащиты и нормативными документами (ФСТЭК, 152-ФЗ). Курс ориентирован на реальную практику: от анализа угроз до построения комплексной системы защиты.',
    'program'       => array(
      'Основы информационной безопасности и криптографии',
      'Анализ и управление рисками, построение модели угроз',
      'Защита компьютерных сетей и систем (SIEM, IDS/IPS)',
      'Правовое регулирование: ФСТЭК, ФСБ, 152-ФЗ',
      'Практические кейсы: аудит безопасности, реагирование на инциденты',
    ),
    'skills'        => array(
      'Проведение аудита безопасности информационных систем',
      'Установка и настройка криптографических средств защиты',
      'Разработка политик безопасности и регламентов',
      'Выявление и устранение уязвимостей (пентест)',
      'Взаимодействие с регуляторами при прохождении проверок',
    ),
    'soft_skills'   => array(
      'Системное мышление и анализ сложных угроз',
      'Стрессоустойчивость при работе с инцидентами',
      'Навыки юридической грамотности в области защиты данных',
      'Командное взаимодействие с IT-отделами и руководством',
      'Проектное управление и документирование',
    ),
    'audience'      => array(
      array(
        'title' => 'Для опытных IT-специалистов',
        'text'  => 'Если вы уже работали в сфере IT (системный администратор, разработчик, сетевик) и хотите углубиться в защиту информации, повысить свою экспертизу или сменить направление на более узкое и высокооплачиваемое — этот курс поможет систематизировать знания и получить официальную квалификацию специалиста по защите информации.',
      ),
      array(
        'title' => 'Для тех, кто получает или уже имеет среднее или высшее образование (не IT)',
        'text'  => 'Курс подойдёт специалистам с техническим, математическим или юридическим образованием, которые хотят войти в сферу кибербезопасности. Вы получите все необходимые базовые и продвинутые компетенции, чтобы начать карьеру в информационной безопасности с нуля, имея за плечами диплом о переподготовке.',
      ),
    ),
  ),
  array(
    'id'            => 'graphic-design',
    'title'         => 'Графический дизайн',
    'qualification' => 'графический дизайнер',
    'cover'         => 'assets/dpo/graphic-design.svg',
    'hours'         => '260 ак. часов',
    'document'      => 'Диплом о переподготовке',
    'about'         => 'Программа профессиональной переподготовки «Графический дизайн» готовит универсальных специалистов в области визуальных коммуникаций. Вы освоите весь цикл создания дизайн-продуктов: от исследования аудитории и генерации идей до финальной вёрстки и презентации заказчику. Особое внимание уделяется работе в профессиональных редакторах (Adobe Creative Suite, Figma) и развитию дизайн-мышления.',
    'program'       => array(
      'Композиция, типографика, теория цвета',
      'Adobe Photoshop, Illustrator, InDesign — продвинутый уровень',
      'Figma: прототипирование и дизайн интерфейсов',
      'Брендинг и фирменный стиль (нейминг, логотип, айдентика)',
      'Портфолио-проект под руководством куратора',
    ),
    'skills'        => array(
      'Создание фирменного стиля и брендбуков',
      'Дизайн печатной продукции (визитки, плакаты, упаковка)',
      'Прототипирование интерфейсов в Figma',
      'Обработка растровой и векторной графики',
      'Подготовка макетов к печати и публикации в интернете',
    ),
    'soft_skills'   => array(
      'Дизайн-мышление и эмпатия к аудитории',
      'Навыки презентации и защиты своих решений',
      'Тайм-менеджмент при работе с несколькими проектами',
      'Критическое восприятие обратной связи',
      'Умение работать в команде с разработчиками и маркетологами',
    ),
    'audience'      => array(
      array(
        'title' => 'Для практикующих дизайнеров с перерывом',
        'text'  => 'Если вы уже работали в дизайне, но был длительный перерыв — хотите «вернуться в строй», обновить портфолио, освоить новые инструменты (Figma, современные тренды) и подтвердить квалификацию документально, чтобы снова чувствовать себя уверенно на рынке труда.',
      ),
      array(
        'title' => 'Для тех, у кого есть творческое образование или опыт',
        'text'  => 'Курс предназначен для выпускников художественных училищ, архитектурных вузов, а также для специалистов из смежных областей (маркетинг, журналистика, веб-разработка), которые имеют базовые навыки работы в графических редакторах, но не имеют профильной квалификации «Графический дизайнер». Переподготовка даст недостающую теоретическую базу и практические навыки для полноценной работы в профессии.',
      ),
      array(
        'title' => 'Для тех, кто хочет попробовать себя в новом креативном направлении',
        'text'  => 'Если вам близка визуальная эстетика, вы любите экспериментировать с идеями и хотите освоить востребованную креативную профессию с нуля — курс поможет сделать уверенный старт. Вы получите системную базу, практику в современных инструментах и диплом о переподготовке, который подтвердит квалификацию графического дизайнера.',
      ),
    ),
  ),
);

$course_offer = array(
  'document' => 'Диплом о профессиональной переподготовке установленного образца (260 часов)',
  'price'    => '25 000 ₽',
  'term'     => '4 месяца',
  'start'    => 'Ноябрь 2026 года (по мере комплектования групп)',
  'format'   => 'Гибридный формат (онлайн-теория + очные воркшопы с преподавателем-практиком). Возможность сдавать практические работы в удобном темпе. Обратная связь по каждому проекту и индивидуальный подход.',
  'loyalty'  => array(
    'Рассрочка платежа на 4 месяца (без процентов)',
    'Скидка 10% для студентов колледжа и родителей',
  ),
  'form'     => 'https://forms.yandex.ru/u/6a9294aa84227c744f022eb8',
  'phone'    => '+79234675855',
  'phone_display' => '+7 923 467-58-55',
  'start_short' => 'Ноябрь 2026',
);

$upskill_offer = array(
  'document' => 'Удостоверение о повышении квалификации (160 ак. ч.)',
  'price'    => '5 000 ₽',
  'term'     => '1 месяц',
  'start'    => 'Ноябрь 2026 года (по мере комплектования групп)',
  'format'   => 'Гибридный формат (онлайн-теория + очные воркшопы с преподавателем-практиком). Возможность сдавать практические работы в удобном темпе. Обратная связь по каждому проекту и индивидуальный подход.',
  'form'     => 'https://forms.yandex.ru/u/6a9294aa84227c744f022eb8',
  'phone'    => '+79234675855',
  'phone_display' => '+7 923 467-58-55',
  'start_short' => 'Ноябрь 2026',
);

$upskill_courses = array(
  array(
    'id'     => '1c-enterprise',
    'title'  => '1С: Предприятие',
    'cover'  => 'assets/dpo/1c-enterprise.svg',
    'about'  => 'Курс для бухгалтеров, менеджеров и IT-специалистов, работающих с системой автоматизации учета. Освоение последних версий платформы и конфигураций.',
    'learn'  => array(
      'Настраивать рабочие базы данных «1С: Бухгалтерия», «1С: Управление торговлей» и «1С: ЗУП»',
      'Формировать сложные отчеты и анализировать финансовые показатели',
      'Выполнять закрытие периода и исправлять ошибки в учете',
      'Автоматизировать рутинные операции с помощью встроенного языка запросов (основы)',
    ),
    'result' => 'Вы сможете самостоятельно вести учет на предприятии любого масштаба или внедрять решения 1С в команде.',
  ),
  array(
    'id'     => 'neural-workflows',
    'title'  => 'Внедрение нейросетей в рабочие процессы сотрудников',
    'cover'  => 'assets/dpo/neural-workflows.svg',
    'about'  => 'Курс для руководителей, менеджеров, аналитиков и специалистов любых отделов, которые хотят перевести свою работу на новый уровень. Искусственный интеллект перестал быть экспериментальной технологией — сегодня это полноценный инструмент повышения эффективности бизнеса. Программа научит вас не просто пользоваться отдельными сервисами, а системно интегрировать нейросети в существующие бизнес-процессы. Вы освоите современные ИИ-инструменты для автоматизации рутины, подготовки аналитических материалов, создания контента и принятия управленческих решений.',
    'learn'  => array(
      'Понимать принципы работы искусственного интеллекта и больших языковых моделей (LLM), их возможности и ограничения',
      'Формулировать эффективные запросы (промпты), работать с контекстом и оценивать достоверность результатов',
      'Автоматизировать документооборот, деловую переписку и подготовку служебных материалов',
      'Генерировать и адаптировать визуальный контент: изображения, инфографику, презентации и короткие видеоматериалы',
      'Применять ИИ для анализа данных, базовой аналитики и подготовки отчетов',
      'Соблюдать требования информационной безопасности, авторского права и этики при работе с нейросетями',
      'Проектировать ИИ-ассистентов и разрабатывать прототипы цифровых решений без программирования',
    ),
    'result' => 'Вы перестанете тратить время на рутину и научитесь решать рабочие задачи в разы быстрее. По данным Всемирного экономического форума, специалисты, владеющие навыками работы с ИИ, уже сегодня получают на 25–35% выше зарплату. Курс даёт именно те практические инструменты, которые позволят вам оставаться конкурентоспособным и востребованным на рынке труда.',
  ),
  array(
    'id'     => 'office-docs',
    'title'  => 'Делопроизводство на ПК',
    'cover'  => 'assets/dpo/office-docs.svg',
    'about'  => 'Идеально для секретарей-референтов, офис-менеджеров и помощников руководителя. Осваиваем ведение документооборота в цифровом формате.',
    'learn'  => array(
      'Регистрировать, контролировать и хранить входящие/исходящие документы',
      'Составлять номенклатуру дел и формировать электронные архивы',
      'Использовать системы электронного документооборота (СЭД) на примере популярных решений',
      'Оформлять организационно-распорядительные документы (приказы, письма, протоколы) по ГОСТу',
    ),
    'result' => 'Вы станете незаменимым организатором документопотока и повысите прозрачность работы всей компании.',
  ),
  array(
    'id'     => 'internet-ads',
    'title'  => 'Специалист по интернет-рекламе',
    'cover'  => 'assets/dpo/internet-ads.svg',
    'about'  => 'Курс для маркетологов, предпринимателей и SMM-менеджеров. Осваиваем инструменты привлечения клиентов из сети.',
    'learn'  => array(
      'Настраивать таргетированную рекламу в VK и Telegram',
      'Запускать контекстную рекламу (Яндекс.Директ) и управлять ставками',
      'Составлять портрет целевой аудитории и писать продающие объявления',
      'Анализировать эффективность кампаний (CTR, CPC, ROI) и корректировать бюджеты',
    ),
    'result' => 'Вы сможете самостоятельно привлекать поток клиентов, не переплачивая агентствам.',
  ),
);

function zifra_dpo_course_list( $items ) {
  echo '<ul class="dpo-course__list">';
  foreach ( $items as $item ) {
    echo '<li>' . zifra_h( $item ) . '</li>';
  }
  echo '</ul>';
}

function zifra_dpo_cover( $course ) {
  if ( empty( $course['cover'] ) ) {
    return;
  }
  $alt = isset( $course['cover_alt'] ) ? $course['cover_alt'] : ( 'Иллюстрация курса «' . $course['title'] . '»' );
  ?>
  <figure class="dpo-course__cover">
    <img
      src="<?php echo zifra_h( $course['cover'] ); ?>"
      alt="<?php echo zifra_h( $alt ); ?>"
      width="640"
      height="400"
      loading="lazy"
      decoding="async"
    >
  </figure>
  <?php
}

function zifra_dpo_offer_section( $id, $offer ) {
  $has_loyalty = ! empty( $offer['loyalty'] );
  ?>
  <section class="dpo-course__offer" aria-labelledby="<?php echo $id; ?>-offer">
    <div class="dpo-course__offer-head">
      <h4 class="dpo-course__heading" id="<?php echo $id; ?>-offer">Условия обучения</h4>
      <p class="dpo-course__offer-doc"><?php echo zifra_h( $offer['document'] ); ?></p>
    </div>

    <dl class="dpo-course__facts">
      <div>
        <dt>Стоимость обучения</dt>
        <dd><?php echo zifra_h( $offer['price'] ); ?></dd>
      </div>
      <div>
        <dt>Срок обучения</dt>
        <dd><?php echo zifra_h( $offer['term'] ); ?></dd>
      </div>
      <div>
        <dt>Старт</dt>
        <dd><?php echo zifra_h( $offer['start'] ); ?></dd>
      </div>
    </dl>

    <div class="dpo-course__offer-grid<?php echo $has_loyalty ? '' : ' dpo-course__offer-grid--single'; ?>">
      <div class="dpo-course__offer-block">
        <h5 class="dpo-course__offer-title">Формат и подход</h5>
        <p><?php echo zifra_h( $offer['format'] ); ?></p>
      </div>
      <?php if ( $has_loyalty ) : ?>
      <div class="dpo-course__offer-block">
        <h5 class="dpo-course__offer-title">Программа лояльности от «Цифры»</h5>
        <?php zifra_dpo_course_list( $offer['loyalty'] ); ?>
      </div>
      <?php endif; ?>
    </div>

    <div class="dpo-course__cta">
      <a class="dpo-course__btn" href="<?php echo zifra_h( $offer['form'] ); ?>" target="_blank" rel="noopener noreferrer">Оставить заявку</a>
      <a class="dpo-course__phone" href="tel:<?php echo zifra_h( $offer['phone'] ); ?>">
        <span>Остались вопросы? Звони!</span>
        <strong><?php echo zifra_h( $offer['phone_display'] ); ?></strong>
      </a>
    </div>
  </section>
  <?php
}

function zifra_dpo_card( $course, $offer ) {
  $id = zifra_h( $course['id'] );
  $modal_id = 'dpo-modal-' . $id;
  $title_id = $id . '-title';
  $start_short = isset( $offer['start_short'] ) ? $offer['start_short'] : $offer['start'];
  ?>
  <article class="dpo-card" aria-labelledby="<?php echo $title_id; ?>">
    <p class="dpo-card__label">Курс</p>
    <h3 class="dpo-card__title" id="<?php echo $title_id; ?>"><?php echo zifra_h( $course['title'] ); ?></h3>
    <?php if ( ! empty( $course['qualification'] ) ) : ?>
      <p class="dpo-card__qual"><?php echo zifra_h( $course['qualification'] ); ?></p>
    <?php endif; ?>
    <dl class="dpo-card__meta">
      <div>
        <dt>Срок обучения</dt>
        <dd><?php echo zifra_h( $offer['term'] ); ?></dd>
      </div>
      <div>
        <dt>Старт набора</dt>
        <dd><?php echo zifra_h( $start_short ); ?></dd>
      </div>
      <div>
        <dt>Стоимость</dt>
        <dd><?php echo zifra_h( $offer['price'] ); ?></dd>
      </div>
    </dl>
    <div class="dpo-card__actions">
      <button class="dpo-card__more" type="button" data-dpo-open="<?php echo $modal_id; ?>" aria-haspopup="dialog">
        Подробнее
      </button>
      <a class="dpo-card__apply" href="<?php echo zifra_h( $offer['form'] ); ?>" target="_blank" rel="noopener noreferrer">
        Оставить заявку
      </a>
    </div>
  </article>
  <?php
}

function zifra_dpo_course( $course, $offer ) {
  $id = zifra_h( $course['id'] );
  $modal_id = 'dpo-modal-' . $id;
  ?>
  <div class="dpo-modal" id="<?php echo $modal_id; ?>" hidden aria-hidden="true">
    <div class="dpo-modal__backdrop" data-dpo-close tabindex="-1"></div>
    <div class="dpo-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="<?php echo $id; ?>-modal-title" tabindex="-1">
      <button class="dpo-modal__close" type="button" data-dpo-close aria-label="Закрыть">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg>
      </button>
      <div class="dpo-modal__scroll">
        <article class="dpo-course">
          <header class="dpo-course__hero">
            <?php zifra_dpo_cover( $course ); ?>
            <div class="dpo-course__hero-main">
              <div class="dpo-course__hero-copy">
                <p class="dpo-course__label">Курс</p>
                <h3 class="dpo-course__title" id="<?php echo $id; ?>-modal-title"><?php echo zifra_h( $course['title'] ); ?></h3>
                <p class="dpo-course__qual">
                  <span class="dpo-course__qual-label">Квалификация</span>
                  <span class="dpo-course__qual-value"><?php echo zifra_h( $course['qualification'] ); ?></span>
                </p>
              </div>
              <div class="dpo-course__about">
                <h4 class="dpo-course__heading">О курсе</h4>
                <p><?php echo zifra_h( $course['about'] ); ?></p>
              </div>
            </div>
            <ul class="dpo-course__meta" aria-label="Параметры курса">
              <li>
                <span class="dpo-course__meta-value"><?php echo zifra_h( $offer['price'] ); ?></span>
                <span class="dpo-course__meta-label">Стоимость</span>
              </li>
              <li>
                <span class="dpo-course__meta-value"><?php echo zifra_h( $offer['term'] ); ?></span>
                <span class="dpo-course__meta-label">Срок обучения</span>
              </li>
              <li>
                <span class="dpo-course__meta-value"><?php echo zifra_h( $offer['start_short'] ); ?></span>
                <span class="dpo-course__meta-label">Старт набора</span>
              </li>
            </ul>
          </header>

          <div class="dpo-course__panels">
            <section class="dpo-course__panel" aria-labelledby="<?php echo $id; ?>-program">
              <h4 class="dpo-course__heading" id="<?php echo $id; ?>-program">Программа курса</h4>
              <?php zifra_dpo_course_list( $course['program'] ); ?>
            </section>
            <section class="dpo-course__panel" aria-labelledby="<?php echo $id; ?>-skills">
              <h4 class="dpo-course__heading" id="<?php echo $id; ?>-skills">Профессиональные навыки</h4>
              <?php zifra_dpo_course_list( $course['skills'] ); ?>
            </section>
            <section class="dpo-course__panel" aria-labelledby="<?php echo $id; ?>-soft">
              <h4 class="dpo-course__heading" id="<?php echo $id; ?>-soft">Надпрофессиональные навыки</h4>
              <?php zifra_dpo_course_list( $course['soft_skills'] ); ?>
            </section>
          </div>

          <section class="dpo-course__audience" aria-labelledby="<?php echo $id; ?>-audience">
            <h4 class="dpo-course__heading" id="<?php echo $id; ?>-audience">Для кого курс</h4>
            <div class="dpo-course__audience-grid">
              <?php foreach ( $course['audience'] as $index => $person ) : ?>
                <article class="dpo-course__audience-card">
                  <span class="dpo-course__audience-num" aria-hidden="true"><?php echo (string) ( $index + 1 ); ?></span>
                  <h5 class="dpo-course__audience-title"><?php echo zifra_h( $person['title'] ); ?></h5>
                  <?php if ( ! empty( $person['text'] ) ) : ?>
                    <p><?php echo zifra_h( $person['text'] ); ?></p>
                  <?php endif; ?>
                </article>
              <?php endforeach; ?>
            </div>
          </section>

          <?php zifra_dpo_offer_section( $id, $offer ); ?>
        </article>
      </div>
    </div>
  </div>
  <?php
}

function zifra_dpo_upskill( $course, $offer ) {
  $id = zifra_h( $course['id'] );
  $modal_id = 'dpo-modal-' . $id;
  ?>
  <div class="dpo-modal" id="<?php echo $modal_id; ?>" hidden aria-hidden="true">
    <div class="dpo-modal__backdrop" data-dpo-close tabindex="-1"></div>
    <div class="dpo-modal__dialog" role="dialog" aria-modal="true" aria-labelledby="<?php echo $id; ?>-modal-title" tabindex="-1">
      <button class="dpo-modal__close" type="button" data-dpo-close aria-label="Закрыть">
        <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6 6l12 12M18 6 6 18"/></svg>
      </button>
      <div class="dpo-modal__scroll">
        <article class="dpo-course dpo-course--upskill">
          <header class="dpo-course__hero">
            <?php zifra_dpo_cover( $course ); ?>
            <div class="dpo-course__hero-main">
              <div class="dpo-course__hero-copy">
                <p class="dpo-course__label">Курс</p>
                <h3 class="dpo-course__title" id="<?php echo $id; ?>-modal-title"><?php echo zifra_h( $course['title'] ); ?></h3>
              </div>
              <div class="dpo-course__about">
                <h4 class="dpo-course__heading">Описание</h4>
                <p><?php echo zifra_h( $course['about'] ); ?></p>
              </div>
            </div>
            <ul class="dpo-course__meta" aria-label="Параметры курса">
              <li>
                <span class="dpo-course__meta-value"><?php echo zifra_h( $offer['price'] ); ?></span>
                <span class="dpo-course__meta-label">Стоимость</span>
              </li>
              <li>
                <span class="dpo-course__meta-value"><?php echo zifra_h( $offer['term'] ); ?></span>
                <span class="dpo-course__meta-label">Срок обучения</span>
              </li>
              <li>
                <span class="dpo-course__meta-value"><?php echo zifra_h( $offer['start_short'] ); ?></span>
                <span class="dpo-course__meta-label">Старт набора</span>
              </li>
            </ul>
          </header>

          <div class="dpo-course__upskill-grid">
            <section class="dpo-course__panel" aria-labelledby="<?php echo $id; ?>-learn">
              <h4 class="dpo-course__heading" id="<?php echo $id; ?>-learn">Чему вы научитесь</h4>
              <?php zifra_dpo_course_list( $course['learn'] ); ?>
            </section>
            <section class="dpo-course__result" aria-labelledby="<?php echo $id; ?>-result">
              <h4 class="dpo-course__heading" id="<?php echo $id; ?>-result">Итог</h4>
              <p><?php echo zifra_h( $course['result'] ); ?></p>
            </section>
          </div>

          <?php zifra_dpo_offer_section( $id, $offer ); ?>
        </article>
      </div>
    </div>
  </div>
  <?php
}

?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'Дополнительное образование — Колледж ЦИФРА',
    'seo_description' => 'Дополнительное образование колледжа ЦИФРА: контакты, программы ДПО, нормативные документы и бланки для слушателей.',
    'seo_path'        => 'pages/dpo/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/ochnoe.css?v=<?php echo zifra_h( $css_ochnoe_ver ); ?>">
  <link rel="stylesheet" href="css/dpo.css?v=<?php echo zifra_h( $css_dpo_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Дополнительное образование' ) ); ?>

<main id="main" class="dept-page">
    <div class="dept-page__inner">
      <section class="dept-heads" aria-labelledby="dpo-heads-title">
        <header>
          <p class="about-kicker">Контакты</p>
          <h2 class="about-title" id="dpo-heads-title">Заведующая ДПО</h2>
        </header>

        <div class="dpo-intro">
          <article class="team-slide dept-card">
            <div class="team-slide__photo">
              <img loading="lazy" decoding="async" src="assets/Staff/Malashkina.webp" alt="Малашкина Лариса Евгеньевна">
            </div>
            <div class="team-slide__info">
              <h3><span class="team-slide__surname">Малашкина</span><span class="team-slide__given">Лариса Евгеньевна</span></h3>
              <p class="team-slide__role">Заместитель директора по информационным технологиям</p>
              <div class="dept-card__contacts">
                <a href="tel:+79234675855">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.2 3.6h2.4l1.2 4.2-1.8 1.2a12.6 12.6 0 0 0 5.4 5.4l1.2-1.8 4.2 1.2v2.4c0 .7-.3 1.3-.8 1.7-.5.5-2.6 2.1-7.2.2C7.2 16.1 4.6 11.6 3.8 8.2c-.6-2.6.8-4.1 1.4-4.6.5-.5 1.2-.8 2-.8Z"/></svg>
                  +7 923 467-58-55
                </a>
                <a href="mailto:itzifra42@mail.ru">
                  <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6.5h16v11H4v-11Zm0 0 8 6.2L20 6.5"/></svg>
                  itzifra42@mail.ru
                </a>
              </div>
            </div>
          </article>

          <nav class="dpo-jump" aria-label="Разделы страницы">
            <p class="dpo-jump__label">Быстрый переход</p>
            <ul class="dpo-jump__list">
              <li>
                <a class="dpo-jump__btn" href="<?php echo zifra_h( zifra_abs_url( 'pages/dpo/' ) . '#dpo-retrain' ); ?>" data-dpo-jump="dpo-retrain">
                  <span class="dpo-jump__num" aria-hidden="true">01</span>
                  <span class="dpo-jump__title">Переподготовка</span>
                  <span class="dpo-jump__hint">260 ак. часов</span>
                  <span class="dpo-jump__go" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M5 12h12M13 6l6 6-6 6"/></svg>
                  </span>
                </a>
              </li>
              <li>
                <a class="dpo-jump__btn" href="<?php echo zifra_h( zifra_abs_url( 'pages/dpo/' ) . '#dpo-upgrade' ); ?>" data-dpo-jump="dpo-upgrade">
                  <span class="dpo-jump__num" aria-hidden="true">02</span>
                  <span class="dpo-jump__title">Повышение квалификации</span>
                  <span class="dpo-jump__hint">160 ак. часов</span>
                  <span class="dpo-jump__go" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M5 12h12M13 6l6 6-6 6"/></svg>
                  </span>
                </a>
              </li>
              <li>
                <a class="dpo-jump__btn" href="<?php echo zifra_h( zifra_abs_url( 'pages/dpo/' ) . '#dpo-docs' ); ?>" data-dpo-jump="dpo-docs">
                  <span class="dpo-jump__num" aria-hidden="true">03</span>
                  <span class="dpo-jump__title">Документы</span>
                  <span class="dpo-jump__hint">Нормы и бланки</span>
                  <span class="dpo-jump__go" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M5 12h12M13 6l6 6-6 6"/></svg>
                  </span>
                </a>
              </li>
              <li>
                <a class="dpo-jump__btn" href="<?php echo zifra_h( zifra_abs_url( 'pages/dpo/' ) . '#dpo-future' ); ?>" data-dpo-jump="dpo-future">
                  <span class="dpo-jump__num" aria-hidden="true">04</span>
                  <span class="dpo-jump__title">Код будущего</span>
                  <span class="dpo-jump__hint">Федеральный проект</span>
                  <span class="dpo-jump__go" aria-hidden="true">
                    <svg viewBox="0 0 24 24"><path d="M5 12h12M13 6l6 6-6 6"/></svg>
                  </span>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </section>

      <section class="dept-programs" id="dpo-retrain" aria-labelledby="dpo-retrain-title">
        <header>
          <p class="about-kicker">Профессиональная переподготовка</p>
          <h2 class="about-title" id="dpo-retrain-title">Программы профессиональной переподготовки</h2>
          <p class="dpo-spotlight">
            <span class="dpo-spotlight__text">Освойте востребованную IT-специальность с выдачей диплома о профессиональной переподготовке</span>
            <span class="dpo-spotlight__badge">
              <span class="dpo-spotlight__badge-shine" aria-hidden="true"></span>
              <span class="dpo-spotlight__badge-label">260&nbsp;ак.&nbsp;часов</span>
            </span>
          </p>
        </header>

        <div class="dpo-courses">
          <?php foreach ( $courses as $course ) {
            zifra_dpo_card( $course, $course_offer );
          } ?>
        </div>
        <?php foreach ( $courses as $course ) {
          zifra_dpo_course( $course, $course_offer );
        } ?>
      </section>

      <section class="dept-programs" id="dpo-upgrade" aria-labelledby="dpo-upgrade-title">
        <header>
          <p class="about-kicker">Повышение квалификации</p>
          <h2 class="about-title" id="dpo-upgrade-title">Программы повышения квалификации</h2>
          <p class="dpo-spotlight">
            <span class="dpo-spotlight__text">Станьте востребованным специалистом! Предлагаем курсы повышения квалификации. По окончании выдаётся удостоверение установленного образца, которое даёт преимущество при трудоустройстве и позволяет закрыть требования работодателя к квалификации</span>
            <span class="dpo-spotlight__badge">
              <span class="dpo-spotlight__badge-shine" aria-hidden="true"></span>
              <span class="dpo-spotlight__badge-label">160&nbsp;ак.&nbsp;часов</span>
            </span>
          </p>
        </header>

        <div class="dpo-courses">
          <?php foreach ( $upskill_courses as $course ) {
            zifra_dpo_card( $course, $upskill_offer );
          } ?>
        </div>
        <?php foreach ( $upskill_courses as $course ) {
          zifra_dpo_upskill( $course, $upskill_offer );
        } ?>
      </section>

      <section class="dept-docs" id="dpo-docs" aria-labelledby="dpo-docs-title">
        <header>
          <p class="about-kicker">Материалы</p>
          <h2 class="about-title" id="dpo-docs-title">Документы</h2>
        </header>

        <ul class="dept-docs__list">
          <?php zifra_doc_list( $docs ); ?>
        </ul>

        <h3 class="dept-docs__subhead" id="dpo-norms-title">Нормативные документы</h3>
        <ul class="dept-docs__list" aria-labelledby="dpo-norms-title">
          <?php zifra_doc_list( $norms ); ?>
        </ul>

        <h3 class="dept-docs__subhead" id="dpo-listener-title">Документы для слушателей</h3>
        <ul class="dept-docs__list" aria-labelledby="dpo-listener-title">
          <?php zifra_doc_list( $listener_docs ); ?>
        </ul>
      </section>

      <section class="dpo-future" id="dpo-future" aria-labelledby="dpo-future-title">
        <header>
          <p class="about-kicker">Федеральный проект</p>
          <div class="dpo-future__title-row">
            <h2 class="about-title" id="dpo-future-title">«Код будущего»</h2>
            <span class="dpo-spotlight__badge">
              <span class="dpo-spotlight__badge-shine" aria-hidden="true"></span>
              <span class="dpo-spotlight__badge-label">Бесплатно</span>
            </span>
          </div>
          <div class="dpo-future__intro">
            <p class="dpo-spotlight">
              <span class="dpo-spotlight__text">В 2026 году в рамках федерального проекта «Код будущего» (государственная инициатива, нацпроект «Экономика данных») стартует программа «Инженер программных проектов на Python» (партнёр проекта — российская EdTech-компания ООО «АЙСМАРТ»). Это возможность для наших студентов бесплатно прокачать навыки разработки под руководством опытных наставников. Преподаватели курса обеспечат глубокое погружение в современные языки программирования и помогут применить знания в реальных задачах</span>
            </p>

            <ul class="dpo-future__brands" aria-label="Логотипы проекта и партнёра">
              <li>
                <figure class="dpo-future__brand">
                  <img
                    class="dpo-future__brand-img dpo-future__brand-img--kod dpo-future__brand-img--for-dark"
                    src="assets/kod-future-logo-light.png"
                    alt="Федеральный проект «Код будущего»"
                    width="356"
                    height="172"
                    loading="lazy"
                    decoding="async"
                  >
                  <img
                    class="dpo-future__brand-img dpo-future__brand-img--kod dpo-future__brand-img--for-light"
                    src="assets/kod-future-logo.png"
                    alt=""
                    width="356"
                    height="172"
                    loading="lazy"
                    decoding="async"
                    aria-hidden="true"
                  >
                </figure>
              </li>
              <li>
                <figure class="dpo-future__brand">
                  <img
                    class="dpo-future__brand-img dpo-future__brand-img--ismart dpo-future__brand-img--for-dark"
                    src="assets/ismart-logo-light.png"
                    alt="iSMART — образовательная платформа для детей"
                    width="804"
                    height="271"
                    loading="lazy"
                    decoding="async"
                  >
                  <img
                    class="dpo-future__brand-img dpo-future__brand-img--ismart dpo-future__brand-img--for-light"
                    src="assets/ismart-logo.png"
                    alt=""
                    width="804"
                    height="271"
                    loading="lazy"
                    decoding="async"
                    aria-hidden="true"
                  >
                </figure>
              </li>
            </ul>
          </div>
        </header>

        <div class="dpo-future__grid">
          <article class="dpo-future__card">
            <div class="dpo-future__photo">
              <img loading="lazy" decoding="async" src="assets/Staff/Malashkina.webp" alt="Малашкина Лариса Евгеньевна">
            </div>
            <div class="dpo-future__body">
              <h3 class="dpo-future__name">
                <span class="dpo-future__surname">Малашкина</span>
                <span class="dpo-future__given">Лариса Евгеньевна</span>
              </h3>
              <p class="dpo-future__bio">Эксперт-практик в области разработки программных решений. В рамках проекта специализируется на обучении архитектуре проектов на Python. Уделяет особое внимание развитию инженерного мышления и качеству кода у студентов IT-профиля.</p>
            </div>
          </article>

          <article class="dpo-future__card">
            <div class="dpo-future__photo dpo-future__photo--placeholder" aria-hidden="true">
              <span>ЕО</span>
            </div>
            <div class="dpo-future__body">
              <h3 class="dpo-future__name">
                <span class="dpo-future__surname">Еленец</span>
                <span class="dpo-future__given">Ольга Борисовна</span>
              </h3>
              <p class="dpo-future__bio">Опытный педагог и наставник в сфере цифровых технологий. В проекте «Код будущего» курирует направление современных языков программирования. Отличается системным подходом к обучению и умением адаптировать сложный технический материал для практического применения.</p>
            </div>
          </article>
        </div>

        <aside class="dpo-future__cta" aria-labelledby="dpo-future-cta-title">
          <div class="dpo-future__cta-copy">
            <h3 class="dpo-future__cta-title" id="dpo-future-cta-title">На Госуслугах стартовал приём заявок на курсы программирования</h3>
            <p>Успейте подать заявку! Регистрация доступна по ссылке ниже.</p>
          </div>
          <a class="dpo-future__cta-btn" href="https://www.gosuslugi.ru/600420/1/form?courseID=31618&amp;addressID=7" target="_blank" rel="noopener noreferrer">Подать заявку на Госуслугах</a>
        </aside>
      </section>
    </div>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
  <script src="js/dpo.js?v=<?php echo zifra_h( $js_dpo_ver ); ?>" defer></script>
</body>
</html>
