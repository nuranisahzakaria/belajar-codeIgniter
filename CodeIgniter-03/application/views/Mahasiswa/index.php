<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Mahasiswa</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3>Daftar Mahasiswa (CI Sederhana)</h3>

                <ul class="list-group">
                    <?php foreach ($mahasiswa as $mhs) : ?>
                    <li class="list-group-item"><?php echo $mhs ['nama']; ?></li>
                    <?php endforeach ?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>