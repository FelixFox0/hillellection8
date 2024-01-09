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
}
