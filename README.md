# Lab7Web_PHP — Praktikum 7: Pemrograman Server-Side dengan PHP

## Identitas
- **Nama:** Adita Eka Pratama
- **NIM:** 312510449
- **Program Studi:** Teknik Informatika
- **Mata Kuliah:** Pemrograman Web (I253C)

## Tujuan Praktikum
- Memahami perbedaan pemrosesan client-side dan server-side.
- Mengenali sintaks PHP dan menjalankan file PHP melalui server lokal.
- Menggunakan variabel, tipe data, operator, percabangan, perulangan, dan function.
- Menerima dan memproses data dari form HTML menggunakan metode GET dan POST.
- Melakukan validasi dan sanitasi input dasar sebelum data ditampilkan atau diproses.
- Membangun aplikasi sederhana yang menerima, memproses, dan menampilkan data pengguna.

## Perangkat yang Digunakan
- Laptop/PC
- Web browser (Google Chrome / Microsoft Edge)
- Visual Studio Code
- PHP dan server lokal (XAMPP / Laragon)

## Cara Menjalankan Server Lokal
1. Jalankan layanan web server (Apache/Nginx) melalui XAMPP atau Laragon.
2. Simpan folder proyek `Lab7Web_PHP` ke dalam direktori root web server (misalnya `htdocs/Lab7Web_PHP` pada XAMPP atau `www/Lab7Web_PHP` pada Laragon).
3. Buka browser dan akses alamat `http://localhost/Lab7Web_PHP/` (jangan membuka file `.php` secara langsung dengan klik ganda).

## Struktur File
```text
Lab7Web_PHP/
├── index.php                  # Halaman utama navigasi & Latihan 1 (Menjalankan PHP)
├── latihan2.php               # Latihan 2: Variabel, operator, & percabangan predikat nilai
├── latihan3.php               # Latihan 3: Perulangan foreach & array daftar mahasiswa
├── latihan4.php               # Latihan 4: Pembuatan & pemanggilan function
├── cari.php                   # Latihan 5: Pemrosesan form dengan metode GET
├── post_form.php              # Latihan 6: Pemrosesan form dengan metode POST
├── transaksi.php              # Latihan 7: Pengolahan data transaksi barang
├── mini_project/
│   ├── Form_Mahasiswa.php     # Tampilan form & ringkasan Mini Project Data Mahasiswa
│   └── proses_mahasiswa.php   # Logika pemrosesan & validasi sisi server (POST)
├── eksperimen.php             # Eksperimen Mandiri (Poin 1 s/d 5)
└── README.md                  # Dokumentasi proyek praktikum
