<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ambil kode dari permintaan POST
    $code = $_POST['code'];

    // Buat file Java
    $javaFile = fopen('Main.java', 'w');
    fwrite($javaFile, $code);
    fclose($javaFile);

    // Compile dan jalankan program Java
    exec('javac Main.java', $output, $returnCode);
    if ($returnCode === 0) {
        exec('java Main', $output, $returnCode);
    }

    // Tampilkan output atau pesan kesalahan
    if ($returnCode === 0) {
        echo implode("\n", $output);
    } else {
        echo 'Error: Failed to compile and run Java program.';
    }
}
?>
