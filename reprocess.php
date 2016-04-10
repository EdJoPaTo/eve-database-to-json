<?php

global $mysqli;
require_once 'mysqlDetails.php';

require_once 'Util.php';

$content = array();

$result = $mysqli->query("SELECT * FROM invTypeMaterials");
while ($row = $result->fetch_object()) {
  $typeID = (int) $row->typeID;
  $materialTypeID = (int) $row->materialTypeID;
  $materialQuantity = (int) $row->quantity;

  if (!isset($content[$typeID])) {
    $content[$typeID] = array();
  }
  $content[$typeID][$materialTypeID] = $materialQuantity;
}

Util::saveToFileAsJSON("reprocess.json", $content);

?>
