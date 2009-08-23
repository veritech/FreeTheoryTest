<?php 
/* SVN FILE: $Id$ */
/* AController Test cases generated on: 2009-08-22 13:19:45 : 1250943585*/
App::import('Controller', 'A');

class TestA extends AController {
	var $autoRender = false;
}

class AControllerTest extends CakeTestCase {
	var $A = null;

	function startTest() {
		$this->A = new TestA();
		$this->A->constructClasses();
	}

	function testAControllerInstance() {
		$this->assertTrue(is_a($this->A, 'AController'));
	}

	function endTest() {
		unset($this->A);
	}
}
?>