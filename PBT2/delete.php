<?php
session_start();

$folderName = $_SESSION["txtNamaFolder"];
$fileName = $_SESSION["txtNamaFail"];

if (!empty($folderName) && !empty($fileName)) {
    $filePath = $folderName . "/" . $fileName . ".txt";
    unlink($filePath);

    $files = glob($folderName . "/*");
    array_map('unlink', $files);
    rmdir($folderName);

    unset($_SESSION["txtNamaFolder"]);
    unset($_SESSION["txtNamaFail"]);

    header("Location: mula.php");
    exit;
}
?>