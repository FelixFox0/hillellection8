<?php

namespace App\Dto\Application;

class ApplicationDto implements ApplicationDtoInterface
{
    protected $id;
    protected $customerId;
    protected  $paymentType;
    public function setId($id)
    {
        $this->id = $id;
    }
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;
    }
    public function setPaymentType($customerId)
    {
        $this->customerId = $customerId;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getCustomerId()
    {
        return $this->customerId;
    }
    public function getPaymentType()
    {
        return $this->paymentType;
    }


}
