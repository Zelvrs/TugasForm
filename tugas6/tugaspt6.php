<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="./bs/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row mb-3 d-flex align-items-center justify-content-center">
            <div class="col-6">
                <h1 class="text-center">Masukan identitas anda</h1>
                <form action="hasil.php" method="get">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="nama anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">alamat</label>
                        <textarea type="text" class="form-control" name="alamat" id="alamat" placeholder="alamat anda" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Tempat Lahir</label>
                        <input type="text" class="form-control" name="tempatLahir" id="tempatLahir" placeholder="tempat Lahir anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Tanggal Lahir</label>
                        <input type="date" class="form-control" name="tanggalLahir" id="tanggalLahir" placeholder="tanggal Lahir anda" required>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="pria" value="pria">
                            <label class="form-check-label" for="pria">Pria</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="wanita" value="wanita">
                            <label class="form-check-label" for="wanita">wanita</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                            <label class="form-check-label" for="other">other</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <select class="form-select" name="pendidikan" id="pendidikan" aria-label="Floating label disabled select example" >
                            <option selected>Open this select menu</option>
                            <option value="SMK">SMK</option>
                            <option value="SMA">SMA</option>
                            <option value="S1">S1</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Tampil</button>
                    <button type="submit" class="btn btn-default ">Batal</button>
                </form>
            </div>

                <!-- <div class="col-5">
                    <?php
                    // error_reporting(0);
                    // $nama = $_POST['nama'];
                    // $alamat = $_POST['alamat'];
                    // $tempatLahir = $_POST['tempatLahir'];
                    // $tanggalLahir = $_POST['tanggalLahir'];
                    // $gender = $_POST['gender'];
                    // $pendidikan = $_POST['pendidikan'];

                    // // if (!empty($nama)) {
                    // //     echo "Nama : $nama <br>";
                    // // }
                    // // if (!empty($telp)) {
                    // //     echo "No Telepon : $telp <br>";
                    // // }
                    // // if (!empty($alamat)) {
                    // //     echo "Alamat : $alamat";
                    // // }


                    // if (!empty($nama) && !empty($alamat) && !empty($tempatLahir) && !empty($tanggalLahir) && !empty($gender) && !empty($pendidikan)) {
                    //     echo
                    //     '
                    //         <div class="row">
                    //             <div class="col-6 w-100">
                    //                 <table class="table table-striped table-hover">
                    //                     <tr>
                    //                         <td>Nama</td>
                    //                         <td>:</td>
                    //                         <td class="text-center">' . $nama . '</td>
                    //                     </tr>
                    //                     <tr>
                    //                         <td>alamat</td>
                    //                         <td>:</td>
                    //                         <td class="text-center">' . $alamat . '</td>
                    //                     </tr>
                    //                     <tr>
                    //                         <td>tempat lahir</td>
                    //                         <td>:</td>
                    //                         <td class="text-center">' . $tempatLahir . '</td>
                    //                     </tr>
                    //                     <tr>
                    //                         <td>tanggal lahir</td>
                    //                         <td>:</td>
                    //                         <td class="text-center">' . $tanggalLahir . '</td>
                    //                     </tr>
                    //                     <tr>
                    //                         <td>gender</td>
                    //                         <td>:</td>
                    //                         <td class="text-center">' . $gender . '</td>
                    //                     </tr>
                    //                     <tr>
                    //                         <td>pendidikan</td>
                    //                         <td>:</td>
                    //                         <td class="text-center">' . $pendidikan . '</td>
                    //                     </tr>
                    //                 </table>
                    //             </div>
                    //         </div>
                    //     ';
                    // }
                    ?>
                </div> -->
        </div>



    </div>








    <!-- <script src="./bs/js/bootstrap.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>