<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    
    'modules' => [
        'datecontrol' =>  [
            'class' => 'kartik\datecontrol\Module',

            // format settings for displaying each date attribute
            'displaySettings' => [
                'date' => 'd-M-yyyy',
                'time' => 'H:i:s A',
                'datetime' => 'd-m-Y H:i:s A',
            ],

            // format settings for saving each date attribute
            'saveSettings' => [
                'date' => 'yyyy-M-d', 
                'time' => 'H:i:s',
                'datetime' => 'yyyy-m-dd H:i:s',
            ],

            // automatically use kartik\widgets for each of the above formats
            'autoWidget' => true,

        ]
    ],
    'components' => [
        
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
