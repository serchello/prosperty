<?php

namespace App\Http\Controllers;

use App\Models\Amenity;

class AmenitiesController extends Controller
{
    public function __invoke()
    {
        return [
            'data' => Amenity::$all,
        ];
    }
}
