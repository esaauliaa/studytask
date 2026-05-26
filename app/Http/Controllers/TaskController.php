<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderByRaw('deadline IS NULL')
            ->orderBy('deadline', 'asc')
            ->get();

        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline_date' => 'nullable|date',
            'deadline_time' => 'nullable|date_format:H:i',
        ]);

        $deadline = null;

        if ($request->deadline_date) {
            $deadlineTime = $request->deadline_time ?: '00:00';
            $deadline = $request->deadline_date . ' ' . $deadlineTime;
        }

        $task = Task::create([
            'title' => $request->title,
            'course' => $request->course,
            'description' => $request->description,
            'deadline' => $deadline,
            'status' => 'belum_selesai',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Tugas berhasil ditambahkan.',
            'task' => $task,
        ]);
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'course' => 'required|string|max:255',
            'description' => 'nullable|string',
            'deadline_date' => 'nullable|date',
            'deadline_time' => 'nullable|date_format:H:i',
        ]);

        $deadline = null;

        if ($request->deadline_date) {
            $deadlineTime = $request->deadline_time ?: '00:00';
            $deadline = $request->deadline_date . ' ' . $deadlineTime;
        }

        $task->update([
            'title' => $request->title,
            'course' => $request->course,
            'description' => $request->description,
            'deadline' => $deadline,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Tugas berhasil diperbarui.',
            'task' => $task,
        ]);
    }

    public function toggle(Task $task)
    {
        $task->status = $task->status === 'selesai' ? 'belum_selesai' : 'selesai';
        $task->save();

        return response()->json([
            'success' => true,
            'message' => 'Status tugas berhasil diubah.',
            'task' => $task,
        ]);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'success' => true,
            'message' => 'Tugas berhasil dihapus.',
        ]);
    }

    public function search(Request $request)
    {
        $keyword = $request->keyword;
        $status = $request->status;

        $tasks = Task::query()
            ->when($keyword, function ($query) use ($keyword) {
                $query->where(function ($q) use ($keyword) {
                    $q->where('title', 'like', "%{$keyword}%")
                        ->orWhere('course', 'like', "%{$keyword}%")
                        ->orWhere('description', 'like', "%{$keyword}%");
                });
            })
            ->when($status && $status !== 'semua', function ($query) use ($status) {
                $query->where('status', $status);
            })
            ->orderByRaw('deadline IS NULL')
            ->orderBy('deadline', 'asc')
            ->get();

        return response()->json([
            'success' => true,
            'tasks' => $tasks,
        ]);
    }
}
