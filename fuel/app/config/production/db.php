<?php
/**
 * The test database settings. These get merged with the global settings.
 *
 * This environment is primarily used by unit tests, to run on a controlled environment.
 */

return array(
	'default' => array(
		'type'			=> 'mysqli',
		'connection'		=> array(
				'hostname'		=> '127.0.0.1',
				'port'			=> '3306',
				'database'		=> 'Yueru_site',
				'username'		=> 'root',
				'password'		=> 'root-YUERU-0209',
				'persistent'	=> false,
				'compress'		=> false,
		),
		'identifier'	=> '`',
		'table_prefix'	=> '',
		'charset'		=> 'utf8',
		'enable_cache'	=> true,
		'profiling'		=> false,
// 		'connection'  => array(
// 			'dsn'        => 'mysql:host=localhost;dbname=thinktwice_1nen',
// 			'username'   => 'root',
// 			'password'   => 'root',
// 		),
	),
);
