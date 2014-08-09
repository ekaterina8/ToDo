<?php
// include __DIR__ . "/vendor/autoload.php";

include __DIR__ . "/src/Http/Request.php";

use Phpcourses\Http\Request;
$request = new Request();

if ($request->getRoute() == "list") {
    todoList($request);
}

if ($request->getRoute() == "delete") {
    todoDelete();
}

if ($request->getRoute() == "add") {
    todoAdd($request);
}

function todoList($request)
{
    $pageTitle = "ToDo List";

    $tasks = array(
        array("id" => 1, "title" => "Купить молоко", "resolved" => "Нет", "date" => "06.08.14"),
        array("id" => 2, "title" => "Проснуться", "resolved" => "Нет", "date" => "05.08.14"),
        array("id" => 3, "title" => "Покормить кота", "resolved" => "Да", "date" => "05.08.14"),
    );
 
    include __DIR__."/app/views/list.php";
   
    // echo $request->getParam("age");
    // echo "<br/>";
    // echo $request->getParam("name");
    // echo "<br/>";
    // echo $request->getParam("fname", "...");    
}

function todoDelete()
{
   
}

// http://localhost:12345/?r=add
function todoAdd($request)
{          
    echo $request->getPost("task");
    include __DIR__."/app/views/add.php";
}

function todoShow()
{

}


function todoResolve()
{

}


// $filename = __DIR__.preg_replace('#(\?.*)$#', '', $_SERVER['REQUEST_URI']);
// if (php_sapi_name() === 'cli-server' && is_file($filename)) {
//     return false;
// }

// $app = require __DIR__.'/src/app.php';
// $app->run();
