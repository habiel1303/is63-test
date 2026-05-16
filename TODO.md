# TODO

- [x] Baca ulang isi `app/Http/Controllers/JurusanController.php` (agar tidak salah implementasi)

- [x] Perbaiki migration `create_jurusans_table.php` agar punya `kode_jurusan` dan `nama_jurusan`

- [ ] Buat model `app/Models/Jurusan.php`
- [ ] Implement CRUD penuh pada `JurusanController`
- [ ] Buat view jurusan: `resources/views/jurusan/index.blade.php` dan `resources/views/jurusan/form.blade.php`
- [x] Tambahkan route jurusan di `routes/web.php`
- [x] Update `MahasiswaController@create` agar kirim data jurusan
- [x] Update `resources/views/mahasiswa/form.blade.php` dropdown jurusan dari database
- [x] Jalankan migrate/fresh untuk menerapkan skema
- [x] Verifikasi halaman `/jurusan` dan `/mahasiswa/tambah`





