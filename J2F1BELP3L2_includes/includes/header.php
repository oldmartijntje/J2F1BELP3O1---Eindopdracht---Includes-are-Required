<!-- jouw HTML voor een Header komt hier... 
Gebruik hier tenminste een header afbeelding en een menu
Zorg dat je in het menu bij elk item een url parameter zet
om te bepalen welke inhoud er ingeladen moet worden in je html
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="noMargin hiddenOverflow">
    <div class="pageHeader topPadding noTopMargin bottomPadding fullWidth menu paddingLeft">
        <a href="?page=home" class="websiteTitle menuItem whiteText">MEOW</a>
        <a href="?page=home" data-value="Home" class="menuItem whiteText magic homeTitle">Home</a>
        <a href="?page=404" data-value="404" class="menuItem whiteText magic">404</a>
        <a href="?page=Freddit" data-value="Freddit" class="menuItem whiteText magic fredditTitle">Freddit</a>
        <a href="?page=PWV" data-value="Pressurized Water Vapor" class="menuItem whiteText fancy-text magic">Pressurized water vapor</a>
        <a href="?page=time" data-value="Clock" class="menuItem whiteText magic">Clock</a>
    </div>
</body>
</html>