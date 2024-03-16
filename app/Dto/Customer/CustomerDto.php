<?php

namespace App\Dto\Customer;

use App\Dto\Application\ApplicationDtoInterface;

class CustomerDto implements CustomerDtoInterface
{
    protected $id;
    protected $name;
    protected $userName;
    protected $applicationDtos;

    public function setId($id)
    {
        $this->id = $id;

    }
    public function setName($name)
    {
        $this->name = $name;

    }
    public function setUserName($userName)
    {
        $this->userName = $userName;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getUserName()
    {
        return $this->userName;
    }

    public function setApplication(ApplicationDtoInterface $applicationDto)
    {
        $this->applicationDtos[] = $applicationDto;
    }

    public function getApplications()
    {
        return $this->applicationDtos;
    }
}
