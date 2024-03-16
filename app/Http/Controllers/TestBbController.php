<?php

namespace App\Http\Controllers;

use Illuminate\Database\Query\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestBbController extends Controller
{
    public function customers()
    {
//        $name = 'Samuel Colt';
//        $user_name = '1911';
//        $customers = DB::table('customers')
//            ->where('name', '=', $name)
//            ->orWhere(function(Builder $query) use($user_name) {
//                $query->where('user_name', '=', $user_name)
//                    ->orWhere('id',  '=', 1);
//            }
//
//            );
//        $result = $customers->select(['name', 'created_at'])
//        ->get();
////        "select `name`, `created_at` from `customers` where `name` = 'Samuel Colt' or (`user_name` = '1911' and 'id' = 3)"
//
//        dump($result);


//        $result = DB::table('customers')
//            ->leftJoin('applications', 'customers.id', '=', 'applications.customer_id')
//            ->select(DB::raw('applications.created_at as time', 'customers.created_at')
//            ->orderByDesc('applications.id')
//            ->get();
//        dump($result);


//        $name = '\'; drope database';
//        DB::raw('select * from customers where name = ' . $name);

//        $result = DB::table('customers')->insertGetId([
//            'name' => 'Tulskiy Tokarev',
//            'user_name' => 'TT'
//        ]);

//        $result = DB::table('customers')
//            ->where('id', '=', 4)
//            ->update([
//            'name' => 'Tokarev ',
//        ]);
//
//        dump($result);
    }
}
