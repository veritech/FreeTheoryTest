<?php 
/* SVN FILE: $Id$ */
/* Answer Test cases generated on: 2009-08-22 12:27:22 : 1250940442*/
App::import('Model', 'Answer');

class AnswerTestCase extends CakeTestCase {
	var $Answer = null;
	var $fixtures = array('app.answer');

	function startTest() {
		$this->Answer =& ClassRegistry::init('Answer');
	}

	function testAnswerInstance() {
		$this->assertTrue(is_a($this->Answer, 'Answer'));
	}

	function testAnswerFind() {
		$this->Answer->recursive = -1;
		$results = $this->Answer->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Answer' => array(
			'id'  => 1,
			'body'  => 'Lorem ipsum dolor sit amet',
			'image_url'  => 'Lorem ipsum dolor sit amet',
			'flag_answer'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>