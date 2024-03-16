<?php

namespace App\Models\Interfaces;
use App\Dto\Customer\CustomerDtoInterface;

interface CustomerRepositoryInterface
{
    public function getCustomerWithApplications(int $customerId): CustomerDtoInterface;
}
