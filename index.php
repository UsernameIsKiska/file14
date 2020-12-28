<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
	<style type="text/css">

		body {
			background-color: #f2f1ed;
		};

	</style>
<body>
	<div> <!-- 1. Все массивы создаем здесь-->
		<?php 
			$title = ["статья1", "статья2", "статья3"];
			$short_text = ["lorem", "lorem", "lorem", "lorem", "lorem"];
			$img = ["img/1.jpg", "img/2.jpg", "img/3.jpg", "img/4.jpg", "img/5.jpg"];
		 ?>
	</div>
	<?php
		$con = mysqli_connect('127.0.0.1','root','','blog');

		$query = mysqli_query($con, "SELECT * FROM posts");
        $result =  $query->fetch_assoc();
        $result1 =  $query->fetch_assoc();

		if ($con==true) {
			echo "Соединение есть";
		}else{
			echo "Соединения нет";
		}
	?> 
	<?php 
                echo  "<h1>" . $result["title"] . "</h1>"; 
                echo  "<p>" . $result["text"] . "</p>"; 
                echo  "<p>" . $result["author"] . "</p>"; 
                
                echo  "<h1>" . $result1["title"] . "</h1>"; 
                echo  "<p>" . $result1["text"] . "</p>"; 
                echo  "<p>" . $result1["author"] . "</p>"; 
              ?>
	<div class="col-7 mx-auto" style="margin-top: 50px; background-color: white;">
		<h1 class="text-center">БЛОГ</h1>
		<hr>
		<div class="col-12" style=""> <!-- 2. выводите все элементы в этом диве -->
			 <?php 
				echo '<h1 style="background-color: green;">' . $title[0] . '</h1>';
				echo '<p>' . $short_text[0] . '</p>';
				echo '<img class="w-100 src("simg/1.jpg")">' . $img[0] . '</img>';
			 ?>
		</div>
	</div>
</body>
</html>