<?php
require_once __DIR__ . "/proses_mahasiswa.php";

function e(string|int|float $value): string
{
    return htmlspecialchars((string)$value, ENT_QUOTES, "UTF-8");
}

$oldNama = $_POST["nama"] ?? "";
$oldNim = $_POST["nim"] ?? "";
$oldProdi = $_POST["prodi"] ?? "";
$oldSemester = $_POST["semester"] ?? "";
$oldEmail = $_POST["email"] ?? "";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Php</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 680px;
            margin: 32px auto;
            padding: 0 16px;
            line-height: 1.5;
            color: #1f2937;
        }
        .card {
            border: 1px solid #d1d5db;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 20px;
            background: #ffffff;
        }
        .field {
            margin-bottom: 14px;
        }
        label {
            display: block;
            font-weight: bold;
            margin-bottom: 4px;
        }
        input {
            width: 100%;
            box-sizing: border-box;
            padding: 8px 10px;
            border: 1px solid #9ca3af;
            border-radius: 6px;
        }
        .actions {
            display: flex;
            gap: 10px;
            margin-top: 16px;
        }
        button {
            padding: 9px 16px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: bold;
        }
        button[type="submit"] {
            background: #2563eb;
            color: #ffffff;
        }
        button[type="reset"] {
            background: #e5e7eb;
            color: #111827;
        }
        .error-box {
            border-left: 4px solid #dc2626;
            background: #fef2f2;
            padding: 12px 16px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .result-box {
            border-left: 4px solid #16a34a;
            background: #f0fdf4;
            padding: 14px 16px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <h1>Belajar Php</h1>

    <?php if (!empty($errors)): ?>
        <div class="error-box">
            <strong>Validasi Gagal:</strong>
            <ul>
                <?php foreach ($errors as $err): ?>
                    <li><?= e($err) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <div class="card">
        <form method="POST" action="">
            <div class="field">
                <label for="nama">Nama Lengkap</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="<?= e($oldNama) ?>"
                    required
                >
            </div>

            <div class="field">
                <label for="nim">NIM</label>
                <input
                    type="text"
                    id="nim"
                    name="nim"
                    value="<?= e($oldNim) ?>"
                    required
                >
            </div>

            <div class="field">
                <label for="prodi">Program Studi</label>
                <input
                    type="text"
                    id="prodi"
                    name="prodi"
                    value="<?= e($oldProdi) ?>"
                    required
                >
            </div>

            <div class="field">
                <label for="semester">Semester (1–14)</label>
                <input
                    type="number"
                    id="semester"
                    name="semester"
                    min="1"
                    max="14"
                    step="1"
                    value="<?= e($oldSemester) ?>"
                    required
                >
            </div>

            <div class="field">
                <label for="email">Email</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    value="<?= e($oldEmail) ?>"
                    required
                >
            </div>

            <div class="actions">
                <button type="submit">Simpan Data</button>
                <button type="reset">Reset Form</button>
            </div>
        </form>
    </div>

    <?php if ($data !== null): ?>
        <div class="result-box">
            <h2>Ringkasan Data Mahasiswa</h2>
            <p><strong>Nama:</strong> <?= e($data["nama"]) ?></p>
            <p><strong>NIM:</strong> <?= e($data["nim"]) ?></p>
            <p><strong>Program Studi:</strong> <?= e($data["prodi"]) ?></p>
            <p><strong>Semester:</strong> <?= e($data["semester"]) ?></p>
            <p><strong>Email:</strong> <?= e($data["email"]) ?></p>
        </div>
    <?php endif; ?>
</body>
</html>