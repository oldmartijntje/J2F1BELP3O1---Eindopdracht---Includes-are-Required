<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>good website</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'includes/header.php'; ?>
    <?php $redirectDict = array(
        'home' => 'pages/home.php',
        'Freddit' => 'pages/survive the internet.php',
        'PWV' => 'pages/gamePicker.php',
        'time' => 'pages/time.php',
        '404' => 'pages/404notFound.php',
        'FredditSecret' => 'pages/secret1.php');
        ?>
    
    <?php if (isset($_GET['page'])) {
        if (array_key_exists($_GET['page'], $redirectDict)) {
            require $redirectDict[$_GET['page']];
        } else {
            require 'pages/404notFound.php';
        }
    } else {
        require 'pages/home.php';
    }
    ?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->

	
	<!-- laad hier via php je footer in (vanuit je includes map)-->


</body>
</html>