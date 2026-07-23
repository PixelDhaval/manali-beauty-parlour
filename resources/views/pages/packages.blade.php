<x-layouts.app
    title="Beauty Packages"
    description="Discover Manali Herbal Beauty Parlour's curated yearly beauty packages &mdash; Glow, Shine, Grace, Pearl, Royal, Luxury, Crystal and Supreme &mdash; designed for complete beauty maintenance."
    keywords="beauty packages, yearly beauty package, salon package, bridal package, facial waxing package"
>
    <x-layout.page-hero eyebrow="Signature Packages" heading="Beauty Packages Designed for Every Occasion" description="Carefully curated yearly beauty packages for regular self-care and complete convenience." />

    {{-- Introduction --}}
    <section class="px-5 py-16 sm:px-8 sm:py-20">
        <div class="mx-auto max-w-3xl text-center" data-reveal>
            <p class="text-balance text-base leading-relaxed text-ink-600">
                Manali Herbal Beauty Parlour offers carefully curated yearly beauty packages, combining our most-loved
                herbal and premium treatments into one convenient routine. Each package is designed to save you time
                while keeping your skin, hair and overall look consistently at its best &mdash; without needing to plan
                every visit separately.
            </p>
        </div>
    </section>

    {{-- Package Cards --}}
    <section class="px-5 pb-20 sm:px-8 sm:pb-28">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($packages as $index => $package)
                    <x-ui.package-card
                        :name="$package['name']"
                        :includes="$package['includes']"
                        :featured="$package['featured']"
                        style="--reveal-delay: {{ $index * 50 }}ms"
                    />
                @endforeach
            </div>
        </div>
    </section>

    {{-- Package Benefits --}}
    <section class="bg-white px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Package Benefits" heading="Why Clients Choose Our Packages" />

            <div class="mt-14 grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['icon' => 'badge-check', 'title' => 'Professionally Curated Treatments', 'description' => 'Each package is designed by our experts for maximum results.'],
                    ['icon' => 'clock', 'title' => 'Saves Time', 'description' => 'One booking covers your complete beauty routine.'],
                    ['icon' => 'sparkle', 'title' => 'Complete Beauty Routine', 'description' => 'Hair, skin and body care combined seamlessly.'],
                    ['icon' => 'leaf', 'title' => 'Premium Products', 'description' => 'Herbal and internationally trusted beauty brands.'],
                    ['icon' => 'heart', 'title' => 'Ideal for Regular Self-Care', 'description' => 'Stay consistently at your best, all year round.'],
                ] as $index => $benefit)
                    <x-ui.feature-item :icon="$benefit['icon']" :title="$benefit['title']" :description="$benefit['description']" style="--reveal-delay: {{ $index * 60 }}ms" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="px-5 py-20 sm:px-8 sm:pb-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.cta-banner
                eyebrow="Find Your Fit"
                heading="Contact Us to Find the Right Package"
                description="Not sure which package suits you best? Our beauty experts are happy to guide you."
            />
        </div>
    </section>
</x-layouts.app>
