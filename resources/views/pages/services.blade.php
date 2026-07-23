@php
    $bridal = collect($categories)->firstWhere('slug', 'bridal-beauty');
    $otherCategories = collect($categories)->reject(fn ($category) => $category['slug'] === 'bridal-beauty');
@endphp

<x-layouts.app
    title="Our Services"
    description="Explore Manali Herbal Beauty Parlour's complete range of beauty services &mdash; hair care, herbal facials, waxing, nail art, body spa, makeup and bridal beauty, all under one roof."
    keywords="beauty salon services, herbal facial, hair spa, waxing, nail art, bridal makeup, body spa"
>
    <x-layout.page-hero eyebrow="Our Services" heading="Complete Beauty & Wellness Services Under One Roof" description="From everyday self-care to your biggest celebrations &mdash; personalised, herbal-first treatments for every need." />

    {{-- Bridal spotlight --}}
    @if ($bridal)
        <section class="px-5 pt-20 sm:px-8 sm:pt-28">
            <div class="mx-auto max-w-7xl">
                <div class="grid grid-cols-1 gap-10 overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-primary-600 via-primary-600 to-primary-800 p-8 sm:p-12 lg:grid-cols-2 lg:items-center" data-reveal>
                    <div class="flex flex-col gap-5">
                        <x-ui.eyebrow light>Dedicated Bridal Care</x-ui.eyebrow>
                        <h2 class="text-balance font-serif text-3xl font-semibold text-white sm:text-4xl">Bridal Beauty</h2>
                        <p class="text-primary-50/85">{{ $bridal['description'] }} A dedicated bridal journey, from first consultation to your final touch-up.</p>
                        <ul class="grid grid-cols-1 gap-2.5 sm:grid-cols-2">
                            @foreach ($bridal['items'] as $item)
                                <li class="flex items-center gap-2 text-sm text-white/90">
                                    <x-ui.icon name="check" class="h-4 w-4 flex-none text-gold-300" />
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                        <div>
                            <x-ui.button href="{{ route('contact') }}" variant="white" icon="arrow-right">Enquire About Bridal Packages</x-ui.button>
                        </div>
                    </div>
                    <x-ui.placeholder-image
                        src="{{ asset('images/bridal-beauty-spotlight.png') }}"
                        alt="Bridal makeup artist styling a bride at Manali Herbal Beauty Parlour"
                        class="aspect-square"
                    />
                </div>
            </div>
        </section>
    @endif

    {{-- Service categories --}}
    <section class="px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Service Menu" heading="Explore Our Beauty Services" />

            <div class="mt-14 grid grid-cols-1 gap-6 lg:grid-cols-2">
                @foreach ($otherCategories as $index => $category)
                    <div class="flex flex-col gap-5 rounded-3xl border border-primary-100 bg-white p-7" data-reveal style="--reveal-delay: {{ $index * 50 }}ms">
                        <div class="flex items-start gap-4">
                            <span class="flex h-12 w-12 flex-none items-center justify-center rounded-2xl bg-primary-50 text-primary-600">
                                <x-ui.icon :name="$category['icon']" class="h-6 w-6" />
                            </span>
                            <div>
                                <h3 class="font-serif text-xl font-semibold text-ink-900">{{ $category['name'] }}</h3>
                                <p class="mt-1 text-sm leading-relaxed text-ink-600">{{ $category['description'] }}</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2">
                            @foreach ($category['items'] as $item)
                                <span class="rounded-full bg-cream/80 px-3.5 py-1.5 text-xs font-medium text-ink-700">{{ $item }}</span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section class="bg-white px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-3xl">
            <x-ui.section-heading eyebrow="FAQ" heading="Frequently Asked Questions" />

            <div class="mt-12 flex flex-col gap-4" data-faq>
                @foreach ($faqs as $faq)
                    <x-ui.faq-item :question="$faq['question']">{{ $faq['answer'] }}</x-ui.faq-item>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="px-5 py-20 sm:px-8 sm:pb-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.cta-banner
                heading="Ready to Transform Your Look?"
                description="Book a personalised consultation and discover the right treatment for you."
            />
        </div>
    </section>
</x-layouts.app>
