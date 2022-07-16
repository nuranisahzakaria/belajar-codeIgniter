<!-- SOAL 2 -->
    <!-- <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table> -->

    <!-- <table class="table table-dark">
        <thead>
            <tr>
                <th scope="col">NO</th>
                <th scope="col">NAMA</th>
                <th scope="col">NIM</th>
                <th scope="col">JUDUL TA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php // $i = 1; ?>
                <?php // foreach ($mahasiswa as $mhs): ?>
                <th scope="row"><?php //echo $i++;?></th>
                <td><?php //echo $mhs['nama'] ?> </td>
                <td><?php //echo $mhs['nim'] ?></td>
                <td><?php //echo $mhs['judul'] ?></td>
            </tr>
            <?php //endforeach; ?>
        </tbody>
    </table> -->
    <?php print_r ($mahasiswa); ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <li class="list-group-item"><?php echo $mhs ['nama']; ?></li>
    <?php endforeach ?>


