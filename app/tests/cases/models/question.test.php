<?php 
/* SVN FILE: $Id$ */
/* Question Test cases generated on: 2009-08-22 12:28:35 : 1250940515*/
App::import('Model', 'Question');

class QuestionTestCase extends CakeTestCase {
	var $Question = null;
	var $fixtures = array('app.question', 'app.section', 'app.question_answer');

	function startTest() {
		$this->Question =& ClassRegistry::init('Question');
	}

	function testQuestionInstance() {
		$this->assertTrue(is_a($this->Question, 'Question'));
	}

	function testQuestionFind() {
		$this->Question->recursive = -1;
		$results = $this->Question->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Question' => array(
			'id'  => 1,
			'section_id'  => 1,
			'body'  => 'Lorem ipsum dolor sit amet',
			'flag_question'  => 1
		));
		$this->assertEqual($results, $expected);
	}
}
?>