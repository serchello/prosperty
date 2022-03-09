<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Resources\Json\JsonResource;

class TypesController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return JsonResource::collection(Type::get(['uuid', 'name']));
    }
}
