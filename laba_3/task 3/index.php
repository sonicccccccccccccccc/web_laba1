<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.8, maximum-scale=1.8, minimum-scale=1.8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BAZAR</title>
</head>
<body>
    <div id="form">
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
    </div>
    <div id="table">
        <table>
            <thead>
                <th>Email</th>
                <th>Category</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <?php
            $categ = ['Cars', 'Electronics', 'Pets','Other'];
            foreach ($categ as $category) {
                $folder = "./categories/$category";
                if (is_dir($folder)) {
                    $files = scandir($folder);
                    foreach ($files as $file) {
                        if ($file != '.' && $file != '..') {
                            $content = file_get_contents("$folder/$file");
                            $znach = explode("\n", $content);
                            echo "<tbody>";
                            echo "<td>{$znach[0]}</td>";
                            echo "<td>$category</td>";
                            echo "<td>{$znach[1]}</td>";
                            echo "<td>{$znach[2]}</td>";
                            echo "</tbody>";
                        }
                    }
                }
            }
            ?>
        </table>
    </div>
</body>
</html>
