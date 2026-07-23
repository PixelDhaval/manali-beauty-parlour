@php
    $navigation = [
        ['label' => 'Home', 'route' => 'home'],
        ['label' => 'About Us', 'route' => 'about'],
        ['label' => 'Services', 'route' => 'services'],
        ['label' => 'Packages', 'route' => 'packages'],
        ['label' => 'Contact Us', 'route' => 'contact'],
    ];
@endphp

<header id="site-header" class="sticky top-0 z-40 border-b border-transparent bg-cream/80 backdrop-blur-md transition-shadow duration-300 [&.is-scrolled]:border-primary-100 [&.is-scrolled]:shadow-sm [&.is-scrolled]:shadow-primary-900/5">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-6 px-5 py-4 sm:px-8">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" alt="{{ config('business.name') }}" class="h-10 w-auto sm:h-11">
        </a>

        <nav class="hidden items-center gap-8 lg:flex">
            @foreach ($navigation as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="text-sm font-medium transition {{ request()->routeIs($item['route']) ? 'text-primary-700' : 'text-ink-600 hover:text-primary-700' }}"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
        </nav>

        <div class="hidden items-center gap-3 lg:flex">
            <a href="tel:{{ config('business.phone_link') }}" class="flex items-center gap-2 text-sm font-medium text-ink-600 hover:text-primary-700">
                <x-ui.icon name="phone" class="h-4 w-4" />
                {{ config('business.phone') }}
            </a>
            <x-ui.button href="{{ route('contact') }}" size="sm">Book Appointment</x-ui.button>
        </div>

        <button
            type="button"
            id="nav-toggle"
            class="flex h-10 w-10 items-center justify-center rounded-full border border-primary-100 text-primary-700 lg:hidden"
            aria-label="Toggle navigation menu"
            aria-expanded="false"
            aria-controls="mobile-nav"
        >
            <x-ui.icon name="menu" class="h-5 w-5" />
        </button>
    </div>

    <div
        id="mobile-nav"
        class="max-h-0 overflow-hidden border-t border-primary-100 bg-cream transition-[max-height] duration-300 ease-in-out lg:hidden [&.is-open]:max-h-[26rem]"
    >
        <nav class="flex flex-col gap-1 px-5 py-4 sm:px-8">
            @foreach ($navigation as $item)
                <a
                    href="{{ route($item['route']) }}"
                    class="rounded-xl px-3 py-2.5 text-sm font-medium {{ request()->routeIs($item['route']) ? 'bg-primary-50 text-primary-700' : 'text-ink-600' }}"
                >
                    {{ $item['label'] }}
                </a>
            @endforeach
            <div class="mt-3 flex flex-col gap-3 border-t border-primary-100 pt-4">
                <a href="tel:{{ config('business.phone_link') }}" class="flex items-center gap-2 text-sm font-medium text-ink-600">
                    <x-ui.icon name="phone" class="h-4 w-4" />
                    {{ config('business.phone') }}
                </a>
                <x-ui.button href="{{ route('contact') }}" size="sm" class="w-full">Book Appointment</x-ui.button>
            </div>
        </nav>
    </div>
</header>
