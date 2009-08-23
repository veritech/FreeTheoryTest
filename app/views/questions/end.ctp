<?php
	
	fb($questions);
	
?>
<h2>Answers</h2>
<dl class="answer">
<?
	foreach( $questions as $key=>$question ){
		if( $tally[$key] ){
			print '<dt class="correct">'.$question['Question']['Question_text'] . '</dt>';
			
		}else{
			print '<dt class="wrong">'.$question['Question']['Question_text'] . '</dt>';
			
		}
		//print '<dt class="wrong" style="font-weight:bold">'.$question['Question']['Question_text'] . '</dt>';
		print '<dd style="display:none">';
	 	//$question['Answer'] );
		print '<ul>';
		foreach( $question['Answer'] as $index => $answer ){
			//print($userAnswers[$key]);
			if( $answer['Choice_correct'] == 1 ){
				print '<li class="correct">'. $answer['Choice_text'] . '</li>';
			}
			else{
				print '<li>'. $answer['Choice_text'] . '</li>';
			}
		}
		
		printf('<li class="user-answer">You said :%s</li>',$question['Answer'][$userAnswers[$key]]['Choice_text']);
		
		print '</ul>';
		print'</dd>';
	}
?>
</dl>
<script type="text/javascript">
	
	$( function(){
		
		$('.answer dt').click( function(){
			$(this).next('dd').toggle();
			console.log(this)
		})
		
	})
	
</script>