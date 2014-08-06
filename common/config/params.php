<?php
return [
	'app' => [
	    'siteDomain' => 'http://frontend',
	    'staticsDomain' => 'http://static',
		'adminEmail' => 'admin@yii2-start',
		'robotEmail' => 'robot@yii2-start',
		'allowHtmlTags' => 'p,span,strong,ul,ol,li,em,u,strike,br,hr,img,a',
		'moreTag' => '<!--more-->',
		'morePattern' => '<p><!--more--></p>',
	],
	'components.db' => [
		'class' => 'yii\db\Connection',
		'dsn' => 'mysql:host=127.0.0.1;dbname=yii2-start',
		'username' => 'root',
		'password' => '',
		'charset' => 'utf8',
		'tablePrefix' => 'tbl_'
	],
	'components.cache' => [
		'class' => 'yii\caching\FileCache',
		'cachePath' => '@root/cache',
		'keyPrefix' => 'yii2start'
	],
	'components.mail' => [
	    'class' => 'yii\swiftmailer\Mailer',
	    'viewPath' => '@common/mails'
	]
];