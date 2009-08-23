<?php
class QuestionsController extends AppController {

	var $name = 'Questions';
	var $uses = array('Question','Answer');
	
	
	var $totalQuestions = 50;
	
	function beforeFilter(){
		parent::beforeFilter();
		
		fb($this->Session->read('user.test.start'),"Start Time");
		fb($this->Session->read('user.test.questions'),"List of questions");
		fb($this->Session->read('user.test.current_question'),"Current Question");
	}
	
	function view( $id ){
		
		$this->set(
			'Questions',
			$this->Question->findById($id) 
		);
	
	}
	
	/*
		Start of test
	*/
	function start(){
		
		//Clean the session
		$this->Session->destroy();
		
		//Save the start time
		$this->Session->write('user.test.start', time() );
		
		//Save the list of questions
		$this->Session->write(
			'user.test.questions',
			$this->Question->randomListofQuestions( $this->totalQuestions )
		);
		
		$this->Session->write(
			'user.test.current_question',
			0
		);
		

	}
	
	/*
		Next question
	*/
	function next(){
		//35 questions
		//40 minutes
		
		//Save the previous question
		if( $this->data ){
			fb($this->data);
			//Save to the session
			$answersArr = $this->Session->read('user.test.answers');
			//Add the answer
			$answersArr[] = $this->data['question']['Answer'];
			
			$this->Session->write('user.test.answers',$answersArr);
			
			fb( $answersArr, "Answers" );
			
		}
		
		$pageNo = 0;
		
		//Read the sesson number
		$pageNo = $this->Session->read('user.test.current_question');
		//$pageNo = $this->Session->read('user.question.remaining');

		//Cast it
		$pageNo = intval($pageNo);
		
		$listOfQuestions = $this->Session->read('user.test.questions');
		
		$questionID = $listOfQuestions[$pageNo];
		//Get the question
		$this->set(
			'Questions',
			$this->Question->findById( $questionID )
		);
		
		//Look for the end of the questions
		switch( $pageNo ){
			case 33:
				$this->set('finalQuestion', true );
				break;
			case 34:
				$this->redirect('end');
				break;
			default:
				$this->set('finalQuestion', false );
				break;
		}
		
		//Increment the page no
		++$pageNo;
		$this->set('questionNo', $pageNo );
		
		//Write the session number
		$this->Session->write('user.test.current_question', $pageNo );
	}
	
	/*
		End of test
	*/
	function end(){
		
		//$this->Question->recursive = 2;
		//Answers grouped by question
		$answers = $this->Question->answersForQuestions( $this->Session->read('user.test.questions')	);
		//List of the questions indexed 0-50
		$questions = $this->Session->read('user.test.questions');
		//List of answers, index 0-50
		$userAnswers = $this->Session->read('user.test.answers');

		$tally = array();
		
		$this->Question->find('threaded', array(
			'conditions'=> array(
				'Question.id'=>$questions
				)
			)
		);
		// print_r($answers);
		// print '<hr >';
		// print_r($questions);
		// print '<hr >';
		// print_r($userAnswers);
	
		foreach( $questions as $no=>$id ){
			
			$correctChoices = $answers['Question'][$id];
			foreach( $correctChoices as $choice ){
				if( $choice == $userAnswers[$no] ){
					$tally[] = true;
				}
				else{
					$tally[] = false;
				}
			}
		}
		

		$this->set('tally',$tally);
		$this->set('userAnswers',$userAnswers);
		$this->set(
			'questions', 
			$this->Question->find('threaded', array(
				'conditions'=> array(
					'Question.id'=>$questions
					)
				)
			)
		);
	}
	
}
?>
