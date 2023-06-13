Tugas Praktikum 13:

* Pelajari relasi antar model laravel dengan menonton video: https://youtu.be/HR_Piu6qtoI
* Buat kolom baru: dokter_id dengan tipe foreignId di migration pasien
* migrate ulang dengan menjalankan:
  `php artisan migrate:fresh`
* buat relasi 1 to M dari model pasien ke dokter (1 dokter bisa menangani banyak pasien dan 1 pasien bisa ditangani oleh hanya 1 dokter)
* di halaman tambah pasien dan edit pasien tambah kolom select option dokter yang menyimpan ke field dokter_id
* di halaman daftar pasien tampilkan nama dokter yang terhubung.
