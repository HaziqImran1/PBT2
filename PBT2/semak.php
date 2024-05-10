<?php
	session_start();
	
	$folderNama = $_SESSION["txtNamaFolder"];
	$failNama = $_SESSION["txtNamaFail"];
	
	if (!empty($folderNama) && !empty($failNama)) {
		echo "Baca File di sini...</br>";
		
		$filePath = $folderNama . "/" . $failNama . ".txt";
		$file = fopen($filePath, "r");
		echo fgets($file);
		fclose($file);
		
		$_SESSION["txtNamaFolder"] = $folderNama;
		$_SESSION["txtNamaFail"] = $failNama;
		
		echo "<form method='post' action='delete.php'>";
		echo "<script>
            function confirmDelete() {
                if (confirm('Buang Folder?')) {
                    document.forms[0].submit();
                }
            }
          </script>";

		echo "<button onclick='confirmDelete()'>Delete</button>";
		echo "</form>";
		
		echo "<form action='mula.php'>";
		echo "<button type='submit' name='submit'>Kembali</button>";
		echo "</form>";	
	}
?>