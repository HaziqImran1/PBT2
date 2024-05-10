<?php
// Start the session
session_start();

// Get the folder name and file name from the session
$folderNama = $_SESSION["txtNamaFolder"];
$failNama = $_SESSION["txtNamaFail"];
$mesej =  $_SESSION["txtMesej"];

if (!empty($folderNama) && !empty($failNama) && !empty($mesej)) {
	// Write mesej in Text File
	$filePath = $folderNama . "/" . $failNama . ".txt";
	$file = fopen($filePath, "w");
	fwrite($file, $mesej);
	fclose($file);
	
	echo "Telah disimpan !";
	// Pass the folder name and file name to the next page
	$_SESSION["txtNamaFolder"] = $folderNama;
	$_SESSION["txtNamaFail"] = $failNama;

	// Display the "Semak" button
	echo "<form method='post' action='semak.php'>";
	echo "<button type='submit' name='submit'>Semak</button>";
	echo "</form>";
}else{
	echo "Folder name file name,  or mesej is empty.";
}
?>