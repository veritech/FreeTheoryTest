<?php 
/* SVN FILE: $Id$ */
/* Answer Fixture generated on: 2009-08-22 12:27:22 : 1250940442*/

class AnswerFixture extends CakeTestFixture {
	var $name = 'Answer';
	var $table = 'answers';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'body' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'image_url' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'flag_answer' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'body'  => 'Lorem ipsum dolor sit amet',
		'image_url'  => 'Lorem ipsum dolor sit amet',
		'flag_answer'  => 1
	));
}
?>