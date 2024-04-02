<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$nim = $_POST['nim'];
$domisili = $_POST['domisili'];
$semester = $_POST['semester'];

$query = "INSERT INTO mahasiswa (nama, nim, domisili, semester)
       VALUES ('$nama', '$nim', '$domisili', '$semester') ";

if($conn->query($query) === TRUE ) {
   header("Location: index.php");

}