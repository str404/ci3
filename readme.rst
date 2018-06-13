###################
User Level
###################

Pada praktikum kali ini telah dilakukan penambahan level pada user.
Level digunakan untuk membatasi akses/fitur yang bisa dilakukan oleh user pada web.

Tutorial : 
1. Buat database baru dengan nama level dengan 2 kolom bernama level_id dan nama_level.
2. Pada tabel user tambahkan l kolom dengan nama fk_level_id dan foreign key dengan level_id pada tabel level .
3. Pada controller user tambahkan level pada session .
4. Pada model user tambahkan fungsi untuk memanggil level user .

###################
Akses User
###################

Pada praktikum yang selanjutya melakukan pembatasan akses pada member .

Tutorial :
1. Pada register tambahkan fitur untuk pemilihan jenis member .
2. Kemudian pada fungsi register tepatnya pada array di model user tambahkan inputan tersebut ke tabel fk_level_id.
3. Kemudian pada controller tepatnya pengecekan data, ubah redirect ke dashboard dan panggil username dari member yang login untuk ditaruh pada notifikasi berhasil login .
4. Pada controller tambahkan fungsi dashboard dimana fungsi ini akan berjalan jika member telah berhasil login. Pada fungsi ini melakukan pemanggilan fungsi get_user_detail pada model user untuk mendapatkan username dan melakukan pemanggilan view dashboar .
5. Pada model user buat fungsi get_user_detail untuk mendapatkan username member .
6. Buat view dashboard sesuai tampilan anda .