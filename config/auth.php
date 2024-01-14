<?php

return [


    'defaults' => [
        'guard' => 'api',
        'passwords' => 'users'

    ],

    'guards' => [

        'web' => [
            'driver' => 'session',

            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'jwt',
            'provider' => 'users',
            'hash' => false,
        ],

        'admin' => [
            'driver' => 'session',
            //table name
            'provider' => 'admins',
        ],
        'doctor' => [
            'driver' => 'session',
            //table name
            'provider' => 'doctors',
        ],

        'ray_emp' => [
            'driver' => 'session',
            //table name
            'provider' => 'ray_men',
        ],



//        'patient' => [
//            'driver' => 'session',
//            //table name
//            'provider' => 'patients',
//        ],

    ],


############################################
############################################
############################################
############################################

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'admins' => [
            'driver' => 'eloquent',

            'model' => App\Models\Admin::class,
        ],

        'doctors' => [
            'driver' => 'eloquent',

            'model' => App\Models\Doctor::class,

        ],


        'patients' => [
            'driver' => 'eloquent',

            'model' => App\Models\Patient::class,

        ],

        'ray_men' => [
            'driver' => 'eloquent',

            'model' => App\Models\RayMan::class,

        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],


    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_reset_tokens',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],


    'password_timeout' => 10800,

];
