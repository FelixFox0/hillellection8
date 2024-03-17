<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Response;
use Illuminate\Routing\ResponseFactory;
use App\Models\Application;
use App\Models\Customer;
use App\Models\Tender;
use Illuminate\Support\Facades\DB;
use GuzzleHttp\Client as GuzzleClient;

class TestControllerTransaction extends Controller
{
    private $transaction;
    public function index(Request $request, ResponseFactory $response)
    {

        DB::transaction(function () {
            $this->transaction = DB::table('customers')->where('id', '=', 1)->first();

        }, 10);
//        dump($this->transaction);
//        die();

        $id = 2;
        // Start transaction!
        DB::beginTransaction();

        try {
            // Виконуэмо запити

            $customerId = DB::table('applications')
                ->find($id)->customer_id;

            DB::table('applications')
                ->where('id', '=', $id)
                ->update(['is_check' => true]);

            $phone = DB::table('applications')
                ->find($id)->phone;

            DB::table('customers')
                ->where(['id' => $customerId])
                ->update(['phone' => $phone]);


            Customer::where('id', '=', 1)
                ->update(['name' => 'Ivan']);

//            DB::table('customers')
//                ->where('id', '=', 1)
//                ->update(['name' => 'Ivan']);

//            throw new \Exception('Test Bug');
        } catch(\Exception $e)
        {
            DB::rollback();
            throw $e;
        }


        DB::commit();

        return $response->json([]);
    }
}
