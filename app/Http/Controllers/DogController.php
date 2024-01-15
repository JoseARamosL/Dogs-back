<?php

namespace App\Http\Controllers;

use App\Http\Resources\DogResource;
use App\Models\Dog;
use Illuminate\Http\Request;
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

    public function store(Request $request): JsonResponse
    {
        $dog = Dog::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'race_id' => (int) $request->input('race_id'),
            'size_id' => (int) $request->input('size_id'),
            'hair_id' => 1,
            'country_id' => 1
        ]);

        return response()->json(['message' => 'Perro creado con éxito', 'data' => $dog], 201);
    }
}
