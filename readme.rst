###################
Registrasi
###################

Pada praktikum hari kali ini telah dilakukan penambahan registrasi pada web pribadi.
Registrasi digunakan untuk penambahan member baru yang nanti akan username dan password nya akan digunakan untuk login .

Tutorial : 
1. Buat view registrasi (Bisa dilihat pada registrasi.php).
2. Membuat controler untuk registrasi (Controler/user.php) tambahkan fungsi registrasi dimana ada validasi, kemudian data akan disimpan pada database 'users' dan password terenkripsi, lalu data akan di flash dan pemanggilan view.
3. Buat model untuk registrasi (Model/User_model.php) tambahkan fungsi registrasi dimana data akan disimpan ke database 'users'.
4. Pada 'Config/Autoload.php' tepatnya 'libraries' tambahkan 'session' .
5. Pada 'Config/config.php' tepatnya '$config['sess_save_path']' ganti 'null' dengan 'sys_get_temp_dir()' .

###################
Login dan logout
###################

Pada praktikum hari kali ini telah dilakukan penambahan login dan logout
Member yang sudah terdaftar akan menggunakan username dan password nya untuk login.

Tutorial :
1. Tambahkan fungsi login pada controler yang sama dengan registrasi, pada fungsi login ada validasi dan pengecekan ke validan username dan password, jika cocok maka akan login, jika tidak maka akan tertahan di halaman login, kemudian ada pemanggilan view .
2. Tambahkan fungsi login pada model yang sama dengan registrasi, fungsi ini akan mengkoneksikan dengan database 'users' .
3. Buat view login (view/login.php) dan panggil fungsi session .
3. Pada controller diatas, tambakan fungsi logout dimana data akan di flash dan dialihkan ke halaman login. Tambahkan button logout pada setiap view .