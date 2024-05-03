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
            require __DIR__ . '/vendor/autoload.php';

            $client = new \Google_Client();
            $client->setApplicationName('The table');
            $client->setScopes(['https://www.googleapis.com/auth/spreadsheets']);
            $client->setAccessType('offline');
            $path = __DIR__ . '/credentials.json';
            $client->setAuthConfig($path);

            $service = new Google\Service\Sheets($client);

            $spreadsheetId = '1j27ZtVlR7bJ62swx044yypo4aLYbAgTtQhnBkWMXmCc';

            $range = 'Лист1';

            $service = new Google_Service_Sheets($client);
            $response = $service->spreadsheets_values->get($spreadsheetId, $range);
            $values = $response->getValues();

            if (!empty($values)) {
                $isFirstRow = true;
                foreach ($values as $row) {
                    if ($isFirstRow) {
                        $isFirstRow = false;
                        continue;
                    }
                    echo '<tr>';
                    foreach ($row as $cell) {
                        echo '<td>' . htmlspecialchars($cell) . '</td>';
                    }
                    echo '</tr>';
                }
            } else {
                echo 'Пусто.';
            }
            ?>
        </table>
    </div>
</body>
</html>
