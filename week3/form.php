<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Week 3 Team Activity</title>
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <p>Name: <?php echo $_POST["name"]; ?></p>
  <p>Email: <a href="mailto:<?php echo $_POST["email"]; ?>"><?php echo$_POST["email"]; ?></a></p>
  <p>Major: <?php echo $_POST["major"]; ?></p>
  <p>Comments: <?php echo $_POST["comments"]; ?></p>
  <p><u>Continents Visited</u><br>
    <?php echo "<ul>"; ?>
    <?php foreach($_POST["continents"] as $selected)
  {
    echo "<li class='bullets'>".$selected."</li>";
  } ?>
    <?php echo "</ul>"; ?>
  </p>
</body>

</html>