<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4 Nomor 2</title>
</head>
<body>

    <div class="form" style="padding: 20px;">
        <h1>FORM INPUT BIODATA</h1>
        <form action="" method="POST" name="form1">
            <table>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama" size="20"></td>
                </tr>

                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td><input type="text" name="nim" size="20"></td>
                </tr>

                <tr>
                    <td>EMAIL</td>
                    <td>:</td>
                    <td><input type="email" name="email" size="20"></td>
                </tr>

                <tr>
                    <td>ALAMAT</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" size="20"></td>
                </tr>

                <tr>
                    <td>JENIS KELAMIN</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki">Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Wanita">Wanita
                    </td>
                </tr>

                <tr>
                    <td><input type="submit" name="simpan" value="Tambah Data"></td>
                </tr>
            </table>
        </form>
    </div>

   

    <?php 
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $email = $_POST['email'];
        $alamat = $_POST['alamat'];
        $jenisKel = $_POST['jenis_kelamin'];

    ?>

    <div class="table-mahasiswa">
        <h1 style="text-align: center;">DAFTAR MAHASISWA</h1>
        <table border="1" cellspacing="4" align="center">
            <tr>
                <td>NO</td>
                <td>Nama</td>
                <td>NIM</td>
                <td>EMAIL</td>
                <td>ALAMAT</td>
                <td>Jenis Kelamin</td>
            </tr>

            <tr>
                <td>1</td>
                <td><?php echo $nama; ?></td>
                <td><?php echo $nim; ?></td>
                <td><?php echo $email; ?></td>
                <td><?php echo $alamat; ?></td>
                <td><?php echo $jenisKel; ?></td>
            </tr>
        </table>
    </div>
    <?php } ?>
</body>
</html>