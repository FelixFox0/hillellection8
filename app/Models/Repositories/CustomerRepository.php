<?php

namespace App\Models\Repositories;

use App\Dto\Application\ApplicationDto;
use App\Models\Interfaces\CustomerRepositoryInterface;
use Illuminate\Support\Facades\DB;
use App\Dto\Customer\CustomerDtoInterface;
use Illuminate\Support\Str;
class CustomerRepository implements CustomerRepositoryInterface
{
    protected $customerDto;
    public function __construct(CustomerDtoInterface $customerDto)
    {
        $this->customerDto = $customerDto;
    }

    public function getCustomerWithApplications(int $customerId): CustomerDtoInterface
    {
        $customer = DB::table('customers')->find($customerId);
        $this->customerDto->setId($customer->id);
        $this->customerDto->setName($customer->name);
        $this->customerDto->setUserName($customer->user_name);

        $applications = DB::table('applications')->where('customer_id', '=', $customerId);
        foreach ($applications as $application) {
            $app = new ApplicationDto();

            $app->setId($application->id);
            $app->setCustomerId($application->customer_id);
            $app->setPaymentType($application->payment_type);
            $this->customerDto->setApplication($app);
        }

        return $this->customerDto;
    }
}
