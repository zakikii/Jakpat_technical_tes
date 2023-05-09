<?php
function pageFlipCount($totalPages, $targetPage) {
    $fromFirst = floor($targetPage / 2);
    $fromLast = floor(($totalPages - $targetPage) / 2);
    return min($fromFirst, $fromLast);
}

$totalPages = 231;

if (isset($_POST['targetPage'])) {
    $targetPage = $_POST['targetPage'];
    $result = pageFlipCount($totalPages, $targetPage);
    if ($targetPage<=115) {
        echo "From first page flip ${result}x\n";
    }else{
        echo "From last page flip ${result}x\n";
    }
    
}
?>

<form method="post">
    <label for="targetPage">Masukkan nomor halaman:</label>
    <input type="number" id="targetPage" name="targetPage">
    <input type="submit" value="Cari">
</form>
