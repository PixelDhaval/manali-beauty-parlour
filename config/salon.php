<?php

return [

    'categories' => [
        [
            'slug' => 'hair-care',
            'name' => 'Hair Care',
            'icon' => 'scissors',
            'description' => 'Expert cuts, styling and herbal hair therapies for strong, shining hair.',
            'items' => [
                'Hair Cuts', 'Hair Styling', 'Hair Wash', 'Blow Dry', 'Hair Colour',
                'Hair Highlights', 'Hair Spa', 'Hair Treatments', 'Hair Straightening',
                'Hair Botox', 'Hair Repair Treatments',
            ],
        ],
        [
            'slug' => 'skin-care-facials',
            'name' => 'Skin Care & Facials',
            'icon' => 'droplet',
            'description' => 'Herbal and brand facials tailored to reveal radiant, healthy skin.',
            'items' => [
                'Herbal Facials', 'Fruit Facials', 'Gold Facials', 'Whitening Facials',
                'Anti-Ageing Facials', 'D-Tan Treatments', 'Hydra Facial', 'O3+ Facials',
                'Lotus Facials', 'Kanpeki Facials', 'Shahnaz Facials', 'Sara Facials',
            ],
        ],
        [
            'slug' => 'waxing',
            'name' => 'Waxing',
            'icon' => 'sparkle',
            'description' => 'Smooth, gentle waxing using premium and herbal wax formulations.',
            'items' => ['Regular Wax', 'Cream Wax', 'Gel Wax', 'Rica Wax', 'White Chocolate Wax'],
        ],
        [
            'slug' => 'nail-care',
            'name' => 'Nail Care',
            'icon' => 'nail-polish',
            'description' => 'Creative nail art and long-lasting finishes by trained nail artists.',
            'items' => [
                'Nail Extensions', 'Gel Polish', 'Acrylic Nails', 'Nail Art',
                'Chrome Effect', 'Ombre', 'Cat Eye', 'Nail Spa',
            ],
        ],
        [
            'slug' => 'manicure-pedicure',
            'name' => 'Manicure & Pedicure',
            'icon' => 'hand-sparkles',
            'description' => 'Relaxing hand and foot therapies from classic to premium spa rituals.',
            'items' => ['Regular', 'Spa', 'Crystal', 'Classic', 'O3+', 'Pedi Pie', 'Premium Treatments'],
        ],
        [
            'slug' => 'body-care',
            'name' => 'Body Care',
            'icon' => 'body',
            'description' => 'Rejuvenating body treatments that restore glow and softness.',
            'items' => ['Body Spa', 'Body Polishing', 'Body Massage', 'D-Tan', 'Shiner Treatments'],
        ],
        [
            'slug' => 'makeup-services',
            'name' => 'Makeup Services',
            'icon' => 'makeup',
            'description' => 'Flawless makeup looks for every celebration, big or small.',
            'items' => ['Party Makeup', 'Engagement Makeup', 'Festival Makeup', 'Reception Makeup'],
        ],
        [
            'slug' => 'bridal-beauty',
            'name' => 'Bridal Beauty',
            'icon' => 'crown',
            'description' => 'A dedicated bridal journey from consultation to wedding-day glow.',
            'items' => [
                'Bridal Consultation', 'Pre-Bridal Packages', 'Bridal Skin Care',
                'Bridal Hair Styling', 'Bridal Makeup',
            ],
        ],
        [
            'slug' => 'specialty-treatments',
            'name' => 'Specialty Treatments',
            'icon' => 'leaf',
            'description' => 'Targeted herbal treatments for hair, scalp and skin concerns.',
            'items' => [
                'Herbal Hair Treatments', 'Anti-Dandruff', 'Hair Growth', 'Hair Protein',
                'Heel Peel', 'Ear Piercing',
            ],
        ],
    ],

    'faqs' => [
        [
            'question' => 'Do I need an appointment?',
            'answer' => 'While we welcome walk-ins subject to availability, we recommend booking an appointment in advance to guarantee your preferred time and beautician.',
        ],
        [
            'question' => 'Which facial is suitable for me?',
            'answer' => 'Every facial is chosen after a personalised consultation with our beauticians, based on your skin type, concerns and the occasion you are preparing for.',
        ],
        [
            'question' => 'Which waxing option should I choose?',
            'answer' => 'We offer regular, cream, gel, Rica and white chocolate wax. Our team will recommend the best option for your skin sensitivity and desired finish.',
        ],
        [
            'question' => 'Are consultations available?',
            'answer' => 'Yes, every visit begins with a complimentary consultation so we can recommend the right treatment for your goals.',
        ],
        [
            'question' => 'Are treatments customized?',
            'answer' => 'Absolutely. All our services and packages are personalised using herbal and premium professional brands suited to your skin and hair type.',
        ],
    ],

    'packages' => [
        [
            'name' => 'Glow Package',
            'featured' => false,
            'includes' => ['Sara Clean-Up', 'Full Arms Regular Waxing', 'Under Arms Waxing', 'Half Legs Waxing', 'Eyebrows'],
        ],
        [
            'name' => 'Shine Package',
            'featured' => false,
            'includes' => ['Face D-Tan', 'Glow Facial', 'Full Arms Waxing', 'Under Arms Waxing', 'Half Legs Waxing', 'Eyebrows'],
        ],
        [
            'name' => 'Grace Package',
            'featured' => false,
            'includes' => ['Face D-Tan', 'Neck D-Tan', 'Back D-Tan', 'Lotus Facial', 'Hair Spa', 'Regular Waxing', 'Eyebrows'],
        ],
        [
            'name' => 'Pearl Package',
            'featured' => false,
            'includes' => ['Face Shiner', 'Neck Shiner', 'Back Shiner', 'Kanpeki Facial', 'Gel Waxing', 'Threading'],
        ],
        [
            'name' => 'Royal Package',
            'featured' => true,
            'includes' => ['Face Shiner', 'Neck Shiner', 'Back Shiner', 'Sara Glass Glow Facial', 'Gel Waxing', 'Pedicure', 'Threading'],
        ],
        [
            'name' => 'Luxury Package',
            'featured' => false,
            'includes' => [
                'Face Shiner', 'Neck Shiner', 'Back Shiner', 'O3+ Whitening Facial', 'Rica Waxing',
                'Classic Spa Manicure', 'Classic Spa Pedicure', 'Threading',
            ],
        ],
        [
            'name' => 'Crystal Package',
            'featured' => false,
            'includes' => [
                'Face Shiner', 'Neck Shiner', 'Back Shiner', 'O3+ Korean Facial', 'Rica Waxing',
                'Hair Touch-Up', 'O3+ Hair Spa', 'O3+ Manicure', 'O3+ Pedicure', 'Threading',
            ],
        ],
        [
            'name' => 'Supreme Package',
            'featured' => true,
            'includes' => [
                'Face Shiner', 'Neck Shiner', 'Back Shiner', 'Kanpeki Hydra / Shahnaz Gold Facial',
                'Rica Waxing', 'Hair Touch-Up', 'Premium Hair Spa', 'Premium Manicure',
                'Premium Pedicure', 'Threading', 'Complimentary Gel Polish',
            ],
        ],
    ],

    'brands' => ['O3+', "L'Oréal Professionnel", 'Matrix', 'Kanpeki', 'Lotus', 'Shahnaz Husain', 'Sara', 'Rica'],

];
