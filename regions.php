<?php

global $mysqli;
require_once 'mysqlDetails.php';

require_once 'Util.php';

$content = array();

$result = $mysqli->query("SELECT regionID, regionName, factionID FROM mapRegions");
while ($row = $result->fetch_object()) {
  $regionID = (int) $row->regionID;
  $regionName = (string) $row->regionName;
  $factionID = (int) $row->factionID;

  if ($regionID >= 11000000) {
    // skip the strange ones
    continue;
  }

  if ($factionID != 0) {
    $factionName = $mysqli->query("SELECT * FROM invNames WHERE itemID='" . $factionID . "'")->fetch_object()->itemName;
  }

  if (!isset($content[$regionID])) {
    $content[$regionID] = array();
  }
  $content[$regionID]["name"] = $regionName;
  $content[$regionID]["factionID"] = $factionID;
  if ($factionID != 0) {
    $content[$regionID]["factionName"] = $factionName;
  }
}

Util::saveToFileAsJSON("regions.json", $content);

?>
