<?php

namespace App\Dto\Customer;
interface CustomerDtoInterface
{
    public function setId($id);
    public function setName($name);
    public function setUserName($userName);

    public function getId();
    public function getName();
    public function getUserName();
}
