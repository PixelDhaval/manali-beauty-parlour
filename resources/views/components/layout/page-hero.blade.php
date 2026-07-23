@props([
    'eyebrow' => null,
    'heading',
    'description' => null,
])

<section class="px-5 pt-8 sm:px-8 sm:pt-12">
    <div class="relative mx-auto max-w-7xl overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-primary-600 via-primary-600 to-primary-800 px-6 py-16 text-center sm:px-10 sm:py-20">
        <div class="pointer-events-none absolute -right-16 -top-16 h-64 w-64 rounded-full bg-white/10 blur-3xl"></div>
        <div class="pointer-events-none absolute -bottom-20 -left-10 h-64 w-64 rounded-full bg-primary-900/20 blur-3xl"></div>

        <div class="relative mx-auto flex max-w-2xl flex-col items-center gap-5" data-reveal>
            <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-xs font-medium text-primary-100/80">
                <a href="{{ route('home') }}" class="hover:text-white">Home</a>
                <span>/</span>
                <span class="text-white">{{ $eyebrow ?? $heading }}</span>
            </nav>

            @if ($eyebrow)
                <x-ui.eyebrow light>{{ $eyebrow }}</x-ui.eyebrow>
            @endif

            <h1 class="text-balance font-serif text-4xl font-semibold text-white sm:text-5xl">{{ $heading }}</h1>

            @if ($description)
                <p class="text-balance text-primary-50/85">{{ $description }}</p>
            @endif
        </div>
    </div>
</section>
