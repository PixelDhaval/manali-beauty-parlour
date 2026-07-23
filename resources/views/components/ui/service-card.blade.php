@props(['icon', 'title', 'description' => null, 'href' => null])

<a href="{{ $href ?? route('services') }}" {{ $attributes->merge(['class' => 'group flex flex-col gap-4 rounded-3xl border border-primary-100 bg-white p-6 shadow-sm shadow-primary-900/5 transition duration-300 hover:-translate-y-1.5 hover:border-primary-200 hover:shadow-xl hover:shadow-primary-900/10']) }} data-reveal>
    <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-primary-50 text-primary-600 transition duration-300 group-hover:bg-primary-600 group-hover:text-white">
        <x-ui.icon :name="$icon" class="h-6 w-6" />
    </span>

    <div class="flex flex-col gap-1.5">
        <h3 class="font-serif text-lg font-semibold text-ink-900">{{ $title }}</h3>
        @if ($description)
            <p class="text-sm leading-relaxed text-ink-600">{{ $description }}</p>
        @endif
    </div>

    <span class="mt-auto inline-flex items-center gap-1.5 text-sm font-medium text-primary-700">
        Explore
        <x-ui.icon name="arrow-right" class="h-4 w-4 transition group-hover:translate-x-1" />
    </span>
</a>
