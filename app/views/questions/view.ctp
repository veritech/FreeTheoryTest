<div class="question view">
	<h2><?php print $Questions['Question']['Question_text']; ?></h2>
	<?php
		if( $Questions['Question']['Image_path'] != null ){
			echo $html->image( 'signs/'.$Questions['Question']['Image_path']);
		}
	?>
	<ol>
	<?php
	
		$answerTextArr = array();
		
		fb($Questions);
		foreach( $Questions['Answer'] as $answer ){
		
			if( $answer['Choice_Image_Path'] != null ){
				$answerTextArr[] = $html->image('signs/ '.$answer['Choice_Image_Path']);
			}
			else{
				$answerTextArr[] = $answer['Choice_text'];
			}
	
		}
	
		echo $form->create( 'question', array('action'=>'next'));
	
		echo $form->radio('Answer',$answerTextArr);

		echo $form->button('Previous');
				
		echo $form->button('flag');
		
		echo $form->end('next');
		
		
	?>
	</ol>
</div>