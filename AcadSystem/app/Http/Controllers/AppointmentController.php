<?php

namespace App\Http\Controllers;

use App\Models\Appoinment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'description' => 'required',
            'appointment_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ]);

        $appoinment = new Appoinment();
        $appoinment->name = $request->input('name');
        $appoinment->title = $request->input('title');
        $appoinment->description = $request->input('description');
        $appoinment->appointment_date = $request->input('appointment_date');
        $appoinment->start_time = $request->input('start_time');
        $appoinment->end_time = $request->input('end_time');
        $appoinment->save();

        return redirect('/appointments');
    }

    public function destroy($id)
    {
        $appoinment = Appoinment::find($id);
        $appoinment->delete();
        return redirect('/appointments');
    }
}
