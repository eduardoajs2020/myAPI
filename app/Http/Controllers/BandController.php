<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class BandController extends BaseController
{
     public function getAll()

    {
        $bands = $this->getBands();

        return response()->json($bands);
    }

    protected function getBands()
    {
        return[
        [
            'id'=> 1, 'name'=> 'BonJovi', 'gender' => 'progressivo'
        ],
        [
            'id'=> 2, 'name'=> 'Skank', 'gender' => 'Regae'
        ],
        [
            'id'=> 3, 'name'=> 'Metállica', 'gender' => 'porrada'
        ],
        [
            'id'=> 4, 'name'=> 'Baroes da pisadinha', 'gender' => 'forró'
        ],
        [
            'id'=> 5, 'name'=> 'Dejavu', 'gender' => 'forró'
        ],
        [
            'id'=> 6, 'name'=> 'Black pink', 'gender' => 'Rock'
        ],
        [
            'id'=> 7, 'name'=> 'Banda Eva', 'gender' => 'Aché'
        ]

        ];
    }

}
