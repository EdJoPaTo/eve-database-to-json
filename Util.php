<?php

class Util {
  public static function saveToFile($filename, $content)
  {
    if (!is_dir("output")) {
      mkdir("output");
    }

    $targetfile = "output/" . $filename;

    echo $targetfile . "\n";
    file_put_contents($targetfile, $content);
  }

  public static function saveToFileAsJSON($filename, $content)
  {
    Util::saveToFile($filename, json_encode($content));
  }
}

?>
