<html lang="en">
<head>
    <title>Form Input Matakuliah</title>
</head>
<body>
    <h1>Form Input Nilai Mahasiswa</h1>
    <a href="daftar_nilai_mahasiswa.php">List Mahasiswa</a>
    <br><br>
    <table>
        <form action="simpan_nilai.php" method="post">
            <tr>
                <td>Nim </td>
                <td>:</td>
                <td><input type="text" name="nim" size="35" maxlength="50"></td>
            </tr>
            <tr>
                <td>Nama </td>
                <td>:</td>
                <td><input type="text" name="nama" size="35" maxlength="50"></td>
            </tr>
            <tr>
                <td>Nilai Terstruktur </td>
                <td>:</td>
                <td><input type="text" name="nilai_terstruktur" size="35" maxlength="50"></td>
            </tr>
            <tr>
                <td>Tugas Mandiri </td>
                <td>:</td>
                <td><input type="text" name="tugas_mandiri" size="35" maxlength="50"></td>
            </tr>
            <tr>
                <td>UTS </td>
                <td>:</td>
                <td><input type="text" name="uts" size="35" maxlength="50"></td>
            </tr>
            <tr>
                <td>UAS </td>
                <td>:</td>
                <td><input type="text" name="uas" size="35" maxlength="50"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </form>
    </table>
</body>
</html>
