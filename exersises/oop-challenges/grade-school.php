<?php

declare(strict_types=1);

class School {
  public $students = [];

    public function add(string $name, int $grade): void {
      $this->students[$grade][] = $name;
    }

    public function grade($grade) : array {
      return $this->students[$grade] ?? [];
    }

    public function studentsByGradeAlphabetical(): array {
      ksort($this->students);
      foreach ($this->students as &$student) {
        sort($student);
      }
      return $this->students;
    }
}