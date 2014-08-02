<?php

include __DIR__."toDo.php";
?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Votre resume</title>
	<link href="http://agitki.ru/_bl/1/69296067.png" rel="shortcut icon" />

</head>
<body background="http://www.7rt.org/wp-content/uploads/2013/01/Wallpaper-flower-desktop-white-floppy-background-gallery.gif">

	<?php 
	echo "Имя: ";
	echo $_POST["name"]."<br />";
	echo ($_POST["photo"]."<br />");
	
	if($_POST["parol"] == $_POST["repeteParol"]) 
	{		
		echo "Пароль: " ;
		echo $_POST["parol"]."<br />";
	} else 
		{
		echo ("Пароль не принят!"."<br />");
		}
	
	echo "Номер телефона: ";
	echo $_POST["telephone"]."<br />";
	
	echo "E-mail: ";
	echo $_POST["mail"]."<br />";
	
	echo "Дата рождения: ";
	echo $_POST["date"]."<br />";
	
	echo "Страна проживания: ";
	echo $_POST["pays"]."<br />";

	echo "Увлечения и хобби: ";
	echo $_POST["hobby"]."<br />";


	$charac = $_POST["character"];
	
	if(empty($charac)) 
	{
		echo "Не выбрано ничего из предложенного.";
	} 
	else 
	{
		$B = count($charac);
		echo ("Выбрано: ");

		for ($i=0; $i<$B; $i++) 
		{
			echo ($charac[$i].",");
		}		
	}
	echo $_POST["inic"]."<br />";
	echo "Отношение к курению: ";
	echo ($_POST["fumer"]."<br />");
	?>

</body>
</html>