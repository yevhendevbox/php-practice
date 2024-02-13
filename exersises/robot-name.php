<?php

declare(strict_types=1);

function getNewName(): string
{
  $alphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $prefix = '';
  $code = random_int(100, 999);
  $result = '';

  for ($i = 0; $i < 2; $i++) {
    $prefix .= $alphabet[random_int(0, strlen($alphabet) - 1)];
  }
  $result = $prefix . $code;
  return $result;
}

function getNewName2(): string {
  $letters = range('A', 'Z');
  shuffle($letters);
  $code = mt_rand(100, 999);

  return "{$letters[0]}{$letters[1]}{$code}";
}

echo count(str_split((string)123));