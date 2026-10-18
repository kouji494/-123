<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // タスク一覧を取得（GET）
    public function index()
    {
        $tasks = Task::all();

        return response()->json($tasks, 200);
    }

    // タスクを新規作成（POST）
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,in_progress,completed',
            'due_date' => 'nullable|date',
        ]);

        $validated['user_id'] = 1;

        $task = Task::create($validated);

        return response()->json($task, 201);
    }

    // タスクの詳細を取得（GET）
    public function show($id)
    {
        $task = Task::findOrFail($id);

        return response()->json($task, 200);
    }

    // タスクを更新（PUT）
    public function update(Request $request, $id)
    {
        $task = Task::findOrFail($id);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'required|in:pending,in_progress,completed',
            'due_date' => 'nullable|date',
        ]);

        $task->update($validated);

        return response()->json($task, 200);
    }

    // タスクを削除（DELETE）
    public function destroy($id)
    {
        $task = Task::findOrFail($id);

        $task->delete();

        return response()->noContent();
    }
}
