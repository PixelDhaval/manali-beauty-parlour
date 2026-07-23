<x-layouts.app
    :title="config('business.name')"
    description="Manali Herbal Beauty Parlour is a premium ladies-only salon with 20+ years of experience in herbal facials, hair care, waxing, nail art, bridal makeup and beauty packages. Book your appointment today."
    keywords="beauty parlour, ladies beauty salon, herbal facial, bridal makeup, hair spa, waxing, nail art"
>
    {{-- 1. Hero --}}
    <section class="px-5 pt-8 sm:px-8 sm:pt-12">
        <div class="relative mx-auto max-w-7xl overflow-hidden rounded-[2.5rem] bg-gradient-to-br from-primary-600 via-primary-600 to-primary-800 px-6 py-14 sm:px-10 lg:px-14 lg:py-20">
            <div class="pointer-events-none absolute -right-20 -top-24 h-72 w-72 rounded-full bg-white/10 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-24 -left-16 h-72 w-72 rounded-full bg-primary-900/25 blur-3xl"></div>

            <div class="relative grid gap-14 lg:grid-cols-2 lg:items-center">
                <div class="flex flex-col gap-6" data-reveal>
                    <x-ui.eyebrow light>Beauty Redefined, Naturally</x-ui.eyebrow>

                    <h1 class="text-balance font-serif text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-[3.4rem]">
                        Experience Timeless Beauty with Herbal Care
                    </h1>

                    <ul class="flex flex-col gap-2 text-base text-primary-50/90 sm:text-lg">
                        <li>Premium ladies-only beauty parlour with over 20 years of excellence.</li>
                        <li>Personalized beauty treatments using trusted professional brands and herbal care.</li>
                    </ul>

                    <div class="flex flex-col gap-4 pt-2 sm:flex-row">
                        <x-ui.button href="{{ route('contact') }}" variant="white" icon="arrow-right">Book Appointment</x-ui.button>
                        <x-ui.button href="{{ route('services') }}" variant="outline-white">Explore Services</x-ui.button>
                    </div>

                    <div class="flex flex-wrap gap-8 border-t border-white/15 pt-6">
                        <x-ui.stat light value="{{ config('business.years_of_experience') }}" label="Years of Experience" />
                        <x-ui.stat light value="5000+" label="Happy Clients" />
                        <x-ui.stat light value="100%" label="Ladies-Only Salon" />
                    </div>
                </div>

                <div class="relative" data-reveal style="--reveal-delay: 150ms">
                    <x-ui.placeholder-image
                        src="{{ asset('images/hero.png') }}"
                        alt="Herbal facial treatment at Manali Herbal Beauty Parlour"
                        class="aspect-square"
                    />

                    <div class="absolute -bottom-6 -left-4 flex items-center gap-3 rounded-2xl bg-white p-4 shadow-xl shadow-primary-900/20 sm:-left-8">
                        <span class="flex h-11 w-11 items-center justify-center rounded-xl bg-herbal-50 text-herbal-600">
                            <x-ui.icon name="leaf" class="h-5 w-5" />
                        </span>
                        <div class="leading-tight">
                            <p class="text-sm font-semibold text-ink-900">100% Herbal Care</p>
                            <p class="text-xs text-ink-400">Trusted Professional Brands</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- 2. About Preview --}}
    <section class="px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto grid max-w-7xl gap-14 lg:grid-cols-2 lg:items-center">
            <div class="relative" data-reveal>
                <x-ui.placeholder-image
                    src="{{ asset('images/about.png') }}"
                    alt="Beautician consulting a client at Manali Herbal Beauty Parlour"
                    class="aspect-4/3"
                />
            </div>

            <div class="flex flex-col gap-6" data-reveal style="--reveal-delay: 100ms">
                <x-ui.eyebrow>About Our Salon</x-ui.eyebrow>
                <h2 class="text-balance font-serif text-3xl font-semibold text-ink-900 sm:text-4xl">
                    Welcome to Manali Herbal Beauty Parlour
                </h2>
                <p class="text-base leading-relaxed text-ink-600">
                    For over two decades, Manali Herbal Beauty Parlour has been a trusted ladies-only beauty destination,
                    blending herbal traditions with modern beauty techniques. Every treatment is personalised, delivered in
                    a safe and hygienic environment by certified beauty professionals who care about your natural glow.
                </p>

                <ul class="grid grid-cols-1 gap-3 sm:grid-cols-2">
                    @foreach ([
                        '20+ Years of Experience',
                        'Ladies-Only Beauty Salon',
                        'Herbal & Premium Beauty Treatments',
                        'Certified Beauty Professionals',
                        'Safe & Hygienic Environment',
                    ] as $highlight)
                        <li class="flex items-start gap-2.5 text-sm text-ink-700">
                            <x-ui.icon name="check" class="mt-0.5 h-4 w-4 flex-none text-primary-600" />
                            {{ $highlight }}
                        </li>
                    @endforeach
                </ul>

                <div>
                    <x-ui.button href="{{ route('about') }}" variant="outline" icon="arrow-right">Learn More</x-ui.button>
                </div>
            </div>
        </div>
    </section>

    {{-- 3. Why Choose Manali --}}
    <section class="bg-white px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Why Choose Us" heading="Why Choose Manali Herbal Beauty Parlour">
                A trusted name in beauty, built on two decades of care, hygiene and personalised attention.
            </x-ui.section-heading>

            <div class="mt-14 grid grid-cols-1 gap-x-8 gap-y-10 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['icon' => 'badge-check', 'title' => '20+ Years of Experience', 'description' => 'Two decades of trusted expertise in ladies\' beauty care.'],
                    ['icon' => 'leaf', 'title' => 'Herbal & Premium Products', 'description' => 'A thoughtful blend of herbal traditions and premium brands.'],
                    ['icon' => 'users', 'title' => 'Experienced Beauticians', 'description' => 'Certified professionals trained in the latest techniques.'],
                    ['icon' => 'shield-check', 'title' => 'Hygienic Environment', 'description' => 'Strict hygiene standards for a safe, relaxing visit.'],
                    ['icon' => 'hand-sparkles', 'title' => 'Personalized Consultation', 'description' => 'Every treatment begins with a one-on-one consultation.'],
                    ['icon' => 'sparkle', 'title' => 'Wide Range of Services', 'description' => 'From hair to bridal beauty, all under one roof.'],
                ] as $index => $feature)
                    <x-ui.feature-item :icon="$feature['icon']" :title="$feature['title']" :description="$feature['description']" style="--reveal-delay: {{ $index * 60 }}ms" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- 4. Featured Services --}}
    <section class="px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Our Services" heading="Featured Beauty Services">
                Explore our most-loved treatments, tailored to your beauty goals.
            </x-ui.section-heading>

            <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([
                    ['icon' => 'scissors', 'title' => 'Hair Care', 'description' => 'Cuts, colour, spa and repair treatments.'],
                    ['icon' => 'droplet', 'title' => 'Skin Care & Facials', 'description' => 'Herbal and premium brand facials.'],
                    ['icon' => 'sparkle', 'title' => 'Waxing', 'description' => 'Gentle, smooth waxing for every skin type.'],
                    ['icon' => 'nail-polish', 'title' => 'Nail Care', 'description' => 'Nail art, extensions and spa manicures.'],
                    ['icon' => 'body', 'title' => 'Body Spa', 'description' => 'Relaxing massages and body polishing.'],
                    ['icon' => 'makeup', 'title' => 'Makeup Services', 'description' => 'Party, festival and reception makeup.'],
                    ['icon' => 'crown', 'title' => 'Bridal Beauty', 'description' => 'A complete bridal beauty journey.'],
                    ['icon' => 'sun', 'title' => 'Body Polishing', 'description' => 'Restore your skin\'s natural radiance.'],
                ] as $index => $service)
                    <x-ui.service-card :icon="$service['icon']" :title="$service['title']" :description="$service['description']" style="--reveal-delay: {{ $index * 50 }}ms" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- 5. Signature Packages --}}
    <section class="bg-white px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Signature Packages" heading="Yearly Beauty Packages, Curated for You">
                Complete beauty routines designed for regular self-care &mdash; without the guesswork.
            </x-ui.section-heading>

            <div class="mt-14 grid grid-cols-2 gap-4 sm:grid-cols-4 lg:grid-cols-4">
                @foreach (['Glow', 'Shine', 'Grace', 'Pearl', 'Royal', 'Luxury', 'Crystal', 'Supreme'] as $index => $package)
                    <a
                        href="{{ route('packages') }}"
                        class="group flex flex-col items-center gap-3 rounded-2xl border border-primary-100 bg-cream/60 px-4 py-8 text-center transition duration-300 hover:-translate-y-1 hover:border-primary-300 hover:bg-primary-50"
                        data-reveal
                        style="--reveal-delay: {{ $index * 40 }}ms"
                    >
                        <span class="flex h-12 w-12 items-center justify-center rounded-2xl bg-gold-50 text-gold-500 transition group-hover:bg-gold-400 group-hover:text-white">
                            <x-ui.icon name="sparkle" class="h-6 w-6" />
                        </span>
                        <span class="font-serif text-base font-semibold text-ink-900">{{ $package }} Package</span>
                    </a>
                @endforeach
            </div>

            <div class="mt-12 flex justify-center" data-reveal>
                <x-ui.button href="{{ route('packages') }}" icon="arrow-right">View All Packages</x-ui.button>
            </div>
        </div>
    </section>

    {{-- 6. Trusted Brands --}}
    <section class="px-5 py-16 sm:px-8">
        <div class="mx-auto max-w-7xl">
            <p class="text-center text-xs font-semibold uppercase tracking-[0.25em] text-ink-400" data-reveal>
                Trusted Professional Brands We Work With
            </p>
            <div class="mt-8 flex flex-wrap items-center justify-center gap-x-10 gap-y-6" data-reveal style="--reveal-delay: 80ms">
                @foreach (config('salon.brands') as $brand)
                    <span class="font-serif text-lg font-semibold text-ink-400 sm:text-xl">{{ $brand }}</span>
                @endforeach
            </div>
        </div>
    </section>

    {{-- 7. Testimonials --}}
    <section class="bg-white px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Testimonials" heading="What Our Clients Are Saying">
                Real stories from clients who trust us with their beauty journey.
            </x-ui.section-heading>

            <div class="mt-8 flex items-center justify-center gap-2" data-reveal>
                <div class="flex gap-0.5 text-gold-400">
                    @for ($i = 0; $i < 5; $i++)
                        <x-ui.icon name="star" class="h-5 w-5" />
                    @endfor
                </div>
                <span class="text-sm font-medium text-ink-600">4.9 Google Rating from 500+ Reviews</span>
            </div>

            <div class="mt-14 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
                @foreach ([
                    ['name' => 'Priya Sharma', 'service' => 'Bridal Makeup', 'quote' => 'My bridal makeup was absolutely flawless. The team understood exactly what I wanted and the herbal skin prep made my skin glow all day.'],
                    ['name' => 'Anjali Mehta', 'service' => 'Herbal Facial', 'quote' => 'I have been coming here for years. The herbal facials are gentle yet effective, and the staff always makes me feel comfortable and cared for.'],
                    ['name' => 'Kavita Rao', 'service' => 'Hair Spa & Colour', 'quote' => 'Best ladies-only salon in the city. Hygienic, professional, and my hair has never looked healthier since I started their hair spa treatments.'],
                ] as $index => $testimonial)
                    <x-ui.testimonial-card :name="$testimonial['name']" :service="$testimonial['service']" :quote="$testimonial['quote']" style="--reveal-delay: {{ $index * 70 }}ms" />
                @endforeach
            </div>
        </div>
    </section>

    {{-- 8. Instagram Gallery --}}
    <section class="px-5 py-20 sm:px-8 sm:py-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.section-heading eyebrow="Our Work" heading="Recent Looks From Our Instagram">
                A glimpse into our hair, skin, makeup, nail and bridal transformations.
            </x-ui.section-heading>

            <div class="mt-14 grid grid-cols-2 gap-4 sm:grid-cols-3 lg:grid-cols-5">
                @foreach ([
                    ['src' => 'hair.png', 'label' => 'Hair'],
                    ['src' => 'skin.png', 'label' => 'Skin'],
                    ['src' => 'makeup.png', 'label' => 'Makeup'],
                    ['src' => 'nails.png', 'label' => 'Nails'],
                    ['src' => 'bridal.png', 'label' => 'Bridal'],
                ] as $index => $tile)
                    <div class="group relative overflow-hidden rounded-3xl" data-reveal style="--reveal-delay: {{ $index * 60 }}ms">
                        <x-ui.placeholder-image :src="asset('images/' . $tile['src'])" :alt="$tile['label'] . ' work by Manali Herbal Beauty Parlour'" class="aspect-square" />
                        <span class="absolute bottom-3 left-3 rounded-full bg-white/90 px-3 py-1 text-xs font-semibold text-ink-900 shadow-sm">{{ $tile['label'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="mt-10 flex justify-center" data-reveal>
                <x-ui.button href="{{ config('business.social.instagram') }}" variant="outline" icon="instagram">Follow on Instagram</x-ui.button>
            </div>
        </div>
    </section>

    {{-- 9. Call To Action --}}
    <section class="px-5 pb-20 sm:px-8 sm:pb-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.cta-banner
                heading="Ready to Transform Your Look?"
                description="Book a personalised consultation with our beauty experts and start your herbal beauty journey today."
            />
        </div>
    </section>
</x-layouts.app>
