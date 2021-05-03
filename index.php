<index>
	<?php
		
		$host="localhost";
		$login="root";
		$pas="";
		
		// $mysqli=new mysqli($host,$log,$pas,'library_db') or die("no connection");
		$link  = mysqli_connect($host,$login,$pas) or die ("ffff");
		mysqli_select_db($link, 'mysql') or die ("db");
	?>

	<head>
        <meta charset="UTF-8">
        <link id="style" href="style.css" rel="stylesheet" type="text/css">
        <title>Библиотека</title>
    </head>

	<body>
		<?php require 'fetch_books.php' ?>
	</body>
	
</index>