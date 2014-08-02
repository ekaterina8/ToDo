найти материал по всем ф-ям работы с массивами и написать код, где используются эти ф-ции
написать форму добавл туду и в реквест дописать гет парам в тоду адд, дата и титле получить в адд
посмотреть исходники опенкард и индекс рнр
Три основные принципа ООП:
- инкапсуляция - cокрытие реализации при помощи модификаторов
- полиморфизм
- наследование

cd /var/www/diff
ls
diff testDiff1 testDiff2
ls -al

для инициализации репозитория
cd /var/www/creersite/www/todo
git init

Основные работы с гитом:
git status

Добавляем репозиторий git add toDo.php

subl .gitignor - создание файла в саблайн, в котором прописываем файлы, которые будем игнорировать

git commit -m "first commit" - запоминает состояние файлов
git commit -m "second commit"

git commit -am "second commit" - все файлы

git diff - показывает изменения

commit - создает ревизию


git log - показывает id каждого commit
затем git chechout "id"

git checkout master - переходим к верхнему commit

<?php

class Car {
	public $color;  //protected, private           - параметры, модификаторы доступа
	public $maxSpeed;

	private $speed = 0;
	public function go ($speed)						//- методы
	{
		$this->speed = $speed;  		//обращение к объекту изнутри объекта
	}

}

$lada = new Car();
$lada->color = "green";
$lada->maxSpeed = 100;
$lada->go(50);

$ford = new Car();
$ford->color = "red";
$ford->maxSpeed = 300;

class Journee {
	public $matin;
	public $midi;
	public $apresMidi;
	public $soir;
	public $nuit;
}

$lundi = new Journee();
$lundi->matin = $_POST['dat1']+$_POST['exr1'];


class Request{
	getParam()
	getPost()
	getRout()
}