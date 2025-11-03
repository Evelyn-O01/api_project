<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    
     public function index()
    {
        $teachers = Group::orderBy('id', 'asc')->get(); 
        return response()->json($teachers);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $teacher = Group::create($data);

        return response()->json($teacher, 201);
    }

    public function show($id)
    {
        $teacher = Group::findOrFail($id);
        return response()->json($teacher);
    }

    public function update(Request $request, $id)
    {
        $teacher = Group::findOrFail($id);

        $data = $request->validate([
            'name' => 'sometimes|required|string|max:100',
            'category' => 'nullable|string|max:100',
        ]);

        $teacher->update($data);

        return response()->json($teacher);
    }

    public function destroy($id)
    {
        $teacher = Group::findOrFail($id);
        $teacher->delete();
        return response()->json(null, 204);
    }
}
