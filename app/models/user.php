<?php
class User extends AppModel {

	var $name = 'User';
	var $validate = array(
		'username' => array('alphanumeric')
	);

}
?>