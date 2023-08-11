<?php

require_once('systems/bootstrap.php');

$file = new SplFileObject("Account2.txt");

// Loop until we reach the end of the file.
while (!$file->eof()) {
    // Echo one line from the file.
    $arr = explode("|", $file->fgets());

    $stmt = $pdo->prepare('INSERT INTO `hoadang` (`cauhoi`, `cautraloi`) VALUES (?, ?)');
    $stmt->execute([
        $arr[0],
        $arr[1]
    ]);
}

// Unset the file to call __destruct(), closing the file handle.
$file = null;
