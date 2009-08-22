<?php 
/* SVN FILE: $Id$ */
/* Question Fixture generated on: 2009-08-22 12:28:35 : 1250940515*/

class QuestionFixture extends CakeTestFixture {
	var $name = 'Question';
	var $table = 'questions';
	var $fields = array(
		'id' => array('type'=>'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'section_id' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'body' => array('type'=>'string', 'null' => true, 'default' => NULL),
		'flag_question' => array('type'=>'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
	var $records = array(array(
		'id'  => 1,
		'section_id'  => 1,
		'body'  => 'Lorem ipsum dolor sit amet',
		'flag_question'  => 1
	));
}
?>