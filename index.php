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
    todoAdd();
}

function todoList($request)
{
    $pageTitle = "ToDo List";
    // echo $request->getParam("age");
    // echo "<br/>";
    // echo $request->getParam("name");
    // echo "<br/>";
    // echo $request->getParam("fname", "...");
    
    include __DIR__."/app/views/list.php";
}

function todoDelete()
{
    if ( !isset($_GET['id']) ) {
        echo "Id not found";
        return;   
    }
    echo $_GET['id'];
    echo "<br />Delete page";
}

// http://localhost:12345/?r=add
function todoAdd()
{
      include __DIR__."/app/views/add.php";

   if(!isset($_GET['form'])){
        echo "Not found form";
        return;
    }

    if ($_POST["send"]) {
    
        echo $request->getPost("name");
        echo "<br/>";
        echo $request->getPost("parol");
        echo "<br/>";   
    }
   
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
