<?php
// Eksperimen 3: Function format Rupiah
function formatRupiah($angka) {
    return "Rp" . number_format((float)$angka, 0, ",", ".");
}

// Eksperimen 1: Rata-rata 3 komponen nilai
$tugas = 85;
$uts   = 80;
$uas   = 90;
$rataRata = ($tugas + $uts + $uas) / 3;

// Eksperimen 2: Pencarian nama dari array dengan GET
$daftarNama = ["Adita Eka Pratama", "Alya", "Bima", "Citra", "Doni", "Rizky"];
$kataCari = trim($_GET["cari_nama"] ?? "");
$hasilCari = [];
if ($kataCari !== "") {
    foreach ($daftarNama as $namaItem) {
        if (stripos($namaItem, $kataCari) !== false) {
            $hasilCari[] = $namaItem;
        }
    }
}

// Eksperimen 4 & 5: Validasi NIM (angka, 8-12 digit) & Tombol Reset
$nimValid = null;
$errorNim = "";
if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["cek_nim"])) {
    $nimInput = trim($_POST["nim"] ?? "");
    if (!ctype_digit($nimInput) || strlen($nimInput) < 8 || strlen($nimInput) > 12) {
        $errorNim = "NIM tidak valid: wajib berisi angka dengan panjang 8 sampai 12 digit.";
    } else {
        $nimValid = $nimInput;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Eksperimen Mandiri - Praktikum 7</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 30px auto; line-height: 1.6; }
        section { border: 1px solid #ddd; padding: 16px; border-radius: 8px; margin-bottom: 18px; }
        .error { color: #b91c1c; font-weight: bold; }
        .sukses { color: #15803d; font-weight: bold; }
    </style>
</head>
<body>
    <p><a href="index.php">&larr; Kembali ke Menu Utama</a></p>
    <h1>Eksperimen Mandiri</h1>

    <section>
        <h3>1. Perhitungan Rata-Rata Tiga Komponen Nilai</h3>
        <p>Tugas: <?= $tugas ?> | UTS: <?= $uts ?> | UAS: <?= $uas ?></p>
        <p><strong>Rata-rata Nilai:</strong> <?= number_format($rataRata, 2) ?></p>
    </section>

    <section>
        <h3>2. Pencarian Nama dari Array (Metode GET)</h3>
        <p>Daftar tersedia: <?= htmlspecialchars(implode(", ", $daftarNama), ENT_QUOTES, "UTF-8") ?></p>
        <form method="GET" action="">
            <input type="text" name="cari_nama" placeholder="Ketik nama..." value="<?= htmlspecialchars($kataCari, ENT_QUOTES, "UTF-8") ?>">
            <button type="submit">Cari</button>
            <a href="eksperimen.php">Reset Pencarian</a>
        </form>
        <?php if (isset($_GET["cari_nama"])): ?>
            <p><strong>Hasil:</strong>
                <?= empty($hasilCari) ? "Tidak ditemukan." : htmlspecialchars(implode(", ", $hasilCari), ENT_QUOTES, "UTF-8") ?>
            </p>
        <?php endif; ?>
    </section>

    <section>
        <h3>3. Function Format Rupiah</h3>
        <p>Contoh harga <code>150000</code> &rarr; <strong><?= formatRupiah(150000) ?></strong></p>
        <p>Contoh harga <code>2750500</code> &rarr; <strong><?= formatRupiah(2750500) ?></strong></p>
    </section>

    <section>
        <h3>4 &amp; 5. Validasi NIM (8–12 Digit Angka) &amp; Tombol Reset</h3>
        <form method="POST" action="" id="formNim">
            <label for="nim">Masukkan NIM:</label>
            <input type="text" id="nim" name="nim" placeholder="Contoh: 312510449">
            <button type="submit" name="cek_nim">Validasi NIM</button>
            <button type="reset">Reset Form</button>
        </form>
        <?php if ($errorNim !== ""): ?>
            <p class="error"><?= htmlspecialchars($errorNim, ENT_QUOTES, "UTF-8") ?></p>
        <?php elseif ($nimValid !== null): ?>
            <p class="sukses">NIM Valid: <?= htmlspecialchars($nimValid, ENT_QUOTES, "UTF-8") ?></p>
        <?php endif; ?>
    </section>
</body>
</html>