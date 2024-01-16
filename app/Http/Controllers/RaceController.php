<?php

namespace App\Http\Controllers;

use App\Http\Resources\RaceResource;
use App\Models\Race;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class RaceController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        return RaceResource::collection(Race::all());
    }
}
