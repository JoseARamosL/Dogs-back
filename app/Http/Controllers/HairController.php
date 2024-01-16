<?php

namespace App\Http\Controllers;

use App\Http\Resources\HairResource;
use App\Models\Hair;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class HairController extends Controller
{
    public function index(): AnonymousResourceCollection
    {
        return HairResource::collection(Hair::all());
    }
}
