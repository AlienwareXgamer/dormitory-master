<?php

namespace App\Http\Controllers;
use App\Models\LogStatus;
use Illuminate\Http\Request;

class LogStatusController extends Controller
{
    public function index()
    {
        $logStatuses = LogStatus::all(); // Retrieve all log statuses

        return view('log_statuses.index', compact('logStatuses')); // Pass log statuses to a view
    }

    public function create()
    {
        return view('log_statuses.create'); // Display a view for creating a new log status
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'status' => 'required',
            'description' => 'required',
        ]);

        LogStatus::create($validatedData); // Create a new log status with the validated data

        return redirect()->route('log_statuses.index')->with('success', 'Log status created successfully'); // Redirect to index with success message
    }

    public function edit(LogStatus $logStatus)
    {
        return view('log_statuses.edit', compact('logStatus')); // Display a view for editing an existing log status
    }

    public function update(Request $request, LogStatus $logStatus)
    {
        $validatedData = $request->validate([
            'status' => 'required',
            'description' => 'required',
        ]);

        $logStatus->update($validatedData); // Update the log status with the validated data

        return redirect()->route('log_statuses.index')->with('success', 'Log status updated successfully'); // Redirect to index with success message
    }

    public function destroy(LogStatus $logStatus)
    {
        $logStatus->delete(); // Delete the log status

        return redirect()->route('log_statuses.index')->with('success', 'Log status deleted successfully'); // Redirect to index with success message
    }
}
