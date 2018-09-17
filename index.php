<?php require('getRandom.php'); ?>

<!DOCTYPE html>
<html>
<title>P1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

<body class="light-grey">

<div class="content">

<!-- Header -->
<header class="container center"> 
  <h1><b>Venkatesh Mantha</b></h1>
</header>

<div class="w3-col l4">
	<p></p>
</div>

<div class="w3-col l4">
  <!-- About Card -->
  <div class="card">
  <img src="images/photo.JPG" style="width:100%">
    <div class="container white">
    	
      	<h4 class="center"><b>About</b></h4>
      	<p>I am Venkatesh Mantha, a Software Engineer in Boston. I am originally from India, moved to US couple of years ago to pursue Masters in Computer Science. This is my first course from the Extension school and I aim to graduate with an ALM in Information Management Systems. I believe in continuous learning and revel in interacting with people from different backgrounds. Worked with various software technologies previously and I would love to add PHP to the list.</p>
    </div>
  </div>
  
  <div class="card">
  	<div class="container white">
      <h4 class="center"><b>Random Quote</b></h4>
      <p>
      	<?php
      		$quotes = [
				'Patience and Persistence will let you achieve everything.',
				'Together we can change the world, just one random act of kindness at a time.',
				'If you tell the truth, you dont have to remember anything.',
				'To live is the rarest thing in the world. Most people exist, that is all.',
				'To be yourself in a world that is constantly trying to make you something else is the greatest accomplishment.'
			];
			getRandomQuote($quotes);
		?>
      </p>
    </div>
  </div>
</div>

<div class="w3-col l4">
	<p></p>
</div>

</div>

</body>
</html>

