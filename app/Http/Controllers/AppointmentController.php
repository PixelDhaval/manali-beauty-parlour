<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use Illuminate\Http\RedirectResponse;

class AppointmentController extends Controller
{
    public function store(StoreAppointmentRequest $request): RedirectResponse
    {
        Appointment::create($request->validated());

        return back()
            ->with('status', 'appointment-requested')
            ->with('success', 'Thank you! Your appointment request has been received. Our team will contact you shortly to confirm.');
    }
}
