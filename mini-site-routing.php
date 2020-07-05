<!DOCTYPE html>
<html lang="fr">


<head>
<title> mini-site-routing </title>
<meta charset ="utf-8">
<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
</head>

<body>

<nav>
<a href="mini-site-routing.pho?page=1" > Accueil </a>
<a href= "mini-site-routing.pho?page=2" >Page 2 </a>
<a href= "mini-site-routing.pho?page=1" > Page 3 </a>
</nav>

<?php
if ($_GET['page']== 1)
echo "<p> Accueil ! </p>" ;
else if ($_GET ['page'] == 2)
echo "<p> Page 2 </p>" ; 
else if ($_GET ['page']== 3)
echo "<p> Page 3 </p>";
?>

</body>
</html>