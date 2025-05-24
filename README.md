# Aplikasi Manajemen Pegawai

Aplikasi manajemen pegawai berbasis web yang dibangun menggunakan framework Laravel. Aplikasi ini memungkinkan pengguna untuk mengelola data pegawai dengan fitur-fitur seperti:

- Manajemen data pegawai (CRUD)
- Autentikasi pengguna
- Relasi antara user dan pegawai
- Dashboard admin

## Tujuan Pembelajaran

Proyek ini dibuat untuk mempelajari dan memahami:
- Implementasi CRUD (Create, Read, Update, Delete) di Laravel
- Relasi antar tabel database (One-to-One, One-to-Many)
- Implementasi autentikasi dan otorisasi
- Penggunaan template admin (Mantis)
- Integrasi DataTables untuk manajemen data
- Best practices dalam pengembangan aplikasi Laravel

## Struktur Database

### Tabel Users
- id (primary key)
- name
- email
- password
- pegawais_id (foreign key)
- timestamps

### Tabel Pegawais
- id (primary key)
- users_id (foreign key)
- name
- email
- jabatan
- alamat
- jenis_kelamin (enum: Laki-Laki, Perempuan)
- timestamps

## Teknologi yang Digunakan

- Laravel 12
- Bootstrap 5
- DataTables
- Mantis Admin Template

## Fitur

- [x] Autentikasi (Login/Register)
- [x] Manajemen Data Pegawai
- [x] Dashboard Admin
- [x] Responsive Design

## Instalasi

1. Clone repository
```bash
git clone [url-repository]
```

2. Install dependencies
```bash
composer install
npm install
```

3. Copy file .env
```bash
cp .env.example .env
```

4. Generate application key
```bash
php artisan key:generate
```

5. Konfigurasi database di .env
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=username
DB_PASSWORD=password
```

6. Jalankan migrasi
```bash
php artisan migrate
```

7. Jalankan aplikasi
```bash
php artisan serve
```

## Sumber Belajar

Beberapa sumber yang digunakan dalam pengembangan proyek ini:
- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Bootcamp](https://bootcamp.laravel.com)
- [DataTables Documentation](https://datatables.net/manual/)
- [Bootstrap Documentation](https://getbootstrap.com/docs)

## Pengembangan Selanjutnya

Beberapa fitur yang bisa ditambahkan ke depannya:
- [ ] Manajemen Jabatan
- [ ] Manajemen Departemen
- [ ] Sistem Absensi
- [ ] Laporan Kepegawaian
- [ ] Export Data ke Excel/PDF
- [ ] Notifikasi Email
- [ ] API untuk Mobile App

## Catatan Pembelajaran

Beberapa hal penting yang dipelajari dalam proyek ini:
1. Penggunaan Eloquent Relationships
2. Implementasi Middleware untuk Autentikasi
3. Penggunaan Resource Controllers
4. Form Validation
5. Flash Messages
6. Database Seeding
7. Blade Templating
8. Asset Management

## Lisensi

Aplikasi ini menggunakan lisensi MIT.
