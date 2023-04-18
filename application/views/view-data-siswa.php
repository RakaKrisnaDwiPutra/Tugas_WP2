<html>
<head>
    <title>Tampil Data Siswa SMK Pancakarya Tanggerang</title>
</head>
<style>
    fieldset{
        width: 30%;
        margin: 40px auto;
        border-radius: 10px;
        background-color: #f2f2f2;
        padding: 20px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
    select{
        width: 100%;
    }
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #f2f2f2;
    }
    td {
        font-weight: bold;
    }
    th:first-child,
    td:first-child {
        width: 30%;
    }
    th:nth-child(2),
    td:nth-child(2) {
        width: 5%;
    }
</style>
<body>
    <center>
        <fieldset>
        <table>
            <tr>
                <th colspan="3">
                    Tampil Data Siswa SMK Pancakarya Tanggerang
                </th>
            </tr>
            <tr>
            <td colspan="3">
                <hr>
            </td>
        </tr>

        <tr>
            <th>Nama Siswa</th>
            <th>:</th>
            <td>
                <?= $nama; ?>
            </td>
        </tr>
        
        <tr>
            <th>Nomor Induk Siswa</th>
            <th>:</th>
            <td>
                <?= $nim; ?>
            </td>
        </tr>
        
        <tr>
            <th>Kelas</th>
            <th>:</th>
            <td>
                <?= $kelas; ?>
            </td>
        </tr>
        
        <tr>
            <th>Tempat Lahir</th>
            <th>:</th>
            <td>
                <?= $tempat; ?>
            </td>
        </tr>
        
        <tr>
            <th>Tanggal Lahir</th>
            <th>:</th>
            <td>
                <?= $tanggal; ?>
            </td>
        </tr>
        
        <tr>
            <th>Alamat</th>
            <th>:</th>
            <td>
                <?= $alamat; ?>
            </td>
        </tr>
        
        <tr>
            <th>Jenis Kelamin</th>
            <th>:</th>
            <td>
                <?= $jekel; ?>
            </td>
        </tr>
        
        <tr>
            <th>Agama</th>
            <th>:</th>
            <td>
                <?= $agama; ?>
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <a href="<?= base_url('siswa'); ?>" style="text-decoration: none; background-color: #007bff; color: #fff; padding: 10px 20px; border-radius: 5px;">Kembali</a>
            </td>
        </tr>
    </table>
    </fieldset>
</center>
</body>
</html>