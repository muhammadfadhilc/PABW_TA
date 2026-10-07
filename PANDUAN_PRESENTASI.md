# Panduan Presentasi Hasil Praktikum Modul 3

Gunakan alur demo berikut supaya singkat dan jelas saat presentasi kelas.

1. Tunjukkan `routes/web.php` dan jelaskan bahwa seluruh halaman memakai **named route**.
2. Buka `/laporbanjir/form`, isi form, kirim, lalu tunjukkan halaman konfirmasi dan komponen `<x-alert>`.
3. Buka `/laporbanjir/daftar` dan jelaskan `@forelse`, `@include`, serta status Waspada/Siaga/Awas dari `@if/@elseif/@else`.
4. Buka halaman SmartResident lalu login warga dengan `fadhil / warga123`.
5. Tunjukkan dashboard warga, form laporan, dan halaman konfirmasi tiket.
6. Logout, masuk ke portal admin dengan `admin / admin123`, lalu tunjukkan filter status dan detail laporan.
7. Di kode, buka `layouts/smartresident.blade.php` untuk menjelaskan `@yield`, lalu satu view turunan untuk menunjukkan `@extends` dan `@section`.
8. Tutup dengan penjelasan bahwa versi Semester 2 memakai Java Swing, sedangkan versi Semester 3 memindahkan lapisan tampilan ke Blade Laravel sehingga layout dan komponen lebih mudah dipakai ulang.

Poin yang biasanya ditanya dosen:

- **Kenapa pakai layout?** Agar header, navigasi, footer, dan CSS tidak ditulis berulang di setiap halaman.
- **Perbedaan component dan partial?** Component cocok untuk elemen UI reusable dengan props/atribut, sedangkan partial dipakai untuk memecah blok tampilan yang lebih besar dan mengirim variabel langsung lewat `@include`.
- **Directive yang dipakai?** `@if`, `@elseif`, `@else`, `@foreach`, `@forelse`, `@extends`, `@section`, `@yield`, `@include`, `@csrf`, `@error`, dan `@method`.
- **Kenapa belum database?** Fokus Modul 3 adalah implementasi Blade. Data dibuat dalam array/session agar alur form, controller, view, dan navigasi dapat diuji tanpa bergantung pada database.
