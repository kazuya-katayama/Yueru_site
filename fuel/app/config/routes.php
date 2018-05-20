<?php
return array(
	'_root_'  => 'welcome/index',  // The default route
	'_404_'   => 'error/404',    // The main 404 route

	'contents/pachi/movie'					=> 'pachi/movie_list',
	'contents/pachi/movie/list' 		=> 'pachi/movie_list',
	'contents/pachi/movie/:uniq_id' => 'pachi/movie',
//'hello(/:name)?' => array('welcome/hello', 'name' => 'hello'),
);
