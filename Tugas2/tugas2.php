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
        position: relative;
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
    <form action="Tugas2Halaman2.php" method="post">
        <table border=1 style="border-collapse : collapse; width : 50%;">
            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="nisn" id=""></td>
            </tr>
            <tr>
                <td>NAMA</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="nama" id=""></td>
            </tr>
            <tr>
                <td>TEMPAT LAHIR</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="tempat" id=""></td>
            </tr>
            <tr>
                <td>TANGGAL LAHIR</td>
                <td>:</td>
                <td><input type="date" name="tanggal" id=""></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td>:</td>
                <td>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="" value="LAKI-LAKI">
                        <label class="form-check-label" for="flexRadioDefault1">
                            LAKI-LAKI
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="kelamin" id="" value="PEREMPUAN">
                        <label class="form-check-label" for="flexRadioDefault1">
                            PEREMPUAN
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>AGAMA</td>
                <td>:</td>
                <td>
                    <select name="agama" id="" class="form-select" aria-label="Default select example">
                        <option value="ISLAM">ISLAM</option>
                        <option value="PROTESTAN">PROTESTAN</option>
                        <option value="KATOLIK">KATOLIK</option>
                        <option value="HINDU">HINDU</option>
                        <option value="BUDDHA">BUDDHA</option>
                        <option value="KONGHUCU">KONGHUCU</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td>:</td>
                <td>
                    <div class="form-floating">
                        <textarea name="alamat" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>ASAL SEKOLAH</td>
                <td>:</td>
                <td><input type="text" class="form-control" name="asal" id=""></td>
            </tr>
            <tr>
                <td>PILIHAN JURUSAN 1</td>
                <td>:</td>
                <td>
                    <select name="jr1" id="" class="form-select" aria-label="Default select example">
                        <option value="PENEGEMBANGAN PERANGKAT LUNAK DAN GAME">PENEGEMBANGAN PERANGKAT LUNAK DAN GAME</option>
                        <option value="AKUTANSI DAN KEUANGAN LEMBAGA">AKUTANSI DAN KEUANGAN LEMBAGA</option>
                        <option value="MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS">MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS</option>
                        <option value="PEMASARAN">PEMASARAN</option>
                        <option value="TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</option>
                        <option value="BROADCASTING DAN PERFILMAN">BROADCASTING DAN PERFILMAN</option>
                        <option value="DESAIN KOMUNIKASI VISUAL">DESAIN KOMUNIKASI VISUAL</option>
                        <option value="SENI PERTUNJUKAN">SENI PERTUNJUKAN</option>
                        <option value="PERHOTELAN">PERHOTELAN</option>
                        <option value="KULINER">KULINER</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>PILIHAN JURUSAN 2</td>
                <td>:</td>
                <td>
                    <select name="jr2" id="" class="form-select" aria-label="Default select example">
                        <option value="PENEGEMBANGAN PERANGKAT LUNAK DAN GAME">PENEGEMBANGAN PERANGKAT LUNAK DAN GAME</option>
                        <option value="AKUTANSI DAN KEUANGAN LEMBAGA">AKUTANSI DAN KEUANGAN LEMBAGA</option>
                        <option value="MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS">MANAJEMEN PERKANTORAN DAN LAYANAN BISNIS</option>
                        <option value="PEMASARAN">PEMASARAN</option>
                        <option value="TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</option>
                        <option value="BROADCASTING DAN PERFILMAN">BROADCASTING DAN PERFILMAN</option>
                        <option value="DESAIN KOMUNIKASI VISUAL">DESAIN KOMUNIKASI VISUAL</option>
                        <option value="SENI PERTUNJUKAN">SENI PERTUNJUKAN</option>
                        <option value="PERHOTELAN">PERHOTELAN</option>
                        <option value="KULINER">KULINER</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>EKSTRAKULIKULER</td>
                <td>:</td>
                <td>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value="ENGLISH CLUB ESEMKASA" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ENGLISH CLUB ESEMKASA
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value="PALANG MERAH REMAJA" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            PALANG MERAH REMAJA
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value="ORGANISASI SISWA INTRA SEKOLAH" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            ORGANISASI SISWA INTRA SEKOLAH
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value="PECINTA ALAM" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            PECINTA ALAM
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value="REMAJA MASJID AL-KAUSAR" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            REMAJA MASJID AL-KAUSAR
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value="GERAKAN DISIPLIN SISWA" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            GERAKAN DISIPLIN SISWA
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value="FUTSAL CLUB" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            FUTSAL CLUB
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value=" VOLLY CLUB" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            VOLLY CLUB
                        </label>
                    </div>
                    <div class="form-check">
                        <input name="ekstra[]" class="form-check-input" type="checkbox" value="BASKET CLUB" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            BASKET CLUB
                        </label>
                    </div>
                </td>
            </tr>
            <tr>
                <td> </td>
                <td> </td>
                <td class="tombol"><button type="submit" class="btn btn-outline-dark">KIRIM</button></td>
            </tr>
        </table>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>