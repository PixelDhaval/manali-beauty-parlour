@props(['icon', 'title', 'description' => null, 'light' => false])

<div {{ $attributes->merge(['class' => 'flex items-start gap-4']) }} data-reveal>
    <span class="flex h-11 w-11 flex-none items-center justify-center rounded-2xl {{ $light ? 'bg-white/15 text-white' : 'bg-primary-50 text-primary-600' }}">
        <x-ui.icon :name="$icon" class="h-5 w-5" />
    </span>
    <div class="flex flex-col gap-1">
        <h3 class="font-serif text-base font-semibold {{ $light ? 'text-white' : 'text-ink-900' }}">{{ $title }}</h3>
        @if ($description)
            <p class="text-sm leading-relaxed {{ $light ? 'text-primary-50/85' : 'text-ink-600' }}">{{ $description }}</p>
        @endif
    </div>
</div>
