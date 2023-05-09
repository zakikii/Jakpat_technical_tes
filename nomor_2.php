<?php
function searchRooms($input, $chatRooms) {
    $result = [];
    foreach ($chatRooms as $roomName => $room) {
        foreach ($room as $message) {
            if (stripos($message['user'], $input) !== false || stripos($message['message'], $input) !== false) {
                $result[] = $roomName;
                break;
            }
        }
    }
    return $result;
}

$chatRooms = [
    "backend" => [
        [
            "user" => "Ari",
            "message" => "Halo",
        ],
        [
            "user" => "Ariyanto",
            "message" => "Halo juga",
        ]
    ],
    "frontend" => [
        [
            "user" => "suryanto",
            "message" => "Lorem ipsum",
        ],
        [
            "user" => "Arindo",
            "message" => "Helo",
        ]
    ]
];

if (isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
    $result = searchRooms($searchTerm, $chatRooms);
    echo "<p>Hasil pencarian untuk '$searchTerm':</p>";
    echo "<ul>";
    foreach ($result as $roomName) {
        echo "<li>$roomName</li>";
    }
    echo "</ul>";
}
?>

<form method="post">
    <label for="search">Cari chat:</label>
    <input type="text" id="search" name="search">
    <input type="submit" value="Cari">
</form>
