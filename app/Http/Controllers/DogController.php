<?php

namespace App\Http\Controllers;

use App\Http\Resources\DogResource;
use App\Models\Dog;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Storage;

class DogController extends Controller
{
    public function dogs(): AnonymousResourceCollection
    {
        return DogResource::collection(Dog::with(['race', 'size', 'hair'])->get());
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
            'hair_id' => (int) $request->input('hair_id'),
            'country_id' => 1,
        ]);

        return response()->json(['message' => 'Perro creado con éxito', 'data' => $dog], 201);
    }

    public function destroy($id): JsonResponse
    {
        $dog = Dog::find($id);

        if (!$dog) {
            return response()->json(['message' => 'Perro no encontrado'], 404);
        }

        $dog->delete();

        return response()->json(['message' => 'Perro eliminado con éxito'], 204);
    }

    public function update(Request $request, $id): JsonResponse
    {
        try {
            $dog = Dog::find($id);

            $dog->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'race_id' => $request->input('race_id'),
                'size_id' => $request->input('size_id'),
                'hair_id' => $request->input('hair_id'),
                'country_id' => 1,
            ]);

            return response()->json(['message' => 'Perro actualizado con éxito', 'data' => $dog], 200);
        } catch (\Exception $e) {
            return response()->json(['message' => 'Error al actualizar el perro', 'error' => $e->getMessage()], 500);
        }
    }
}
