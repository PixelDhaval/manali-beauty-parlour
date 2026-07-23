<?php

test('home page renders successfully', function () {
    $this->get(route('home'))->assertOk()->assertSee('Experience Timeless Beauty with Herbal Care');
});

test('home page renders the salon photos', function () {
    $response = $this->get(route('home'));

    $response->assertOk();

    foreach (['hero.png', 'about.png', 'hair.png', 'skin.png', 'makeup.png', 'nails.png', 'bridal.png'] as $image) {
        $response->assertSee("/images/{$image}", false);
    }
});

test('about page renders successfully', function () {
    $this->get(route('about'))
        ->assertOk()
        ->assertSee('About Manali Herbal Beauty Parlour')
        ->assertSee('/images/our-story.png', false);
});

test('services page renders successfully', function () {
    $this->get(route('services'))
        ->assertOk()
        ->assertSee('Hair Care')
        ->assertSee('/images/bridal-beauty-spotlight.png', false);
});

test('packages page renders successfully', function () {
    $this->get(route('packages'))->assertOk()->assertSee('Glow Package');
});

test('contact page renders successfully', function () {
    $this->get(route('contact'))->assertOk()->assertSee('Request Your Appointment');
});

test('sitemap renders successfully', function () {
    $this->get(route('sitemap'))->assertOk();
});
