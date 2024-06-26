<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


class HelloWorldController extends BaseController
{
    public function hello($name, Request $request)
    {
        return response()->json([
        'oi'=>"Hello World {$name}",
        'tchau'=>$request->all()
    ]);
    }
}
