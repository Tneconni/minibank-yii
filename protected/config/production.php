<?php

return CMap::mergeArray(
	require(dirname(__FILE__).'/main.php'),
	array(
		'components'=>array(
			// uncomment the following to use a MySQL database
//			'db'=>array(
//				'connectionString'=>'mysql:host=localhost;dbname=zsztcms',
//				'emulatePrepare'=>true,
//				'username'=>'root',
//				'password'=>'gordon_8018',  //zhengtuo&*(cms
//				'charset'=>'utf8',
//				'tablePrefix'=>'',
//				'enableProfiling'=>false,
//				'schemaCachingDuration'=>3600,
//				'enableParamLogging'=>false,
//			),
			'log'=>array(
				'class'=>'CLogRouter',
				'routes'=>array(
					array(
						'class'=>'CFileLogRoute',
						'levels'=>'error, warning',
					)
				),
			),
		),

        'params'=>array(
            //暂存微信工号的id
            'ghApiId' => -1,
        ),
    )
);

