<?php
declare(strict_types=1);

$data = null;
$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = trim((string)($_POST["semester"] ?? ""));
    $email = trim($_POST["email"] ?? "");

    if ($nama === "") {
        $errors[] = "Nama wajib diisi.";
    }

    if ($nim === "") {
        $errors[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) < 6 || strlen($nim) > 15) {
        $errors[] = "NIM harus berupa angka dengan panjang 6 sampai 15 karakter.";
    }

    if ($prodi === "") {
        $errors[] = "Program studi wajib diisi.";
    }

    if ($email === "") {
        $errors[] = "Email wajib diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if ($semesterInput === "" || !ctype_digit($semesterInput)) {
        $errors[] = "Semester harus berupa bilangan bulat.";
    } else {
        $semester = (int)$semesterInput;
        if ($semester < 1 || $semester > 14) {
            $errors[] = "Semester harus berada dalam rentang 1 sampai 14.";
        }
    }

    if (empty($errors)) {
        $data = [
            "nama" => $nama,
            "nim" => $nim,
            "prodi" => $prodi,
            "semester" => (int)$semesterInput,
            "email" => $email,
        ];
    }
}