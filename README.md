<p align="center"><a href="https://perumdajepara.co.id" target="_blank"><img src="https://github.com/andris0405/base_layout_perumda/blob/main/assets/logo/logo.png" width="400"></a></p>

## Tentang Repository

Ini adalag repository untuk website Leadership Dashboard Perumda Aneka Usaha Jepara. Yang dikembangkan dengan menggunakan framework laravel 8. Dengan konsep sistem adalah integrasi atau microservices, maka repository ini hanya untuk client side. Yang berarti tidak ada query database.
Hanya menggunakan View dan Controller untuk menggunakannya.

## Cara Install

Silahkan clone repository ke laptop / komputer kalian dengan cara

```sh
git clone https://github.com/jpr-developer/perumda_layout.git
```

Setelah proses clone selesai, Selanjutnya install dependencies dengan menjalanka perintah

```sh
composer install
```

Buka project, lalu buat file .env dan isinya silahkan copy paste dari .env.example

Selanjutnya buat key dengan cara menjalankan perintah

```sh
php artisan key:generate
```

Untuk testing apakah berhasil atau tidak, silahkan run local serve kalian dan jalankan perintah

```sh
php artisan serve
```

Untuk running laravel

Lalu pada browser kalian, bisa ketik kan http://127.0.0.1:8000/ untuk menjalankan di browser. Jika tampilannya muncul, maka installasi dari repository telah berhasil. Jika tidak maka silahkan ulang proses dari awal, karena kemungkinan ada kesalahan dalam installasi ke laptop / komputer kalian.

### Peraturan Pengembangan

- Silahkan join, dengan cara klik fork
- Setiap melakukan pull request, silahkan buat branch baru sesuai dengan fitur yang dibuat.
- Nama branch yang dibuat berdasarkan fitur yang dibuat. Misal fitur 'karyawan', maka nama branch adalah 'karyawan'.
- Revisi akan dilakukan secara langsung pada file yang di pull request. Dan notifikasi akan dikirimkan lewat email.
- Setiap pull request baik yang revisi atau tidak, diwajibkan mengisi commit pada github sebelum project di push / pull request.
- Checking dari project yang dibuat setiap pukul 22.00 WIB. Jika mengirim project setelah waktu yang ditentukan, maka project tidak akan diterima.
- Pastikan project yang dibuat sesuai dengan arahan dan rancangan yang sudah dibuat. Karena ada penilaiannya.
- Project yang tidak sesuai, otomatis akan dikembalikan.

Peraturan ini dibuat untuk kebaikan bersama serta untuk melihat kesesuaian dan ketepatan teman - teman dalam mengerjakan project yang diberikan.

<p align="center">
    <a href="https://perumdajepara.co.id" target="_blank">
    <img src="https://github.com/andris0405/assets/blob/main/thx_vektor.png" width="400">
    </a>
</p>
