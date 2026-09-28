<?php
require_once dirname( __DIR__, 2 ) . '/includes/site.php';
$main_docs = array(
  array(
    'title' => 'Порядок эвакуации работников, обучающихся и иных лиц, находящихся в АНО ПО КПиЦТ',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%9F%D0%BE%D1%80%D1%8F%D0%B4%D0%BE%D0%BA-%D1%8D%D0%B2%D0%B0%D0%BA%D1%83%D0%B0%D1%86%D0%B8%D0%B8-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2-%D0%B8-%D1%81%D1%82%D1%83%D0%B4%D0%B5%D0%BD%D1%82%D0%BE%D0%B2.pdf',
  ),
  array(
    'title' => 'Положение о дисциплинарной комиссии',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%B4%D0%B8%D1%81%D1%86%D0%B8%D0%BF%D0%BB%D0%B8%D0%BD%D0%B0%D1%80%D0%BD%D0%BE%D0%B9-%D0%BA%D0%BE%D0%BC%D0%B8%D1%81%D1%81%D0%B8%D0%B8-2024.pdf',
  ),
  array(
    'title' => 'Положение об антитеррористической защищенности',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE%D0%B1-%D0%B0%D0%BD%D1%82%D0%B8%D1%82%D0%B5%D1%80%D1%80%D0%BE%D1%80%D0%B8%D1%81%D1%82%D0%B8%D1%87.%D0%B7%D0%B0%D1%89%D0%B8%D1%89%D0%B5%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8.pdf',
  ),
  array(
    'title' => 'Договор оказания охранных услуг',
    'href' => 'https://zifra42.ru/wp-content/uploads/2024/03/%D0%94%D0%BE%D0%B3%D0%BE%D0%B2%D0%BE%D1%80-%D0%BE%D0%BA%D0%B0%D0%B7%D0%B0%D0%BD%D0%B8%D1%8F-%D0%BE%D1%85%D1%80%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D1%83%D1%81%D0%BB%D1%83%D0%B3.pdf',
  ),
  array(
    'title' => 'Положение о пропускном режиме',
    'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BF%D1%80%D0%BE%D0%BF%D1%83%D1%81%D0%BA%D0%BD%D0%BE%D0%BC-%D1%80%D0%B5%D0%B6%D0%B8%D0%BC%D0%B5-.pdf',
  ),
);
$sections = array(
  array(
    'title' => 'Противодействие коррупции',
    'items' => array(
      array(
        'title' => 'Положение о комиссии по противодействию коррупции',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BA%D0%BE%D0%BC%D0%B8%D1%81%D1%81%D0%B8%D0%B8-%D0%BF%D0%BE-%D0%BF%D1%80%D0%BE%D1%82%D0%B8%D0%B2%D0%BE%D0%B4.-%D0%BA%D0%BE%D1%80%D1%80%D1%83%D0%BF%D1%86%D0%B8%D0%B8-2024.pdf',
      ),
      array(
        'title' => 'Приказ о создании Комиссии по противодействию коррупции',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%9F%D1%80%D0%B8%D0%BA%D0%B0%D0%B7-%E2%84%96-72-%D0%9E-%D1%81%D0%BE%D0%B7%D0%B4%D0%B0%D0%BD%D0%B8%D0%B8-%D0%9A%D0%BE%D0%BC%D0%B8%D1%81%D1%81%D0%B8%D0%B8-%D0%BF%D0%BE-2024.pdf',
      ),
      array(
        'title' => 'Приложения к приказу о создании Комиссии по противодействию коррупции',
        'href' => 'https://zifra42.ru/wp-content/uploads/2023/12/%D0%9F%D1%80%D0%B8%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F-%D0%BA-%D0%BF%D1%80%D0%B8%D0%BA%D0%B0%D0%B7%D1%83-%E2%84%96-35.1_2023.pdf',
      ),
      array(
        'title' => 'Положение по предупреждению и противодействию коррупции',
        'href' => 'https://zifra42.ru/wp-content/uploads/2025/02/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BF%D0%BE-%D0%BF%D1%80%D0%B5%D0%B4%D1%83%D0%BF%D1%80%D0%B5%D0%B6%D0%B4%D0%B5%D0%BD%D0%B8%D1%8E-%D0%BA%D0%BE%D1%80%D1%83%D0%BF%D0%BF%D1%86%D0%B8%D0%B8-2024.pdf',
      ),
    ),
  ),
  array(
    'title' => 'Защита персональных данных',
    'items' => array(
      array(
        'title' => 'Приказ об организации обработки персональных данных',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D1%80%D0%B8%D0%BA%D0%B0%D0%B7-%E2%84%9662-%D0%BE%D0%B1-%D0%BE%D1%80%D0%B3%D0%B0%D0%BD%D0%B8%D0%B7%D0%B0%D1%86%D0%B8%D0%B8-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8-%D0%9F%D0%94.pdf',
      ),
      array(
        'title' => 'Регламент допуска работников к обработке персональных данных',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%A0%D0%B5%D0%B3%D0%BB%D0%B0%D0%BC%D0%B5%D0%BD%D1%82-%D0%BA-%D0%BF%D1%80%D0%B8%D0%BA%D0%B0%D0%B7%D1%83-%E2%84%96-41-2024-%D0%A6%D0%98%D0%A4%D0%A0%D0%90.pdf',
      ),
      array(
        'title' => 'Порядок уничтожения и обезличивания персональных данных',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D1%80%D1%8F%D0%B4%D0%BE%D0%BA-%D1%83%D0%BD%D0%B8%D1%87%D1%82%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F-%D0%B8-%D0%BE%D0%B1%D0%B5%D0%B7%D0%BB%D0%B8%D1%87%D0%B8%D0%B2%D0%B0%D0%BD%D0%B8%D1%8F-%D0%BF%D0%B5%D1%80%D1%81-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85.pdf',
      ),
      array(
        'title' => 'Порядок доступа сотрудников в помещения, в которых ведется обработка конфиденциальной информации',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D1%80%D1%8F%D0%B4%D0%BE%D0%BA-%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF%D0%B0-%D1%81%D0%BE%D1%82%D1%80%D1%83%D0%B4%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2-%D0%B2-%D0%BF%D0%BE%D0%BC%D0%B5%D1%89%D0%B5%D0%BD%D0%B8%D1%8F-%D0%B2-%D0%BA%D0%BE%D1%82%D0%BE%D1%80%D1%8B%D1%85-%D0%B2%D0%B5%D0%B4%D0%B5%D1%82%D1%81%D1%8F-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B0-%D0%BA%D0%BE%D0%BD%D1%84%D0%B8%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9-%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8.pdf',
      ),
      array(
        'title' => 'Порядок оценки риска (вреда) субъектам персональных данных',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D1%80%D1%8F%D0%B4%D0%BE%D0%BA-%D0%BE%D1%86%D0%B5%D0%BD%D0%BA%D0%B8-%D1%80%D0%B8%D1%81%D0%BA%D0%B0-%D0%B2%D1%80%D0%B5%D0%B4%D0%B0-%D1%81%D1%83%D0%B1%D1%8A%D0%B5%D0%BA%D1%82%D0%B0%D0%BC-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85.pdf',
      ),
      array(
        'title' => 'Положение о защите конфиденциальной информации',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D0%B5-%D0%BA%D0%BE%D0%BD%D1%84%D0%B8%D0%B4%D0%B5%D0%BD%D1%86%D0%B8%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B9-%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%B8-%D0%A6%D0%98%D0%A4%D0%A0%D0%90.pdf',
      ),
      array(
        'title' => 'Положение о защите и обработке персональных данных работников',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D0%B5-%D0%9F%D0%94-%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BD%D0%B8%D0%BA%D0%BE%D0%B2-%D0%A6%D0%98%D0%A4%D0%A0%D0%90.pdf',
      ),
      array(
        'title' => 'Политика обработки персональных данных',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D0%BB%D0%B8%D1%82%D0%B8%D0%BA%D0%B0-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%A6%D0%98%D0%A4%D0%A0%D0%90.pdf',
      ),
      array(
        'title' => 'Положение о порядке уничтожения персональных данных',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BF%D0%BE%D1%80%D1%8F%D0%B4%D0%BA%D0%B5-%D1%83%D0%BD%D0%B8%D1%87%D1%82%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F-%D0%9F%D0%94-%D0%A6%D0%98%D0%A4%D0%A0%D0%90.pdf',
      ),
      array(
        'title' => 'Положение о хранении в архивах информации о результатах освоения обучающимися образовательных программ',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BF%D0%BE%D1%80%D1%8F%D0%B4%D0%BA%D0%B5-%D0%B8%D0%BD%D0%B4%D0%B8%D0%B2%D0%B8%D0%B4%D1%83%D0%B0%D0%BB%D1%8C%D0%BD%D0%BE%D0%B3%D0%BE-%D1%83%D1%87%D0%B5%D1%82%D0%B0-%D1%80%D0%B5%D0%B7%D1%83%D0%BB%D1%8C%D1%82%D0%B0%D1%82%D0%BE%D0%B2-%D0%A6%D0%98%D0%A4%D0%A0%D0%90.pdf',
      ),
      array(
        'title' => 'Положение об обеспечении безопасности автоматизированной информационной системы',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/10/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE%D0%B1-%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D0%B8-%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D0%B8-%D0%B0%D0%B2%D1%82%D0%BE%D0%BC%D0%B0%D1%82%D0%B8%D0%B7%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%B9-%D0%B8%D0%BD%D1%84%D0%BE%D1%80%D0%BC%D0%B0%D1%86%D0%B8%D0%BE%D0%BD%D0%BD%D0%BE%D0%B9-%D1%81%D0%B8%D1%81%D1%82%D0%B5%D0%BC%D1%8B-%D0%BE%D0%B1%D1%80%D0%B0%D0%B7%D0%BE%D0%B2%D0%B0%D1%82%D0%B5%D0%BB%D1%8C%D0%BD-2024.pdf',
      ),
      array(
        'title' => 'Положение о порядке обработки и по обеспечению безопасности персональных данных при их обработке в АИС',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%9E-%D0%BF%D0%BE%D1%80%D1%8F%D0%B4%D0%BA%D0%B5-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B8-%D0%B8-%D0%BF%D0%BE-%D0%BE%D0%B1%D0%B5%D1%81%D0%BF%D0%B5%D1%87%D0%B5%D0%BD%D0%B8%D1%8E-%D0%B1%D0%B5%D0%B7%D0%BE%D0%BF%D0%B0%D1%81%D0%BD%D0%BE%D1%81%D1%82%D0%B8-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%BF%D1%80%D0%B8-%D0%B8%D1%85-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B5-%D0%A6%D0%98%D0%A4%D0%A0%D0%90.pdf',
      ),
      array(
        'title' => 'Положение об обработке персональных данных обучающихся колледжа',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BE%D0%BB%D0%BE%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5-%D0%BE-%D0%BE%D0%B1%D1%80%D0%B0%D0%B1%D0%BE%D1%82%D0%BA%D0%B5-%D0%9F%D0%94-%D0%BE%D0%B1%D1%83%D1%87%D0%B0%D1%8E%D1%89%D0%B8%D1%85%D1%81%D1%8F-%D0%A6%D0%98%D0%A4%D0%A0%D0%90.pdf',
      ),
      array(
        'title' => 'Инструкция по проведению внутреннего контроля',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F-%D0%BF%D0%BE-%D0%BF%D1%80%D0%BE%D0%B2%D0%B5%D0%B4%D0%B5%D0%BD%D0%B8%D1%8E-%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B5%D0%BD%D0%BD%D0%B5%D0%B3%D0%BE-%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%BE%D0%BB%D1%8F-.pdf',
      ),
      array(
        'title' => 'Инструкция по учёту и хранению съёмных носителей персональных данных',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F-%D0%BF%D0%BE-%D1%83%D1%87%D1%91%D1%82%D1%83-%D0%B8-%D1%85%D1%80%D0%B0%D0%BD%D0%B5%D0%BD%D0%B8%D1%8E-%D1%81%D1%8A%D1%91%D0%BC%D0%BD%D1%8B%D1%85-%D0%BD%D0%BE%D1%81%D0%B8%D1%82%D0%B5%D0%BB%D0%B5%D0%B9-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%A6%D0%B8%D1%84%D1%80%D0%B0.pdf',
      ),
      array(
        'title' => 'Перечень мер, препятствующих несанкционированному доступу к персональным данным',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%B5%D1%80%D0%B5%D1%87%D0%B5%D0%BD%D1%8C-%D0%BC%D0%B5%D1%80-%D0%BF%D1%80%D0%B5%D0%BF%D1%8F%D1%82%D1%81%D1%82%D0%B2%D1%83%D1%8E%D1%89%D0%B8%D1%85-%D0%BD%D0%B5%D1%81%D0%B0%D0%BD%D0%BA%D1%86%D0%B8%D0%BE%D0%BD%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%BD%D0%BE%D0%BC%D1%83-%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF%D1%83-%D0%BA-%D0%BF%D0%B5%D1%80%D1%81-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%BC.pdf',
      ),
      array(
        'title' => 'План внутреннего контроля состояния защиты персональных данных',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%9F%D0%BB%D0%B0%D0%BD-%D0%B2%D0%BD%D1%83%D1%82%D1%80%D0%B5%D0%BD%D0%BD%D0%B5%D0%B3%D0%BE-%D0%BA%D0%BE%D0%BD%D1%82%D1%80%D0%BE%D0%BB%D1%8F-%D1%81%D0%BE%D1%81%D1%82%D0%BE%D1%8F%D0%BD%D0%B8%D1%8F-%D0%B7%D0%B0%D1%89%D0%B8%D1%82%D1%8B-%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D1%8C%D0%BD%D1%8B%D1%85-%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%A6%D0%B8%D1%84%D1%80%D0%B0.pdf',
      ),
      array(
        'title' => 'Акт определения уровня защищенности ИС персональных данных колледжа',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/11/%D0%90%D0%BA%D1%82%D1%8B-%D0%B4%D0%BB%D1%8F-%D0%BF%D0%B5%D1%80%D1%81.%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D1%85-%D0%BA-%D0%BF%D1%80%D0%B8%D0%BA%D0%B0%D0%B7%D1%83-62.pdf',
      ),
    ),
  ),
  array(
    'title' => 'Инструкции',
    'items' => array(
      array(
        'title' => 'Инструкция вводного инструктажа',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/09/%D0%98%D0%9D%D0%A1%D0%A2%D0%A0%D0%A3%D0%9A%D0%A6%D0%98%D0%AF_%D0%92%D0%92%D0%9E%D0%94%D0%9D%D0%9E%D0%93%D0%9E_%D0%98%D0%9D%D0%A1%D0%A2%D0%A0%D0%A3%D0%9A%D0%A2%D0%90%D0%96%D0%90-2024.pdf',
      ),
      array(
        'title' => 'Инструкция по безопасному поведению обучающихся в общественных местах',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/09/%D0%98%D0%9D%D0%A1%D0%A2%D0%A0%D0%A3%D0%9A%D0%A6%D0%98%D0%AF_%D0%9F%D0%9E_%D0%91%D0%95%D0%97%D0%9E%D0%9F%D0%90%D0%A1%D0%9D%D0%9E%D0%9C%D0%A3_%D0%9F%D0%9E%D0%92%D0%95%D0%94%D0%95%D0%9D%D0%98%D0%AE_%D0%9E%D0%91%D0%A3%D0%A7%D0%90%D0%AE%D0%A9%D0%98%D0%A5%D0%A1%D0%AF_%D0%92_%D0%9E%D0%91%D0%A9%D0%95%D0%A1%D0%A2%D0%92%D0%95%D0%9D%D0%9D%D0%AB%D0%A5_%D0%9C%D0%95%D0%A1%D0%A2%D0%90%D0%A5-2024.pdf',
      ),
      array(
        'title' => 'Инструкция по мерам пожарной безопасности',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/09/%D0%98%D0%9D%D0%A1%D0%A2%D0%A0%D0%A3%D0%9A%D0%A6%D0%98%D0%AF_%D0%9F%D0%9E_%D0%9C%D0%95%D0%A0%D0%90%D0%9C_%D0%9F%D0%9E%D0%96%D0%90%D0%A0%D0%9D%D0%9E%D0%99_%D0%91%D0%95%D0%97%D0%9E%D0%9F%D0%90%D0%A1%D0%9D%D0%9E%D0%A1%D0%A2%D0%98_2024.pdf',
      ),
      array(
        'title' => 'Инструкция по действиям при угрозе террористического акта',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/09/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F_%D0%BF%D0%BE_%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F%D0%BC_%D0%BF%D1%80%D0%B8_%D1%83%D0%B3%D1%80%D0%BE%D0%B7%D0%B5_%D0%A2%D0%B5%D1%80_%D0%90%D0%BA%D1%82%D0%B0-2024.pdf',
      ),
      array(
        'title' => 'Инструкция по действиям персонала при ЧС',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/09/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F_%D0%BF%D0%BE_%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F%D0%BC_%D0%BF%D0%B5%D1%80%D1%81%D0%BE%D0%BD%D0%B0%D0%BB%D0%B0_%D0%BF%D1%80%D0%B8_%D0%A7%D0%A1-2024.pdf',
      ),
      array(
        'title' => 'Инструкция по действиям обучающихся при ЧС',
        'href' => 'https://zifra42.ru/wp-content/uploads/2024/09/%D0%98%D0%BD%D1%81%D1%82%D1%80%D1%83%D0%BA%D1%86%D0%B8%D1%8F_%D0%BF%D0%BE_%D0%B4%D0%B5%D0%B9%D1%81%D1%82%D0%B2%D0%B8%D1%8F%D0%BC_%D0%BE%D0%B1%D1%83%D1%87%D0%B0%D1%8E%D1%89%D0%B8%D1%85%D1%81%D1%8F_%D0%BF%D1%80%D0%B8_%D0%A7%D0%A1-2024.pdf',
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
$css_bezopasnost_ver = zifra_asset_ver( 'css/bezopasnost.css' );
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
    'seo_title'       => 'Комплексная безопасность — Колледж ЦИФРА',
    'seo_description' => 'Комплексная безопасность колледжа ЦИФРА: документы по антитеррору, охране, персональным данным, инструкции и воинский учёт.',
    'seo_path'        => 'pages/bezopasnost/',
  )
);
?>
  <link rel="stylesheet" href="css/info.css?v=<?php echo zifra_h( $css_info_ver ); ?>">
  <link rel="stylesheet" href="css/ochnoe.css?v=<?php echo zifra_h( $css_ochnoe_ver ); ?>">
  <link rel="stylesheet" href="css/bezopasnost.css?v=<?php echo zifra_h( $css_bezopasnost_ver ); ?>">
  <link rel="stylesheet" href="css/biblioteka.css?v=<?php echo zifra_h( $css_biblioteka_ver ); ?>">
</head>
<body class="page-inner">
  <a class="skip-link" href="#main">К содержанию</a>

<?php zifra_partial( 'scene' ); ?>
<?php zifra_partial( 'topbar' ); ?>
<?php zifra_partial( 'header', array( 'page_title' => 'Комплексная безопасность' ) ); ?>

<main id="main" class="dept-page">
    <div class="dept-page__inner">
      <section class="dept-docs dept-docs--security" aria-labelledby="sec-title">
        <header>
          <p class="about-kicker">Безопасность</p>
          <h2 class="about-title" id="sec-title">Комплексная безопасность</h2>
        </header>

        <ul class="dept-docs__list">
          <?php zifra_doc_list( $main_docs ); ?>
        </ul>

        <?php foreach ( $sections as $i => $section ) :
          $section_id = 'sec-block-' . (int) $i;
          ?>
          <details class="lib-section lib-spoiler">
            <summary class="lib-spoiler__summary">
              <h2 class="dept-docs__subhead" id="<?php echo zifra_h( $section_id ); ?>"><?php echo zifra_h( $section['title'] ); ?></h2>
              <span class="lib-spoiler__icon" aria-hidden="true"></span>
            </summary>
            <ul class="dept-docs__list" aria-labelledby="<?php echo zifra_h( $section_id ); ?>">
              <?php zifra_doc_list( $section['items'] ); ?>
            </ul>
          </details>
        <?php endforeach; ?>

        <div class="sec-block sec-military">
          <header class="sec-military__head">
            <p class="about-kicker">Воинский учёт</p>
            <h2 class="about-title sec-military__title" id="sec-military-title">Перечень документов для постановки на первичный воинский учет</h2>
            <p class="sec-military__lead">Граждане, вызываемые для первоначальной постановки на воинский учет, обязаны лично прибыть в военный комиссариат с медицинскими документами, характеризующими состояние здоровья.</p>
          </header>

          <div class="sec-military__grid">
            <article class="sec-military__panel" aria-labelledby="sec-military-med">
              <div class="sec-military__panel-top">
                <span class="sec-military__badge" aria-hidden="true">01</span>
                <h3 class="sec-military__panel-title" id="sec-military-med">При себе иметь</h3>
              </div>
              <ul class="sec-military__list">
                <li>Амбулаторную мед. карту</li>
                <li>Результаты анализов ОАК, ОАМ</li>
                <li>Флюорографию лёгких в двух проекциях (снимок на руки)</li>
                <li>Копию сертификата прививок</li>
              </ul>
            </article>

            <article class="sec-military__panel sec-military__panel--docs" aria-labelledby="sec-military-docs">
              <div class="sec-military__panel-top">
                <span class="sec-military__badge" aria-hidden="true">02</span>
                <h3 class="sec-military__panel-title" id="sec-military-docs">Документы для представления</h3>
              </div>
              <ul class="sec-military__list sec-military__list--cols">
                <li>Анкету (Приложение №&nbsp;4) — заполняется классным руководителем, заверяется подписью руководителя образовательной организации и гербовой печатью</li>
                <li>Копию свидетельства о рождении</li>
                <li>Копию паспорта (стр.&nbsp;2–5)</li>
                <li>Документ об образовании — копию (аттестат за 9&nbsp;кл.)</li>
                <li>Справку с места учёбы (Приложение №&nbsp;2 для студентов)</li>
                <li>Характеристику — 2&nbsp;экз.</li>
                <li>Фотографии ч/б 3×4&nbsp;см — 6&nbsp;шт. (на обороте карандашом — фамилия и инициалы)</li>
                <li>Справку о семейном положении (бланк военкомата): мать, отец, родные братья и сёстры; дата и место рождения каждого — строго по паспорту</li>
                <li>Копию удостоверения при наличии 1-го спортивного разряда или КМС</li>
                <li>Справку о подготовке в военно-патриотическом объединении или клубе (при наличии)</li>
                <li>Мультифору — 1&nbsp;шт.</li>
                <li>Копию СНИЛС — 1&nbsp;шт.</li>
                <li>Копию ИНН — 1&nbsp;шт.</li>
              </ul>
            </article>
          </div>

          <p class="sec-military__note" role="note">
            <span class="sec-military__note-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <circle cx="12" cy="12" r="8.25"/>
                <path d="M12 10.4v5.2"/>
                <path d="M12 7.7h.01"/>
              </svg>
            </span>
            <span>На мед. комиссию иметь сменную обувь (сланцы).</span>
          </p>
        </div>
      </section>
    </div>
  </main>

<?php zifra_partial( 'footer' ); ?>

  <script src="js/main.js?v=<?php echo zifra_h( $js_ver ); ?>" defer></script>
</body>
</html>
