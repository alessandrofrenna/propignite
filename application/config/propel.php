<?php
/*
 |--------------------------------------------------------------------------
 | Propel configuration file.
 |--------------------------------------------------------------------------
 | Fell free to override anything you want in here.
 |
 | However, be carefull modifying:
 |      "path",
 |      "reverse",
 |      "migration",
 !
 | Go to the end of the file for latest recommendationsS
 |--------------------------------------------------------------------------
 | For more option follow the documentation:
 | http://propelorm.org/documentation/reference/configuration-file.html
 |--------------------------------------------------------------------------
 */

//To add a new database copy the default configuration and edit it.

$propel_dir = dirname(dirname(__DIR__)) . DIRECTORY_SEPARATOR . 'propel' . DIRECTORY_SEPARATOR;

$active_record['propel']['database']['connections']['propel'] = [
    'adapter'   => 'mysql',
    'classname' => 'Propel\Runtime\Connection\ConnectionWrapper',
    'dsn'       => 'mysql:host=localhost;port=3306;dbname=propel',
    'user'      => "root",
    'password'  => '5x_29%D$p3gzMEAP',
    
    'attributes' => [

    ],

    'options'   => [
        'ATTR_PERSISTENT' => true,
    ],

    'settings'  => [
        'charset' => 'utf8mb4',
        'queries' => [
            'utf8' => "SET NAMES utf8mb4 COLLATE utf8mb4_unicode_ci, 
            COLLATION_CONNECTION = utf8mb4_unicode_ci, COLLATION_DATABASE = 
            utf8mb4_unicode_ci, COLLATION_SERVER = utf8mb4_unicode_ci"
        ]
    ]     
];

$active_record['propel']['paths'] = [
    'projectDir'   => '../application/',
    'schemaDir'    => $propel_dir . 'schema',
    'outputDir'    => $propel_dir . 'output',
    'phpDir'       => dirname($propel_dir) . '/application/models',
    'phpConfDir'   => $propel_dir . 'config',
    'migrationDir' => $propel_dir . 'migrations',
    'sqlDir'       => $propel_dir . 'sql',
    'composerDir'  => dirname($propel_dir)
];

$active_record['propel']['runtime'] = [
    'defaultConnection' => 'propel',
    'connections' => ['propel']
];

$active_record['propel']['generator'] = [
    'defaultConnection' => 'propel',
    'connections' => ['propel'],
    'tablePrefix' => '',
    'namespaceAutoPackage' => false,
    'recursive' => true
];

$active_record['propel']['reverse'] = [
    'connection'  => 'propel',
    'parserClass' => '\Propel\Generator\Reverse\MysqlSchemaParser'
]; 

$active_record['propel']['migrations'] = [
    'tableName' => 'database_migrations'
]; 

return $active_record;

//When you finished to edit your configuration file, from the CLI inside the
//root folder you must execute (if you did not set the cli as ENV variable in your OS):
// vendor/bin/propel config:convert --config-dir application/config