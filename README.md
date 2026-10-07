# SmartResident Laravel - Modul 3 Blade Template

Nama: **Muhammad Fadhil Cholilullah**  
NIM: **707012500122**  
Kelas: **D4-SIKC-49-01**  
Mata Kuliah: **Pemrograman Web**

Project ini berisi dua bagian Tugas Praktikum Modul 3:

1. **LaporBanjir** - prototipe BPBD Kabupaten Bandung dengan form POST, halaman konfirmasi, daftar laporan, status genangan menggunakan `@if/@elseif/@else`, komponen `<x-alert>`, partial `@include`, layout Blade, dan named route.
2. **SmartResident** - konversi rancangan Tugas Akhir Semester 2 dari Java Swing ke Laravel Blade. Seluruh halaman utama dibuat sebagai Blade View dan memakai layout, directive, component/partial, controller, session, dan named route.

## Cara Menjalankan

Project dibuat tanpa database agar fokus praktikum tetap pada Blade Template. Data awal SmartResident berasal dari data Tugas Besar Semester 2 dan disimpan sementara melalui session.

```bash
composer install
copy .env.example .env
php artisan key:generate
php artisan serve
```

Linux/macOS:

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Buka:

- SmartResident: `http://127.0.0.1:8000/`
- LaporBanjir: `http://127.0.0.1:8000/laporbanjir/form`

## Akun Demo

- Warga: `fadhil` / `warga123`
- Admin: `admin` / `admin123`
- Superadmin: `super` / `super123`

## Struktur Blade Penting

- `resources/views/layouts/app.blade.php` - layout LaporBanjir
- `resources/views/layouts/smartresident.blade.php` - layout SmartResident
- `resources/views/components/alert.blade.php` - reusable Blade component
- `resources/views/partials/laporan-card.blade.php` - partial kartu LaporBanjir
- `resources/views/smartresident/partials/report-card.blade.php` - partial kartu laporan SmartResident
- `resources/views/smartresident/partials/status-badge.blade.php` - partial status
- `routes/web.php` - seluruh named route

## Dokumentasi

Folder `dokumentasi/` berisi preview hasil tampilan yang juga dipakai di laporan praktikum.

## Catatan GitHub

Repo yang disarankan untuk pengumpulan: `Praktikum03_PABW` pada akun GitHub `muhammadfadhilc`. Setelah project di-push, salin URL repo ke bagian Lampiran Link Repositori GitHub pada laporan.
# PABW_TA
