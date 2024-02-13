<?php

declare(strict_types=1);

function isArmstrongNumber(int $number): bool
{
    $stringed = (string) $number;
    $splited = str_split($stringed);
    $len = count($splited);

    $result = array_map(function ($el) use ($len) {
      return $el ** $len;
    }, $splited);

    $result = (int) implode('', $result);
   return $result === $number;
}

echo isArmstrongNumber(153);