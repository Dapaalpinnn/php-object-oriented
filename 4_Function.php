<?php 

class User
{
    public string $name;
    public ?string $book;
    public string $tanggal_peminjaman;
    public string $tanggal_kembali;
    public function peminjamanBuku(string $name, string $tanggal_kembali, string $tanggal_peminjaman, string $book)
    { 
        echo 
        <<<longtext
        DATA PEMINJAMAN BUKU
        Nama Siswa: $name
        Buku: $book
        Tanggal Peminjaman: $tanggal_peminjaman
        Tanggal Pengembalian: $tanggal_kembali
        longtext;
    }
}

$userData = new User();
$userData -> peminjamanBuku
(
    name: "Lamine Yamal", 
    book: "Buku Algoritma dan Pemrograman",
    tanggal_peminjaman: "10 Juli 2024",
    tanggal_kembali: "30 Juli 2024"
);

?>