<?php
  print('Hellow, World!');

  /* Вы должны включить отчёт об ошибках для mysqli, прежде чем пытаться установить соединение */
  mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

  $mysqli = new mysqli('localhost', 'maxim182_admin', 'Ololop_710', 'maxim182_notes');

  /* Установите желаемую кодировку после установления соединения */
  $mysqli->set_charset('utf8mb4');

  printf("Успешно... %s\n", $mysqli->host_info);