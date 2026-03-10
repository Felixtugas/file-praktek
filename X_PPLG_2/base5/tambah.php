<html>
    <head>
        <title>Tambah Data</title>
    </head>
    <body>
        <form action="proses_tambah.php" method="get">
            <table>
                <tr>
                    <td><label>No</label></td>
                    <td><input type="number" name="no" ></td>
                </tr>
                <tr>
                    <td><label>Mata pelajaran</label></td>
                    <td><input type="text" name="mapel" ></td>
                </tr>
                <tr>
                    <td><label>Nama Guru</label></td>
                    <td><input type="text" name="guru" ></td>
                </tr>
                <tr>
                    <td><label>Hari</label></td>
                    <td><input type="text" name="hari" ></td>
                </tr>
                <tr>
                    <td><input type="submit" value="kirim"></td>
                </tr>
            </table>
        </form>
    </body>
</html>