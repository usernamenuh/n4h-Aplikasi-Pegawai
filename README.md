# Aplikasi Manajemen Pegawai

Aplikasi manajemen pegawai berbasis web yang dibangun menggunakan framework Laravel. Aplikasi ini memungkinkan pengguna untuk mengelola data pegawai dengan fitur-fitur seperti:

- Manajemen data pegawai (CRUD)
- Autentikasi pengguna
- Relasi antara user dan pegawai
- Dashboard admin

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

## Lisensi

Aplikasi ini menggunakan lisensi MIT.
