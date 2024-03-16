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
////        var_dump(file_get_contents('https://www.familysearch.org/das/v2/dgs:005682193/children'));
//
//        $guzzleClient = new GuzzleClient();
//        $response = $guzzleClient->request('GET', 'https://www.familysearch.org/das/v2/dgs:005682193/children',[
//            'headers' => [
//                'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/122.0.0.0 Safari/537.36',            ],
//                'Cookie' => 'visid_incap_2852034=RbdGghpYTHGz06Rbe17tB1AO4WUAAAAAQUIPAAAAAAB2oSms9SIySK6UWS+KsypQ; nlbi_2852034=QMqCegUUzyW30yOmFzy7qAAAAACy9wW5JpfMyxYA9bPjiJ5B; incap_ses_324_2852034=FAIdDWMyiFtkm6e8JRV/BFAO4WUAAAAA/k+Ij/1SJlx0JZ5mS3/pGg==',
//            ]);
//        $places = $response->getBody()->getContents();
//        preg_match('/(?<=baseUrl=").+?(?=")/', $places, $matches);
//
//        dump($places);
//        die();
//        $baseUrl = $matches[0];
//
//        var_dump($baseUrl);
//
//        preg_match_all('/(?<=apid=").+?(?=")/', $places, $matches, PREG_SET_ORDER, 0);
//
//
//        var_dump($matches);
//
//        dump($places);
//        die();

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
