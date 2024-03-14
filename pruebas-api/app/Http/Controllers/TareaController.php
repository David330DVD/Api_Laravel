<?php

namespace App\Http\Controllers;

use App\Models\Tarea;
use Illuminate\Http\Request;
use App\Models\Task; // Asegúrate de importar el modelo Task

class TareaController extends Controller

{
    public function store(Request $request)
    {
        $task = new Tarea();
        $task->name = $request->input('name');
        $task->due_date = $request->input('due_date');
        $task->save();

        return response()->json(['message' => 'Tarea agregada correctamente'], 201);
    }
    public function index()
    {
        $tasks = Tarea::all();
        return response()->json($tasks);
    }
}
