@props([
    'eyebrow' => null,
    'heading',
    'align' => 'center',
    'light' => false,
])

@php
    $alignClass = $align === 'center' ? 'items-center text-center mx-auto' : 'items-start text-left';
@endphp

<div {{ $attributes->merge(['class' => "flex flex-col gap-4 $alignClass max-w-2xl"]) }} data-reveal>
    @if ($eyebrow)
        <x-ui.eyebrow :light="$light">{{ $eyebrow }}</x-ui.eyebrow>
    @endif

    <h2 class="text-balance font-serif text-3xl font-semibold sm:text-4xl {{ $light ? 'text-white' : 'text-ink-900' }}">
        {{ $heading }}
    </h2>

    @if (isset($slot) && trim($slot))
        <p class="text-balance text-base leading-relaxed {{ $light ? 'text-primary-50/85' : 'text-ink-600' }}">
            {{ $slot }}
        </p>
    @endif
</div>
