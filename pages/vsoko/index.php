<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';

$intro = 'Внутренняя система оценки качества образования — это совокупность организационных структур, норм и правил, диагностических и оценочных процедур, обеспечивающих на единой основе оценку качества образовательной деятельности и подготовки обучающегося, выраженное в степени их соответствия федеральным государственным образовательным стандартам и потребностям участников образовательных отношений. Положение о внутренней системе оценки качества образования разрабатывается и утверждается в соответствии с порядком утверждения локальных актов, предусмотренных уставом образовательной организации (как правило, педагогическим советом) на основании ч. 3 ст. 28 и в соответствии с порядком, предусмотренным ч. 2–3 ст. 30 Федерального закона от 29.12.2012 № 273-ФЗ «Об образовании в Российской Федерации».';

$norms = array(
  'ФЗ № 273 «Об образовании в Российской Федерации»',
  'Федеральная целевая программа «Развитие образования на 2016–2020 годы»',
  'Приказ Министерства образования и науки № 462 «Об утверждении порядка самообследования образовательной организацией»',
);

$local_acts = array(
      array(
        'title' => 'Положение о внутренней системе оценки качества образования',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE%D1%86%D0%B5%D0%BD%D0%BA%D0%B0-%D0%BA%D0%B0%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%B0.pdf',
        'meta' => 'PDF',
      ),
    );

$conditions = array(
      array(
        'title' => 'Отчет по итогам самообследования за 2023 год',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%9E%D1%82%D1%87%D0%B5%D1%82-%D0%BF%D0%BE-%D0%A1%D0%B0%D0%BC%D0%BE%D0%BE%D0%B1%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8E-2023-%D0%B3.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет по итогам самообследования за 2024 год',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/09/%D0%9E%D1%82%D1%87%D0%B5%D1%82-%D0%BF%D0%BE-%D1%81%D0%B0%D0%BC%D0%BE%D0%BE%D0%B1%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8E-%D0%B7%D0%B0-2024-%D0%B3.pdf',
        'meta' => 'PDF',
      ),
    );

$program_results = array(
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 09.02.07 Информационные системы и программирование',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 09.02.09 Веб-разработка',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%92%D0%B5%D0%B1.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 10.02.05 Обеспечение информационной безопасности автоматизированных систем',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%9E%D1%82%D1%87%D0%B5%D1%82-%D0%BF%D0%BE-%D0%A1%D0%B0%D0%BC%D0%BE%D0%BE%D0%B1%D1%81%D0%BB%D0%B5%D0%B4%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8E-2023-%D0%B3.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 40.02.02 Правоохранительная деятельность',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%9F%D0%94.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 40.02.01 Право и организация социального обеспечения',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%9F%D0%A1%D0%9E.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 40.02.03 Право и судебное администрирование',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%9F%D0%A1%D0%90.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 40.02.04 Юриспруденция',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%AE.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 42.02.01 Реклама',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%A0.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 43.02.10 Туризм',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%A2.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Отчет о результатах оценки качества результатов образовательной деятельности по ППССЗ 44.02.02 Преподавание в начальных классах',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/08/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%92%D0%A1%D0%9E%D0%9A%D0%9E-%D0%9F%D0%9D%D0%9A.pdf',
        'meta' => 'PDF',
      ),
    );

$independent = array(
      array(
        'title' => 'Результаты мониторинга-СПО за 2021 год',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%9C%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3-%D0%A1%D0%9F%D0%9E-2021.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Результаты мониторинга-СПО за 2022 год',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%9C%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3-%D0%A1%D0%9F%D0%9E-2022.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Результаты мониторинга-СПО за 2023 год',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%9C%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3-%D0%A1%D0%9F%D0%9E-2023.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Результаты мониторинга-СПО за 2024 год',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%9C%D0%BE%D0%BD%D0%B8%D1%82%D0%BE%D1%80%D0%B8%D0%BD%D0%B3-%D0%A1%D0%9F%D0%9E-2024.pdf',
        'meta' => 'PDF',
      ),
      array(
        'title' => 'Результаты независимой оценки качества образования 2023 год',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/09/%D0%A0%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D1%8B-%D0%BD%D0%B5%D0%B7%D0%B0%D0%B2%D0%B8%D1%81%D0%B8%D0%BC%D0%BE%D0%B9-%D0%BE%D1%86%D0%B5%D0%BD%D0%BA%D0%B8-%D0%BA%D0%B0%D1%87%D0%B5%D1%81%D1%82%D0%B2%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F-2023.pdf',
        'meta' => 'PDF',
      ),
    );

$surveys = array(
      array(
        'title' => 'Опрос работодателей по удовлетворенности качеством образования практикантов/выпускников колледжа 2024-2025',
        'href' => 'https://forms.yandex.ru/u/685a6aef068ff0c53a3ab5fe',
        'meta' => 'Форма',
      ),
      array(
        'title' => 'Опрос студентов колледжа 2024-2025 учебный год',
        'href' => 'https://forms.yandex.ru/u/68465b17eb61462d158c1b53',
        'meta' => 'Форма',
      ),
      array(
        'title' => 'Опрос педагогов колледжа 2024-2025 учебный год',
        'href' => 'https://forms.yandex.ru/u/68464aaf84227c2b49dbda6c',
        'meta' => 'Форма',
      ),
    );

$consumer_years = array(
  array(
    'title' => '2024–2025',
    'items' => array(
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ О РЕЗУЛЬТАТАХ АНКЕТИРОВАНИЯ ПЕДАГОГИЧЕСКИХ РАБОТНИКОВ',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2-%D0%9E-%D0%A0%D0%95%D0%97%D0%A3%D0%9B%D0%AC%D0%A2%D0%90%D0%A2%D0%90%D0%A5-%D0%90%D0%9D%D0%9A%D0%95%D0%A2%D0%98%D0%A0%D0%9E%D0%92%D0%90%D0%9D%D0%98%D0%AF-%D0%9F%D0%95%D0%94%D0%90%D0%93%D0%9E%D0%93%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%A5-%D0%A0%D0%90%D0%91%D0%9E%D0%A2%D0%9D%D0%98%D0%9A%D0%9E%D0%92-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ О РЕЗУЛЬТАТАХ АНКЕТИРОВАНИЯ РАБОТОДАТЕЛЕЙ',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2-%D0%9E-%D0%A0%D0%95%D0%97%D0%A3%D0%9B%D0%AC%D0%A2%D0%90%D0%A2%D0%90%D0%A5-%D0%90%D0%9D%D0%9A%D0%95%D0%A2%D0%98%D0%A0%D0%9E%D0%92%D0%90%D0%9D%D0%98%D0%AF-%D0%A0%D0%90%D0%91%D0%9E%D0%A2%D0%9E%D0%94%D0%90%D0%A2%D0%95%D0%9B%D0%95%D0%99-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 09.02.07 Информационные системы и программирование',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_09.02.07-%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B-%D0%B8-%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 09.02.09 Веб-разработка',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_09.02.09-%D0%92%D0%B5%D0%B1-%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 10.02.05 Информационная безопасность',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_10.02.05-%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F-%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D1%8C_2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 40.02.01 Право и организация социального обеспечения',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_40.02.01-%D0%9F%D1%80%D0%B0%D0%B2%D0%BE-%D0%B8-%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F-%D1%81%D0%BE%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE-%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 40.02.02 Правоохранительная деятельность',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_40.02.02-%D0%9F%D1%80%D0%B0%D0%B2%D0%BE%D0%BE%D1%85%D1%80%D0%B0%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%B4%D0%B5%D1%8F%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D1%8C-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 40.02.04 Юриспруденция',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_40.02.04-%D0%AE%D1%80%D0%B8%D1%81%D0%BF%D1%80%D1%83%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D1%8F-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 42.02.01 Реклама',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_42.02.01-%D0%A0%D0%B5%D0%BA%D0%BB%D0%B0%D0%BC%D0%B0-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 43.02.10 Туризм',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_43.02.10-%D0%A2%D1%83%D1%80%D0%B8%D0%B7%D0%BC-2024-2025.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 44.02.02 Преподавание в начальных классах',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2_44.02.02-%D0%9F%D1%80%D0%B5%D0%BF%D0%BE%D0%B4%D0%B0%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B2-%D0%BD%D0%B0%D1%87%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0%D1%85-2024-2025.pdf',
          'meta' => 'PDF',
        ),
      ),
  ),
  array(
    'title' => '2023–2024',
    'items' => array(
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ О РЕЗУЛЬТАТАХ АНКЕТИРОВАНИЯ ПЕДАГОГИЧЕСКИХ РАБОТНИКОВ',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2-%D0%9E-%D0%A0%D0%95%D0%97%D0%A3%D0%9B%D0%AC%D0%A2%D0%90%D0%A2%D0%90%D0%A5-%D0%90%D0%9D%D0%9A%D0%95%D0%A2%D0%98%D0%A0%D0%9E%D0%92%D0%90%D0%9D%D0%98%D0%AF-%D0%9F%D0%95%D0%94%D0%90%D0%93%D0%9E%D0%93%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%A5-%D0%A0%D0%90%D0%91%D0%9E%D0%A2%D0%9D%D0%98%D0%9A%D0%9E%D0%92-2023-2024.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ О РЕЗУЛЬТАТАХ АНКЕТИРОВАНИЯ РАБОТОДАТЕЛЕЙ',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%9D%D0%90%D0%9B%D0%98%D0%A2%D0%98%D0%A7%D0%95%D0%A1%D0%9A%D0%98%D0%99-%D0%9E%D0%A2%D0%A7%D0%95%D0%A2-%D0%9E-%D0%A0%D0%95%D0%97%D0%A3%D0%9B%D0%AC%D0%A2%D0%90%D0%A2%D0%90%D0%A5-%D0%90%D0%9D%D0%9A%D0%95%D0%A2%D0%98%D0%A0%D0%9E%D0%92%D0%90%D0%9D%D0%98%D0%AF-%D0%A0%D0%90%D0%91%D0%9E%D0%A2%D0%9E%D0%94%D0%90%D0%A2%D0%95%D0%9B%D0%95%D0%99-2023-2024.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 09.02.07 Информационные системы и программирование',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D0%BE%D1%82%D1%87%D0%B5%D1%82_09.02.07-%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D1%8B%D0%B5-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B-%D0%B8-%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-2023-2024.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 09.02.09 Веб-разработка',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D0%BE%D1%82%D1%87%D0%B5%D1%82_09.02.09-%D0%92%D0%B5%D0%B1-%D1%80%D0%B0%D0%B7%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0-2023-2024.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 10.02.05 Информационная безопасность',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D0%BE%D1%82%D1%87%D0%B5%D1%82_10.02.05-%D0%98%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%B0%D1%8F-%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D1%8C-2023-2024.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 40.02.01 Право и организация социального обеспечения',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D0%BE%D1%82%D1%87%D0%B5%D1%82_40.02.01-%D0%9F%D1%80%D0%B0%D0%B2%D0%BE-%D0%B8-%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D1%8F-%D1%81%D0%BE%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE-%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8F-2023-2024.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 40.02.02 Правоохранительная деятельность',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D0%BE%D1%82%D1%87%D0%B5%D1%82_-40.02.02-%D0%9F%D1%80%D0%B0%D0%B2%D0%BE%D0%BE%D1%85%D1%80%D0%B0%D0%BD%D0%B8%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%B0%D1%8F-%D0%B4%D0%B5%D1%8F%D1%82%D0%B5%D0%BB%D1%8C%D0%BD%D0%BE%D1%81%D1%82%D1%8C-2023-2024.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 43.02.10 Туризм',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D0%BE%D1%82%D1%87%D0%B5%D1%82_43.02.10-%D0%A2%D1%83%D1%80%D0%B8%D0%B7%D0%BC-2023-2024.pdf',
          'meta' => 'PDF',
        ),
        array(
          'title' => 'АНАЛИТИЧЕСКИЙ ОТЧЕТ 44.02.02 Преподавание в начальных классах',
          'href' => 'https://zifra42.ru/wp-content/uploads/2025/07/%D0%90%D0%BD%D0%B0%D0%BB%D0%B8%D1%82%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%B8%D0%B9-%D0%BE%D1%82%D1%87%D0%B5%D1%82_44.02.02-%D0%9F%D1%80%D0%B5%D0%BF%D0%BE%D0%B4%D0%B0%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5-%D0%B2-%D0%BD%D0%B0%D1%87%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%BA%D0%BB%D0%B0%D1%81%D1%81%D0%B0%D1%85-2023-2024.pdf',
          'meta' => 'PDF',
        ),
      ),
  ),
);

function zifra_doc_list( $items ) {
  foreach ( $items as $doc ) :
    $meta = ! empty( $doc['meta'] ) ? $doc['meta'] : 'PDF';
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
        <span class="dept-doc__meta"><?php echo zifra_h( $meta ); ?></span>
      </a>
    </li>
  <?php
  endforeach;
}

$css_info_ver = zifra_asset_ver( 'css/info.css' );
$css_ochnoe_ver = zifra_asset_ver( 'css/ochnoe.css' );
$css_biblioteka_ver = zifra_asset_ver( 'css/biblioteka.css' );
$css_vsoko_ver = zifra_asset_ver( 'css/vsoko.css' );
$js_ver = zifra_asset_ver( 'js/main.js' );
?>
<!DOCTYPE html>
<html lang="ru" data-theme="dark">
<head>
<?php
zifra_partial(
  'head',
  array(
    'seo_title'       => 'ВСОКО — Колледж ЦИФРА',
    'seo_description' => 'Внутренняя система оценки качества образования (ВСОКО) колледжа ЦИФРА: положение, отчёты, мониторинг и аналитика.',
    'seo_path'        => 'pages/vsoko/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/ochnoe.css?v=<?php echo zifra_h( $css_ochnoe_ver ); ?>">
  <link rel="stylesheet" href="css/biblioteka.css?v=<?php echo zifra_h( $css_biblioteka_ver ); ?>">
  <link rel="stylesheet" href="css/vsoko.css?v=<?php echo zifra_h( $css_vsoko_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'ВСОКО' ) ); ?>

  <main id="main" class="dept-page">
    <div class="dept-page__inner">
      <section class="dept-docs dept-docs--vsoko" aria-labelledby="vsoko-title">
        <header class="vsoko-hero">
          <p class="about-kicker">Сведения об образовательной организации</p>
          <h2 class="about-title" id="vsoko-title">Внутренняя система оценки качества образования (ВСОКО)</h2>
          <p class="vsoko-lead"><?php echo zifra_h( $intro ); ?></p>
        </header>

        <div class="vsoko-norms">
          <h3 class="dept-docs__subhead" id="vsoko-norms-title">Нормативно-правовые акты</h3>
          <ul class="vsoko-norms__list" aria-labelledby="vsoko-norms-title">
            <?php foreach ( $norms as $norm ) : ?>
              <li><?php echo zifra_h( $norm ); ?></li>
            <?php endforeach; ?>
          </ul>
        </div>

        <h3 class="dept-docs__subhead" id="vsoko-local-title">Локальные нормативные акты</h3>
        <ul class="dept-docs__list" aria-labelledby="vsoko-local-title">
          <?php zifra_doc_list( $local_acts ); ?>
        </ul>

        <details class="lib-section lib-spoiler" open>
          <summary class="lib-spoiler__summary">
            <h3 class="dept-docs__subhead" id="vsoko-conditions-title">Результаты ВСОКО по оценке качества условий образовательных программ</h3>
            <span class="lib-spoiler__icon" aria-hidden="true"></span>
          </summary>
          <ul class="dept-docs__list" aria-labelledby="vsoko-conditions-title">
            <?php zifra_doc_list( $conditions ); ?>
          </ul>
        </details>

        <details class="lib-section lib-spoiler" open>
          <summary class="lib-spoiler__summary">
            <h3 class="dept-docs__subhead" id="vsoko-results-title">Результаты ВСОКО по оценке качества результатов освоения образовательных программ</h3>
            <span class="lib-spoiler__icon" aria-hidden="true"></span>
          </summary>
          <ul class="dept-docs__list" aria-labelledby="vsoko-results-title">
            <?php zifra_doc_list( $program_results ); ?>
          </ul>
        </details>

        <details class="lib-section lib-spoiler" open>
          <summary class="lib-spoiler__summary">
            <h3 class="dept-docs__subhead" id="vsoko-independent-title">Независимая оценка качества</h3>
            <span class="lib-spoiler__icon" aria-hidden="true"></span>
          </summary>
          <ul class="dept-docs__list" aria-labelledby="vsoko-independent-title">
            <?php zifra_doc_list( $independent ); ?>
          </ul>
          <h4 class="vsoko-sublabel" id="vsoko-surveys-title">Опросы</h4>
          <ul class="dept-docs__list" aria-labelledby="vsoko-surveys-title">
            <?php zifra_doc_list( $surveys ); ?>
          </ul>
        </details>

        <details class="lib-section lib-spoiler" open>
          <summary class="lib-spoiler__summary">
            <h3 class="dept-docs__subhead" id="vsoko-consumer-title">Оценка образовательного процесса потребителями</h3>
            <span class="lib-spoiler__icon" aria-hidden="true"></span>
          </summary>
          <?php foreach ( $consumer_years as $year_block ) : ?>
            <h4 class="vsoko-year"><?php echo zifra_h( $year_block['title'] ); ?></h4>
            <ul class="dept-docs__list">
              <?php zifra_doc_list( $year_block['items'] ); ?>
            </ul>
          <?php endforeach; ?>
        </details>
      </section>
    </div>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
</body>
</html>
