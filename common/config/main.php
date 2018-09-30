<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
		//短信验证
        'sms' => [
            'class' => 'common\components\sms'
        ],
		//生成昵称
        'nickname' => [
            'class' => 'common\components\nickname'
        ],
		//根据IP地址获取实际地址
		'ipaddress' => [
			'class' => 'common\components\ipaddress'
		],
		//缓存组件
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
		//memcache配置
		'memcache' => [  
			'class' => 'yii\caching\MemCache',
			//这里简单说明一下 0是memcache, 1是memcached 两个是php里不同的扩展
			'useMemcached' =>0,
			'servers' => [  
				[  
					'host' => '127.0.0.1',  
					'port' => 11211,  
					'weight' => 100,  
				]
			],  
		],
    ],
];
