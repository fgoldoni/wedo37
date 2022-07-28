<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Configurations for the user
    |--------------------------------------------------------------------------
    |
    | User configuration to manage user access using spatie/laravel-permission.
    |
    */

    'users' => [
        'roles' => [
            'administrator' => 'administrator',
            'manager' => 'manager',
            'default' => 'user',
        ],
    ],

    'cache' => [
        'keys' => [
            'resumes' => cache_prefix() . 'resumes',
            'applicants' => cache_prefix() . 'applicants',
            'applicants_browse' => cache_prefix() . 'applicants_browse',
            'jobs' => cache_prefix() . 'jobs',
            'attachments' => cache_prefix() . 'attachments',
            'comments' => cache_prefix() . 'comments',
            'team' => cache_prefix() . 'team-id',
        ],
    ],
    'sessions' => [
        'keys' => [
            'team' => 'team-id',
        ],
    ],
    'disks' => [
        'uploads' => 'uploads',
        'avatars' => 'avatars',
    ],

];
