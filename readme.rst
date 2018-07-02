###################
Pembatasan Hak akses
###################

Pada praktikum kali ini telah dilakukan penambahan hak akses pada level yang berbeda.
Ketentuan :
1. Admin : Bisa melakukan semua aktifitas dalam web tanpa dibatasi .
2. Paid Member : Member berbayar diberi akses untuk membuat blog atau kategori tanpa bisa menghapus atau mengedit .
3. Member : Member biasa hanya bisa melihat isi blog dan kategori tanpa bisa membuat, edit dan hapus .

.. ###################
.. Akses User
.. ###################

.. Pada praktikum yang selanjutya melakukan pembatasan akses pada member .

.. Tutorial :
.. 1. Pada register tambahkan fitur untuk pemilihan jenis member .
.. 2. Kemudian pada fungsi register tepatnya pada array di model user tambahkan inputan tersebut ke tabel fk_level_id.
.. 3. Kemudian pada controller tepatnya pengecekan data, ubah redirect ke dashboard dan panggil username dari member yang login untuk ditaruh pada notifikasi berhasil login .
.. 4. Pada controller tambahkan fungsi dashboard dimana fungsi ini akan berjalan jika member telah berhasil login. Pada fungsi ini melakukan pemanggilan fungsi get_user_detail pada model user untuk mendapatkan username dan melakukan pemanggilan view dashboar .
.. 5. Pada model user buat fungsi get_user_detail untuk mendapatkan username member .
.. 6. Buat view dashboard sesuai tampilan anda .