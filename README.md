# sikost
Sistem Informasi Kost

5114100019 - Sita Nurjayanti

5114100023 - Herdito Ibnu Dewangkoro

5114100123 - Irzal Ahmad Sabilla

Develope sebgai kelompok 7 Sikost.

Pembagian Tugas:
#Project manager (Irzal)
#Desain()
#user requirement Client(Irzal)
#user Requirement Develope()
#Use case()
#Diagram activity()
#Skpl(Sita)







Dekskripsi kasar:
Sistem ini akan mengolah data internal dimana client memiliki 3 kost(merpati,Garuda,elang), Disetiap kost memiliki sangat banyak kamar dan beragam.
Metode pembayaran pun juga masih menggunakan sistem manual yaitu mencatat /3bulan. Hitungan pembayaran pada kost ini adalah setiap 3bulan. Harga kostpun juga beragam tergantung fasilitas. Pada setiap kost memiliki 100 kamar lebih. Dikarenakan akibat terlalu banyak kamar terkadang proses pembayaranpun membingungkan, status kamar kosong juga kadang lengah untuk dicatat bahkan tagihan yang sering nunggak luput dari catatan. bahkan ke 3 kost ini datanya tidak terpusat atau sinkronisasi. Sehingga pemilik terkadang kebingungan untuk mengontrol pengeluaran maupun pemasukan. Pihak client menginginkan bagaimana data tersebut lebih mudah diolah dan dipusatkan pada 1 sistem. sehingga untuk pengecekan transaksi lebih mudah dan cepat. DAn dari pihak penghuni juga bisa melihat tagihan status pembayaranya, sehingga antara pihak pemilik dan penghuni datanya sinkron. Disetiap kost ada penjaganya 1. dan setiap kost memiliki data kamar dan penghuni yang berbeda. Client(pemilik kost) juga ingin dibuatkan status mana kamar yang kosong dan mana yang telah terisi. 

Aldo:
-Pada menu awal akan menampilkan login terdiri dari username dan password(username ini akan mengarahkan dimana dia sebagai pihak yang bertanggungjawab jika mengedit data kost tersebut)
-Setelah itu akan menampilkan menu dimana menu ini akan menampilkan tergantung status username yang terdaftar sebagai :
@Pemilik: akan ditampilkan 3 pilihan kost tersebut dimana 3 pilihan tersebut akan menampilkan smua informasi tentang kost yang dipilih. plus tambah account penjaga

@penjaga: akan menampilkan sama dengan pemilik akan tetapi plus tambah account penghuni

@penghuni: akan menampilkan status pembayaran dan biodata penghuni.


Menu 
@pemilik :
- Pemilik dapat masuk ke sistem (login) 
- Pemilik dapat melihat 3 pilihan kost beserta informasi yang terkait mengenai masing-masing kost tersebut
- Pemilik dapat menambah akun penjaga
- Pemilik dapat mengedit biodata profil penjaga
- Pemilik dapat melihat kamar mana yang statusnya masih belum lunas / belum dibayar

@penjaga :
- Penjaga dapat masuk ke sistem (login) 
- Penjaga dapat melihat informasi seluruh kamar dalam satu kost yang ia jaga
- Penjaga dapat menambah akun penghuni
- Penjaga dapat mengedit biodata profil penghuni
- Penjaga dapat memperbarui status pembayaran semua kamar dalam satu kost yang ia dijaga
- Penjaga dapat melihat kamar mana yang statusnya masih belum lunas / belum dibayar

@penghuni :
- Penghuni dapat masuk ke sistem (login)
- Penghuni dapat melihat biodata profil diri sendiri
- Penghuni dapat ngengecek riwayat pemmbayaran
