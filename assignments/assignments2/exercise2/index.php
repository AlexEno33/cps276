<?php 

$test = "uhhhhh";
$heading = "My Web Page";
$name = "Alex Eno";
$paragraph = "<p> Paragraph text to loop 3 times </p>";
$newParagraph = "";
$footer = "My Web Page";

for($i = 1; $i <= 3 ; $i++)
{
    $newParagraph .= $paragraph;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $heading ?></title>
	<style>
		* {margin: 0; padding: 0;}
		body {font: 120%/1.5 sans-serif;}
		#wrapper {width: 1000px; margin: 0 auto; border: 1px solid black;}
		header {background: green; height: 150px; padding: 20px;}
		header h1 {color: white;}
		main {padding: 10px;}
		main h2 {margin: 15px 0;}
		main p {margin-bottom: 15px;}
		footer {background: #eee; padding: 10px 0; text-align: center}
		footer p {font-size: .8em;}
	</style>
</head>
<body>
	<div id="wrapper">
		<header>
			<h1><?php echo $heading ?></h1>
		</header>
		<main>
			<h2>My name is <?php echo $name ?></h2>
			<p><?php echo $newParagraph ?></p>
			
		</main>
		<footer>
			<?php echo $footer ?>
		</footer>
	</div>
	
</body>
</html>