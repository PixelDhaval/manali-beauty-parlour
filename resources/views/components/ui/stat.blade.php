@props(['value', 'label', 'light' => false])

<div {{ $attributes->merge(['class' => 'flex flex-col']) }}>
    <span class="font-serif text-3xl font-bold sm:text-4xl {{ $light ? 'text-white' : 'text-ink-900' }}">{{ $value }}</span>
    <span class="text-sm {{ $light ? 'text-primary-50/80' : 'text-ink-600' }}">{{ $label }}</span>
</div>
