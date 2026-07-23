@props([
    'eyebrow' => 'Book An Appointment',
    'heading',
    'description' => null,
])

<div {{ $attributes->merge(['class' => 'relative overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-primary-600 via-primary-600 to-primary-800 px-6 py-14 sm:px-12 sm:py-16']) }} data-reveal>
    <div class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full bg-white/10 blur-2xl"></div>
    <div class="pointer-events-none absolute -bottom-20 -left-10 h-64 w-64 rounded-full bg-primary-900/20 blur-2xl"></div>

    <div class="relative mx-auto flex max-w-2xl flex-col items-center gap-6 text-center">
        <x-ui.eyebrow light>{{ $eyebrow }}</x-ui.eyebrow>

        <h2 class="text-balance font-serif text-3xl font-semibold text-white sm:text-4xl">{{ $heading }}</h2>

        @if ($description)
            <p class="text-balance text-primary-50/85">{{ $description }}</p>
        @endif

        <div class="flex flex-col gap-3 sm:flex-row">
            <x-ui.button href="{{ route('contact') }}" variant="white" icon="arrow-right">
                Book Appointment
            </x-ui.button>
            <x-ui.button href="tel:{{ config('business.phone_link') }}" variant="outline-white" icon="phone">
                Call Now
            </x-ui.button>
        </div>
    </div>
</div>
