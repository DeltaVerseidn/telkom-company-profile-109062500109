# Telkom Company Profile - 109062500109

## Identitas

- Nama: Aryo Faust Wijayanto
- NIM: 109062500109

## Deskripsi Proyek

Aplikasi web profil perusahaan berbasis PHP dan MySQL yang dikembangkan menggunakan kontrol versi Git/GitHub.

## Catatan Penanganan Merge Conflict

[Versi Branch Feature] Mengatasi bentrokan kode pada fitur profil perusahaan.

## Jawaban 10 Pertanyaan Refleksi (Bab 16.4)

1. Mengapa git add dan git commit dipisahkan?
   Pemisahan ini membantu saya menyortir perubahan kode terlebih dahulu. Perintah git add berfungsi seperti memasukkan barang ke keranjang belanja (staging area), sedangkan git commit adalah proses bayar di kasir untuk mengunci perubahan tersebut menjadi catatan sejarah yang permanen.
2. Apa perbedaan git fetch dan git pull?
   • git fetch hanya mengunduh informasi terbaru dari internet ke komputer saya tanpa mengubah kode yang sedang saya ketik.
   • git pull mengunduh sekaligus menggabungkan otomatis kode terbaru dari internet ke dalam file lokal saya, sehingga kode langsung berubah.
3. Mengapa push tidak mengunggah file yang belum di-commit?
   Karena git push hanya mendeteksi perubahan yang sudah resmi dibungkus menjadi commit. File yang baru saya ubah (modified) tapi belum di-commit masih dianggap sebagai draf kasar di komputer saya, sehingga dilewati oleh Git saat proses unggah.
4. Kapan git restore --staged lebih tepat dibanding git restore?
   • git restore --staged saya gunakan saat ingin membatalkan git add (mengeluarkan file dari keranjang belanja), namun hasil ketikan kode di file tersebut tidak hilang.
   • git restore biasa saya gunakan saat ingin menghapus total ketikan baru dan mengembalikan isi file ke kondisi awal saat terakhir kali disimpan.
5. Mengapa GitHub bukan pengganti Git?
   Karena keduanya memiliki peran yang berbeda di alur kerja saya. Git adalah aplikasi di komputer saya yang bertugas mencatat riwayat perubahan file. Sementara GitHub adalah situs web tempat saya menitipkan atau mencadangkan catatan Git tersebut ke internet agar aman dan bisa diakses tim.
6. Apa keuntungan membuat satu commit per perubahan logis?
   Praktik ini menjaga riwayat kerja saya tetap rapi dan terstruktur. Jika terjadi error di kemudian hari, saya bisa dengan mudah melacak dan membatalkan satu bagian kecil yang bermasalah tersebut tanpa merusak fitur lain yang sudah selesai.
7. Mengapa credential database produksi tidak boleh masuk repository?
   Untuk mencegah kebocoran data dan peretasan. Jika username dan password database asli tertulis di dalam kode lalu terunggah ke internet, siapa pun bisa melihatnya. Orang asing bisa masuk ke database saya untuk mencuri atau bahkan menghapus seluruh data penting aplikasi.
8. Mengapa force push tidak dianjurkan saat push ditolak?
   Karena force push sifatnya memaksa dan bisa merusak kerjaan tim. Perintah ini akan menghapus riwayat kode milik teman yang sudah ada di internet dan menggantinya dengan kode dari komputer saya. Solusi yang benar adalah saya harus melakukan pull dulu, memperbaiki bentrokan kode, baru mengunggah ulang.
9. Bagaimana branch membantu tim mengembangkan fitur secara paralel?
   Branch memungkinkan saya membuat ruang kerja bayangan yang terisolasi. Saya bisa mencoba fitur baru di ruang tersebut tanpa takut merusak kode utama atau mengganggu pekerjaan teman lain. Setelah fitur saya selesai dan aman, barulah kodenya digabungkan ke ruang utama.
10. Bagaimana prepared statement membantu saat query menggunakan input pengguna?
    Teknik ini berfungsi memisahkan kerangka perintah database dari teks input pengguna. Aplikasi saya akan mengirimkan template perintahnya dulu ke database. Apa pun yang diketik oleh pengguna (termasuk kode peretas) hanya akan dibaca sebagai teks biasa, bukan sebagai perintah yang dijalankan.
