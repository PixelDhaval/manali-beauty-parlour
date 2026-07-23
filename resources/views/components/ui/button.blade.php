@props([
    'href' => null,
    'variant' => 'primary',
    'size' => 'md',
    'icon' => null,
    'type' => 'button',
])

@php
    $base = 'inline-flex items-center justify-center gap-2 rounded-full font-medium transition duration-300 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary-500';

    $sizes = [
        'sm' => 'px-5 py-2.5 text-sm',
        'md' => 'px-7 py-3.5 text-sm sm:text-base',
        'lg' => 'px-8 py-4 text-base',
    ];

    $variants = [
        'primary' => 'bg-primary-600 text-white shadow-md shadow-primary-600/25 hover:bg-primary-700 hover:shadow-lg hover:shadow-primary-600/30 hover:-translate-y-0.5',
        'white' => 'bg-white text-primary-700 shadow-md shadow-black/5 hover:bg-primary-50 hover:-translate-y-0.5',
        'outline' => 'border border-primary-300 text-primary-700 hover:bg-primary-50 hover:-translate-y-0.5',
        'outline-white' => 'border border-white/70 text-white hover:bg-white/10 hover:-translate-y-0.5',
        'ghost' => 'text-primary-700 hover:text-primary-800',
    ];

    $classes = $base . ' ' . ($sizes[$size] ?? $sizes['md']) . ' ' . ($variants[$variant] ?? $variants['primary']);
@endphp

@if ($href)
    <a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        @if ($icon)
            <x-ui.icon :name="$icon" class="h-4 w-4" />
        @endif
    </a>
@else
    <button type="{{ $type }}" {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
        @if ($icon)
            <x-ui.icon :name="$icon" class="h-4 w-4" />
        @endif
    </button>
@endif
