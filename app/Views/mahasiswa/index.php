<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>

    <style>
        body {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
        }

        #container {
            width: 80%;
            margin: 0 auto;
        }

        #mahasiswa {
            border-collapse: collapse;
            width: 100%;
        }

        #mahasiswa td,
        #mahasiswa th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #mahasiswa tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #mahasiswa tr:hover {
            background-color: #ddd;
        }

        #mahasiswa th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #DD4814;
            color: white;
        }


        /* ALERT */

        .alert {
            padding: 20px;
            color: white;
            margin-bottom: 10px;
        }

        .success {
            background-color: #5dbf5d;
        }

        .error {
            background-color: #f44336;
        }

        .closebtn {
            margin-left: 15px;
            color: white;
            font-weight: bold;
            float: right;
            font-size: 22px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.3s;
        }

        .closebtn:hover {
            color: black;
        }
    </style>

</head>

<body>

    <div id="container">

        <h1>Contoh Aplikasi CRUD Data Mahasiswa</h1>

        <?php if (!empty(session()->getFlashdata('success'))) : ?>
            <div class="alert success">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <?= session()->getFlashdata('success') ?>
            </div>
        <?php endif ?>

        <?php if (!empty(session()->getFlashdata('error'))) : ?>
            <div class="alert error">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <?= session()->getFlashdata('error') ?>
            </div>
        <?php endif ?>

        <a href="<?= site_url('mahasiswa/create') ?>">Tambah data Mahasiswa</a>

        <table id="mahasiswa">
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Action</th>
            </tr>
            <?php foreach ($mahasiswa as $r) : ?>
                <tr>
                    <td><?= $r->nama; ?></td>
                    <td><?= $r->nim; ?></td>
                    <td><?= $r->alamat; ?></td>
                    <td><?= $r->telepon; ?></td>
                    <td>
                        <a href="<?= site_url('mahasiswa/update/' . $r->id) ?>">Update</a> | <a href="<?= site_url('mahasiswa/delete/' . $r->id) ?>" onclick="return confirm('Do you want to delete this record?')">Delete</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>

        <p><i>Dimodifikasi oleh Alif Aldiansyah</i></p>

    </div>

</body>

</html>