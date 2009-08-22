<?php 
/* SVN FILE: $Id$ */
/* Section Fixture generated on: 2009-08-22 12:29:53 : 1250940593*/

class SectionFixture extends CakeTestFixture {
	var $name = 'Section';
	var $table = 'sections';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'description' => array('type'=>'text', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
	));
}
?>