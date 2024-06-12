<?php

header('Content-type: application/json; charset=utf8');

$koneksi = mysqli_connect('localhost', 'root', '', 'books');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $page = $_POST['page'];
    $year = $_POST['year'];

    $sql = "INSERT INTO books (title, author, page, year) VALUES ('$title', '$author', '$page', '$year')";
    $cek = mysqli_query($koneksi, $sql);

    if ($cek) {
        $data = [
            'status' => 'berhasil',
            'message' => 'data input'
        ];
        echo json_encode([$data]);
    } else {
        $data = [
            'status' => 'gagal',
            'message' => 'data gagal input'
        ];
        echo json_encode([$data]);
    }
}
