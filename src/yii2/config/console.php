<?php

return [
    'controllerMap' => [
        //yii migrate-example
        'migrate-example' => [
            'class' => yii\console\controllers\MigrateController::class,
            'migrationPath' => '@vendor/zhanchmini/example/src/yii2/migrations',
            'migrationTable' => '{{%migration_example}}',
        ],
    ],
];
