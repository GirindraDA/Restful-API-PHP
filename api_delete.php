<?php

header('Content-type: application/json; charset=utf8');

$koneksi = mysqli_connect('localhost', 'root', '', 'books');

if ($_SERVER['REQUEST_METHOD'] === 'DELETE') {
    $id = $_GET['id'];
    $sql = "DELETE FROM books WHERE id='$id'";
    $cek = mysqli_query($koneksi, $sql);

    if ($cek) {
        $data = [
            'status' => 'berhasil',
            'message' => 'data delete'
        ];
        echo json_encode([$data]);
    } else {
        $data = [
            'status' => 'gagal',
            'message' => 'data gagal delete'
        ];
        echo json_encode([$data]);
    }
}
