<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Superhero</title>
</head>
<body>
<header>
    <h1>The Super-Superhero System</h1>
    <h2>Record a Battle</h2>
    <p><a href="index.php">Return to Home...</a></p>
</header>
<main>
    <form action="insertBattle.php" method="post">
        <p>Select the superhero that fought in this battle</p><select name = "superhero">
            <?php
            include ("db_connect");
            $sql_query = "Select * FROM superheroes";
            $result = $db->query($sql_query);
            while($row = $result->fetch_array()){
                $firstname = $row['firstName'];
                $lastname = $row['lastName'];
                $superheroid = $row['superheroID'];
                echo "<option value='{$superheroID}'> {$firstname} {$lastname}</option>";
            }
            ?>
        </select><br>
        <input type="text" name="villain" placeholder="Villain Fought"><br>
        <input type="submit" text="Record Battle">
    </form>
</main>
</body>
</html>
