<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::orderBy('id', 'asc')->get(); 
        return response()->json($teachers);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $teacher = Teacher::create($data);

        return response()->json($teacher, 201);
    }

    public function show($id)
    {
        $teacher = Teacher::findOrFail($id);
        return response()->json($teacher);
    }

    public function update(Request $request, $id)
    {
        $teacher = Teacher::findOrFail($id);

        $data = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $teacher->update($data);

        return response()->json($teacher);
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();
        return response()->json(null, 204);
    }
}
