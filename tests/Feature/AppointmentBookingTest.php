<?php

use App\Models\Appointment;

test('a client can request an appointment', function () {
    $payload = [
        'name' => 'Priya Sharma',
        'phone' => '9876543210',
        'email' => 'priya@example.com',
        'preferred_service' => 'Skin Care & Facials',
        'preferred_date' => now()->addDay()->toDateString(),
        'preferred_time' => '2:00 PM',
        'message' => 'Looking for a herbal facial before a family function.',
    ];

    $response = $this->post(route('appointments.store'), $payload);

    $response->assertRedirect()->assertSessionHas('success');

    $this->assertDatabaseHas('appointments', [
        'name' => 'Priya Sharma',
        'phone' => '9876543210',
        'preferred_service' => 'Skin Care & Facials',
    ]);
});

test('appointment request requires the essential fields', function () {
    $response = $this->post(route('appointments.store'), []);

    $response->assertSessionHasErrors(['name', 'phone', 'preferred_service', 'preferred_date', 'preferred_time']);
    $this->assertDatabaseCount(Appointment::class, 0);
});

test('appointment request rejects a past preferred date', function () {
    $response = $this->post(route('appointments.store'), [
        'name' => 'Anjali Mehta',
        'phone' => '9876500000',
        'preferred_service' => 'Hair Care',
        'preferred_date' => now()->subDay()->toDateString(),
        'preferred_time' => '10:00 AM',
    ]);

    $response->assertSessionHasErrors(['preferred_date']);
});
