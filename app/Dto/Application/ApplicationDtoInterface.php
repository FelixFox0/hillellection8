<?php

namespace App\Dto\Application;

interface ApplicationDtoInterface
{
    public function setId();
    public function setCustomerId();
    public function setPaymentType();
    public function getId();
    public function getCustomerId();
    public function getPaymentType();
}
