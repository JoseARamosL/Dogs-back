<?php

namespace App\Http\Controllers;

use App\Http\Resources\DogResource;
use App\Models\Dog;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\JsonResponse;

class DogController extends Controller
{
    public function dogs(): AnonymousResourceCollection
    {
        return DogResource::collection(Dog::all());
    }

    public function getDogById($id): JsonResponse
    {
        $dog = Dog::find($id);

        if (!$dog) {
            return response()->json(['error' => 'Perro no encontrado'], 404);
        }

        return response()->json($dog);
    }
}
