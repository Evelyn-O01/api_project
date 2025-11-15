<?php

namespace App\Http\Controllers;

use App\Models\AssignedLab;
use Illuminate\Http\Request;

class AssignedLabController extends Controller
{
    public function index()
    {
        $assignedLabs = AssignedLab::orderBy('id', 'asc')->get();
        return response()->json($assignedLabs);
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

        $assignedLab = AssignedLab::create($data);
        return response()->json($assignedLab, 201);
    }

    public function show($id)
    {
        $assignedLab = AssignedLab::findOrFail($id);
        return response()->json($assignedLab);
    }

    public function update(Request $request, $id)
    {
        $assignedLab = AssignedLab::findOrFail($id);

        $data = $request->validate([
            'laboratory_id' => 'sometimes|required|integer|exists:laboratories,id',
            'subject_id' => 'sometimes|required|integer|exists:subjects,id',
            'group_id' => 'sometimes|required|integer|exists:groups,id',
            'teacher_id' => 'sometimes|required|integer|exists:teachers,id',
            'cycle_id' => 'sometimes|required|integer|exists:cycles,id',
            'assignment_priority' => 'nullable|string|in:baja,media,alta',
        ]);

        $assignedLab->update($data);
        return response()->json($assignedLab);
    }

    public function destroy($id)
    {
        $assignedLab = AssignedLab::findOrFail($id);
        $assignedLab->delete();
        return response()->json(null, 204);
    }
}
