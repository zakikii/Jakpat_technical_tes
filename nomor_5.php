<?php
function rowEncrypt($input) {
    $input = str_replace(' ', '', $input);
    $length = strlen($input);
    $sqrtLength = sqrt($length);
    $rows = floor($sqrtLength);
    $cols = ceil($sqrtLength);
    if ($rows * $cols < $length) {
        $rows++;
    }
    $result = '';
    for ($row = 0; $row < $rows; $row++) {
        for ($col = 0; $col < $cols; $col++) {
            $index = $row * $cols + $col;
            if ($index < $length) {
                $result .= $input[(int)$index];
            } else {
                $result .= ' ';
            }
        }
        if ($row != $rows - 1) {
            $result .= "\n";
        }
    }
    return $result;
}

function columnEncrypt($input) {
    $input = str_replace(' ', '', $input);
    $length = strlen($input);
    $sqrtLength = sqrt($length);
    $rows = floor($sqrtLength);
    $cols = ceil($sqrtLength);
    if ($rows * $cols < $length) {
        $rows++;
    }
    $result = '';
    for ($col = 0; $col < $cols; $col++) {
        for ($row = 0; $row < $rows; $row++) {
            $index = $row * $cols + $col;
            if ($index < $length) {
                $result .= $input[(int)$index];
            }
        }
        if ($col != $cols - 1) {
            $result .= ' ';
        }
    }
    return $result;
}

if (isset($_POST['input'])) {
    $input = $_POST['input'];
    $result1 = rowEncrypt($input);
    $result2 = columnEncrypt($input);
    echo "<p>Hasil enkripsi untuk '$input':</p>";
    echo "<pre>$result1</pre>";
    echo "<p>output : $result2<p>";
}
?>

<form method="post">
    <label for="input">Masukkan teks:</label>
    <input type="text" id="input" name="input">
    <input type="submit" value="Enkripsi">
</form>
