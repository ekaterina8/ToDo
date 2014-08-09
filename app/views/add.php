
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/assets/css/jumbotron-narrow.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>Votre resume</title>
    <link href="http://agitki.ru/_bl/1/69296067.png" rel="shortcut icon" />
  </head>

  <body>

   <!--  <form method="POST" action="resum.php">
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
 -->
   
      <div class="container">
        <div class="header">
          <ul class="nav nav-pills pull-right">
            <li><a href="/">Главная</a></li>
            <li class="active"><a href="/?r=add">Добавить</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Contact</a></li>
          </ul>
          <h3 class="text-muted">Project name</h3>
        </div>

      <div>
          <form role="form" method="POST" action="/?r=list">
            <div class="form-group">
        
              <label for="task">Ваша задача</label>
              <input type="text" class="form-control" name="task" id="task" placeholder="Новая задача">
            
            </div>
      </div>

      <div class="checkbox">
        <label>
            <input type="checkbox"> Выполнено
        </label>
      </div>
  
      <button type="submit" class="btn btn-default">Отправить</button>
          </form>
      </div>


      <div class="row marketing">
        <div class="col-lg-6">
        </div>

        <div class="col-lg-6">
        </div>
      </div>

      <div class="footer">
        <p>&copy; Company 2014</p>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
