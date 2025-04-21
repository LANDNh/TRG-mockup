<?php

use craft\helpers\App;

return [
    // Build a DSN that includes sslmode=require
    'dsn' => sprintf(
        'pgsql:host=%s;port=%s;dbname=%s;sslmode=require',
        App::env('CRAFT_DB_SERVER'),
        App::env('CRAFT_DB_PORT'),
        App::env('CRAFT_DB_DATABASE')
    ),
    'user'           => App::env('CRAFT_DB_USER'),
    'password'       => App::env('CRAFT_DB_PASSWORD'),
    'schema'         => App::env('CRAFT_DB_SCHEMA'),
    'tablePrefix'    => App::env('CRAFT_DB_TABLE_PREFIX'),
];
