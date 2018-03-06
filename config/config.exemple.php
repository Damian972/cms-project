<?php

    /**
     * Website settings:
     */
    define('WEBSITE_NAME', 'cms-project');
    define('BASE_URL', 'http://cms-project.test/');


    /**
     * Folders directories:
     */
    define('ASSETS', BASE_URL.'assets/');
    define('INC', ROOT.'includes'.DIRECTORY_SEPARATOR);
    define('TEMPLATES',ROOT.'templates'.DIRECTORY_SEPARATOR);
    define('VIEWS',ROOT.'views'.DIRECTORY_SEPARATOR);
    define('CACHE',ROOT.'tmp'.DIRECTORY_SEPARATOR);

    /**
     * Database Settings:
     */
    define('DB_HOST','localhost');
    define('DB_NAME','cms-project');
    define('DB_USER','root');
    define('DB_PASSWORD','');

    /**
     * Security:
     */
    define('SALT_KEY','');

    /**
     *  Debug : Development => true || Production => false
     */
    define('DEBUG', true);
