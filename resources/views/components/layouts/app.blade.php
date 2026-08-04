@props([
    'title',
    'description',
    'keywords' => null,
    'ogImage' => null,
])

@php
    $siteName = config('business.name');
    $fullTitle = $title === $siteName ? $title : "$title | $siteName";
    $canonical = url()->current();
    $shareImage = $ogImage ?? asset('images/logo.png');
@endphp

<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $fullTitle }}</title>
    <meta name="description" content="{{ $description }}">
    @if ($keywords)
        <meta name="keywords" content="{{ $keywords }}">
    @endif
    <meta name="robots" content="index, follow">
    <meta name="author" content="{{ $siteName }}">
    <link rel="canonical" href="{{ $canonical }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $fullTitle }}">
    <meta property="og:description" content="{{ $description }}">
    <meta property="og:url" content="{{ $canonical }}">
    <meta property="og:image" content="{{ $shareImage }}">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $fullTitle }}">
    <meta name="twitter:description" content="{{ $description }}">
    <meta name="twitter:image" content="{{ $shareImage }}">

    <link rel="icon" href="{{ asset('favicon.ico') }}" sizes="any">
    <meta name="theme-color" content="#d0126f">

    <meta name="facebook-domain-verification" content="ige5c4iuhyiu5cnf676m20myrlzcue" />

    <x-seo.local-business-schema />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-ink-800 antialiased">
    <x-layout.page-loader />

    <a href="#main-content" class="sr-only focus:not-sr-only focus:fixed focus:left-4 focus:top-4 focus:z-50 focus:rounded-full focus:bg-primary-600 focus:px-4 focus:py-2 focus:text-sm focus:text-white">
        Skip to content
    </a>

    <x-layout.header />

    <main id="main-content">
        {{ $slot }}
    </main>

    <x-layout.footer />

    <a
        href="{{ config('business.whatsapp_link') }}"
        target="_blank"
        rel="noopener"
        aria-label="Chat on WhatsApp"
        class="fixed bottom-6 right-6 z-30 flex h-14 w-14 items-center justify-center rounded-full bg-herbal-500 text-white shadow-lg shadow-herbal-700/30 transition hover:-translate-y-1 hover:bg-herbal-600"
    >
        <x-ui.icon name="whatsapp" class="h-6 w-6" />
    </a>
</body>
</html>
