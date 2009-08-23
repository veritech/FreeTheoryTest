<div class="question view">
	<h2><?php print $Questions['Question']['Question_text']; ?></h2>
	<ol>
	<?php
	
		$answerTextArr = array();
	
		foreach( $Questions['Answer'] as $answer ){
		
			$answerTextArr[] = $answer['Choice_text'];
	
		}
	
		echo $form->create( 'question', array('action'=>'next'));
	
		echo $form->radio('Answer',$answerTextArr);

		echo $form->button('Previous');
				
		echo $form->button('flag');
		
		echo $form->end('next');
		
		
	?>
	</ol>
</div>