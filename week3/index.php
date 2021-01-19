<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Week 3 Team Activity</title>
  <link href="../css/style.css" rel="stylesheet">
</head>

<body>
  <form action="form.php" method="POST">
    <label for="name">Name</label>
    <input type="text" name="name" id="name"><br>

    <label for="email">Email</label>
    <input type="email" name="email" id="email"><br><br><br>

    <p><strong><u>Major</u></strong></p>
    <?php

    $majors = array("Computer Science", "Web Design and Development", "Computer Information Technology", "Computer Engineering");

    echo '<input type="radio" id="cs" name="major" value="'.$majors[0].'">
    <label for="cs">Computer Science</label><br>';
    echo '<input type="radio" id="wdd" name="major" value="'.$majors[1].'">
    <label for="wdd">Web Design and Development</label><br>';
    echo '<input type="radio" id="cis" name="major" value="'.$majors[2].'">
    <label for="cis">Computer Information Technonlgy</label><br>';
    echo '<input type="radio" id="ce" name="major" value="'.$majors[3].'">
    <label for="ce">Computer Engineering</label><br><br><br>';
    ?>

    <label for="comments">Comments</label>
    <textarea id="comments" name="comments"></textarea><br><br>

    <p><strong><u>Which continents have you visited?</u></strong></p>
    <input type="checkbox" id="nAmerica" name="continents[]" value="na">
    <label for="nAmerica">North America</label><br>
    <input type="checkbox" id="sAmerica" name="continents[]" value="sa">
    <label for="sAmerica">South America</label><br>
    <input type="checkbox" id="europe" name="continents[]" value="e">
    <label for="europe">Europe</label><br>
    <input type="checkbox" id="asia" name="continents[]" value="as">
    <label for="asia">Asia</label><br>
    <input type="checkbox" id="australia" name="continents[]" value="au">
    <label for="australia">Australia</label><br>
    <input type="checkbox" id="africa" name="continents[]" value="af">
    <label for="africa">Africa</label><br>
    <input type="checkbox" id="antarctica" name="continents[]" value="an">
    <label for="antarctica">Antarctica</label><br><br><br>

    <input type="submit">
  </form>
</body>

</html>