<div class="question next">
	<h2>Question <?php echo $questionNo; ?> of 34</h2>
	<h4><?php print $Questions['Question']['Question_text']; ?></h4>
	<ol>
	<?php
	
		$answerTextArr = array();
	
		foreach( $Questions['Answer'] as $answer ){
		
			$answerTextArr[] = $answer['Choice_text'];
	
		}
	
		echo $form->create( 'question', array('action'=>'next'));
	
		echo $form->radio('Answer',$answerTextArr);
		
		
		//Buttons
		//echo $form->button('Previous');
				
		echo $form->button('Flag for later');	
		
		if( $finalQuestion ){
			echo $form->end('Finish');
		}
		else{
			echo $form->end('Next');
		}
		
		
	?>
	</ol>
</div>