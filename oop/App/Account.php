<?php
declare(strict_types=1);

namespace App;

class Account {
  public const INTEREST_RATE = 2;

  public function __construct(public string $name, public float $balance, public SocialMedia $socialMedia) {}

  public function deposit(float $amount) {
    $this->balance += $amount;

    return $this;
  }

  public function setSocialMedia(SocialMedia $socialMedia) {
    $this->socialMedia = $socialMedia;

    return $this;
}
}