<?php
class Answer extends AppModel {

	var $name = 'Answer';
	var $validate = array(
		'image_url' => array('url'),
		'flag_answer' => array('boolean')
	);

}
?>