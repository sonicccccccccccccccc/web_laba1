<?php
require_once 'vendor/autoload.php';
$client = new Google_Client();
$client->setAuthConfig('credentials.json');
$client->setScopes([Google_Service_Sheets::SPREADSHEETS]);

$service = new Google_Service_Sheets($client);

$spreadsheetId = '1j27ZtVlR7bJ62swx044yypo4aLYbAgTtQhnBkWMXmCc';
$range = 'Лист1';

$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$values = [
    [$email, $category, $title, $description],
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $values
]);

$params = [
    'valueInputOption' => 'RAW'
];

$result = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params
);

if ($result) {
    echo 'Данные успешно добавлены в таблицу!!!';
} else {
    echo 'Error 404';
}

$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

if (!empty($values)) {
    echo "<table border='1'>";
    foreach ($values as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>$cell</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Данных нету";
}