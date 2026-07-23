@props(['name', 'class' => 'h-6 w-6'])

@php
    $attrs = 'class="' . $class . '" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"';
@endphp

@switch($name)
    @case('leaf')
        <svg {!! $attrs !!}>
            <path d="M20 4c-9 0-15 5-15 13 0 1.5.2 2.5.5 3.2C7 13 12 9 19 6" />
            <path d="M5.5 20.2C5.5 12 11 6 20 4c1 8-4 15-13.5 16.2Z" />
        </svg>
        @break

    @case('spa')
        <svg {!! $attrs !!}>
            <path d="M12 3c2 2.5 3 5 3 7a3 3 0 1 1-6 0c0-2 1-4.5 3-7Z" />
            <path d="M5 13c1.8 1 3 2.8 3 5" />
            <path d="M19 13c-1.8 1-3 2.8-3 5" />
            <path d="M4 21c2.5-2.5 5-3.5 8-3.5s5.5 1 8 3.5" />
        </svg>
        @break

    @case('scissors')
        <svg {!! $attrs !!}>
            <circle cx="6" cy="6" r="2.75" />
            <circle cx="6" cy="18" r="2.75" />
            <line x1="20" y1="4" x2="8.5" y2="15.5" />
            <line x1="14.7" y1="14.7" x2="20" y2="20" />
            <line x1="8.5" y1="8.5" x2="12" y2="12" />
        </svg>
        @break

    @case('droplet')
        <svg {!! $attrs !!}>
            <path d="M12 3.5s6 6.4 6 11a6 6 0 1 1-12 0c0-4.6 6-11 6-11Z" />
        </svg>
        @break

    @case('hand-sparkles')
        <svg {!! $attrs !!}>
            <path d="M7 12V6.5a1.5 1.5 0 0 1 3 0V11" />
            <path d="M10 11V5a1.5 1.5 0 0 1 3 0v6" />
            <path d="M13 11V6.5a1.5 1.5 0 0 1 3 0V12" />
            <path d="M16 12v-3a1.5 1.5 0 0 1 3 0v6c0 3.3-2.5 6-6 6h-1c-3 0-4.5-1-6-3l-2.2-3.2a1.4 1.4 0 0 1 2-2L7 14" />
        </svg>
        @break

    @case('nail-polish')
        <svg {!! $attrs !!}>
            <path d="M9 3h6" />
            <path d="M10 3v3.5L8 9.5V19a2 2 0 0 0 2 2h4a2 2 0 0 0 2-2V9.5l-2-3V3" />
        </svg>
        @break

    @case('body')
        <svg {!! $attrs !!}>
            <circle cx="12" cy="5" r="2.2" />
            <path d="M8 21v-6l-2.5-4.5A1.5 1.5 0 0 1 7 8h10a1.5 1.5 0 0 1 1.5 2.5L16 15v6" />
            <path d="M9.5 15h5" />
        </svg>
        @break

    @case('makeup')
        <svg {!! $attrs !!}>
            <rect x="6" y="9" width="6" height="12" rx="2" />
            <path d="M9 9V5a2 2 0 0 1 4 0" />
            <path d="M15 5.5 20 3l-1 5.5-3.5 2" />
        </svg>
        @break

    @case('crown')
        <svg {!! $attrs !!}>
            <path d="M4 18h16" />
            <path d="M4 18 3 8l5 4 4-7 4 7 5-4-1 10Z" />
        </svg>
        @break

    @case('sparkle')
        <svg {!! $attrs !!}>
            <path d="M12 3v5M12 16v5M3 12h5M16 12h5M6 6l3 3M18 6l-3 3M6 18l3-3M18 18l-3-3" />
        </svg>
        @break

    @case('shield-check')
        <svg {!! $attrs !!}>
            <path d="M12 3 5 6v5c0 4.6 3 8 7 9 4-1 7-4.4 7-9V6l-7-3Z" />
            <path d="m9.5 12 2 2 3.5-4" />
        </svg>
        @break

    @case('heart')
        <svg {!! $attrs !!}>
            <path d="M12 20.5S3.5 15 3.5 9a4.5 4.5 0 0 1 8.5-2 4.5 4.5 0 0 1 8.5 2c0 6-8.5 11.5-8.5 11.5Z" />
        </svg>
        @break

    @case('users')
        <svg {!! $attrs !!}>
            <circle cx="9" cy="8" r="3" />
            <path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6" />
            <circle cx="17" cy="9" r="2.3" />
            <path d="M15.5 14a4.7 4.7 0 0 1 5.5 5.5" />
        </svg>
        @break

    @case('badge-check')
        <svg {!! $attrs !!}>
            <path d="m8.5 3.5 1.9 1 2-1.4 2 1.4 1.9-1 .6 2.2 2.2.6-1 1.9 1.4 2-1.4 2 1 1.9-2.2.6-.6 2.2-1.9-1-2 1.4-2-1.4-1.9 1-.6-2.2-2.2-.6 1-1.9-1.4-2 1.4-2-1-1.9Z" />
            <path d="m9 12 2 2 4-4" />
        </svg>
        @break

    @case('calendar')
        <svg {!! $attrs !!}>
            <rect x="3.5" y="5" width="17" height="15.5" rx="2" />
            <path d="M3.5 9.5h17M8 3v3.5M16 3v3.5" />
        </svg>
        @break

    @case('clock')
        <svg {!! $attrs !!}>
            <circle cx="12" cy="12" r="8.5" />
            <path d="M12 7.5V12l3 2" />
        </svg>
        @break

    @case('phone')
        <svg {!! $attrs !!}>
            <path d="M6.5 3.5h3l1.5 4-2 1.5a11 11 0 0 0 5 5l1.5-2 4 1.5v3a2 2 0 0 1-2.2 2A17 17 0 0 1 4.5 5.7a2 2 0 0 1 2-2.2Z" />
        </svg>
        @break

    @case('whatsapp')
        <svg {!! $attrs !!} stroke-width="1.3">
            <path d="M7 19.5 4.5 21l1.5-3.9A8 8 0 1 1 12 20a8 8 0 0 1-3.6-.85z" />
            <path d="M9 9.5c0 3 2.5 5.5 5.5 5.5.5 0 1-.5 1-1.2v-.6l-2-.9-.6.9a4.7 4.7 0 0 1-2.6-2.6l.9-.6-.9-2h-.6c-.7 0-1.2.5-1.2 1.5Z" />
        </svg>
        @break

    @case('instagram')
        <svg {!! $attrs !!}>
            <rect x="3.5" y="3.5" width="17" height="17" rx="5" />
            <circle cx="12" cy="12" r="4" />
            <circle cx="17" cy="7" r="0.7" fill="currentColor" stroke="none" />
        </svg>
        @break

    @case('facebook')
        <svg {!! $attrs !!}>
            <path d="M14 21v-7h2.5l.5-3H14V9c0-1 .3-1.7 1.8-1.7H17V4.6c-.3 0-1.3-.1-2.4-.1-2.4 0-4.1 1.5-4.1 4.2V11H8v3h2.5v7Z" />
        </svg>
        @break

    @case('map-pin')
        <svg {!! $attrs !!}>
            <path d="M12 21s7-6.4 7-11.5a7 7 0 1 0-14 0C5 14.6 12 21 12 21Z" />
            <circle cx="12" cy="9.5" r="2.3" />
        </svg>
        @break

    @case('check')
        <svg {!! $attrs !!}>
            <path d="m5 12.5 4.5 4.5L19 7.5" />
        </svg>
        @break

    @case('chevron-down')
        <svg {!! $attrs !!}>
            <path d="m6 9 6 6 6-6" />
        </svg>
        @break

    @case('menu')
        <svg {!! $attrs !!}>
            <path d="M4 6.5h16M4 12h16M4 17.5h16" />
        </svg>
        @break

    @case('close')
        <svg {!! $attrs !!}>
            <path d="m6 6 12 12M18 6 6 18" />
        </svg>
        @break

    @case('arrow-right')
        <svg {!! $attrs !!}>
            <path d="M4.5 12h15M13 5.5l6.5 6.5-6.5 6.5" />
        </svg>
        @break

    @case('quote')
        <svg {!! $attrs !!} fill="currentColor" stroke="none">
            <path d="M9.5 6C6.5 7.3 5 9.6 5 12.6c0 2.2 1.4 3.9 3.4 3.9a2.9 2.9 0 0 0 3-3c0-1.7-1.2-2.9-2.7-3 .3-1.5 1.6-2.8 3-3.3Zm9 0c-3 1.3-4.5 3.6-4.5 6.6 0 2.2 1.4 3.9 3.4 3.9a2.9 2.9 0 0 0 3-3c0-1.7-1.2-2.9-2.7-3 .3-1.5 1.6-2.8 3-3.3Z" />
        </svg>
        @break

    @case('star')
        <svg {!! $attrs !!} fill="currentColor" stroke="none">
            <path d="M12 3.5l2.6 5.4 5.9.7-4.4 4.1 1.2 5.9L12 16.7l-5.3 2.9 1.2-5.9-4.4-4.1 5.9-.7Z" />
        </svg>
        @break

    @case('sun')
        <svg {!! $attrs !!}>
            <circle cx="12" cy="12" r="4" />
            <path d="M12 3v2M12 19v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M3 12h2M19 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
        </svg>
        @break

    @case('gallery')
        <svg {!! $attrs !!}>
            <rect x="3.5" y="4.5" width="17" height="15" rx="2" />
            <circle cx="9" cy="10" r="1.6" />
            <path d="m5 18 4.5-4.5L13 17l3-3 3 4" />
        </svg>
        @break

    @default
        <svg {!! $attrs !!}>
            <circle cx="12" cy="12" r="8.5" />
        </svg>
@endswitch
