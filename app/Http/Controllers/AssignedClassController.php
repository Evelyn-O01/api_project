<?php

namespace App\Http\Controllers;

use App\Models\AssignedClass;
use Illuminate\Http\Request;

class AssignedClassController extends Controller
{
     public function index()
    {
        $assignedClasses = AssignedClass::orderBy('id', 'asc')->get();
        return response()->json($assignedClasses);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'laboratory_id' => 'required|integer|exists:laboratories,id',
            'subject_id' => 'required|integer|exists:subjects,id',
            'group_id' => 'required|integer|exists:groups,id',
            'teacher_id' => 'required|integer|exists:teachers,id',
            'cycle_id' => 'required|integer|exists:cycles,id',
            'assignment_priority' => 'nullable|string|in:baja,media,alta',
        ]);

        $assignedLab = AssignedClass::create($data);
        return response()->json($assignedLab, 201);
    }

    public function show($id)
    {
        $assignedLab = AssignedClass::findOrFail($id);
        return response()->json($assignedLab);
    }

    public function update(Request $request, $id)
    {
        $assignedClass = AssignedClass::findOrFail($id);

        $data = $request->validate([
            'subject_id' => 'sometimes|required|integer|exists:subjects,id',
            'group_id' => 'sometimes|required|integer|exists:groups,id',
            'teacher_id' => 'sometimes|required|integer|exists:teachers,id',
            'cycle_id' => 'sometimes|required|integer|exists:cycles,id',
            'assignment_priority' => 'nullable|string|in:baja,media,alta',
        ]);

        $assignedClass->update($data);
        return response()->json($assignedClass);
    }

    public function destroy($id)
    {
        $assignedClass = AssignedClass::findOrFail($id);
        $assignedClass->delete();
        return response()->json(null, 204);
    }
}
