<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		'authClientCollection' => [
			            'class' => 'yii\authclient\Collection',
			            'clients' => [
			                'github' => [
			                    'class' => 'yii\authclient\clients\GitHub',
			                    'clientId' => '89df642587e55200a71a',
			                    'clientSecret' => '092b56829ab3c4914c15c2323766ec229ff81937',
			                ],
			            ],
			    ],
    ],
];


