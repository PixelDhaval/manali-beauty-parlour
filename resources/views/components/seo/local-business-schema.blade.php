@php
    $business = config('business');

    $schema = [
        '@context' => 'https://schema.org',
        '@type' => 'BeautySalon',
        'name' => $business['name'],
        'description' => $business['description'],
        'url' => url('/'),
        'telephone' => $business['phone'],
        'email' => $business['email'],
        'priceRange' => '$$',
        'logo' => asset('images/logo.png'),
        'image' => asset('images/logo.png'),
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => $business['address']['line1'] . ', ' . $business['address']['line2'],
            'addressLocality' => $business['address']['city'],
            'addressRegion' => $business['address']['state'],
            'postalCode' => $business['address']['postal_code'],
            'addressCountry' => $business['address']['country'],
        ],
        'openingHoursSpecification' => [
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
                'opens' => '10:00',
                'closes' => '20:00',
            ],
            [
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => ['Sunday'],
                'opens' => '11:00',
                'closes' => '17:00',
            ],
        ],
        'sameAs' => array_values($business['social']),
    ];
@endphp

<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
