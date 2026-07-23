@props(['light' => false])

<span {{ $attributes->merge(['class' => 'inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-[0.25em] ' . ($light ? 'text-primary-100' : 'text-primary-600')]) }}>
    <span class="h-px w-6 {{ $light ? 'bg-primary-200/70' : 'bg-primary-400' }}"></span>
    {{ $slot }}
    <span class="h-px w-6 {{ $light ? 'bg-primary-200/70' : 'bg-primary-400' }}"></span>
</span>
