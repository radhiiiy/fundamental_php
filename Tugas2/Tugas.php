<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-
scale=1.0">

<title>Form Biodata</title>
<body>
<form action="form4.html" method="POST">
<fieldset>
<legend><h1>Formulir Peserta </h1> </legend>
<p>
<label>Nama :</label>
<input type="text" name="nama" placeholder="Masukan nama
lengkap">
</p>
<p>
<label>Username :</label>
<input type="text" name="username" placeholder="Masukan
username">
</p>
<p>
<label>Password :</label>
<input type="text" name="password" placeholder="Masukan
password">
</p>
<p>
<label>Jenis Kelamin :</label>
<input type="radio" name="jenkel" value="laki-laki">Laki-laki
<input type="radio" name="jenkel" value="perempuan">Perempuan
</p>
<p>
<label>Tanggal Lahir :</label>
<input type="date" name="tanggal">
</p>
<p>
<label>Agama :</label>
<select name="agama">
<option value="budha">Budha</option>
<option value="hindu">Hindu</option>
<option value="islam">Islam</option>
<option value="katholik">Kristen Katholik</option>
<option value="protestan">Kristen Protestan</option>
</select>
</p>
<p>
<label>Email :</label>
<input type="email" name="email" placeholder="Masukkan email">
</p>
<p>
<label>Pilih Course:</label>
<input type="checkbox" name="web native">Web Native
<input type="checkbox" name="web framework">Web Framework
<input type="checkbox" name="mobile native">Mobile Native
<input type="checkbox" name="web lintas platform">Mobile
Lintas Platform
</p>
<p>
<p>Alamat :</p>
<textarea name="alamat"cols="50" rows="10"></textarea>
</p>
<p>
<input type="submit" name="submit" value="Daftar">
</p>
</fieldset>
</form>
</body>
</html>