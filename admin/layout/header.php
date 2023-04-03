<?php
session_start();
include "../koneksi.php";

if ($_SESSION['level'] == "") {
    header("location:../login.php?pesan=gagal");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Farhan Hidayat Al Rachman" />
    <link rel="shortcut icon" href="/images/logo.svg" />

    <title><?= $page; ?></title>

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="../../style/main.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
</head>