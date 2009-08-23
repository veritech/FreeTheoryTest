<?php 
/* SVN FILE: $Id$ */
/* SectionsController Test cases generated on: 2009-08-22 13:20:02 : 1250943602*/
App::import('Controller', 'Sections');

class TestSections extends SectionsController {
	var $autoRender = false;
}

class SectionsControllerTest extends CakeTestCase {
	var $Sections = null;

	function startTest() {
		$this->Sections = new TestSections();
		$this->Sections->constructClasses();
	}

	function testSectionsControllerInstance() {
		$this->assertTrue(is_a($this->Sections, 'SectionsController'));
	}

	function endTest() {
		unset($this->Sections);
	}
}
?>