<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
	<head>
		<?php
			
			echo $html->css('yui.css');
			echo $html->css('main.css');
			echo $javascript->link('jquery-1.3.2.min.js');
		?>
		<title><?php echo $title_for_layout; ?></title>
	</head>
	<body>
		<div id="doc">
			<div id="hd">
			</div>
			<div id="bd">
				<?php echo $content_for_layout; ?>
			</div>
			<div id="ft">
			</div>
		</div>
	</body>
</html>
