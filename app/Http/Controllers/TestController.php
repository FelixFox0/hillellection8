<?php

namespace App\Http\Controllers;

//use App\Models\Repositories\ProductRepository;
//use App\Models\Interfaces\ProductRepositoryInterface;
//use App\Models\Repositories\ProductRepositoryByFacade;
//use App\Services\Product\ProductService;
use App\Services\Product\ProductServiceInterface;
//use App\Services\Product\Helpers\SaleHelper\SaleHelper;
use App\Services\Product\Helpers\SaleHelper\SaleHelperInterface;
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Response;
use Illuminate\Routing\ResponseFactory;
use App\Models\Application;
use App\Models\Customer;
use App\Models\Tender;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    public function index(
//        Request $request,
        int $id,
        SaleHelperInterface $salesHelper,
        ProductServiceInterface $productService,
        ResponseFactory $response
    )
    {


//        $salesHelper = new SaleHelper(5, 7, 10);

//        $repository = new ProductRepositoryByFacade();

//        $productService = new ProductService($productRepository);

        $products = $productService->getProductByCategoryIdWithSale($id, $salesHelper);

//        return Response::json($products);
        return $response->json($products);
    }

    public function tenders()
    {
        $tenders = DB::table('tenders')->limit(10)->get()->toArray();
//        dump($tenders);
//        die();
        $result = [
            'title' => 'Tenders',
            'testText' => 'This text for testing',
            'tenders' => $tenders,

        ];
        $pagination = [];




        return view('tender', $result);
//        dump(DB::table('hillellection8.oc_product')->get());
//        dump(Tender::find(1));
//        dump(Tender::find(1)->toSql());
//        dump(Tender::find(1));
//        dump(Tender::find(1)->customers->id);

//        $tender = Tender::where('text', '=', 'Fragile cargo')
//            ->orderBy('road')
//            ->get();
//        dump($tender);

//        $tender = Tender::where('text', 'Fragile cargo')
//            ->update(['is_closet' => 1]);
//        dump($tender);


//        $tender = new Tender();
//        $tender->text = 'text';
//        $tender->road = 'road - road';
//        $tender->save();
////        dump($tender->id);

    }

    public function customers()
    {
        $customer = Customer::find(1);
//        dump($customer);
//        $customer->polyComments()->create([
//            'text' => 'Test...'
//        ]);

        $comments = $customer->polyComments;
//        dump($customer->polyComments());
//        dump($comments->first()->customer);
        dump($comments->first()->commentable);

//        $customer = Customer::create([
//            'name' => 'tes4454t',
//            'user_name' => 'test12вавва',
//        ]);
//        dump($customer->id);
//        dump(Customer::all());
    }

    public function applications()
    {

        dump($app = Application::find(1));
        dump($app->tender->all());
//        dump($app->tender->get());

//        foreach (Application::all() as $row)
//        {
//            dump($row->get());
//        }

//        dump($app->tender->toArray());
    }

}
