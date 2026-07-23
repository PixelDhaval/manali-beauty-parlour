@props(['question'])

<div data-faq-item class="group overflow-hidden rounded-2xl border border-primary-100 bg-white transition duration-300 [&.is-open]:border-primary-300 [&.is-open]:bg-primary-600" data-reveal>
    <button
        type="button"
        data-faq-trigger
        class="flex w-full items-center justify-between gap-4 px-5 py-4 text-left sm:px-6 sm:py-5"
        aria-expanded="false"
    >
        <span class="font-serif text-base font-semibold text-ink-900 transition group-[.is-open]:text-white sm:text-lg">
            {{ $question }}
        </span>
        <span class="flex h-8 w-8 flex-none items-center justify-center rounded-full bg-primary-50 text-primary-600 transition duration-300 group-[.is-open]:rotate-180 group-[.is-open]:bg-white/15 group-[.is-open]:text-white">
            <x-ui.icon name="chevron-down" class="h-4 w-4" />
        </span>
    </button>

    <div class="grid grid-rows-[0fr] transition-all duration-300 ease-in-out group-[.is-open]:grid-rows-[1fr]">
        <div class="overflow-hidden">
            <p class="px-5 pb-5 text-sm leading-relaxed text-ink-600 group-[.is-open]:text-primary-50/90 sm:px-6 sm:pb-6">
                {{ $slot }}
            </p>
        </div>
    </div>
</div>
