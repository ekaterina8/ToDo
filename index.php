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
   if(!isset($_GET['form'])){
        echo "Not found form";
        return;
    }
    
?>
<html>
<head>

    <meta charset="utf-8">
    <title>Votre resume</title>
    <link href="http://agitki.ru/_bl/1/69296067.png" rel="shortcut icon" />

</head>
<body>

    <center><h2>ADD</h2></center>
    <form method="POST" action="resum.php">
        <center><p>Представьтесь, пожалуйста:</p><br />
            <input type="text" name="name" size="50" autofocus tabindex="1" placeholder="Как Вас зовут?" /><br />
            
        <div class="pourpar"> 
            Придумайте пароль
            <input type="password" name="parol" required /><br />
            Повторите
            <input type="password" name="repeteParol" required /><br />
        </div>

            <input type="submit" name="send" value="Отправить" /><br />
        </center>
    </form>

</body>
</html>

<?php
    
    if ($_POST["send"]) {
    
        echo $request->getPost("name");
        echo "<br/>";
        echo $request->getPost("parol");
        echo "<br/>";   
    }
   // include __DIR__."/app/views/add.php";
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
