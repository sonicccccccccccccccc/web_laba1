<?php //TASK 2 AC
session_start();
if ("POST" === $_SERVER["REQUEST_METHOD"]) {
    $name= $_POST["Name"];
    $age= $_POST["Age"];
    $salary= $_POST["Salary"];
    $Color= $_POST["Color"];
    $userData= [
        'Name' => $name,
        'Age' => $age,
        'Salary' => $salary,
        'Color' => $Color
    ];
    $_SESSION['userData'] = $userData;
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task№2</title>
</head>
<body>
    <div>
    <form method="post" action="index.php">
        <textarea name="text" rows="2"></textarea>
        <input type="submit" value="Submit">
    </form>
    </div>
    <div>
        <form method="post">
            <label for="Name">Name:</label>
            <input type="text" id="Name" name="Name">
            <label for="Age">Age:</label>
            <input type="text" id="Age" name="Age">
            <label for="Salary">Salary:</label>
            <input type="text" id="Salary" name="Salary">
            <label for="Color">Favourite Color:</label>
            <input type="text" id="Color" name="Color">
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>