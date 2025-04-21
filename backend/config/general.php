<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here. You can see a
 * list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 * @link https://craftcms.com/docs/5.x/reference/config/general.html
 */

use craft\config\GeneralConfig;
use craft\helpers\App;

return [
    '*' => [
        'allowAdminChanges' => (bool) App::env('CRAFT_ALLOW_ADMIN_CHANGES'),
        'devMode' => (bool) App::env('CRAFT_DEV_MODE'),
        // Prevent generated URLs from including "index.php"
        'omitScriptNameInUrls' => true,
        // Preload Single entries as Twig variables
        'preloadSingles' => true,
        // Prevent user enumeration attacks
        'preventUserEnumeration' => true,
        'allowedGraphqlOrigins' => [
            'http://localhost:5173',
            'http://127.0.0.1:5173',
            'https://trg-mockup.vercel.app/',
        ],
        'aliases' => [
            '@webroot' => dirname(__DIR__) . '/web',
        ],
    ],
];
