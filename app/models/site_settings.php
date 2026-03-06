<?php
$site_config = [
    'head'  => [
        'home' => [
            'title' => 'Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo.',
            'meta-description' => 'Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo. Efesini 4:5'
        ],
        'la-chiesa' => [
            'title' => 'Chi siamo - Chiesa Pentecostale Unita in Europa',
            'meta-description' => 'Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo. Efesini 4:5'
        ],
        'proiezione' => [
            'title' => 'Opere in Proiezione - CPUE',
            'meta-description' => 'Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo. Efesini 4:5'
        ],
        'privacy-policy' => [
            'title' => 'Privacy Policy - Chiesa Pentecostale Unita in Europa',
            'meta-description' => 'Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo. Efesini 4:5'
        ],
        '404' => [
            'title' => '404 - Pagina non trovata',
            'meta-description' => 'Pagina non trovata. Torna alla home page della Chiesa Pentecostale Unita in Europa.'
        ],
        '503' => [
            'title' => '503 - Sito in Manutenzione - CPUE',
            'meta-description' => 'Chiesa Pentecostale Unita in Europa – Un solo Signore, una sola Fede, un solo Battesimo. Efesini 4:5'
        ],
    ],
    'hero' => [
        'home' => [
            'title' => 'Chiesa Pentecostale Unita in Europa',
            'image' => 'hero-img.png',
            // Popup Components
            'popup' => [
                'status' => true,
                'title'    => 'Chiesa Pentecostale Unita in Europa',
                'subtitle' => 'Convegno Nazionale',
                'days'     => ' 3 | 4 | 5',
                'month'    => 'Aprile',
                'city'     => 'a Milano',
                'schedule' => [
                    'venerdi'  => 'Venerdi - 19:00',
                    'sabato'   => 'Sabato - 10:00 | 15:00 | 19:00',
                    'domenica' => 'Domenica - 10:00 | 15:00'
                ],
                'location' => [
                    'venue'   => 'Teatro Bi',
                    'address' => 'Via Gianni Rodari, 3, 20032 Cormano (MI)',
                    'icon'    => 'position.svg'
                ]
            ]
        ],
        'la-chiesa' => [
            'title' => 'Chi Siamo?',
            'image' => ''
        ],
        'proiezione' => [
            'title' => 'VEDENDO LE FOLLE, NE EBBE',
            'subtitle' => 'COMPASSIONE',
            'quote' => '"Pregate dunque il padrone della messe che mandi operai nella sua messe!"',
            'verse' => 'Matteo 9:38',
            'paragraph' => 'SCOPRI LE OPERE',
            'link' => '#scopri-di-piu',
        ],
        'privacy-policy' => [
            'title' => 'Privacy Policy',
            'image' => ''
        ]
    ],
    'footer'  => []
];

return $site_config;
