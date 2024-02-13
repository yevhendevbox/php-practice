<?php

namespace App;

class CurrentWeek implements \Iterator{
  public \DateTime $date;
  public int $daysFrom = 0;

  public function __construct() {
    $this->date = new \DateTime();
  }

  public function current(): mixed {
    return $this->date->format('Y-m-d');
  }

  public function key(): mixed {
    return $this->daysFrom;
  }

  public function next(): void {
    $this->date->modify('tomorrow');
    $this->daysFrom++;
  }

  public function rewind(): void {
    $this->date->modify('today');
    $this->daysFrom = 0;
  }

  public function valid(): bool {
    return $this->daysFrom < 7;
  }
}