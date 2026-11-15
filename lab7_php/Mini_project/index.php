<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Praktikum 7 - Pemrograman Server-Side dengan PHP</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 30px auto; line-height: 1.6; }
        nav a { display: inline-block; margin: 4px 6px 4px 0; padding: 6px 12px; background: #2563eb; color: #fff; text-decoration: none; border-radius: 4px; font-size: 14px; }
        nav a:hover { background: #1d4ed8; }
        .card { border: 1px solid #ddd; padding: 16px; border-radius: 8px; margin-top: 20px; }
    </style>
</head>
<body>
    <h1>Belajar PHP — Praktikum 7</h1>
    <nav>
        <a href="index.php">Latihan 1</a>
        <a href="Form_Mahasiswa.php">Mini Project</a>
        <a href="eksperimen.php">Eksperimen Mandiri</a>
    </nav>

    <div class="card">
        <h2>Latihan 1 — Menjalankan PHP</h2>
        <?php
        echo "<p>PHP berhasil dijalankan.</p>";
        echo "<p>Waktu server: " . date("d-m-Y H:i:s") . "</p>";
        ?>
    </div>
</body>
</html>