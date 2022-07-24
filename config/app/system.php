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
            'resumes' => 'resumes',
            'applicants' => 'applicants',
            'applicants_browse' => 'applicants_browse',
            'jobs' => 'jobs',
            'attachments' => 'attachments',
            'comments' => 'comments',
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
