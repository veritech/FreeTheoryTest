<?php
class Question extends AppModel {

	var $name = 'Question';
	
	var $useTable = 'Question_master';
	
	var $hasMany = array(
			'Answer' => array(
				'classname'=>'Answer',
				'foreignKey'=>'question_id'
				)
		);
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	// var $belongsTo = array(
	// 	'Section' => array(
	// 		'className' => 'Section',
	// 		'foreignKey' => 'section_id',
	// 		'conditions' => '',
	// 		'fields' => '',
	// 		'order' => ''
	// 	)
	// );


}
?>