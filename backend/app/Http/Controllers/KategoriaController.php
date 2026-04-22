<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;

class KategoriaController extends Controller
{
    public function index()
    {
        $categories = Kategoria::with('activities')->get();

        return response()->json($categories);
    }

    public function show($id)
    {
        $category = Kategoria::with('activities')->findOrFail($id);

        return response()->json($category);
    }
}