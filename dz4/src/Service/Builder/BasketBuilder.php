<?php

declare(strict_types = 1);

namespace Service\Builder;

class BasketBuilder {
  private $billing;
  private $discount;
  private $communication;
  private $security;

  public function setBilling($billing) {
    $this->billing = $billing;
  }

  public function getBilling($billing) {
    return $this->billing;
  }

  public function setDiscount($discount) {
    $this->discount = $discount;
  }

  public function getDiscount($discount) {
    return $this->discount;
  }

  public function setCommunication($communication) {
    $this->communication = $communication;
  }

  public function getCommunication($communication) {
    return $this->communication;
  }

  public function setSecurity($security) {
    $this->security = $security;
  }

  public function getSecurity($security) {
    return $this->security;
  }
}
