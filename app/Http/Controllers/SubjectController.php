<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
   
     public function index()
    {
        $teachers = Subject::orderBy('id', 'desc')->get(); 
        return response()->json($teachers);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $teacher = Subject::create($data);

        return response()->json($teacher, 201);
    }

    public function show($id)
    {
        $teacher = Subject::findOrFail($id);
        return response()->json($teacher);
    }

    public function update(Request $request, $id)
    {
        $teacher = Subject::findOrFail($id);

        $data = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $teacher->update($data);

        return response()->json($teacher);
    }

    public function destroy($id)
    {
        $teacher = Subject::findOrFail($id);
        $teacher->delete();
        return response()->json(null, 204);
    }
}
