<?php

namespace App\Http\Controllers;

use App\Models\Laboratory;
use Illuminate\Http\Request;

class LaboratoryController extends Controller
{
    public function index()
    {
        $teachers = Laboratory::orderBy('id', 'asc')->get(); 
        return response()->json($teachers);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $teacher = Laboratory::create($data);

        return response()->json($teacher, 201);
    }

    public function show($id)
    {
        $teacher = Laboratory::findOrFail($id);
        return response()->json($teacher);
    }

    public function update(Request $request, $id)
    {
        $teacher = Laboratory::findOrFail($id);

        $data = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $teacher->update($data);

        return response()->json($teacher);
    }

    public function destroy($id)
    {
        $teacher = Laboratory::findOrFail($id);
        $teacher->delete();
        return response()->json(null, 204);
    }
}
