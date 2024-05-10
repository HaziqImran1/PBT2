<?php
// cipta_folder.php

// Start the session
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the folder name from the form
    $folderNama = $_POST["txtNamaFolder"];

    // Validate the folder name (e.g., check if it's not empty)
    if (!empty($folderNama)) {
        // Store the folder name in the session
        $_SESSION["txtNamaFolder"] = $folderNama;

        // Redirect to cipta_fail.php
        header("Location: cipta_fail.php");
        exit;
    } else {
        $error = "Please enter a folder name";
    }
}
?>

<!-- HTML form -->
<form method="post">
    <label for="txtNamaFolder">Nama Folder:</label>
    <input type="text" id="txtNamaFolder" name="txtNamaFolder" required>
    <button type="submit">Cipta Folder</button>
    <?php if (isset($error)):?>
        <p style="color: red;"><?php echo $error;?></p>
    <?php endif;?>
</form>