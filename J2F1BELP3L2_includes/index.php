<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require 'includes/header.php'; ?>

    
    <?php if (isset($_GET['page'])) {
        if ($_GET['page'] == 'home') {
            require 'pages/home.php';
        } elseif ($_GET['page'] == 'Freddit') {
            require 'pages/survive the internet.php';
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