<?php

header('Content-type: application/json; charset=utf8');

$koneksi = mysqli_connect('localhost', 'root', '', 'books');

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = 'SELECT * FROM books';
    $query = mysqli_query($koneksi, $sql);
    $array_data = array(); // array kosong menyimpan semua data books yang diambil

    while ($data = mysqli_fetch_assoc($query)) {
        $array_data[] = $data; // memasukkan data dari db, ke array kosong
    }

    $result = json_encode($array_data); //array diubah ke format json
    echo $result;
}
