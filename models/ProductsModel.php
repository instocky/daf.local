<?php
// Модель работает с таблицей Products
function getAllPropetiesProducts() {
  $sql = "SELECT *
          FROM `products`
          WHERE status = 1";

  $rs = mysql_query($sql);

  $smartyRs = array();
  while ($row = mysql_fetch_assoc($rs)) {
    $smartyRs[] = $row;
    $status += $row['status'];
  }
  echo "Осталось: " . $status . " свободных IP";
  return $smartyRs;
}
