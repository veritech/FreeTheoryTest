<?php 
/* SVN FILE: $Id$ */
/* Section Test cases generated on: 2009-08-22 12:29:53 : 1250940593*/
App::import('Model', 'Section');

class SectionTestCase extends CakeTestCase {
	var $Section = null;
	var $fixtures = array('app.section');

	function startTest() {
		$this->Section =& ClassRegistry::init('Section');
	}

	function testSectionInstance() {
		$this->assertTrue(is_a($this->Section, 'Section'));
	}

	function testSectionFind() {
		$this->Section->recursive = -1;
		$results = $this->Section->find('first');
		$this->assertTrue(!empty($results));

		$expected = array('Section' => array(
			'id'  => 1,
			'description'  => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida,phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam,vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit,feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.'
		));
		$this->assertEqual($results, $expected);
	}
}
?>