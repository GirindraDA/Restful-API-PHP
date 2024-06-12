<?php

header('Content-type: application/json; charset=utf8');

$koneksi = mysqli_connect('localhost', 'root', '', 'books');

if ($_SERVER['REQUEST_METHOD'] === 'PUT') {
    $id = $_GET['id'];
    $title = $_GET['title'];
    $author = $_GET['author'];
    $page = $_GET['page'];
    $year = $_GET['year'];

    $sql = "UPDATE books SET title='$title', author='$author', page='$page', year='$year' WHERE id='$id'";
    $cek = mysqli_query($koneksi, $sql);

    if ($cek) {
        $data = [
            'status' => 'berhasil',
            'message' => 'data edit'
        ];
        echo json_encode([$data]);
    } else {
        $data = [
            'status' => 'gagal',
            'message' => 'data gagal edit'
        ];
        echo json_encode([$data]);
    }
}
