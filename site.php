<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LearningPHP</title>
</head>
<body>
    <form action="site.php" method="post">
        Apples: <input type="checkbox" name="fruits[]" value="apples"> <br>
        Oranges: <input type="checkbox" name="fruits[]" value="oranges"> <br>
        Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>

        <button type="submit">Submit</button>
    </form>
    <?php
        $fruits = $_POST["fruits"];
        for($i = 0; $i < count($fruits); $i++){
            echo "$fruits[$i] <br>";
        }
    ?>
</body>
</html>