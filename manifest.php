<?php
$manifest = array( 
	'name' => 'Japanese Language Pack',
    'description' => 'Japanese Language Pack for <a href="http://www.ameyo-j.com" target="_blank">AmeyoJ</a>',
	'type' => 'langpack',
	'is_uninstallable' => 'Yes',
	'version' => '6.5.x',
	'acceptable_sugar_flavors' => array("CE"),
	'author' => 'Mauro Fujihara',
	'acceptable_sugar_versions' => array("regex_matches" => array("6.5.[0-9]")),
	'published_date' => '2014-03-11',
);

$installdefs = array(
	'id' => 'ja',
	'image_dir' => '<basepath>/images',
	'copy' => array(
		array('from' => '<basepath>/include', 'to' => 'include',),
		array('from' => '<basepath>/modules', 'to' => 'modules'),
	),
);
?>
