<?php 

$text = $_GET['text'] ?? "NO Text";
$badWord = trim($_GET['bad-word'], "") ?? 'No Bad word';
$censoredText = $_GET['bad-word'] 
								? ucfirst(str_replace(strtolower($badWord), '***', strtolower($text)))
								: $text;

// if ()ucfirst(str_replace(strtolower($badWord), '***', strtolower($text)));

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- CDN Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

	<title>Form GET</title>
</head>
<body>
	<div class="container my-3">
		<div class="row">
			<div class="col-5">
				<h2>Landing Page</h2>	
				
				<p>TEXT: <?php echo $text ?></p>
				<p>Il paragrafo è composto da <?php echo strlen($text) ?> caratteri.</p>
				<p>____________________________________________________________________________</p>
				<p>TEXT: <?php echo $censoredText ?></p>
				<p>Il paragrafo è composto da <?php echo strlen($censoredText) ?> caratteri.</p> 
			</div>
		</div>
	</div>
</body>
</html>