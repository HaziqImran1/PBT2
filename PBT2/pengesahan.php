<?php
// Start the session
session_start();

// Get the folder name and file name from the session
$folderNama = $_SESSION["txtNamaFolder"];
$failNama = $_SESSION["txtNamaFail"];

// Create the file with the specified name in the folder
$filePath = $folderNama . "/" . $failNama . ".txt";
$file = fopen($filePath, "w");
fwrite($file, "");
fclose($file);

// Check if the folder name and file name are not empty
if (!empty($folderNama) && !empty($failNama)) {
	
	echo "File telah dicipta !";
	// Pass the folder name and file name to the next page
	$_SESSION["txtNamaFolder"] = $folderNama;
	$_SESSION["txtNamaFail"] = $failNama;

	// Display the "Isi Maklumat" button
	echo "<form action='mesej.php'>";
	echo "<button type='submit' name='submit'>Isi Maklumat</button>";
	echo "</form>";
}else{
	echo "Folder name or file name is empty.";
}
?>