<?php
// Start the session
session_start();

// Get the folder name and file name from the session
$folderNama = $_SESSION["txtNamaFolder"];
$failNama = $_SESSION["txtNamaFail"];

// Display the file name
echo "<h2>Nama Fail: " . $failNama . "</h2>";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$mesej = $_POST["txtMesej"];
	
	if (!empty($mesej)) {
		
		$_SESSION["txtNamaFolder"] = $folderNama;
		$_SESSION["txtNamaFail"] = $failNama;
		$_SESSION["txtMesej"] = $mesej;
		header("Location: simpan.php");
        exit;
	} else {
        $error = "Please enter a folder name";
	}
}
?>

<form method="post">
    <label for="txtMesej">Mesej:</label>
    <input type="text" id="txtMesej" name="txtMesej" required>
    <button type="submit">Hantar</button>
</form>