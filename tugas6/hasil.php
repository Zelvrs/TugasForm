<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table hasil gan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<div class="container ">
    <?php
    error_reporting(0);
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    $tempatLahir = $_GET['tempatLahir'];
    $tanggalLahir = $_GET['tanggalLahir'];
    $gender = $_GET['gender'];
    $pendidikan = $_GET['pendidikan'];

    // if (!empty($nama)) {
    //     echo "Nama : $nama <br>";
    // }
    // if (!empty($telp)) {
    //     echo "No Telepon : $telp <br>";
    // }
    // if (!empty($alamat)) {
    //     echo "Alamat : $alamat";
    // }


    if (!empty($nama) && !empty($alamat) && !empty($tempatLahir) && !empty($tanggalLahir) && !empty($gender) && !empty($pendidikan)) {
        echo
        '
    <div class="row vh-100 d-flex align-items-center justify-content-center ">
        <div class="col-6 w-100">
            <table class="table table-striped">
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td class="text-center">' . $nama . '</td>
                </tr>
                <tr>
                    <td>alamat</td>
                    <td>:</td>
                    <td class="text-center">' . $alamat . '</td>
                </tr>
                <tr>
                    <td>tempat lahir</td>
                    <td>:</td>
                    <td class="text-center">' . $tempatLahir . '</td>
                </tr>
                <tr>
                    <td>tanggal lahir</td>
                    <td>:</td>
                    <td class="text-center">' . $tanggalLahir . '</td>
                </tr>
                <tr>
                    <td>gender</td>
                    <td>:</td>
                    <td class="text-center">' . $gender . '</td>
                </tr>
                <tr>
                    <td>pendidikan</td>
                    <td>:</td>
                    <td class="text-center">' . $pendidikan . '</td>
                </tr>
            </table>
        </div>
    </div>
    ';
    }
    ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<body>

</body>

</html>