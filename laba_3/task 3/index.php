<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.8, maximum-scale=1.8, minimum-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BAZAR</title>
</head>
<body>
    <form action="Save.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>
        <label for="category">Category:</label>
        <select name="category" required>
            <?php
            $path = "./categories/";
            if (is_dir($path))
            {
                $folders = array_filter(glob($path . '*'), 'is_dir');
                foreach ($folders as $folder)
                {
                    $name = basename($folder);
                    echo "<option value=\"$name\">$name</option>";
                }
            }
            ?>
        </select>
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <label for="description">Description:</label>
        <textarea rows="5" name="description" id="description" required></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>
