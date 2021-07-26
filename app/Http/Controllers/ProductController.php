<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    
    public function products()
    {
        return $AllProduct= [
            [
                'id' => 1,
                'ProductName' => 'Sofa Baleria',
                'ProductRent' => 1000,
                'image'       => 'https://cdn.shopify.com/s/files/1/0429/7654/2881/products/34371324-0-a_1024x1024.jpg'
            ],
            [
                'id' => 2,
                'ProductName' => 'Sofa ',
                'ProductRent' => 900,
            ],
            [
                'id' => 3,
                'ProductName' => 'Baleria',
                'ProductRent' => 10,
                'image'       => 'https://cdn.shopify.com/s/files/1/0429/7654/2881/products/34371324-0-a_1024x1024.jpg'
            ],
            [
                'id' => 4,
                'ProductName' => 'Soaria',
                'ProductRent' => 20,
                'image'       => 'https://cdn.shopify.com/s/files/1/0429/7654/2881/products/34371324-0-a_1024x1024.jpg'
            ]
        ];
    
    }


    public function indexAll()
    {
        
        return response()->json(['message' => 'Successfully listed products','data'=> $this->products()],200);
    }

    public function show($id)
    {
  
        $collection = collect($this->products());
        $product    = $collection->where('id', $id);
        $status     = count($product);
        return $status? response()->json(['message' => 'Successfully listed product','data' => $product->all()],200):response()->json(['status' => false,'error'=> 'No record found'],404);
    }
}
