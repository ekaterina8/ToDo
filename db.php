<?php

// print_r(PDO::getAvailableDrivers());

// Статический метод

// class Cat
// {
// 	static public $count = 0;

// 	public function __construct()
// 	{
// 		// $this -> count += 1;
// 		self::$count += 1;
// 	}

// 	public function getMay()
// 	{
// 		echo "maaay";
// 	}
// }

// echo Cat::$count . "<br />";

// $cat = new Cat();
// echo $cat::$count . "<br />";

// $cat = new Cat();
// echo $cat::$count . "<br />";

// echo Cat::$count . "<br />";




//try catch ловит Exception

$driver_options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
);

try {
	// throw new Exception("More than 10");

	// $DBH = new PDO("mysql:host=localhost;dbname=phpcourses", "root", "1111", $driver_options);

	$DBH->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
	echo $e->getMessage();
}

$query = $DBH->prepare("INSERT INTO tasks (title, resolved, createdAt ) 
		value (?, ?, ?)");															//символ конткинации "." объединение строк


$query->bindParam(1, $title);
$query->bindParam(2, $resolved);
$query->bindParam(3, $date);

$title = "Найти пингвина";
$resolved = 0;
$date = date("Y-m-d H:i:s");
$query->execute();		//выпoлнение запроса

$title = "Купить молока";
$resolved = 0;
$date = date("Y-m-d H:i:s");
$query->execute();


// $query = $DBH->prepare("INSERT INTO tasks (title, resolved, createdAt ) 
// 		value (:title, :resolved, :createdAt)");	
// $params = array("title" => "Найти пингвина", "resolved" => 0, "date" => date("Y-m-d H:i:s"));
// $query->execute($params);		

$DBH = null;			//закрытие соединения с базой данных


// throw new Exception("More than 10");
// ('Помыть кота', 0, '".date("Y-m-d H:i:s")."')");	

