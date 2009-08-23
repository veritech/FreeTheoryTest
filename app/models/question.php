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
	
	var $motorcycles = false;
	
	function beforeFind( $data ){
		fb($data,"before find");
		
		if( !$this->motorcycles ){
			
			$data['conditions']['id >'] = 164; 
			
		}
		
		return $data;
	}
	
	/*
		Get a random list of questions
	*/
	function randomListofQuestions( $no ){
		
		$sql = "SELECT DISTINCT round(RAND(1000)*1000) AS id FROM Question_master LIMIT $no;";
		
		$retVal = array();
		
		foreach(  $this->query($sql) as $row ){
			$retVal[] = $row[0]['id'];
		}
		
		return $retVal;
		
	}
	
	/*
		Get the answers for a question
	*/
	function answersForQuestions( $listOfIDs ){
		
		$ids = implode(',', $listOfIDs );
		
		$sql = <<<EOD
SELECT 
	* 
FROM 
	Question_master as Question 
INNER JOIN 
	Question_choice AS Answer 
ON 
	Question.id = Answer.question_id 
WHERE
	Answer.Choice_correct = 1
AND 
	Answer.question_id IN ($ids)
EOD;

		$result = $this->query( $sql );
		
		$retVal = array('Question'=>array());
		
		//print_r($result);
		//Loop over the tbl join
		foreach( $result as $index=>$answer ){
			
			//Get the questionid
			$questionID = $answer['Question']['id'];
	
			if( $answer['Question']['Total_answers'] == 1 ){
				$retVal['Question'][ $questionID] = array( $answer['Answer']['Choice_id'] );
			}
			else{
				//Create array
				if( !array_key_exists($questionID, $retVal['Question']) ){
					$retVal['Question'][$questionID] = array();
				}
				
				$retVal['Question'][$questionID][] = $answer['Answer']['Choice_id'];
				
			}
			
		}
		
		return $retVal;
	}
}
?>