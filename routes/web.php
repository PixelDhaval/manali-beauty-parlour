<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/packages', [PageController::class, 'packages'])->name('packages');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');

Route::get('/sitemap.xml', function () {
    $urls = collect(['home', 'about', 'services', 'packages', 'contact'])
        ->map(fn (string $name) => route($name));

    $xml = new SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"></urlset>');

    foreach ($urls as $url) {
        $entry = $xml->addChild('url');
        $entry->addChild('loc', $url);
        $entry->addChild('changefreq', 'weekly');
    }

    return response($xml->asXML(), 200)->header('Content-Type', 'application/xml');
})->name('sitemap');
