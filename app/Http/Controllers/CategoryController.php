<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function indexAll()
    {
        $categories = [
            'Bed Room','Living Room','DSLR camera','Applications','Storage','Packages',
        ];
        return response()->json(['message' => 'Successfully listed categories','data'=> $categories],200);
    }
}
