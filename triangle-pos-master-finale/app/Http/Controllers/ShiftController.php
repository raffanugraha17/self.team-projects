<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shift;

class ShiftController extends Controller
{
    public function index()
    {
        // Fetch all shifts from the database
        $shifts = Shift::all();
        // Return the view with the shifts data
        return view('shifts.index', compact('shifts'));
    }

    public function create()
    {
        // Return the view for creating a new shift
        return view('shifts.create');
    }

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'shift_code' => 'required|unique:shifts',
            'shift_name' => 'required',
            'start_shift' => 'required',
            'end_shift' => 'required',
            'data_flag' => 'required|integer',
        ]);

        // Create a new shift record in the database
        Shift::create($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('shifts.index')
            ->with('success', 'Shift created successfully.');
    }

    public function edit(Shift $shift)
    {
        // Return the view for editing a shift
        return view('shifts.edit', compact('shift'));
    }

    public function update(Request $request, Shift $shift)
    {
        // Validate the incoming request data
        $request->validate([
            'shift_code' => 'required|unique:shifts,shift_code,' . $shift->id,
            'shift_name' => 'required',
            'start_shift' => 'required',
            'end_shift' => 'required',
            'data_flag' => 'required|integer',
        ]);

        // Update the shift record in the database
        $shift->update($request->all());

        // Redirect to the index page with a success message
        return redirect()->route('shifts.index')
            ->with('success', 'Shift updated successfully');
    }

    public function destroy(Shift $shift)
    {
        // Delete the shift record from the database
        $shift->delete();

        // Redirect to the index page with a success message
        return redirect()->route('shifts.index')
            ->with('success', 'Shift deleted successfully');
    }
}
