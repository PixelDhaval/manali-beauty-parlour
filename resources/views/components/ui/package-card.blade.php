@props(['name', 'includes' => [], 'featured' => false])

<div
    {{ $attributes->merge(['class' => 'flex h-full flex-col gap-5 rounded-3xl p-7 shadow-sm transition duration-300 hover:-translate-y-1.5 hover:shadow-xl ' . ($featured ? 'bg-gradient-to-br from-primary-600 to-primary-800 text-white shadow-primary-900/20' : 'border border-primary-100 bg-white text-ink-900 shadow-primary-900/5')]) }}
    data-reveal
>
    <div class="flex items-center justify-between gap-3">
        <span class="flex h-11 w-11 items-center justify-center rounded-2xl {{ $featured ? 'bg-white/15 text-gold-300' : 'bg-gold-50 text-gold-500' }}">
            <x-ui.icon name="sparkle" class="h-5 w-5" />
        </span>
        @if ($featured)
            <span class="rounded-full bg-white/15 px-3 py-1 text-xs font-semibold uppercase tracking-wide text-gold-200">Most Loved</span>
        @endif
    </div>

    <h3 class="font-serif text-xl font-semibold {{ $featured ? 'text-white' : 'text-ink-900' }}">{{ $name }}</h3>

    <ul class="flex flex-1 flex-col gap-2.5 text-sm {{ $featured ? 'text-primary-50/90' : 'text-ink-600' }}">
        @foreach ($includes as $item)
            <li class="flex items-start gap-2.5">
                <x-ui.icon name="check" class="mt-0.5 h-4 w-4 flex-none {{ $featured ? 'text-gold-300' : 'text-primary-500' }}" />
                <span>{{ $item }}</span>
            </li>
        @endforeach
    </ul>

    <x-ui.button href="{{ route('contact') }}" :variant="$featured ? 'white' : 'outline'" size="sm" class="mt-2 w-full">
        Enquire Now
    </x-ui.button>
</div>
