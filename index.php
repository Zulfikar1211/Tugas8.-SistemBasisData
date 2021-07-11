<html>

<head>
    <title>Menampilkan Data Tabel MySQL</title>
    <style>
        body {
            font-family: tahoma, arial
        }

        table {
            border-collapse: collapse
        }

        th,
        td {
            font-size: 13px;
            border: 1px solid #DEDEDE;
            padding: 3px 5px;
            color: #303030
        }

        th {
            background: #CCCCCC;
            font-size: 12px;
            border-color: #B0B0B0
        }
    </style>
</head>

<body>
    <center>
        <h1>SISTEM INFORMASI Zulfikar LAUNDRY</h1>
    </center>
    <h3>Tabel Pelanggan </h3>
    <table>
        <thead>
            <tr>
                <th>Pelanggan_Id</th>
                <th>Pelanggan_Nama</th>
                <th>Pelanggan_Hp</th>
                <th>Pelanggan_Alamat</th>
            </tr>
        </thead>
        <?php
        include 'koneksi.php';
        $sql = 'SELECT  * FROM pelanggan';
        $query = mysqli_query($koneksi, $sql);
        while ($row = mysqli_fetch_array($query)) {
        ?>
            <tbody>
                <tr>
                    <td><?php echo $row['Pelanggan_Id'] ?></td>
                    <td><?php echo $row['Pelanggan_Nama'] ?></td>
                    <td><?php echo $row['Pelanggan_Hp'] ?></td>
                    <td><?php echo $row['Pelanggan_Alamat'] ?></td>
                </tr>
            </tbody>
        <?php
        }
        ?>

</body>

</html>