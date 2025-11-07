<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
   
    public function index()
    {
        $classrooms = Classroom::orderBy('id', 'asc')->get(); 
        return response()->json($classrooms);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $classroom = Classroom::create($data);

        return response()->json($classroom, 201);
    }

    public function show($id)
    {
        $classroom = Classroom::findOrFail($id);
        return response()->json($classroom);
    }

    public function update(Request $request, $id)
    {
        $classroom = Classroom::findOrFail($id);

        $data = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $classroom->update($data);

        return response()->json($classroom);
    }

    public function destroy($id)
    {
        $classroom = Classroom::findOrFail($id);
        $classroom->delete();
        return response()->json(null, 204);
    }
}
