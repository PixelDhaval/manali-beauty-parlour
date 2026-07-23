@props([
    'icon' => 'sparkle',
    'label' => null,
    'variant' => 'primary',
    'class' => 'aspect-4/5',
    'src' => null,
    'alt' => '',
])

@php
    $variants = [
        'primary' => 'from-primary-600 via-primary-500 to-primary-700 text-primary-50',
        'soft' => 'from-primary-100 via-cream-100 to-primary-200 text-primary-500',
        'gold' => 'from-gold-400 via-gold-300 to-gold-500 text-gold-50',
        'herbal' => 'from-herbal-500 via-herbal-600 to-herbal-700 text-herbal-50',
        'ink' => 'from-ink-800 via-ink-900 to-ink-800 text-primary-200',
    ];

    $gradient = $variants[$variant] ?? $variants['primary'];
@endphp

@if ($src)
    <div {{ $attributes->merge(['class' => "$class relative overflow-hidden rounded-3xl shadow-lg shadow-primary-900/10"]) }}>
        <img src="{{ $src }}" alt="{{ $alt }}" loading="lazy" class="h-full w-full object-cover">
    </div>
@else
    <div {{ $attributes->merge(['class' => "$class relative overflow-hidden rounded-3xl bg-gradient-to-br $gradient shadow-lg shadow-primary-900/10"]) }}>
        <div class="absolute inset-0 opacity-20" style="background-image: radial-gradient(circle at 20% 20%, currentColor 0, transparent 40%), radial-gradient(circle at 80% 70%, currentColor 0, transparent 45%);"></div>
        <div class="relative flex h-full w-full flex-col items-center justify-center gap-3 p-6 text-center">
            <x-ui.icon :name="$icon" class="h-10 w-10 opacity-90" />
            @if ($label)
                <span class="font-serif text-sm tracking-wide opacity-90">{{ $label }}</span>
            @endif
        </div>
    </div>
@endif
