<?php

namespace App\Http\Controllers;

use App\Http\Resources\DogResource;
use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class DogController extends Controller
{
    public function dogs(): AnonymousResourceCollection
    {
        return DogResource::collection(Dog::all());
    }
}
