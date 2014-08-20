﻿<?php

class ZeroException extends Exception
{

} 
class TenException extends Exception
{

}

function inverse($x) {
	if(!$x) {
		throw new ZeroException("Деление на ноль");
	}
	if ($x > 10) {
		throw new TenException("Больше 10");
	}
	return 1/$x;
}

try {
	echo inverse(0) . "<br/>";
	echo inverse(45) . "<br/>";
} catch (ZeroException $e) {
	echo "Выброшено исключение: ", $e->getMessage(), "<br />";
} catch (TenException $e) {
	echo "Выброшено исключение: ", $e->getMessage(), "<br />";
}

// try {
// 	echo inverse(5) . "<br/>";
// 	echo inverse(0) . "<br/>";
// } catch (TenException $e) {
// 	echo "Выброшено исключение: ". $e->getMessage(). "<br/>";
// }

//finily в перехвате exception