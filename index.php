<!DOCTYPE html>
<html>
	<!-- <head>
		<meta charset="UTF-8">
		<title>The HNG Internship</title>
		<link rel="stylesheet" href="app/css/app.css?version=1'" type="text/css"/>
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="shortcut icon" type="image/png" href="app/img/favicon.png" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
	</head> -->

  <?php
  require_once('router.php');
  // We'll first create a router instance and then register our
  // static routes with the router. Next, we'll try to parse the
  //request url and match it against routes in the collection.
  $router = new Router;
  // Add the static routes
  $router->add([
      '/' => 'index.php',
      '/support' => 'support.php',
      '/about' => 'about.php',
      '/interns' => 'interns.php',
      '/interns/current' => 'current.php',
      '/become-intern' => 'become-intern.php',
      '/template' => 'interns/template.php',
      '/test' => 'interns/test.php'
  ]);
  $request = $_SERVER['REQUEST_URI'];
  if (strlen($request) > 1) {
    $request = rtrim($request, '/');
  }

<<<<<<< HEAD
  switch ($request) {
      case '/' :
          require __DIR__ . '/views/index.php';
          break;
      case '/support' :
          require __DIR__ . '/views/support.php';
          break;
      case '/about' :
          require __DIR__ . '/views/about.php';
          break;
      case '/interns' :
          require __DIR__ . '/views/interns.php';
          break;
      case '/interns/current' :
          require __DIR__ . '/views/current.php';
          break;
      case '/become-intern' :
          require __DIR__ . '/views/become-intern.php';
          break;
     case '/interns/lovisgod' :
          require __DIR__ . '/views/interns/lovisgod.php';
          break;    
      default:
          require __DIR__ . '/views/404.php';
          break;
  }
=======
  $view = $router->match($request);
  
  require $view;
>>>>>>> master
?>

</html>