<?Php

include 'koneksi.php';

$query = "SELECT * FROM mahasiswa";
$result = $conn->query($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: orange;
        }
    </style>
</head>
<body>
   <h2>Form Mahasiswa</h2>
   <form action="insert.php" method="POST">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br>
        <label for="domisili">Domisili:</label><br>
        <input type="text" id="domisili" name="domisili" required><br>
        <label for="semester">Semester:</label><br>
        <input type="number" id="semester" name="semester" required><br><br>
        <input type="submit" value="Tambah">
    </form>

    <br>

   <table border="1" style="width:100%">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Domisili</th>
            <th>Semester</th>
            <th>Aksi</th>
        </tr>


        <?php while( $row = $result->fetch_assoc())  :   ?>
        <tr>
            <td> <?php echo $row['id'] ?> </td>
            <td> <?php echo $row['nama'] ?> </td>
            <td> <?php echo $row['nim'] ?> </td>
            <td> <?php echo $row['domisili'] ?> </td>
            <td> <?php echo $row['semester'] ?> </td>
            <td>
                <a href="edit.php?id=; ?>">Edit</a>
                <a href="delete.php?id=; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
   


    </table>

</body>
</html>