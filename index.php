<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="style.css">
    <!-- <link rel="stylesheet" href="vendor\twbs\bootstrap\dist\css\bootstrap.min.css">
    <script src="vendor\twbs\bootstrap\dist\js\bootstrap.min.js"></script> -->
    <style>
    </style>
</head>
<body>
    <?php    
     $items = [
        [
            'pengalaman' => "PT. Putra Mandiri Intipack",
            'posisi' => "Developer Web",
            'lama' => "1 th"
        ],
        [
            'pengalaman' => "Politeknik Negeri Jember",
            'posisi' => "Developer Web",
            'lama' => "3 bln"
        ],
        [
            'pengalaman' => "PT. Andrawina Darma Manunggal Mulya",
            'posisi' => "Developer Web",
            'lama' => "3 bln"
        ]
    ]; ?>
    <div class="grid-container">
        <div class="row">
            <div class="col mt-5" style="text-align: center;">
                <h1>MPDF TEST</h1>
            </div>
        </div>
        <div class="row">
            <lable class="lable-control col-md-2">Nama</lable>
            : Fajar Siddiqi Putu Sa'ed
        </div>
        <div class="row">
            <lable class="lable-control col-md-2">Alamat</lable>
            : Desa Suboh Kec. Suboh Kab. Situbondo
        </div>
        <div class="row">
            <lable class="lable-control col-md-2">Kode Pos</lable>
            : 68354
        </div>
        <div class="row">
            <div class="col">
                <table class="table">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Pengalaman Kerja</th>
                            <th>Posisi Pekerjaan</th>
                            <th>Lama Kerja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; foreach ($items as $item):?>
                        <tr>
                            <td><?php echo $no; ?></td>
                            <td><?php echo $item['pengalaman']; ?></td>
                            <td><?php echo $item['posisi']; ?></td>
                            <td><?php echo $item['lama']; ?></td>

                        </tr>
                        <?php $no++; endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>