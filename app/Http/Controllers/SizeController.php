<?php

namespace App\Http\Controllers;

use App\Http\Resources\SizeResource;
use App\Models\Size;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class SizeController extends Controller
{
    public function index():AnonymousResourceCollection
    {
        return SizeResource::collection(Size::all());
    }
}
