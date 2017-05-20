<?php

if(isset($_POST))

$recipe = $_POST;
$new_array = [];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recipes</title>
</head>
<body>
    <form action="" method="post">
        <input type="hidden" id="" name="recipeId" value="">
        <label for="name">Name:</label><br> 
        <input type="text" name="name"><br><br>
        <label for="recipe">Recipe:</label><br>
        <textarea name="recipe"></textarea><br><br>
        <label for="vegan">Is it vegan:</label>
        <input type="radio" name="vegan"><br><br>
        <label for="level">Level of difficulty:</label><br>
        <select name="level"> 
            <option name="easy">Easy</option>
            <option name="medium">Medium</option>
            <option name="hard">Hard</option>
        </select><br><br>        
        <input type="submit" value="save this recipe">
    </form>
</body>
</html>