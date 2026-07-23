<x-layouts.app
    title="About Us"
    description="Discover the story behind Manali Herbal Beauty Parlour &mdash; a ladies-only beauty salon with 20+ years of experience blending herbal traditions with modern beauty techniques."
    keywords="about manali herbal beauty parlour, ladies beauty salon story, herbal beauty experts"
>
    <x-layout.page-hero eyebrow="About Us" heading="About Manali Herbal Beauty Parlour" description="Two decades of enhancing natural beauty, one personalised treatment at a time." />

    {{-- Our Story --}}
    <section class="px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto grid max-w-7xl gap-14 lg:grid-cols-2 lg:items-center">
            <div data-reveal>
                <x-ui.placeholder-image
                    src="{{ asset('images/our-story.png') }}"
                    alt="Beautician applying a herbal facial treatment at Manali Herbal Beauty Parlour"
                    class="aspect-square"
                />
            </div>

            <div class="flex flex-col gap-6" data-reveal style="--reveal-delay: 100ms">
                <x-ui.eyebrow>Our Story</x-ui.eyebrow>
                <h2 class="text-balance font-serif text-3xl font-semibold text-ink-900 sm:text-4xl">
                    A Legacy of Beauty, Built on Trust
                </h2>
                <p class="text-base leading-relaxed text-ink-600">
                    Established over 20 years ago, Manali Herbal Beauty Parlour has grown into a trusted ladies-only
                    beauty destination. What began as a passion for enhancing natural beauty has become a salon known
                    for its thoughtful blend of herbal traditions and modern beauty techniques &mdash; delivering results
                    that feel as good as they look.
                </p>
                <ul class="flex flex-col gap-3">
                    @foreach ([
                        'Established over 20 years ago',
                        'Ladies-only beauty destination',
                        'Passion for enhancing natural beauty',
                        'Blend of herbal traditions with modern beauty techniques',
                    ] as $point)
                        <li class="flex items-start gap-2.5 text-sm text-ink-700">
                            <x-ui.icon name="check" class="mt-0.5 h-4 w-4 flex-none text-primary-600" />
                            {{ $point }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>

    {{-- Mission & Vision --}}
    <section class="bg-white px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <div class="grid grid-cols-1 gap-8 lg:grid-cols-5">
                <div class="flex flex-col gap-6 rounded-3xl border border-primary-100 bg-cream/50 p-8 lg:col-span-3" data-reveal>
                    <x-ui.eyebrow>Our Mission</x-ui.eyebrow>
                    <h3 class="font-serif text-2xl font-semibold text-ink-900">What Drives Us Every Day</h3>
                    <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                        @foreach ([
                            ['icon' => 'heart', 'label' => 'Building Confidence'],
                            ['icon' => 'droplet', 'label' => 'Healthy Skin'],
                            ['icon' => 'sparkle', 'label' => 'Healthy Hair'],
                            ['icon' => 'hand-sparkles', 'label' => 'Personalized Care'],
                            ['icon' => 'badge-check', 'label' => 'Customer Satisfaction'],
                        ] as $mission)
                            <div class="flex items-center gap-3">
                                <span class="flex h-9 w-9 flex-none items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                                    <x-ui.icon :name="$mission['icon']" class="h-4 w-4" />
                                </span>
                                <span class="text-sm font-medium text-ink-800">{{ $mission['label'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="flex flex-col justify-center gap-5 rounded-3xl bg-gradient-to-br from-primary-600 to-primary-800 p-8 text-white lg:col-span-2" data-reveal style="--reveal-delay: 100ms">
                    <x-ui.eyebrow light>Our Vision</x-ui.eyebrow>
                    <p class="text-balance font-serif text-xl font-medium leading-relaxed sm:text-2xl">
                        To become the most trusted ladies&rsquo; beauty salon known for quality, hygiene, innovation, and
                        customer satisfaction.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- Our Values --}}
    <section class="px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Our Values" heading="The Principles Behind Every Treatment" />

            <div class="mt-14 grid grid-cols-2 gap-6 sm:grid-cols-3 lg:grid-cols-5">
                @foreach ([
                    ['icon' => 'badge-check', 'label' => 'Quality'],
                    ['icon' => 'shield-check', 'label' => 'Hygiene'],
                    ['icon' => 'sparkle', 'label' => 'Transparency'],
                    ['icon' => 'users', 'label' => 'Professionalism'],
                    ['icon' => 'heart', 'label' => 'Customer Care'],
                ] as $index => $value)
                    <div class="flex flex-col items-center gap-3 text-center" data-reveal style="--reveal-delay: {{ $index * 60 }}ms">
                        <span class="flex h-14 w-14 items-center justify-center rounded-2xl bg-primary-50 text-primary-600">
                            <x-ui.icon :name="$value['icon']" class="h-6 w-6" />
                        </span>
                        <span class="font-serif text-sm font-semibold text-ink-900">{{ $value['label'] }}</span>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Why Clients Trust Us --}}
    <section class="bg-white px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Why Clients Trust Us" heading="Reasons Clients Keep Coming Back" />

            <div class="mt-14 grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['icon' => 'badge-check', 'title' => '20+ Years Experience', 'description' => 'Decades of consistent, expert beauty care.'],
                    ['icon' => 'users', 'title' => 'Thousands of Happy Clients', 'description' => 'A loyal community that trusts us for every occasion.'],
                    ['icon' => 'sparkle', 'title' => 'Premium International Brands', 'description' => 'O3+, Lotus, Matrix, Kanpeki and more.'],
                    ['icon' => 'shield-check', 'title' => 'Modern Equipment', 'description' => 'Advanced tools for safe, effective treatments.'],
                    ['icon' => 'hand-sparkles', 'title' => 'Customized Beauty Consultation', 'description' => 'A tailored plan for every skin and hair type.'],
                ] as $index => $reason)
                    <x-ui.feature-item :icon="$reason['icon']" :title="$reason['title']" :description="$reason['description']" style="--reveal-delay: {{ $index * 60 }}ms" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- Our Process --}}
    <section class="px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Our Process" heading="Your Beauty Journey With Us" />

            <div class="mt-14 grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['title' => 'Consultation', 'description' => 'We understand your beauty goals and skin or hair needs.'],
                    ['title' => 'Treatment Selection', 'description' => 'We recommend the ideal service or package for you.'],
                    ['title' => 'Beauty Session', 'description' => 'Relax as our experts deliver your personalised treatment.'],
                    ['title' => 'After-Care Guidance', 'description' => 'We share tips to help you maintain your results.'],
                ] as $index => $step)
                    <div class="relative flex flex-col gap-3 rounded-3xl border border-primary-100 bg-white p-6" data-reveal style="--reveal-delay: {{ $index * 80 }}ms">
                        <span class="font-serif text-3xl font-bold text-primary-200">{{ sprintf('%02d', $index + 1) }}</span>
                        <h3 class="font-serif text-lg font-semibold text-ink-900">{{ $step['title'] }}</h3>
                        <p class="text-sm leading-relaxed text-ink-600">{{ $step['description'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="px-5 pb-20 sm:px-8 sm:pb-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.cta-banner
                eyebrow="Get Started"
                heading="Book Your Appointment Today"
                description="Let our certified beauticians craft a herbal beauty routine designed just for you."
            />
        </div>
    </section>
</x-layouts.app>
