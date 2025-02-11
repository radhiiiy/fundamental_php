<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<style>
    td {
        padding: 1em;
    }

    table {
        position:relative;
    }

    form {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .tombol {
        position: absolute;
        right: 0;
        bottom: 0;
    }
</style>

<body>
   <?php
   if (isset($_POST['submit'])) 

   ?>
        <form action="">
        <table border=1 style="border-collapse : collapse; width : 50%;">
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><?= $_POST['nisn']?></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><?= $_POST['nama']?></td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td><?= $_POST['tempat']?></td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td><?= $_POST['tanggal']?></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td>
               <?= $_POST['kelamin']?>
                </td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>
                <?= $_POST['agama']?>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td>
                <?= $_POST['alamat']?>
                </td>
            </tr>
            <tr>
                <td>ASAL SEKOLAH</td>
                <td>:</td>
                <td><?= $_POST['asal']?></td>
            </tr>
            <tr>
                <td>PILIHAN JURUSAN 1</td>
                <td>:</td>
                <td>
                <?= $_POST['jr1']?>
                </td>
            </tr>
            <tr>
                <td>PILIHAN JURUSAN 2</td>
                <td>:</td>
                <td>
                <?= $_POST['jr2']?>
                </td>
            </tr>
            <tr>
                <td>EKSTRAKULIKULER</td>
                <td>:</td>
                <td>
                <?= implode(",",$_POST['ekstra'])?>
                </td>
            </tr>
        </table>
 </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>