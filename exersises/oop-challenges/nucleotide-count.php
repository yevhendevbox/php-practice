<?php

declare(strict_types=1);

class DNA {
    static function nucleotideCount(string $input): array {
      $result = [];
      $nucleotides = ['A', 'C', 'G', 'T'];

      foreach ($nucleotides as $nucleotide) {
        $result[$nucleotide] = substr_count($input, $nucleotide);
      }
      return $result;
    }

    static function nucleotideCount2(string $input): array {
      return [
        'A' => substr_count($input, 'A'),
        'C' => substr_count($input, 'C'),
        'G' => substr_count($input, 'G'),
        'T' => substr_count($input, 'T')
      ];
    }
}
