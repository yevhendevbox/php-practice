<?php

declare(strict_types=1);

function slices(string $series, int $size) : array
{
    $result = [];
    if ($size > strlen($series) || $size < 1) {
      return $result;
    }

    for ($i = 0; $i < $size; $i++) {
      $chunk = substr($series, $i, $size);
      if (strlen($chunk) < $size) {
        break;
      } else {
        array_push($result, $chunk);
      }
    }

    return $result;
}

function slices2(string $series, int $size): array
{
    $result = [];
    $length = strlen($series);

    if ($size > $length || $size < 1) {
        return $result;
    }

    for ($i = 0; $i <= $length - $size; $i++) {
        $result[] = substr($series, $i, $size);
    }

    return $result;
}