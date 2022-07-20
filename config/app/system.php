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
            'roles' => 'roles',
            'users' => 'users',
            'jobs' => 'jobs',
            'permissions' => 'permissions',
        ],
    ],
    'disks' => [
        'uploads' => 'uploads',
        'avatars' => 'avatars',
    ],

];
