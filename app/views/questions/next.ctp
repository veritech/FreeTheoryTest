<div class="question view">
	<h4>Question <?php echo $questionNo; ?> of 34</h4>
	<h2><?php print $Questions['Question']['Question_text']; ?></h2>
	<?php
		if( $Questions['Question']['Image_path'] != null ){
			echo $html->image( 'signs/'.$Questions['Question']['Image_path']);
		}
	?>
	<ol>
	<?php
	
		$answerTextArr = array();
	
		foreach( $Questions['Answer'] as $answer ){
		
			if( $answer['Choice_image_path'] != null ){
				$answerTextArr[] = $html->image( 'signs/'. $answer['Choice_image_path']);
			}
			else{
				$answerTextArr[] = $answer['Choice_text'];
			}
	
		}
	
		echo $form->create( 'question', array('action'=>'next'));
	
		echo $form->radio('Answer',$answerTextArr);
		
		
		//Buttons
		//echo $form->button('Previous');
				
		//echo $form->button('Flag for later');	
		
		if( $finalQuestion ){
			echo $form->end('Finish');
		}
		else{
			echo $form->end('Next');
		}
		
		
	?>
	</ol>
</div>
<script type="text/javscript">
	$(function(){
		$('form').reset();
	})
</script>