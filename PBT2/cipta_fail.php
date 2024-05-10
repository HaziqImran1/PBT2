<?php
// cipta_fail.php

// Start the session
session_start();

// Get the folder name from the session
$folderNama = $_SESSION["txtNamaFolder"];

// Create the folder if it doesn't exist
if (!file_exists($folderNama)) {
    mkdir($folderNama, 0777, true);
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Get the file name from the form
$failNama = $_POST["txtNamaFail"];

// Validate the file name (e.g., check if it's not empty)
if (!empty($failNama)) {
    
		$_SESSION["txtNamaFolder"] = $folderNama;
		$_SESSION["txtNamaFail"] = $failNama;
        header("Location: pengesahan.php");
        exit;
} else {
    $error = "Please enter a file name";
}
}
?>

<!-- HTML form -->
<form method="post">
    <label for="txtNamaFail">Nama Fail:</label>
    <input type="text" id="txtNamaFail" name="txtNamaFail" required>
    <button type="submit">Cipta Fail</button>
</form>