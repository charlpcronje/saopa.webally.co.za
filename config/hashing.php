<?php
// config/hashing.php

return [


    // Default Hash Driver
    'driver' => 'bcrypt',


    // Bcrypt Options
    'bcrypt' => [
        'rounds' => env('BCRYPT_ROUNDS', 12),
        'verify' => true,
    ],

    // Argon Options
    'argon' => [
        'memory' => 65536,
        'threads' => 1,
        'time' => 4,
        'verify' => true,
    ]
];
