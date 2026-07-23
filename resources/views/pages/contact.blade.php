@php
    $business = config('business');
    $timeSlots = ['10:00 AM', '11:00 AM', '12:00 PM', '1:00 PM', '2:00 PM', '3:00 PM', '4:00 PM', '5:00 PM', '6:00 PM', '7:00 PM'];

    $faqs = [
        ['question' => 'Are walk-ins accepted?', 'answer' => 'Yes, we welcome walk-ins based on availability, though booking ahead guarantees your preferred time slot and beautician.'],
        ['question' => 'Do I need to book in advance?', 'answer' => 'We recommend booking at least a day in advance, especially for facials, bridal beauty and package treatments.'],
        ['question' => 'Is parking available?', 'answer' => 'Yes, convenient parking is available near the salon for our clients.'],
        ['question' => 'What payment methods are accepted?', 'answer' => 'We accept cash, all major cards and UPI payments for your convenience.'],
        ['question' => 'What is the cancellation policy?', 'answer' => 'We kindly request at least 4 hours notice for cancellations or rescheduling so we can accommodate other clients.'],
    ];
@endphp

<x-layouts.app
    title="Contact Us"
    description="Get in touch with Manali Herbal Beauty Parlour to book your appointment. Find our address, phone number, working hours and send us an enquiry online."
    keywords="contact beauty parlour, book appointment, salon address, salon phone number"
>
    <x-layout.page-hero eyebrow="Contact Us" heading="Let's Make Your Beauty Journey Special" description="Reach out to us or book your appointment online &mdash; we'd love to welcome you." />

    @if (session('success'))
        <div class="px-5 pt-10 sm:px-8">
            <div class="mx-auto flex max-w-7xl items-center gap-3 rounded-2xl border border-herbal-300 bg-herbal-50 px-5 py-4 text-sm font-medium text-herbal-700">
                <x-ui.icon name="check" class="h-5 w-5 flex-none" />
                {{ session('success') }}
            </div>
        </div>
    @endif

    {{-- Contact Info + Form --}}
    <section class="px-5 py-16 sm:px-8 sm:py-20">
        <div class="mx-auto grid max-w-7xl gap-10 lg:grid-cols-5">
            {{-- Contact Info --}}
            <div class="flex flex-col gap-6 lg:col-span-2" data-reveal>
                <x-ui.eyebrow>Get In Touch</x-ui.eyebrow>
                <h2 class="font-serif text-2xl font-semibold text-ink-900 sm:text-3xl">Visit or Reach Us</h2>

                <div class="flex flex-col gap-5">
                    <div class="flex items-start gap-4 rounded-2xl border border-primary-100 bg-white p-5">
                        <span class="flex h-11 w-11 flex-none items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                            <x-ui.icon name="phone" class="h-5 w-5" />
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-ink-900">Phone & WhatsApp</p>
                            <a href="tel:{{ $business['phone_link'] }}" class="block text-sm text-ink-600 hover:text-primary-700">{{ $business['phone'] }}</a>
                            <a href="{{ $business['whatsapp_link'] }}" target="_blank" rel="noopener" class="block text-sm text-ink-600 hover:text-primary-700">Chat on WhatsApp</a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-2xl border border-primary-100 bg-white p-5">
                        <span class="flex h-11 w-11 flex-none items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                            <x-ui.icon name="map-pin" class="h-5 w-5" />
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-ink-900">Salon Address</p>
                            <p class="text-sm text-ink-600">
                                {{ $business['address']['line1'] }}, {{ $business['address']['line2'] }}<br>
                                {{ $business['address']['city'] }}, {{ $business['address']['state'] }} {{ $business['address']['postal_code'] }}
                            </p>
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-2xl border border-primary-100 bg-white p-5">
                        <span class="flex h-11 w-11 flex-none items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                            <x-ui.icon name="clock" class="h-5 w-5" />
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-ink-900">Working Hours</p>
                            @foreach ($business['hours'] as $hour)
                                <p class="text-sm text-ink-600">{{ $hour['day'] }}: {{ $hour['time'] }}</p>
                            @endforeach
                        </div>
                    </div>

                    <div class="flex items-start gap-4 rounded-2xl border border-primary-100 bg-white p-5">
                        <span class="flex h-11 w-11 flex-none items-center justify-center rounded-xl bg-primary-50 text-primary-600">
                            <x-ui.icon name="instagram" class="h-5 w-5" />
                        </span>
                        <div>
                            <p class="text-sm font-semibold text-ink-900">Follow Us</p>
                            <a href="{{ $business['social']['instagram'] }}" target="_blank" rel="noopener" class="block text-sm text-ink-600 hover:text-primary-700">Instagram</a>
                            <a href="{{ $business['social']['facebook'] }}" target="_blank" rel="noopener" class="block text-sm text-ink-600 hover:text-primary-700">Facebook</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Appointment Form --}}
            <div class="rounded-3xl border border-primary-100 bg-white p-6 sm:p-8 lg:col-span-3" data-reveal style="--reveal-delay: 100ms">
                <x-ui.eyebrow>Book Appointment</x-ui.eyebrow>
                <h2 class="mt-3 font-serif text-2xl font-semibold text-ink-900 sm:text-3xl">Request Your Appointment</h2>
                <p class="mt-2 text-sm text-ink-600">Fill in your details and our team will confirm your slot shortly.</p>

                <form method="POST" action="{{ route('appointments.store') }}" class="mt-8 grid grid-cols-1 gap-5 sm:grid-cols-2">
                    @csrf

                    <div class="flex flex-col gap-1.5 sm:col-span-1">
                        <label for="name" class="text-sm font-medium text-ink-800">Name</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required
                            class="rounded-xl border border-primary-100 bg-cream/40 px-4 py-3 text-sm text-ink-900 outline-none transition focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-100">
                        @error('name') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex flex-col gap-1.5 sm:col-span-1">
                        <label for="phone" class="text-sm font-medium text-ink-800">Phone Number</label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" required
                            class="rounded-xl border border-primary-100 bg-cream/40 px-4 py-3 text-sm text-ink-900 outline-none transition focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-100">
                        @error('phone') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex flex-col gap-1.5 sm:col-span-2">
                        <label for="email" class="text-sm font-medium text-ink-800">Email <span class="font-normal text-ink-400">(optional)</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            class="rounded-xl border border-primary-100 bg-cream/40 px-4 py-3 text-sm text-ink-900 outline-none transition focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-100">
                        @error('email') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex flex-col gap-1.5 sm:col-span-2">
                        <label for="preferred_service" class="text-sm font-medium text-ink-800">Preferred Service</label>
                        <select id="preferred_service" name="preferred_service" required
                            class="rounded-xl border border-primary-100 bg-cream/40 px-4 py-3 text-sm text-ink-900 outline-none transition focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-100">
                            <option value="" disabled {{ old('preferred_service') ? '' : 'selected' }}>Select a service</option>
                            @foreach ($services as $service)
                                <option value="{{ $service['name'] }}" {{ old('preferred_service') === $service['name'] ? 'selected' : '' }}>{{ $service['name'] }}</option>
                            @endforeach
                        </select>
                        @error('preferred_service') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex flex-col gap-1.5 sm:col-span-1">
                        <label for="preferred_date" class="text-sm font-medium text-ink-800">Preferred Date</label>
                        <input type="date" id="preferred_date" name="preferred_date" value="{{ old('preferred_date') }}" min="{{ now()->toDateString() }}" required
                            class="rounded-xl border border-primary-100 bg-cream/40 px-4 py-3 text-sm text-ink-900 outline-none transition focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-100">
                        @error('preferred_date') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex flex-col gap-1.5 sm:col-span-1">
                        <label for="preferred_time" class="text-sm font-medium text-ink-800">Preferred Time</label>
                        <select id="preferred_time" name="preferred_time" required
                            class="rounded-xl border border-primary-100 bg-cream/40 px-4 py-3 text-sm text-ink-900 outline-none transition focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-100">
                            <option value="" disabled {{ old('preferred_time') ? '' : 'selected' }}>Select a time</option>
                            @foreach ($timeSlots as $slot)
                                <option value="{{ $slot }}" {{ old('preferred_time') === $slot ? 'selected' : '' }}>{{ $slot }}</option>
                            @endforeach
                        </select>
                        @error('preferred_time') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="flex flex-col gap-1.5 sm:col-span-2">
                        <label for="message" class="text-sm font-medium text-ink-800">Message <span class="font-normal text-ink-400">(optional)</span></label>
                        <textarea id="message" name="message" rows="4"
                            class="resize-none rounded-xl border border-primary-100 bg-cream/40 px-4 py-3 text-sm text-ink-900 outline-none transition focus:border-primary-400 focus:bg-white focus:ring-2 focus:ring-primary-100">{{ old('message') }}</textarea>
                        @error('message') <p class="text-xs text-red-600">{{ $message }}</p> @enderror
                    </div>

                    <div class="sm:col-span-2">
                        <x-ui.button type="submit" icon="arrow-right" class="w-full sm:w-auto">Book Appointment</x-ui.button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    {{-- Google Map --}}
    <section class="px-5 pb-20 sm:px-8 sm:pb-28">
        <div class="mx-auto max-w-7xl overflow-hidden rounded-3xl border border-primary-100" data-reveal>
            <iframe
                src="{{ $business['map_embed_url'] }}"
                class="h-96 w-full"
                style="border:0;"
                allowfullscreen
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                title="Manali Herbal Beauty Parlour location"
            ></iframe>
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

    {{-- Final CTA --}}
    <section class="px-5 py-20 sm:px-8 sm:pb-28">
        <div class="mx-auto max-w-7xl">
            <x-ui.cta-banner heading="Book Your Beauty Appointment Today" description="Our team is ready to welcome you for a personalised herbal beauty experience." />
        </div>
    </section>
</x-layouts.app>
