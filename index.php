<?php
// include __DIR__ . "/vendor/autoload.php";

include __DIR__ . "/src/Http/Request.php";
$db = include __DIR__ . "/app/db.php";
include __DIR__ . "/app/models/Task.php";

use Phpcourses\Http\Request;
$request = new Request();

if ($request->getRoute() == "list") {
    todoList($request, $db);
}

if ($request->getRoute() == "delete") {
    todoDelete($request, $db);
}

if ($request->getRoute() == "add") {
    todoAdd($request, $db);
}

if ($request->getRoute() == "show") {
    todoShow($request, $db);
}

if ($request->getRoute() == "save") {
    todoSaveToDb($request, $db);
}

if ($request->getRoute() == "update") {
    todoUpdate($request, $db);
}

function todoList($request, $db)
{     
    $query = $db->query('SELECT id, title, resolved, createdAt from tasks');

    $query->setFetchMode(PDO::FETCH_CLASS, 'Task');
    // $query->setFetchMode(PDO::FETCH_ASSOC);

    include __DIR__."/app/views/list.php";
    // while($row = $query->fetch()) {
    //        echo $row['title'] ."|";
    //        echo $row['resolved']."|";
    //        echo $row['createdAt']."<br />";
    // }

    // $tasks = array(
    //     array("id" => 1, "title" => "Найти пингвина", "resolved" => "Нет", "date" => "06.08.14"),
    //     array("id" => 2, "title" => "Проснуться", "resolved" => "Нет", "date" => "05.08.14"),
    //     array("id" => 3, "title" => "Покормить кота", "resolved" => "Да", "date" => "05.08.14"),
    // );

    // echo $request->getParam("age");
    // echo "<br/>";
    // echo $request->getParam("name");
    // echo "<br/>";
    // echo $request->getParam("fname", "...");    
}

function todoDelete($request, $db)
{
    $id = $request->getParam("id");

    $query = $db->prepare("DELETE FROM tasks WHERE id = :id");
    $query->execute(array(
        "id" => $id
    ));

    header("Location: /");
    // var_dump($id);
}

function todoAdd($request, $db)
{   
    // var_dump($_POST);
    // var_dump($_SERVER);
    include __DIR__."/app/views/add.php";  
}

function todoShow($request, $db)
{
    $id = $request->getParam("id");
   
    $query = $db->prepare('SELECT id, title, resolved, createdAt 
        from tasks WHERE id=:id');
    
    $query->execute(array(
        "id" => $id
    ));

    // $query->setFetchMode(PDO::FETCH_ASSOC);
    $query->setFetchMode(PDO::FETCH_CLASS, 'Task');
    $task = $query->fetch();

    include __DIR__."/app/views/show.php";
}

function todoResolve()
{

}

function todoSaveToDb($request, $db)
{
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // var_dump($_POST);

    $query = $db->prepare("INSERT INTO tasks (title, resolved, createdAt ) 
                value (:title, :resolved, :createdAt)");    
    $query->execute(array(
            "title" => $request->getPost("title", ""),
            "resolved" => ($request->getPost("resolved", false)) ? 1: 0,
            "createdAt" => date("Y-m-d H:i:s")
        ));
    header('Location: /?r=list');
    }   
    
}

function todoUpdate($request, $db)
{
    $id = $request->getParam("id");

    $query = $db->prepare('SELECT id, title, resolved, createdAt 
        from tasks WHERE id=:id');
    
    $query->execute(array(
        "id" => $id ));
    $query->setFetchMode(PDO::FETCH_CLASS, 'Task');
    // $query->setFetchMode(PDO::FETCH_ASSOC);

    $task = $query->fetch();


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
    $query = $db->prepare("UPDATE tasks 
        SET
            title = :title, 
            resolved = :resolved, 
            createdAt = :createdAt
        WHERE 
            id = :id"); 
        
    $query->execute(array(
            "title" => $request->getPost("title", ""),
            "resolved" => ($request->getPost("resolved", false)) ? 1: 0,
            "createdAt" => date("Y-m-d H:i:s"),
            "id" =>$id
        ));
    header("Location: /?r=show&id=".$task["id"]);
    }
    
    include __DIR__."/app/views/update.php";
}