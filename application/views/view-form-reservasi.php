<html>
    <head>
        <title>Form Input Reservasi</title>
    </head>
    <body>
        <center>
            <table>
                <tr>
                    <th colspan="3">Form Input Data Reservasi </th>
                </tr>
                <tr>
                    <td colspan="3"> <hr> </td>
                </tr>
                <tr>
                    <th>NIK</th>
                    <th>:</th>
                    <td> <?= $nik; ?> </td>
                </tr>
                <tr>
                    <th>Nama Lengkap</th>
                    <th>:</th>
                    <td> <?= $nama; ?> </td>
                </tr>
                <tr>
                    <th>jenis kelamin</th>
                    <td>:</th>
                    <td> <?= $jenis; ?> </td>
                </tr>
                <tr>
                    <th>alamat </th>
                    <th>:<th>
                    <td> <?= $alamat; ?> </td>
                </tr>
                <tr>
                    <th>tipe </th>
                    <th>:<th>
                    <td> <?= $tipe; ?> </td>
                </tr>     
                <tr>
                    <th>tanggal Check-In </th>
                    <th>:<th>
                    <td> <?= $tanggal; ?> </td>
                </tr>     
                <tr>
                    <th>lama inap </th>
                    <th>:<th>
                    <td> <?= $lama; ?> </td>
                </tr>  
                <tr>
                <td colspan="3" align="center"><br> <br><a class="kembali" href="<?= base_url('index.php/reservasi'); ?>">Kembali</a> <br></td>
            </tr>
        </table>
        <br><br>
    </center>
</body>

</html>

