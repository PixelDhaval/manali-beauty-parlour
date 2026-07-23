@php
    $business = config('business');

    $quickLinks = [
        ['label' => 'About Us', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Packages', 'route' => 'packages'],
        ['label' => 'Contact Us', 'route' => 'contact'],
    ];

    $serviceLinks = ['Hair Care', 'Skin Care & Facials', 'Waxing', 'Nail Care', 'Body Spa', 'Bridal Beauty'];
@endphp

<footer class="border-t border-primary-100 bg-white">
    <div class="mx-auto max-w-7xl px-5 py-16 sm:px-8">
        <div class="grid grid-cols-1 gap-12 sm:grid-cols-2 lg:grid-cols-4">
            <div class="flex flex-col gap-4 lg:col-span-1">
                <a href="{{ route('home') }}" class="flex items-center">
                    <img src="{{ asset('images/logo.png') }}" alt="{{ $business['name'] }}" class="h-10 w-auto">
                </a>
                <p class="text-sm leading-relaxed text-ink-600">{{ $business['description'] }}</p>
                <div class="flex items-center gap-3">
                    <a href="{{ $business['social']['instagram'] }}" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-50 text-primary-600 transition hover:bg-primary-600 hover:text-white" aria-label="Instagram">
                        <x-ui.icon name="instagram" class="h-4 w-4" />
                    </a>
                    <a href="{{ $business['social']['facebook'] }}" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-50 text-primary-600 transition hover:bg-primary-600 hover:text-white" aria-label="Facebook">
                        <x-ui.icon name="facebook" class="h-4 w-4" />
                    </a>
                    <a href="{{ $business['whatsapp_link'] }}" target="_blank" rel="noopener" class="flex h-9 w-9 items-center justify-center rounded-full bg-primary-50 text-primary-600 transition hover:bg-primary-600 hover:text-white" aria-label="WhatsApp">
                        <x-ui.icon name="whatsapp" class="h-4 w-4" />
                    </a>
                </div>
            </div>

            <div class="flex flex-col gap-4">
                <h3 class="font-serif text-base font-semibold text-ink-900">Quick Links</h3>
                <ul class="flex flex-col gap-2.5 text-sm text-ink-600">
                    @foreach ($quickLinks as $link)
                        <li><a href="{{ route($link['route']) }}" class="hover:text-primary-700">{{ $link['label'] }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="flex flex-col gap-4">
                <h3 class="font-serif text-base font-semibold text-ink-900">Our Services</h3>
                <ul class="flex flex-col gap-2.5 text-sm text-ink-600">
                    @foreach ($serviceLinks as $service)
                        <li><a href="{{ route('services') }}" class="hover:text-primary-700">{{ $service }}</a></li>
                    @endforeach
                </ul>
            </div>

            <div class="flex flex-col gap-4">
                <h3 class="font-serif text-base font-semibold text-ink-900">Get In Touch</h3>
                <ul class="flex flex-col gap-3 text-sm text-ink-600">
                    <li class="flex items-start gap-2.5">
                        <x-ui.icon name="map-pin" class="mt-0.5 h-4 w-4 flex-none text-primary-600" />
                        <span>{{ $business['address']['line1'] }}, {{ $business['address']['line2'] }}, {{ $business['address']['city'] }}</span>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <x-ui.icon name="phone" class="h-4 w-4 flex-none text-primary-600" />
                        <a href="tel:{{ $business['phone_link'] }}" class="hover:text-primary-700">{{ $business['phone'] }}</a>
                    </li>
                    <li class="flex items-start gap-2.5">
                        <x-ui.icon name="clock" class="mt-0.5 h-4 w-4 flex-none text-primary-600" />
                        <span>
                            @foreach ($business['hours'] as $hour)
                                {{ $hour['day'] }}: {{ $hour['time'] }}@if (!$loop->last)<br>@endif
                            @endforeach
                        </span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mt-12 flex flex-col items-center justify-between gap-4 border-t border-primary-100 pt-8 text-xs text-ink-400 sm:flex-row">
            <p>&copy; {{ now()->year }} {{ $business['name'] }}. All rights reserved.</p>
            <p>Crafted with care for timeless beauty.</p>
        </div>
    </div>
</footer>
