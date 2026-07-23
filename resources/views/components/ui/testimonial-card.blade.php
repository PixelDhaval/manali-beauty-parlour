@props(['name', 'service' => null, 'quote'])

<div {{ $attributes->merge(['class' => 'flex h-full flex-col gap-4 rounded-3xl border border-primary-100 bg-white p-6 shadow-sm shadow-primary-900/5']) }} data-reveal>
    <div class="flex items-center justify-between">
        <div class="flex gap-0.5 text-gold-400">
            @for ($i = 0; $i < 5; $i++)
                <x-ui.icon name="star" class="h-4 w-4" />
            @endfor
        </div>
        <x-ui.icon name="quote" class="h-6 w-6 text-primary-200" />
    </div>

    <p class="flex-1 text-sm leading-relaxed text-ink-600">&ldquo;{{ $quote }}&rdquo;</p>

    <div class="flex items-center gap-3 border-t border-primary-50 pt-4">
        <span class="flex h-10 w-10 items-center justify-center rounded-full bg-primary-100 font-serif text-sm font-semibold text-primary-700">
            {{ collect(explode(' ', $name))->map(fn ($part) => mb_substr($part, 0, 1))->take(2)->implode('') }}
        </span>
        <div>
            <p class="text-sm font-semibold text-ink-900">{{ $name }}</p>
            @if ($service)
                <p class="text-xs text-ink-400">{{ $service }}</p>
            @endif
        </div>
    </div>
</div>
