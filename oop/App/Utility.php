<?php

namespace App;

class Utility {
  public static function printAnArray(array $array) {
    if (count($array) === 0) {
      throw new \Exception('Array is empty');
    }

    echo '<pre>';
    print_r($array);
    echo '</pre>';
  }
}